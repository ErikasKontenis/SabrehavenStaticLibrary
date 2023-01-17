using System.Collections.Generic;
using System.Linq;

namespace SabrehavenWwwLibriaryWorker.Extensions
{
    public static class StringExtensions
    {
        public static string ToTitleCase(this string str)
        {
            return new string(CharsToTitleCase(str).ToArray());
        }

        static IEnumerable<char> CharsToTitleCase(string s)
        {
            bool newWord = true;
            foreach (char c in s)
            {
                if (newWord) { yield return char.ToUpper(c); newWord = false; }
                else yield return char.ToLower(c);
                if (c == ' ') newWord = true;
            }
        }
    }
}
