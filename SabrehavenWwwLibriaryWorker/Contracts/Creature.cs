namespace SabrehavenWwwLibriaryWorker.Contracts
{
    public abstract class Creature
    {
        public string Name { get; set; }

        public string FileName { get; set; }

        public CreatureLookType LookType { get; set; }
    }
}
