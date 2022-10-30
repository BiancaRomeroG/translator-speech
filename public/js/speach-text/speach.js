languages = [{
    "am-ET": "Amharic"
},
{
    "ar-SA": "Arabic"
},
{
    "be-BY": "Bielarus"
},
{
    "bem-ZM": "Bemba"
},
{
    "bi-VU": "Bislama"
},
{
    "bjs-BB": "Bajan"
},
{
    "bn-IN": "Bengali"
},
{
    "bo-CN": "Tibetan"
},
{
    "br-FR": "Breton"
},
{
    "bs-BA": "Bosnian"
},
{
    "ca-ES": "Catalan"
},
{
    "cop-EG": "Coptic"
},
{
    "cs-CZ": "Czech"
},
{
    "cy-GB": "Welsh"
},
{
    "da-DK": "Danish"
},
{
    "dz-BT": "Dzongkha"
},
{
    "de-DE": "German"
},
{
    "dv-MV": "Maldivian"
},
{
    "el-GR": "Greek"
},
{
    "en-GB": "English"
},
{
    "es-ES": "Spanish"
},
{
    "et-EE": "Estonian"
},
{
    "eu-ES": "Basque"
},
{
    "fa-IR": "Persian"
},
{
    "fi-FI": "Finnish"
},
{
    "fn-FNG": "Fanagalo"
},
{
    "fo-FO": "Faroese"
},
{
    "fr-FR": "French"
},
{
    "gl-ES": "Galician"
},
{
    "gu-IN": "Gujarati"
},
{
    "ha-NE": "Hausa"
},
{
    "he-IL": "Hebrew"
},
{
    "hi-IN": "Hindi"
},
{
    "hr-HR": "Croatian"
},
{
    "hu-HU": "Hungarian"
},
{
    "id-ID": "Indonesian"
},
{
    "is-IS": "Icelandic"
},
{
    "it-IT": "Italian"
},
{
    "ja-JP": "Japanese"
},
{
    "kk-KZ": "Kazakh"
},
{
    "km-KM": "Khmer"
},
{
    "kn-IN": "Kannada"
},
{
    "ko-KR": "Korean"
},
{
    "ku-TR": "Kurdish"
},
{
    "ky-KG": "Kyrgyz"
},
{
    "la-VA": "Latin"
},
{
    "lo-LA": "Lao"
},
{
    "lv-LV": "Latvian"
},
{
    "men-SL": "Mende"
},
{
    "mg-MG": "Malagasy"
},
{
    "mi-NZ": "Maori"
},
{
    "ms-MY": "Malay"
},
{
    "mt-MT": "Maltese"
},
{
    "my-MM": "Burmese"
},
{
    "ne-NP": "Nepali"
},
{
    "niu-NU": "Niuean"
},
{
    "nl-NL": "Dutch"
},
{
    "no-NO": "Norwegian"
},
{
    "ny-MW": "Nyanja"
},
{
    "ur-PK": "Pakistani"
},
{
    "pau-PW": "Palauan"
},
{
    "pa-IN": "Panjabi"
},
{
    "ps-PK": "Pashto"
},
{
    "pis-SB": "Pijin"
},
{
    "pl-PL": "Polish"
},
{
    "pt-PT": "Portuguese"
},
{
    "rn-BI": "Kirundi"
},
{
    "ro-RO": "Romanian"
},
{
    "ru-RU": "Russian"
},
{
    "sg-CF": "Sango"
},
{
    "si-LK": "Sinhala"
},
{
    "sk-SK": "Slovak"
},
{
    "sm-WS": "Samoan"
},
{
    "sn-ZW": "Shona"
},
{
    "so-SO": "Somali"
},
{
    "sq-AL": "Albanian"
},
{
    "sr-RS": "Serbian"
},
{
    "sv-SE": "Swedish"
},
{
    "sw-SZ": "Swahili"
},
{
    "ta-LK": "Tamil"
},
{
    "te-IN": "Telugu"
},
{
    "tet-TL": "Tetum"
},
{
    "tg-TJ": "Tajik"
},
{
    "th-TH": "Thai"
},
{
    "ti-TI": "Tigrinya"
},
{
    "tk-TM": "Turkmen"
},
{
    "tl-PH": "Tagalog"
},
{
    "tn-BW": "Tswana"
},
{
    "to-TO": "Tongan"
},
{
    "tr-TR": "Turkish"
},
{
    "uk-UA": "Ukrainian"
},
{
    "uz-UZ": "Uzbek"
},
{
    "vi-VN": "Vietnamese"
},
{
    "wo-SN": "Wolof"
},
{
    "xh-ZA": "Xhosa"
},
{
    "yi-YD": "Yiddish"
},
{
    "zu-ZA": "Zulu"
}
];
//lenguajes por defecto del select
const lenguaje1 = "en-GB";
const lenguaje2 = "es-ES";


//obtengo los selects
const selectFirst = document.getElementById('idioma1');
const selectSecond = document.getElementById('idioma2');
//recorro la lista de lenguajes poniendocelos como valores al los dos selets
for (const i in languages) {
    //obtengo el valor que voy a tomar
    const key = Object.keys(languages[i]).toString();
    //obtengo el nombre del idioma
    const value = Object.values(languages[i]).toString();
    //console.log(`${key} = ${value}`);
    //concateno a los select las opciones
    selectFirst.innerHTML += `<option value=${key}>${value}</option>`;
    selectSecond.innerHTML += `<option value=${key}>${value}</option>`;
}

selectFirst.value = lenguaje1;
selectSecond.value = lenguaje2;

function mostrarEscucharVoz() {
    div = document.getElementById('flotante');
    if (div.style.display == 'none') {
        div.style.display = '';
    } else {
        div.style.display = 'none';
    }
}

function mostrarEscucharVoz2() {
    div = document.getElementById('flotante2');
    if (div.style.display == 'none') {
        div.style.display = '';
    } else {
        div.style.display = 'none';
    }
}

document.getElementById("btnPlay").addEventListener("click", () => {
    //console.log('play');
    const volumen = document.getElementById("volumen").value;
    const tono = document.getElementById("tono").value;
    const velocidad = document.getElementById("velocidad").value;
    const texto = document.getElementById("textArea1").value;
    const voz = document.getElementById("idioma1").value;


    decirTraducido(volumen, velocidad, tono, texto, voz);
});

document.getElementById("btnPlay2").addEventListener("click", () => {
    //console.log('play');
    const volumen = document.getElementById("volumen2").value;
    const tono = document.getElementById("tono2").value;
    const velocidad = document.getElementById("velocidad2").value;
    const texto = document.getElementById("textArea2").value;
    const voz = document.getElementById("idioma2").value;

    decirTraducido(volumen, velocidad, tono, texto, voz);
});


function decirTraducido(volumen, velocidad, tono, texto, voz) {


    const msg = new SpeechSynthesisUtterance();
    msg.volume = parseFloat(volumen); // 0 to 1
    msg.rate = parseFloat(velocidad); // 0.1 to 10 velocidad
    msg.pitch = parseFloat(tono); // 0 to 2 tono
    msg.text = texto; //texto

    msg.lang = voz;
    speechSynthesis.speak(msg);
}

document.getElementById('btnStop').addEventListener("click", () => {
    pararTraducido();
});

document.getElementById('btnStop2').addEventListener("click", () => {
    pararTraducido();
});

function pararTraducido() {
    speechSynthesis.cancel();
}


// texto plano


document.querySelector('#textArea1').addEventListener('input', async () => {
    const selectFirst = document.getElementById('idioma1');
    const selectSecond = document.getElementById('idioma2');
    const texto = document.getElementById("textArea1");
    if( !texto.value ) return


    const res = await fetch(`https://api.mymemory.translated.net/get?q=${ texto.value }&langpair=${selectFirst.value}|${selectSecond.value}`);
    const data = await res.json()
    document.querySelector('#textArea2').value = data.responseData.translatedText;
});
