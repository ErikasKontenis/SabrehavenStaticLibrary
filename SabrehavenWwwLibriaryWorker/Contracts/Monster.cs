using System.Collections.Generic;

namespace SabrehavenWwwLibriaryWorker.Contracts
{
    public class Monster : Creature
    {
        public string Description { get; set; }

        public int Exp { get; set; }

        public int Health { get; set; }

        public List<string> Voices { get; set; }

        public int Speed { get; set; }

        public int Armor { get; set; }

        public int Defense { get; set; }

        public Dictionary<string, int> Flags { get; set; }

        public List<MonsterLoot> Loots { get; set; }
    }
}
