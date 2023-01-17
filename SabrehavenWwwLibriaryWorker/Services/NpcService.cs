using SabrehavenWwwLibriaryWorker.Contracts;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SabrehavenWwwLibriaryWorker.Services
{
    public class NpcService
    {
        private const string NpcTemplate = @"npc.php";

        public async Task BuildNpcLibrary(List<Npc> npcs, List<Item> items)
        {
            var output = Directory.CreateDirectory(Path.Combine(AppDomain.CurrentDomain.BaseDirectory, "npcs"));

            foreach (var npc in npcs)
            {
                npc.BuyItems = npc.BuyItems?.OrderBy(o => items.First(i => i.Id == o.ItemId).Name).ToList();
                npc.SellItems = npc.SellItems?.OrderBy(o => items.First(i => i.Id == o.ItemId).Name).ToList();

                var npcPhp = await File.ReadAllTextAsync(Path.Combine(AppDomain.CurrentDomain.BaseDirectory, NpcTemplate));
                if (npc.LookType.TypeEx == 0)
                {
                    npcPhp = npcPhp.Replace("{npcImage}", $"/outfiter2/outfit.php?a={npc.LookType.Type}&b={npc.LookType.Addons}&c={npc.LookType.Head}&d={npc.LookType.Body}&e={npc.LookType.Legs}&f={npc.LookType.Feet}&h=3");
                }
                else
                {
                    npcPhp = npcPhp.Replace("{npcImage}", $"/itemSprites_792/{npc.LookType.TypeEx}.png");

                }

                npcPhp = npcPhp.Replace("{npcName}", npc.Name);
                npcPhp = npcPhp.Replace("{npcGreetings}", npc.AddressSpeaks.Any() ? '"' + npc.AddressSpeaks[0].Replace("%N", "PLAYERNAME") + '"' : string.Empty);
                npcPhp = npcPhp.Replace("{npcPositionX}", npc.Position.X.ToString());
                npcPhp = npcPhp.Replace("{npcPositionY}", npc.Position.Y.ToString());
                npcPhp = npcPhp.Replace("{npcPositionZ}", (npc.Position.Z+1).ToString());

                if (npc.BuyItems != null && npc.BuyItems.Any())
                {
                    var buyItemsBuilder = new StringBuilder();
                    foreach (var buyItem in npc.BuyItems)
                    {
                        var item = items.First(o => o.Id == buyItem.ItemId);
                        buyItemsBuilder.AppendLine($@"<tr><td><a href=""/item.php?name={item.FileName}""><img src=""{GetItemPictureUrl(buyItem, item)}"" /></a></td><td><a href=""/item.php?name={item.FileName}"">{item.Name}</a>{GetItemPrefix(buyItem, item, items)}</td><td>{buyItem.Price} GP</td></tr>");
                    }

                    npcPhp = npcPhp.Replace("{npcBuyItems}", buyItemsBuilder.ToString());
                }
                else
                {
                    npcPhp = npcPhp.Replace("{npcBuyItems}", "<tr><td></td><td>Buys nothing.</td><td></td></tr>");
                }

                if (npc.SellItems != null && npc.SellItems.Any())
                {
                    var sellItemsBuilder = new StringBuilder();
                    foreach (var sellItem in npc.SellItems)
                    {
                        var item = items.First(o => o.Id == sellItem.ItemId);
                        sellItemsBuilder.AppendLine($@"<tr><td><a href=""/item.php?name={item.FileName}""><img src=""{GetItemPictureUrl(sellItem, item)}"" /></a></td><td><a href=""/item.php?name={item.FileName}"">{item.Name}</a>{GetItemPrefix(sellItem, item, items)}</td><td>{sellItem.Price} GP</td></tr>");
                    }

                    npcPhp = npcPhp.Replace("{npcSellItems}", sellItemsBuilder.ToString());
                }
                else
                {
                    npcPhp = npcPhp.Replace("{npcSellItems}", "<tr><td></td><td>Sells nothing.</td><td></td></tr>");
                }

                await File.WriteAllTextAsync(Path.Combine(output.FullName, npc.FileName + ".php"), npcPhp);
            }

            var phpArrayDebugOnlyTitles = string.Join(',', npcs.OrderBy(o => o.Name).Select(o => '"' + o.Name + '"'));
            var phpArrayDebugOnlyFiles = string.Join(',', npcs.OrderBy(o => o.Name).Select(o => '"' + o.FileName + '"'));
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
