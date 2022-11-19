const file = document.getElementById('archivo')
const btn_translate = document.getElementById('translate-document')
var page = document.getElementById("loader-page")
var global_name = '';
var global_extension = ''; 

page.style.visibility = 'hidden'

file.addEventListener('change', (evt) => {
    let evtTarget = evt.target.value
    let name = evtTarget.substring(12)
    global_name = name
    global_extension = name.split('.').pop();
    // console.log(name.split('.').pop())

    setTimeout(() => {
        console.log("settimeout");
        const filename = document.getElementById('filename')
        const filestore = document.querySelector('#filestore')

        filename.textContent = name
    }, 3000)

})

// Volver el input file vacio
Livewire.on('clearInput', () => {
    console.log("Input reset");
    
    file.value = ''
    page.style.visibility = 'hidden'
});

// Guardar archivo y consumir api
btn_translate.addEventListener('click', () => {
    console.log("Empezando");

    page.style.visibility = 'visible'

    alertToast('info', 'Espera un momento por favor...', 10000);

    Livewire.emit('translateDocument', global_name, global_extension)
});

// Return JSON de la api
Livewire.on('return-json', (response, record_id) => {
    try {
        let json = JSON.parse(response)

        const enlace = document.createElement('a')
        enlace.href = json.targetUrl
        enlace.click()

        alertToast('success', 'Documento descargado...', 3000);

        Livewire.emit('saveFile', record_id, json.targetUrl)

    } catch (error) {
        console.log(error);
        alertInfo('error', 'Ha ocurrido un error', 'Vuelve a cargar tu documento')

        page.style.visibility = 'hidden'

        Livewire.emit('deleteRegister', record_id)
    }

})

// Error Throwable Laravel
Livewire.on('throwable-error', (th) => {
    console.log('Error Laravel', th);

    page.style.visibility = 'hidden'

    alertInfo('error', 'Se detuvo la comunicación con la API', 'Vuelve a intentarlo mas tarde...')
})


// alerta tostada
function alertToast(icon, message, timer) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: timer,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: icon,
        title: message,
    })
}

// Alerta info
function alertInfo(icon, title, message) {
    Swal.fire({
        icon: icon,
        title: title,
        text: message,
    })
}
