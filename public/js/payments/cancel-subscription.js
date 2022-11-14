const btn_cancel_array = document.querySelectorAll('#cancelSubscription')
const btn_cancel_now_array = document.querySelectorAll('#cancelNowSubscription')

btn_cancel_now_array.forEach(btn_cancel_now => {
    btn_cancel_now.addEventListener('click', (evt) => {
        evt.preventDefault();

        Swal.fire({
            title: '¡Estás seguro?',
            text: "La suscripción será cancelada",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, cancelar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('cancelNowSubscription', btn_cancel_now.value);
                Swal.fire(
                    'Listo!',
                    'Has cancelado tu suscripción.',
                    'success'
                )
            }
        })
    })
});

btn_cancel_array.forEach(btn_cancel => {
    btn_cancel.addEventListener('click', (evt) => {
        //console.log(btn_cancel.value);
        evt.preventDefault();

        Swal.fire({
            title: '¡Estás seguro?',
            text: "La suscripción será cancelada",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, cancelar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('cancelSubscription', btn_cancel.value);
                Swal.fire(
                    'Listo!',
                    'Has cancelado tu suscripción.',
                    'success'
                )
            }
        })
    })
});