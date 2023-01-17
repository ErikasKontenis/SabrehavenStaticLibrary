using SabrehavenWwwLibriaryWorker.Contracts;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SabrehavenWwwLibriaryWorker.Services
{
    public class ItemService
    {
        private const string ItemTemplate = @"item.php";

        public async Task BuildItemsLibrary(List<Item> items, List<Monster> monsters, List<Npc> npcs)
        {
            var output = Directory.CreateDirectory(Path.Combine(AppDomain.CurrentDomain.BaseDirectory, "items"));
            foreach (var item in items)
            {
                var itemPhp = await File.ReadAllTextAsync(Path.Combine(AppDomain.CurrentDomain.BaseDirectory, ItemTemplate));

                itemPhp = itemPhp.Replace("{itemImage}", $"/itemSprites_792/{item.Id}.png");
                itemPhp = itemPhp.Replace("{itemTitle}", item.Title);
                itemPhp = itemPhp.Replace("{itemName}", item.Name);

                if (!string.IsNullOrEmpty(item.Description))
                {
                    itemPhp = itemPhp.Replace("{itemDescription}", item.Description + ".");
                }
                else
                {
                    itemPhp = itemPhp.Replace("{itemDescription}", string.Empty);
                }

                if (item.Flags != null)
                {
                    itemPhp = itemPhp.Replace("{itemFlags}", string.Concat(item.Flags.Select(o => $"<li class='li'>{o}</li>")));
                }
                else
                {
                    itemPhp = itemPhp.Replace("{itemFlags}", "<li class='li'>none</li>");
                }

                if (item.Attributes != null)
                {
                    var itemLootBuilder = new StringBuilder();
                    foreach (var attribute in item.Attributes)
                    {
                        itemLootBuilder.AppendLine($@"<tr><td>{attribute.Key}</td><td>{attribute.Value}</td></tr>");
                    }

                    itemPhp = itemPhp.Replace("{itemAttributeTable}", itemLootBuilder.ToString());
                }
                else
                {
                    itemPhp = itemPhp.Replace("{itemAttributeTable}", "<tr><td></td><td>None.</td><td></td></tr>");
                }

                var droppedByMonsters = monsters.Where(o => o.Loots.Any(l => l.ItemId == item.Id));
                if (droppedByMonsters.Any())
                {
                    var monsterLootBuilder = new StringBuilder();
                    foreach (var monster in droppedByMonsters)
                    {
                        var monsterImg = string.Empty;
                        if (monster.LookType.TypeEx == 0)
                        {
                            monsterImg = $"/outfiter2/outfit.php?a={monster.LookType.Type}&b={monster.LookType.Addons}&c={monster.LookType.Head}&d={monster.LookType.Body}&e={monster.LookType.Legs}&f={monster.LookType.Feet}&h=3";
                        }
                        else
                        {
                            monsterImg = $"/itemSprites_792/{monster.LookType.TypeEx}.png";

                        }
                        var loot = monster.Loots.Where(o => o.ItemId == item.Id);
                        monsterLootBuilder.AppendLine($@"<tr><td><a href=""/monster.php?name={monster.FileName}""><img src=""{monsterImg}"" /></a></td><td><a href=""/monster.php?name={monster.FileName}"">{monster.Name}</a></td><td>{loot.Sum(o => o.CountMax)}x</td><td>{Convert.ToInt32(loot.Sum(o => o.Chance) / loot.Count())} out of 1000</td></tr>");
                    }

                    itemPhp = itemPhp.Replace("{monsterLootTable}", monsterLootBuilder.ToString());
                }
                else
                {
                    itemPhp = itemPhp.Replace("{monsterLootTable}", "<tr><td></td><td>This item is not dropped by any creatures.</td><td></td><td></td></tr>");
                }

                var boughtByNpcs = npcs.Where(o => o.BuyItems?.Any(l => l.ItemId == item.Id) == true);
                if (boughtByNpcs.Any())
                {
                    var buyItemsBuilder = new StringBuilder();
                    foreach (var npc in boughtByNpcs)
                    {
                        var npcImg = string.Empty;
                        if (npc.LookType.TypeEx == 0)
                        {
                            npcImg = $"/outfiter2/outfit.php?a={npc.LookType.Type}&b={npc.LookType.Addons}&c={npc.LookType.Head}&d={npc.LookType.Body}&e={npc.LookType.Legs}&f={npc.LookType.Feet}&h=3";
                        }
                        else
                        {
                            npcImg = $"/itemSprites_792/{npc.LookType.TypeEx}.png";

                        }

                        var buyItem = npc.BuyItems.First(o => o.ItemId == item.Id);
                        buyItemsBuilder.AppendLine($@"<tr><td><a href=""/npc.php?name={npc.FileName}""><img src=""{npcImg}"" /></a></td><td><a href=""/npc.php?name={npc.FileName}"">{npc.Name}</a></td><td>{buyItem.Price} GP</td></tr>");
                    }

                    itemPhp = itemPhp.Replace("{npcBuyItems}", buyItemsBuilder.ToString());
                }
                else
                {
                    itemPhp = itemPhp.Replace("{npcBuyItems}", "<tr><td></td><td>Players only.</td><td></td></tr>");
                }

                var soldByNpcs = npcs.Where(o => o.SellItems?.Any(l => l.ItemId == item.Id) == true);
                if (soldByNpcs.Any())
                {
                    var sellItemsBuilder = new StringBuilder();
                    foreach (var npc in soldByNpcs)
                    {
                        var npcImg = string.Empty;
                        if (npc.LookType.TypeEx == 0)
                        {
                            npcImg = $"/outfiter2/outfit.php?a={npc.LookType.Type}&b={npc.LookType.Addons}&c={npc.LookType.Head}&d={npc.LookType.Body}&e={npc.LookType.Legs}&f={npc.LookType.Feet}&h=3";
                        }
                        else
                        {
                            npcImg = $"/itemSprites_792/{npc.LookType.TypeEx}.png";

                        }

                        var sellItem = npc.SellItems.First(o => o.ItemId == item.Id);
                        sellItemsBuilder.AppendLine($@"<tr><td><a href=""/npc.php?name={npc.FileName}""><img src=""{npcImg}"" /></a></td><td><a href=""/npc.php?name={npc.FileName}"">{npc.Name}</a></td><td>{sellItem.Price} GP</td></tr>");
                    }

                    itemPhp = itemPhp.Replace("{npcSellItems}", sellItemsBuilder.ToString());
                }
                else
                {
                    itemPhp = itemPhp.Replace("{npcSellItems}", "<tr><td></td><td>Players only.</td><td></td></tr>");
                }

                await File.WriteAllTextAsync(Path.Combine(output.FullName, item.FileName + ".php"), itemPhp);
            }

            var availableItems = items.Where(o => o.Flags?.Contains("Take") == true && !o.Flags.Contains("Rune") && !o.Flags.Contains("Corpse"));
            var phpArrayDebugOnlyTitles = string.Join(',', availableItems.OrderBy(o => o.Title).Select(o => '"' + o.Title + '"'));
            var phpArrayDebugOnlyFiles = string.Join(',', availableItems.OrderBy(o => o.Title).Select(o => '"' + o.FileName + '"'));
            var phpArrayDebugOnlyFilesAll = string.Join(',', items.OrderBy(o => o.Title).Select(o => '"' + o.FileName + '"'));
        }

        private string GetItemPictureUrl(NpcItemTrade npcItemTrade, Item item)
        {
            var itemId = item.Id.ToString();

            if (item.Id == Constants.VialItemId && npcItemTrade.Data != null)
            {
                itemId += "_" + npcItemTrade.Data;
            }

            return $@"/itemSprites_792/{itemId}.png";
        }

        private string GetItemPrefix(NpcItemTrade npcItemTrade, Item item, List<Item> items)
        {
            if ((item.Id == Constants.VialItemId || item.Id == Constants.MugItemId || item.Id == Constants.BottleItemId) && npcItemTrade.Data > 0)
            {
                return $" of {items.First(o => o.Id == npcItemTrade.Data).Name}";
            }

            if (npcItemTrade.Amount > 1)
            {
                return $" ({npcItemTrade.Amount}x)";
            }

            return string.Empty;
        }
    }
}
