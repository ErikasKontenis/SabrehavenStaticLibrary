using SabrehavenWwwLibriaryWorker.Contracts;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SabrehavenWwwLibriaryWorker.Services
{
    public class MonsterService
    {
        private const string MonsterTemplate = @"monster.php";

        public async Task BuildMonsterLibrary(List<Monster> monsters, List<Item> items, int goldDropRate, int lootDropRate)
        {
            var output = Directory.CreateDirectory(Path.Combine(AppDomain.CurrentDomain.BaseDirectory, "monsters"));

            foreach (var monster in monsters)
            {
                monster.Loots = monster.Loots?.OrderBy(o => items.First(i => i.Id == o.ItemId).Name).ToList();

                var monsterPhp = await File.ReadAllTextAsync(Path.Combine(AppDomain.CurrentDomain.BaseDirectory, MonsterTemplate));
                if (monster.LookType.TypeEx == 0)
                {
                    monsterPhp = monsterPhp.Replace("{monsterImage}", $"/outfiter2/outfit.php?a={monster.LookType.Type}&b={monster.LookType.Addons}&c={monster.LookType.Head}&d={monster.LookType.Body}&e={monster.LookType.Legs}&f={monster.LookType.Feet}&h=3");
                }
                else
                {
                    monsterPhp = monsterPhp.Replace("{monsterImage}", $"/itemSprites_792/{monster.LookType.TypeEx}.png");

                }
                monsterPhp = monsterPhp.Replace("{monsterName}", monster.Name);
                monsterPhp = monsterPhp.Replace("{monsterDescription}", monster.Description);
                monsterPhp = monsterPhp.Replace("{monsterHealth}", monster.Health.ToString());
                monsterPhp = monsterPhp.Replace("{monsterExp}", monster.Exp.ToString());
                monsterPhp = monsterPhp.Replace("{monsterSounds}", string.Concat(monster.Voices.Select(o => $"<li class='li'>{o}</li>")));

                var monsterAbilitiesBuilder = new StringBuilder();
                monsterAbilitiesBuilder.AppendLine($"<li class='li'>speed: {monster.Speed}</li>");
                monsterAbilitiesBuilder.AppendLine($"<li class='li'>armor: {monster.Armor}</li>");
                monsterAbilitiesBuilder.AppendLine($"<li class='li'>defense: {monster.Defense}</li>");

                foreach (var flag in monster.Flags)
                {
                    monsterAbilitiesBuilder.AppendLine($"<li class='li'>{flag.Key}: ");
                    if (flag.Value == 1)
                    {
                        monsterAbilitiesBuilder.Append("yes");
                    }
                    else if (flag.Value == 0)
                    {
                        monsterAbilitiesBuilder.Append("no");
                    }
                    else
                    {
                        monsterAbilitiesBuilder.Append(flag.Value);
                    }
                    monsterAbilitiesBuilder.Append("</li>");
                }

                monsterPhp = monsterPhp.Replace("{monsterAbilities}", monsterAbilitiesBuilder.ToString());

                if (monster.Loots.Any())
                {
                    var monsterLootBuilder = new StringBuilder();
                    foreach (var loot in monster.Loots)
                    {
                        if (loot.ItemId == 3031 || loot.ItemId == 3035 || loot.ItemId == 3043)
                        {
                            loot.CountMax = loot.CountMax * goldDropRate;
                        }

                        loot.Chance = loot.Chance * lootDropRate;
                        if (loot.Chance > 1000)
                        {
                            loot.Chance = 1000;
                        }

                        var item = items.First(o => o.Id == loot.ItemId);
                        monsterLootBuilder.AppendLine($@"<tr><td><a href=""/item.php?name={item.FileName}""><img src=""/itemSprites_792/{loot.ItemId}.png"" /></a></td><td>max {loot.CountMax}x <a href=""/item.php?name={item.FileName}"">{item.Name}</a></td><td>{loot.Chance} out of 1000</td></tr>");
                    }

                    monsterPhp = monsterPhp.Replace("{monsterLootTable}", monsterLootBuilder.ToString());
                }
                else
                {
                    monsterPhp = monsterPhp.Replace("{monsterLootTable}", "<tr><td></td><td>Drops nothing.</td><td></td></tr>");
                }

                await File.WriteAllTextAsync(Path.Combine(output.FullName, monster.FileName + ".php"), monsterPhp);
            }

            var phpArrayDebugOnlyTitles = string.Join(',', monsters.OrderBy(o => o.Name).Select(o => '"' + o.Name + '"'));
            var phpArrayDebugOnlyFiles = string.Join(',', monsters.OrderBy(o => o.Name).Select(o => '"' + o.FileName + '"'));
        }
    }
}
