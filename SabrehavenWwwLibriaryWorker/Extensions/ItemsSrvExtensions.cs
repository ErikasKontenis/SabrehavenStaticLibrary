using SabrehavenWwwLibriaryWorker.Contracts;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;

namespace SabrehavenWwwLibriaryWorker.Extensions
{
    public static class ItemsSrvExtensions
    {
        public static async Task<List<Item>> ParseAsync(string path)
        {
            var itemsSrv = await File.ReadAllTextAsync(Path.Combine(path, "items.srv"));
            var itemsSrvSplit = itemsSrv.Split("TypeID");
            var items = new List<Item>();
            for (var i = 1; i < itemsSrvSplit.Length; i++)
            {
                var item = new Item();
                var lineSplit = itemsSrvSplit[i].Split(Environment.NewLine);
                var typeIdLine = lineSplit[0];
                var typeId = new string(typeIdLine.Where(char.IsDigit).ToArray());
                item.Id = int.Parse(typeId);

                foreach (var line in lineSplit)
                {
                    if (line.Trim().StartsWith("Name"))
                    {
                        var split = line.Split('"');
                        item.Name = split[1];
                        if (item.Name.ToLower().StartsWith("a "))
                        {
                            item.Title = item.Name.Remove(item.Name.IndexOf("a "), "a ".Length).ToTitleCase();
                        }
                        else if (item.Name.ToLower().StartsWith("an "))
                        {
                            item.Title = item.Name.Remove(item.Name.IndexOf("an "), "an ".Length).ToTitleCase();
                        }
                        else
                        {
                            item.Title = item.Name.ToTitleCase();
                        }

                        var dublicateNameItemCount = items.Count(o => o.Title == item.Title);
                        var prefix = dublicateNameItemCount > 0 ? "_" + dublicateNameItemCount : string.Empty;
                        item.FileName = (item.Title + prefix).ToLower().Replace(" ", "_").Replace("'", string.Empty).Replace(".", string.Empty);
                    }
                }

                foreach (var line in lineSplit)
                {
                    if (line.Trim().StartsWith("Description"))
                    {
                        var split = line.Split('"');
                        item.Description = split[1];
                    }
                }

                foreach (var line in lineSplit)
                {
                    if (line.Trim().StartsWith("Flags"))
                    {
                        var split = line.Split('{', '}');
                        item.Flags = split[1].Split(',').ToList();
                    }
                }

                foreach (var line in lineSplit)
                {
                    if (line.Trim().StartsWith("Attributes"))
                    {
                        var split = line.Split('{', '}');
                        var valueSplit = split[1].Split('=', ',');
                        var attributes = new Dictionary<string, string>();
                        for (var k = 0; k < valueSplit.Length; k = k + 2)
                        {
                            attributes.Add(valueSplit[k], valueSplit[k + 1]);
                        }
                        item.Attributes = attributes;
                    }
                }

                items.Add(item);
            }

            return items;
        }
    }
}
