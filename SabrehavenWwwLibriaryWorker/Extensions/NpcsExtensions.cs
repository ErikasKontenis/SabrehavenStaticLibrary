using SabrehavenWwwLibriaryWorker.Contracts;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;

namespace SabrehavenWwwLibriaryWorker.Extensions
{
    public static class NpcsExtensions
    {
        public static async Task<List<Npc>> ParseAsync(string path)
        {
            var npcs = new List<Npc>();
            foreach (string file in Directory.EnumerateFiles(path, "*.npc", SearchOption.AllDirectories))
            {
                var npc = new Npc();

                var npcLines = await ReadNpcFilesAsync(path, file);

                foreach (var line in npcLines)
                {
                    if (line.Trim().StartsWith("Name ="))
                    {
                        var split = line.Split('"');
                        npc.Name = split[1];
                        var dublicateNameItemCount = npcs.Count(o => o.Name == npc.Name);
                        var prefix = dublicateNameItemCount > 0 ? "_" + dublicateNameItemCount : string.Empty;
                        npc.FileName = (npc.Name + prefix).ToLower().Replace(" ", "_").Replace("'", string.Empty).Replace(".", string.Empty);
                    }
                }

                foreach (var line in npcLines)
                {
                    if (line.Trim().StartsWith("Outfit ="))
                    {
                        var split = line.Split('(', ')')[1].Split(',');
                        var type = int.Parse(split[0]);
                        if (type != 0)
                        {
                            var typeAttributes = split[1].Split('-').Select(int.Parse).ToList();
                            npc.LookType = new CreatureLookType
                            {
                                Type = type,
                                Head = typeAttributes[0],
                                Body = typeAttributes[1],
                                Legs = typeAttributes[2],
                                Feet = typeAttributes[3],
                                Addons = typeAttributes[4]
                            };
                        }
                        else
                        {
                            npc.LookType = new CreatureLookType
                            {
                                TypeEx = int.Parse(split[1]),
                                Type = 0,
                                Head = 0,
                                Body = 0,
                                Legs = 0,
                                Feet = 0,
                                Addons = 0
                            };
                        }
                    }
                }

                foreach (var line in npcLines)
                {
                    if (line.Trim().StartsWith("Home ="))
                    {
                        var positionSplit = line.Split('[', ']')[1].Split(',').Select(int.Parse).ToList();
                        npc.Position = new Position
                        {
                            X = positionSplit[0],
                            Y = positionSplit[1],
                            Z = positionSplit[2]
                        };
                    }
                }

                foreach (var line in npcLines)
                {
                    if (line.Trim().StartsWith("ADDRESS"))
                    {
                        var split = line.Split('"');
                        if (split.Length >= 5)
                        {
                            npc.AddressSpeaks.Add(split[split.Length - 2]);
                        }
                    }
                }

                foreach (var line in npcLines)
                {
                    if (line.Contains("Type=") && line.Contains("Price=") && line.Contains("Amount="))
                    {
                        var typeString = line.Split("Type=")[1].Split(',')[0];
                        var priceString = line.Split("Price=")[1].Split(',')[0];
                        var amountString = line.Split("Amount=")[1].Split(',')[0];
                        string dataString = null;
                        if (line.Contains("Data="))
                        {
                            dataString = line.Split("Data=")[1].Split(',')[0];
                        }

                        var item = default(NpcItemTrade);
                        try
                        {
                            item = new NpcItemTrade
                            {
                                Amount = int.Parse(amountString),
                                ItemId = int.Parse(typeString),
                                Price = int.Parse(priceString),
                            };

                            if (dataString != null)
                            {
                                item.Data = int.Parse(dataString);
                            }
                        }
                        catch
                        {
                            continue;
                        }

                        if (line.Contains("buy", StringComparison.OrdinalIgnoreCase) && npc.Name != "H.L.")
                        {
                            npc.SellItems = npc.SellItems ?? new List<NpcItemTrade>();
                            npc.SellItems.Add(item);
                        }
                        else if (line.Contains("sell", StringComparison.OrdinalIgnoreCase))
                        {
                            npc.BuyItems = npc.BuyItems ?? new List<NpcItemTrade>();
                            npc.BuyItems.Add(item);
                        }
                    }

                    if (line.Contains("deposit", StringComparison.OrdinalIgnoreCase) && line.Contains("empty vial", StringComparison.OrdinalIgnoreCase))
                    {
                        npc.BuyItems = npc.BuyItems ?? new List<NpcItemTrade>();
                        npc.BuyItems.Add(new NpcItemTrade
                        {
                            Amount = 1,
                            ItemId = Constants.VialItemId,
                            Price = Constants.EmptyVialPrice
                        });
                    }

                    if (line.Contains("I sell worms only in sixpacks for 5 gold each, how many sixpacks of worms do you want to buy?", StringComparison.OrdinalIgnoreCase))
                    {
                        npc.SellItems = npc.SellItems ?? new List<NpcItemTrade>();
                        npc.SellItems.Add(new NpcItemTrade
                        {
                            Amount = 6,
                            ItemId = Constants.WormItemId,
                            Price = Constants.WormSixPackPrice
                        });
                    }
                }

                npcs.Add(npc);
            }

            return npcs;
        }

        private static async Task<List<string>> ReadNpcFilesAsync(string path, string file)
        {
            var npcLines = (await File.ReadAllLinesAsync(file)).ToList();

            foreach (var npcLine in npcLines.ToList())
            {
                if (npcLine.Contains(".ndb"))
                {
                    var fileName = npcLine.Split('"', '"')[1];
                    npcLines.AddRange(await File.ReadAllLinesAsync(Path.Combine(path, fileName)));
                }
            }

            return npcLines;
        }
    }
}
