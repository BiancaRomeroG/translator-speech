const btn_traducir = document.getElementById('btnTraducir')
const input_file = document.getElementById('img')
const text_area_output = document.getElementById('textArea2')

btn_traducir.addEventListener('click', () => {
    if (input_file.value != '') {

        Livewire.emit('translateImage')

        return
    }

    Swal.fire({
        title: 'Debes subir una imagen',
        text: "JPEG, PNG, JPG",
        icon: 'info',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok!'
      })
})

Livewire.on('return-json', (response) => {
    let json = JSON.parse(response)

    if (json.success) {
        text_area_output.value = json.outputText
        return
    }

    Swal.fire({
        title: 'Ha ocurrido un error',
        text: "Vuelve a cargar tu archivo",
        icon: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Reportar'
      })
})

Livewire.on('throwable', (th) => {
    console.log(th);

    Swal.fire({
        title: 'Ha ocurrido un error',
        text: "Vuelve a cargar tu archivo",
        icon: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Reportar'
      })
})