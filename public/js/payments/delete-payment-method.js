const btn_delete_array = document.querySelectorAll('#deletePay')

btn_delete_array.forEach(btn_delete => {
    btn_delete.addEventListener('click', (evt) => {
        evt.preventDefault()

        Swal.fire({
            title: '¡Estás seguro?',
            text: "El método de pago será eliminado",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('deletePaymentMethod', btn_delete.value);
                Swal.fire(
                    'Eliminado!',
                    'Este método de pago ha sido eliminado.',
                    'success'
                )
            }
        })
    })
});
