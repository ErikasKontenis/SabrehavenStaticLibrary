using System.Collections.Generic;

namespace SabrehavenWwwLibriaryWorker.Contracts
{
    public class Item
    {
        public int Id { get; set; }

        public string Name { get; set; }

        public string Title { get; set; }

        public string FileName { get; set; }

        public string Description { get; set; }

        public List<string> Flags { get; set; }

        public Dictionary<string, string> Attributes { get; set; }
    }
}
