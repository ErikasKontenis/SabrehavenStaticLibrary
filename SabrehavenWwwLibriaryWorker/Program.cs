using SabrehavenWwwLibriaryWorker.Contracts;
using SabrehavenWwwLibriaryWorker.Extensions;
using SabrehavenWwwLibriaryWorker.Services;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
namespace SabrehavenWwwLibriaryWorker
{
    class Program
    {
        private const string ItemsSrvPath = @"C:\Users\erika\source\repos\Sabrehaven\data\items800";
        private const string MONSTERS_PATH = @"C:\Users\erika\source\repos\SabrehavenWwwLibriaryWorker\SabrehavenWwwLibriaryWorker\monster\";
        private const string NPCS_PATH = @"C:\Users\erika\source\repos\Sabrehaven\data\npc\";
        private const int LootDropRate = 2;
        private const int GoldDropRate = 1;

        static async Task Main(string[] args)
        {
            var monsterService = new MonsterService();
            var itemService = new ItemService();
            var npcService = new NpcService();
            var items = await ItemsSrvExtensions.ParseAsync(ItemsSrvPath);
            var monsters = await MonstersXmlExtensions.ParseAsync(MONSTERS_PATH);
            var npcs = await NpcsExtensions.ParseAsync(NPCS_PATH);
            jsonForMarket(items, monsters, npcs);
            await monsterService.BuildMonsterLibrary(monsters, items, GoldDropRate, LootDropRate);
            await npcService.BuildNpcLibrary(npcs, items);
            await itemService.BuildItemsLibrary(items, monsters, npcs);
            Console.WriteLine("Hello World!");
        }

        private static void jsonForMarket(List<Item> items, List<Monster> monsters, List<Npc> npcs)
        {
            var availableItems = items.Where(o => o.Flags?.Contains("Weapon") == true || o.Flags?.Contains("Shield") == true || o.Flags?.Contains("Distance") == true || o.Flags?.Contains("Ammo") == true || o.Attributes?.ContainsKey("SlotType") == true).Select(o => o.Id)
                .Union(monsters.Where(o => o.Loots != null).SelectMany(o => o.Loots).Select(o => o.ItemId))
                .Union(npcs.Where(o => o.BuyItems != null).SelectMany(o => o.BuyItems).Select(o => o.ItemId))
                .Union(npcs.Where(o => o.SellItems != null).SelectMany(o => o.SellItems).Select(o => o.ItemId)).ToList();

            var ignoreIds = new int[] { 3031, 3035, 3043 };
            var itemsToSerialize = availableItems.Select(o => new
            {
                id = o,
                category = (int)FindMarketCategory(items, o),
                name = items.First(i => i.Id == o).Name
            }).Where(o => !ignoreIds.Contains(o.id) && items.First(i => i.Id == o.id).Flags?.Contains("Key") == false && items.First(i => i.Id == o.id).Flags?.Contains("Expire") == false).ToList();

            string output = string.Empty;
            for (var i = 0; i < itemsToSerialize.Count; i++)
            {
                output += $"[{i}]={{id={itemsToSerialize[i].id},category={itemsToSerialize[i].category},name=\"{itemsToSerialize[i].name}\"}},";
            }
        }

        private static MarketCategory FindMarketCategory(List<Item> items, int id)
        {
            var item = items.First(i => i.Id == id);
            if (item.Attributes != null)
            {
                var slotType = item.Attributes.FirstOrDefault(o => o.Key == "SlotType").Value;
                if (!string.IsNullOrEmpty(slotType))
                {
                    if (slotType.ToUpper() == "HEAD")
                    {
                        return MarketCategory.HelmetsHats;
                    }
                    else if (slotType.ToUpper() == "NECKLACE")
                    {
                        return MarketCategory.Amulets;
                    }
                    else if (slotType.ToUpper() == "BACKPACK")
                    {
                        return MarketCategory.Containers;
                    }
                    else if (slotType.ToUpper() == "BODY")
                    {
                        return MarketCategory.Armors;
                    }
                    else if (slotType.ToUpper() == "LEGS")
                    {
                        return MarketCategory.Legs;
                    }
                    else if (slotType.ToUpper() == "FEET")
                    {
                        return MarketCategory.Boots;
                    }
                    else if (slotType.ToUpper() == "RING")
                    {
                        return MarketCategory.Rings;
                    }
                    else if (slotType.ToUpper() == "AMMO")
                    {
                        return MarketCategory.Ammunition;
                    }
                }

                var weaponType = item.Attributes.FirstOrDefault(o => o.Key == "WeaponType").Value;
                if (!string.IsNullOrEmpty(weaponType))
                {
                    if (weaponType.ToUpper() == "SWORD")
                    {
                        return MarketCategory.Swords;
                    }
                    else if (weaponType.ToUpper() == "CLUB")
                    {
                        return MarketCategory.Clubs;
                    }
                    else if (weaponType.ToUpper() == "AXE")
                    {
                        return MarketCategory.Axes;
                    }
                    else if (weaponType.ToUpper() == "DISTANCE")
                    {
                        return MarketCategory.DistanceWeapons;
                    }
                }

                var distanceFlag = item.Flags.FirstOrDefault(o => o == "Distance");
                if (!string.IsNullOrEmpty(distanceFlag))
                {
                    return MarketCategory.DistanceWeapons;
                }

                var ammoFlag = item.Flags.FirstOrDefault(o => o == "Ammo");
                if (!string.IsNullOrEmpty(ammoFlag))
                {
                    return MarketCategory.Ammunition;
                }

                var wandFlag = item.Flags.FirstOrDefault(o => o == "Wand");
                if (!string.IsNullOrEmpty(wandFlag))
                {
                    return MarketCategory.WandsRods;
                }

                var shieldFlag = item.Flags.FirstOrDefault(o => o == "Shield");
                if (!string.IsNullOrEmpty(shieldFlag))
                {
                    return MarketCategory.Shields;
                }

                var runeFlag = item.Flags.FirstOrDefault(o => o == "Rune");
                if (!string.IsNullOrEmpty(runeFlag))
                {
                    return MarketCategory.Runes;
                }
            }
            return MarketCategory.Unassigned;
        }
    }
    public enum MarketCategory {
        All = 0,
        Armors = 1,
        Amulets = 2,
        Boots = 3,
        Containers = 4,
        Decoration = 5,
        Food = 6,
        HelmetsHats = 7,
        Legs = 8,
        Others = 9,
        Potions = 10,
        Rings = 11,
        Runes = 12,
        Shields = 13,
        Tools = 14,
        Valuables = 15,
        Ammunition = 16,
        Axes = 17,
        Clubs = 18,
        DistanceWeapons = 19,
        Swords = 20,
        WandsRods = 21,
        PremiumScrolls = 22,
        TibiaCoins = 23,
        CreatureProducs = 24,
        Unknown1 = 25,
        Unknown2 = 26,
        StashRetrieve = 27,
        Unknown3 = 28,
        Unknown4 = 29,
        Gold = 30,
        Unassigned = 31,
        MetaWeapons = 255
    }
}
