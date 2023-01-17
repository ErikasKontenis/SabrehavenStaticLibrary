using System.Collections.Generic;

namespace SabrehavenWwwLibriaryWorker.Contracts
{
    public class Npc : Creature
    {
        public Position Position { get; set; }

        public List<string> AddressSpeaks { get; set; } = new List<string>();

        public List<NpcItemTrade> BuyItems { get; set; }

        public List<NpcItemTrade> SellItems { get; set; }
    }
}
