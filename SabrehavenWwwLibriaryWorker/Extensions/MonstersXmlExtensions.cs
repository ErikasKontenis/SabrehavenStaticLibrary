using SabrehavenWwwLibriaryWorker.Contracts;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace SabrehavenWwwLibriaryWorker.Extensions
{
    public static class MonstersXmlExtensions
    {
        public static async Task<List<Monster>> ParseAsync(string path)
        {
            var monsters = new List<Monster>();
            foreach (string file in Directory.EnumerateFiles(path, "*.xml", SearchOption.AllDirectories))
            {
                if (file.Contains("monsters.xml"))
                {
                    continue;
                }

                var monster = new Monster();

                var xmlFile = XDocument.Parse(await File.ReadAllTextAsync(file, Encoding.GetEncoding("ISO-8859-1")));
                var monsterXml = xmlFile.Elements("monster").ElementAt(0);
                monster.Name = monsterXml.Attribute("name").Value.ToLower().ToTitleCase();
                monster.FileName = monster.Name.ToLower().Replace(" ", "_").Replace("'", string.Empty).Replace(".", string.Empty);
                monster.Description = monsterXml.Attribute("nameDescription").Value;
                monster.Health = int.Parse(monsterXml.Element("health").Attribute("max").Value);
                monster.Exp = int.Parse(monsterXml.Attribute("experience").Value);
                monster.LookType = new CreatureLookType
                {
                    Type = int.Parse(monsterXml.Element("look").Attribute("type")?.Value ?? "0"),
                    TypeEx = int.Parse(monsterXml.Element("look").Attribute("typeex")?.Value ?? "0"),
                    Head = int.Parse(monsterXml.Element("look").Attribute("head")?.Value ?? "0"),
                    Body = int.Parse(monsterXml.Element("look").Attribute("body")?.Value ?? "0"),
                    Legs = int.Parse(monsterXml.Element("look").Attribute("legs")?.Value ?? "0"),
                    Feet = int.Parse(monsterXml.Element("look").Attribute("feet")?.Value ?? "0"),
                    Addons = int.Parse(monsterXml.Element("look").Attribute("addons")?.Value ?? "0"),
                };
                monster.Voices = (monsterXml.Element("voices")?.Elements("voice").Select(o => o.Attribute("sentence").Value) ?? new List<string>()).ToList();
                monster.Speed = int.Parse(monsterXml.Attribute("speed").Value);
                monster.Armor = int.Parse(monsterXml.Element("defenses")?.Attribute("armor")?.Value ?? "0");
                monster.Defense = int.Parse(monsterXml.Element("defenses")?.Attribute("defense")?.Value ?? "0");
                monster.Flags = monsterXml.Element("flags").Elements("flag").Attributes().ToDictionary(k => k.Name.ToString(), v => int.Parse(v.Value));
                
                if (monsterXml.Element("loot") != null)
                {
                    monster.Loots = monsterXml.Element("loot").Elements("item").Select(o => new MonsterLoot
                    {
                        Chance = int.Parse(o.Attribute("chance").Value),
                        ItemId = int.Parse(o.Attribute("id").Value),
                        CountMax = int.Parse(o.Attribute("countmax")?.Value ?? "1")
                    }).ToList();
                }
                else
                {
                    monster.Loots = new List<MonsterLoot>();
                }

                monsters.Add(monster);
            }

            return monsters;
        }
    }
}
