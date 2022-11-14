const btn_resume_array = document.querySelectorAll('#resumeSubscription')

btn_resume_array.forEach(btn_resume => {
    btn_resume.addEventListener('click', (evt) => {
        evt.preventDefault();

        Swal.fire({
            title: '¡Estás seguro?',
            text: "Se debitará el monto específico de tu método de pago disponible",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, resumir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('resumeSubscription', btn_resume.value);
                Swal.fire(
                    'Listo!',
                    'Tu suscripción se ha actualizado',
                    'success'
                )
            }
        })
    })
});