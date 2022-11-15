const languages = [
    { "am-ET": "Amárico" },
    { "ar-SA": "Árabe" },
    { "be-BY": "Bielorruso" },
    { "bem-ZM": "Bemba" },
    { "bi-VU": "Bislama" },
    { "bjs-BB": "Bajan" },
    { "bn-IN": "Bengali" },
    { "bo-CN": "Tibetan" },
    { "br-FR": "Breton" },
    { "bs-BA": "Bosnio" },
    { "ca-ES": "Catalan" },
    { "cop-EG": "Coptic" },
    { "cs-CZ": "Checo" },
    { "cy-GB": "Gales" },
    { "da-DK": "Danés" },
    { "dz-BT": "Dzongkha" },
    { "de-DE": "Alemán" },
    { "dv-MV": "Maldivo" },
    { "el-GR": "Griego" },
    { "en-GB": "Inglés" },
    { "es-ES": "Español" },
    { "et-EE": "Estonio" },
    { "eu-ES": "Vasco" },
    { "fa-IR": "Iraní" },
    { "fi-FI": "Finlandés" },
    { "fn-FNG": "Fanagalo" },
    { "fo-FO": "Faroese" },
    { "fr-FR": "Francés" },
    { "gl-ES": "Gallego" },
    { "gu-IN": "Gujarati" },
    { "ha-NE": "Hausa" },
    { "he-IL": "Hebreo" },
    { "hi-IN": "Hindi" },
    { "hr-HR": "Croata" },
    { "hu-HU": "Hungaro" },
    { "id-ID": "Indonesio" },
    { "is-IS": "Islandés" },
    { "it-IT": "Italiano" },
    { "ja-JP": "Japonés" },
    { "kk-KZ": "Kazajo" },
    { "km-KM": "Khmer" },
    { "kn-IN": "Canadiense" },
    { "ko-KR": "Coreano" },
    { "ku-TR": "Kurdo" },
    { "ky-KG": "Kirguís" },
    { "la-VA": "Latín" },
    { "lo-LA": "Laosiano" },
    { "lv-LV": "Letón" },
    { "men-SL": "Mende" },
    { "mg-MG": "Malagasy" },
    { "mi-NZ": "Maori" },
    { "ms-MY": "Malayo" },
    { "mt-MT": "Maltés" },
    { "my-MM": "Birmano" },
    { "ne-NP": "Nepalí" },
    { "niu-NU": "Niuean" },
    { "nl-NL": "Holandés" },
    { "no-NO": "Noruego" },
    { "ny-MW": "Nyanja" },
    { "ur-PK": "PakistanÍ" },
    { "pau-PW": "PalauanO" },
    { "pa-IN": "Panyabí" },
    { "ps-PK": "Pastún" },
    { "pis-SB": "Pijin" },
    { "pl-PL": "Polaco" },
    { "pt-PT": "Portugués" },
    { "rn-BI": "Kirundi" },
    { "ro-RO": "Rumano" },
    { "ru-RU": "Ruso" },
    { "sg-CF": "Sango" },
    { "si-LK": "Cingalés" },
    { "sk-SK": "Eslovaco" },
    { "sm-WS": "Samoano" },
    { "sn-ZW": "Shona" },
    { "so-SO": "Somalí" },
    { "sq-AL": "Albanés" },
    { "sr-RS": "Serbio" },
    { "sv-SE": "Sueco" },
    { "sw-SZ": "Swahili" },
    { "ta-LK": "Tamil" },
    { "te-IN": "Telugu" },
    { "tet-TL": "Tetum" },
    { "tg-TJ": "Tayiko" },
    { "th-TH": "Tailandés" },
    { "ti-TI": "Tigrinya" },
    { "tk-TM": "Turkmen" },
    { "tl-PH": "Tagalog" },
    { "tn-BW": "Tswana" },
    { "to-TO": "Tongan" },
    { "tr-TR": "Turkish" },
    { "uk-UA": "Ukrainian" },
    { "uz-UZ": "Uzbek" },
    { "vi-VN": "Vietnamese" },
    { "wo-SN": "Wolof" },
    { "xh-ZA": "Xhosa" },
    { "yi-YD": "Yiddish" },
    { "zu-ZA": "Zulu" }
]
//lenguajes por defecto del select
const lenguaje1 = "en-GB";
const lenguaje2 = "es-ES";

//botones activar y desactivar micrófono
const btnStartRecord = document.getElementById("btnStartRecord");
const btnStopRecord = document.getElementById("btnStopRecord");

//textArea
const textArea1 = document.getElementById('textArea1')
const textArea2 = document.getElementById('textArea2');

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
document.querySelector('#btnTraducir').addEventListener('click', async () => {
    const selectFirst = document.getElementById('idioma1');
    const selectSecond = document.getElementById('idioma2');
    const texto = document.getElementById("textArea1");
    if (!texto.value) return

    const res = await fetch(`https://api.mymemory.translated.net/get?q=${texto.value}&langpair=${selectFirst.value}|${selectSecond.value}`);
    const data = await res.json();

    document.querySelector('#textArea2').value = data.responseData.translatedText;
    const path_file_input = document.querySelector('#textArea1').value;
    const path_file_output = document.querySelector('#textArea2').value;
    const language_input = document.querySelector('#idioma1').value;
    const language_output = document.querySelector('#idioma2').value;
    Livewire.emit('saveHistorial', path_file_input, path_file_output, language_input, language_output );
});


//voz a texto


let recognition = new webkitSpeechRecognition();

// recognition.lang =document.getElementById("idioma1").value;
console.log(recognition.lang)
recognition.continuous = true
recognition.interimResults = false;

function devolverIdioma() {
    var idioma = document.getElementById('idioma1');
    return idioma.value;
}
recognition.onresult = (event) => {
    var idioma = devolverIdioma();
    recognition.lang;
    const results = event.results;
    const frase = results[results.length - 1][0].transcript;
    textArea1.value += frase;
    // console.log(idioma)
}

//traducir 
// selectSecond.addEventListener("click", async _ => {
//     if (!textArea1.value) return
//     const res = await fetch(`https://api.mymemory.translated.net/get?q=${textArea1.value}&langpair=${selectFirst.value}|${selectSecond.value}`)
//     const data = await res.json()
//     textArea2.value = data.responseData.translatedText
// })


btnStartRecord.addEventListener("click", () => {
    mostrarMsj();
    recognition.start()
})
btnStopRecord.addEventListener('click', async () => {
    action.innerHTML = " Se ha detenido la grabación. "
    recognition.abort();
    setTimeout("reaparecer();", 2500);
    // if (!textArea1.value) return
    // const res = await fetch(`https://api.mymemory.translated.net/get?q=${textArea1.value}&langpair=${selectFirst.value}|${selectSecond.value}`)
    // const data = await res.json()
    // textArea2.value = data.responseData.translatedText
});

recognition.onstart = function () {
    action.innerHTML = " Escuchando, por favor hable..."
}
// recognition.onspeechend = function(){
//     action.innerHTML =" Se ha detenido la grabación "

// }

function reaparecer() {
    document.getElementById("action").style.display = "none";
}

function mostrarMsj() {
    div = document.getElementById('action');
    if (div.style.display == 'none') {
        div.style.display = '';
    } else {
        div.style.display = 'none';
    }
}

//Redimencionar TextArea

const myText1 = document.getElementById("textArea1");
myText1.style.cssText = `height: ${myText1.scrollHeight}px; overflow-y: hidden; resize: none`;

myText1.addEventListener("input", function(){
    this.style.height = "auto";
    this.style.height = `${this.scrollHeight}px`;
});

const myText2 = document.getElementById("textArea2");
myText2.style.cssText = `height: ${myText2.scrollHeight}px; overflow-y: hidden; resize: none`;

myText2.addEventListener("input", function(){
    this.style.height = "auto";
    this.style.height = `${this.scrollHeight}px`;
});

//mostrar ocultar historial


function mostrarHistorial() {
    div = document.getElementById('record-text');
    divTraductor = document.getElementById('divTraductor');
    if (div.style.display == 'none') {
        div.style.display = '';
        div.style.cssText = `width: 25%;`;
        divTraductor.style.cssText = `width: 75%;`
    } else {
        div.style.display = 'none';
        divTraductor.style.cssText = `width: 100%;`;

    }
    
}

