<?php

namespace App\Http;

class Languages
{

    public static function getLanguages()
    {
        $languajes = [
            "af" => [
                "name" => "Afrikáans",
                "nativeName" => "Afrikaans",
                "dir" => "ltr"
            ],
            "am" => [
                "name" => "Amárico",
                "nativeName" => "አማርኛ",
                "dir" => "ltr"
            ],
            "ar" => [
                "name" => "Árabe",
                "nativeName" => "العربية",
                "dir" => "rtl"
            ],
            "as" => [
                "name" => "Asamés",
                "nativeName" => "অসমীয়া",
                "dir" => "ltr"
            ],
            "az" => [
                "name" => "Azerbaiyano",
                "nativeName" => "Azərbaycan",
                "dir" => "ltr"
            ],
            "ba" => [
                "name" => "Baskir",
                "nativeName" => "Bashkir",
                "dir" => "ltr"
            ],
            "bg" => [
                "name" => "Búlgaro",
                "nativeName" => "Български",
                "dir" => "ltr"
            ],
            "bn" => [
                "name" => "Bengalí",
                "nativeName" => "বাংলা",
                "dir" => "ltr"
            ],
            "bo" => [
                "name" => "Tibetano",
                "nativeName" => "བོད་སྐད་",
                "dir" => "ltr"
            ],
            "bs" => [
                "name" => "Bosnio",
                "nativeName" => "Bosnian",
                "dir" => "ltr"
            ],
            "ca" => [
                "name" => "Catalán",
                "nativeName" => "Català",
                "dir" => "ltr"
            ],
            "cs" => [
                "name" => "Checo",
                "nativeName" => "Čeština",
                "dir" => "ltr"
            ],
            "cy" => [
                "name" => "Galés",
                "nativeName" => "Cymraeg",
                "dir" => "ltr"
            ],
            "da" => [
                "name" => "Danés",
                "nativeName" => "Dansk",
                "dir" => "ltr"
            ],
            "de" => [
                "name" => "Alemán",
                "nativeName" => "Deutsch",
                "dir" => "ltr"
            ],
            "dv" => [
                "name" => "Divehi",
                "nativeName" => "ދިވެހިބަސް",
                "dir" => "rtl"
            ],
            "el" => [
                "name" => "Griego",
                "nativeName" => "Ελληνικά",
                "dir" => "ltr"
            ],
            "en" => [
                "name" => "Inglés",
                "nativeName" => "English",
                "dir" => "ltr"
            ],
            "es" => [
                "name" => "Español",
                "nativeName" => "Español",
                "dir" => "ltr"
            ],
            "et" => [
                "name" => "Estonio",
                "nativeName" => "Eesti",
                "dir" => "ltr"
            ],
            "eu" => [
                "name" => "Euskera",
                "nativeName" => "Euskara",
                "dir" => "ltr"
            ],
            "fa" => [
                "name" => "Persa",
                "nativeName" => "فارسی",
                "dir" => "rtl"
            ],
            "fi" => [
                "name" => "Finés",
                "nativeName" => "Suomi",
                "dir" => "ltr"
            ],
            "fil" => [
                "name" => "Filipino",
                "nativeName" => "Filipino",
                "dir" => "ltr"
            ],
            "fo" => [
                "name" => "Feroés",
                "nativeName" => "Føroyskt",
                "dir" => "ltr"
            ],
            "fr" => [
                "name" => "Francés",
                "nativeName" => "Français",
                "dir" => "ltr"
            ],
            "fr-CA" => [
                "name" => "Francés (Canadá)",
                "nativeName" => "Français (Canada)",
                "dir" => "ltr"
            ],
            "ga" => [
                "name" => "Irlandés",
                "nativeName" => "Gaeilge",
                "dir" => "ltr"
            ],
            "gl" => [
                "name" => "Gallego",
                "nativeName" => "Galego",
                "dir" => "ltr"
            ],
            "gu" => [
                "name" => "Guyaratí",
                "nativeName" => "ગુજરાતી",
                "dir" => "ltr"
            ],
            "he" => [
                "name" => "Hebreo",
                "nativeName" => "עברית",
                "dir" => "rtl"
            ],
            "hi" => [
                "name" => "Hindi",
                "nativeName" => "हिन्दी",
                "dir" => "ltr"
            ],
            "hr" => [
                "name" => "Croata",
                "nativeName" => "Hrvatski",
                "dir" => "ltr"
            ],
            "ht" => [
                "name" => "Criollo Haitiano",
                "nativeName" => "Haitian Creole",
                "dir" => "ltr"
            ],
            "hu" => [
                "name" => "Húngaro",
                "nativeName" => "Magyar",
                "dir" => "ltr"
            ],
            "hy" => [
                "name" => "Armenio",
                "nativeName" => "Հայերեն",
                "dir" => "ltr"
            ],
            "id" => [
                "name" => "Indonesio",
                "nativeName" => "Indonesia",
                "dir" => "ltr"
            ],
            "ikt" => [
                "name" => "Inuinnaqtun",
                "nativeName" => "Inuinnaqtun",
                "dir" => "ltr"
            ],
            "is" => [
                "name" => "Islandés",
                "nativeName" => "Íslenska",
                "dir" => "ltr"
            ],
            "it" => [
                "name" => "Italiano",
                "nativeName" => "Italiano",
                "dir" => "ltr"
            ],
            "iu" => [
                "name" => "Inuktitut",
                "nativeName" => "ᐃᓄᒃᑎᑐᑦ",
                "dir" => "ltr"
            ],
            "iu-Latn" => [
                "name" => "Inuktitut",
                "nativeName" => "Inuktitut (Latin)",
                "dir" => "ltr"
            ],
            "ja" => [
                "name" => "Japonés",
                "nativeName" => "日本語",
                "dir" => "ltr"
            ],
            "ka" => [
                "name" => "Georgiano",
                "nativeName" => "ქართული",
                "dir" => "ltr"
            ],
            "kk" => [
                "name" => "Kazajo",
                "nativeName" => "Қазақ Тілі",
                "dir" => "ltr"
            ],
            "km" => [
                "name" => "Jemer",
                "nativeName" => "ខ្មែរ",
                "dir" => "ltr"
            ],
            "kmr" => [
                "name" => "Kurdo",
                "nativeName" => "Kurdî (Bakur)",
                "dir" => "ltr"
            ],
            "kn" => [
                "name" => "Canarés",
                "nativeName" => "ಕನ್ನಡ",
                "dir" => "ltr"
            ],
            "ko" => [
                "name" => "Coreano",
                "nativeName" => "한국어",
                "dir" => "ltr"
            ],
            "ku" => [
                "name" => "Kurdo (Centro)",
                "nativeName" => "Kurdî (Navîn)",
                "dir" => "rtl"
            ],
            "ky" => [
                "name" => "Kirguís",
                "nativeName" => "Кыргызча",
                "dir" => "ltr"
            ],
            "lo" => [
                "name" => "Lao",
                "nativeName" => "ລາວ",
                "dir" => "ltr"
            ],
            "lt" => [
                "name" => "Lituano",
                "nativeName" => "Lietuvių",
                "dir" => "ltr"
            ],
            "lv" => [
                "name" => "Letón",
                "nativeName" => "Latviešu",
                "dir" => "ltr"
            ],
            "lzh" => [
                "name" => "Chinese (Literary)",
                "nativeName" => "中文 (文言文)",
                "dir" => "ltr"
            ],
            "mg" => [
                "name" => "Malgache",
                "nativeName" => "Malagasy",
                "dir" => "ltr"
            ],
            "mi" => [
                "name" => "Maorí",
                "nativeName" => "Te Reo Māori",
                "dir" => "ltr"
            ],
            "mk" => [
                "name" => "Macedonio",
                "nativeName" => "Македонски",
                "dir" => "ltr"
            ],
            "ml" => [
                "name" => "Malayalam",
                "nativeName" => "മലയാളം",
                "dir" => "ltr"
            ],
            "mn-Cyrl" => [
                "name" => "Mongolian",
                "nativeName" => "Mongolian (Cy)",
                "dir" => "ltr"
            ],
            "mn-Mong" => [
                "name" => "Mongolian (Trad)",
                "nativeName" => "ᠮᠣᠩᠭᠣᠯ ᠬᠡᠯᠡ",
                "dir" => "ltr"
            ],
            "mr" => [
                "name" => "Maratí",
                "nativeName" => "मराठी",
                "dir" => "ltr"
            ],
            "ms" => [
                "name" => "Malayo",
                "nativeName" => "Melayu",
                "dir" => "ltr"
            ],
            "mt" => [
                "name" => "Maltés",
                "nativeName" => "Malti",
                "dir" => "ltr"
            ],
            "mww" => [
                "name" => "Hmong",
                "nativeName" => "Hmong Daw",
                "dir" => "ltr"
            ],
            "my" => [
                "name" => "Birmano",
                "nativeName" => "မြန်မာ",
                "dir" => "ltr"
            ],
            "nb" => [
                "name" => "Noruego Bokmal",
                "nativeName" => "Norsk Bokmål",
                "dir" => "ltr"
            ],
            "ne" => [
                "name" => "Nepalí",
                "nativeName" => "नेपाली",
                "dir" => "ltr"
            ],
            "nl" => [
                "name" => "Neerlandés",
                "nativeName" => "Nederlands",
                "dir" => "ltr"
            ],
            "or" => [
                "name" => "Oriya",
                "nativeName" => "ଓଡ଼ିଆ",
                "dir" => "ltr"
            ],
            "otq" => [
                "name" => "Otomí Querétaro",
                "nativeName" => "Hñähñu",
                "dir" => "ltr"
            ],
            "pa" => [
                "name" => "Punyabí",
                "nativeName" => "ਪੰਜਾਬੀ",
                "dir" => "ltr"
            ],
            "pl" => [
                "name" => "Polaco",
                "nativeName" => "Polski",
                "dir" => "ltr"
            ],
            "prs" => [
                "name" => "Darí",
                "nativeName" => "دری",
                "dir" => "rtl"
            ],
            "ps" => [
                "name" => "Pastún",
                "nativeName" => "پښتو",
                "dir" => "rtl"
            ],
            "pt" => [
                "name" => "Portugués (Br)",
                "nativeName" => "Português (Brasil)",
                "dir" => "ltr"
            ],
            "pt-PT" => [
                "name" => "Portugués (Pg)",
                "nativeName" => "Português (Portugal)",
                "dir" => "ltr"
            ],
            "ro" => [
                "name" => "Rumano",
                "nativeName" => "Română",
                "dir" => "ltr"
            ],
            "ru" => [
                "name" => "Ruso",
                "nativeName" => "Русский",
                "dir" => "ltr"
            ],
            "sk" => [
                "name" => "Eslovaco",
                "nativeName" => "Slovenčina",
                "dir" => "ltr"
            ],
            "sl" => [
                "name" => "Esloveno",
                "nativeName" => "Slovenščina",
                "dir" => "ltr"
            ],
            "sm" => [
                "name" => "Samoano",
                "nativeName" => "Gagana Sāmoa",
                "dir" => "ltr"
            ],
            "so" => [
                "name" => "Somalí",
                "nativeName" => "Soomaali",
                "dir" => "ltr"
            ],
            "sq" => [
                "name" => "Albanés",
                "nativeName" => "Shqip",
                "dir" => "ltr"
            ],
            "sr-Cyrl" => [
                "name" => "Serbio (Cirílico)",
                "nativeName" => "Српски (ћирилица)",
                "dir" => "ltr"
            ],
            "sr-Latn" => [
                "name" => "Serbio (Latino)",
                "nativeName" => "Srpski (latinica)",
                "dir" => "ltr"
            ],
            "sv" => [
                "name" => "Sueco",
                "nativeName" => "Svenska",
                "dir" => "ltr"
            ],
            "sw" => [
                "name" => "Suajili",
                "nativeName" => "Kiswahili",
                "dir" => "ltr"
            ],
            "ta" => [
                "name" => "Tamil",
                "nativeName" => "தமிழ்",
                "dir" => "ltr"
            ],
            "te" => [
                "name" => "Telugu",
                "nativeName" => "తెలుగు",
                "dir" => "ltr"
            ],
            "th" => [
                "name" => "Tailandés",
                "nativeName" => "ไทย",
                "dir" => "ltr"
            ],
            "ti" => [
                "name" => "Tigriña",
                "nativeName" => "ትግር",
                "dir" => "ltr"
            ],
            "tk" => [
                "name" => "Turcomano",
                "nativeName" => "Türkmen Dili",
                "dir" => "ltr"
            ],
            "tlh-Latn" => [
                "name" => "Klingon (Latino)",
                "nativeName" => "Klingon (Latin)",
                "dir" => "ltr"
            ],
            "tlh-Piqd" => [
                "name" => "Klingon (pIqaD)",
                "nativeName" => "Klingon (pIqaD)",
                "dir" => "ltr"
            ],
            "to" => [
                "name" => "Tongano",
                "nativeName" => "Lea Fakatonga",
                "dir" => "ltr"
            ],
            "tr" => [
                "name" => "Turco",
                "nativeName" => "Türkçe",
                "dir" => "ltr"
            ],
            "tt" => [
                "name" => "Tártaro",
                "nativeName" => "Татар",
                "dir" => "ltr"
            ],
            "ty" => [
                "name" => "Tahitiano",
                "nativeName" => "Reo Tahiti",
                "dir" => "ltr"
            ],
            "ug" => [
                "name" => "Uigur",
                "nativeName" => "ئۇيغۇرچە",
                "dir" => "rtl"
            ],
            "uk" => [
                "name" => "Ucraniano",
                "nativeName" => "Українська",
                "dir" => "ltr"
            ],
            "ur" => [
                "name" => "Urdu",
                "nativeName" => "اردو",
                "dir" => "rtl"
            ],
            "uz" => [
                "name" => "Uzbeko",
                "nativeName" => "Uzbek (Latin)",
                "dir" => "ltr"
            ],
            "vi" => [
                "name" => "Vietnamita",
                "nativeName" => "Tiếng Việt",
                "dir" => "ltr"
            ],
            "yua" => [
                "name" => "Maya Yucateco",
                "nativeName" => "Yucatec Maya",
                "dir" => "ltr"
            ],
            "yue" => [
                "name" => "Cantonés (Trad)",
                "nativeName" => "粵語 (繁體)",
                "dir" => "ltr"
            ],
            "zh-Hans" => [
                "name" => "Chino (Simp)",
                "nativeName" => "中文 (简体)",
                "dir" => "ltr"
            ],
            "zh-Hant" => [
                "name" => "Chino (Trad)",
                "nativeName" => "繁體中文 (繁體)",
                "dir" => "ltr"
            ],
            "zu" => [
                "name" => "Zulú",
                "nativeName" => "Isi-Zulu",
                "dir" => "ltr"
            ]
        ];

        return $languajes;
    }
}
