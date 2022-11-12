const btn = document.getElementById('card-button')

btn.addEventListener('click', () => {
    setTimeout(() => {
        let timerInterval
        Swal.fire({
            title: 'Procesando pago...',
            imageUrl: 'https://www.xtrategik.com/blog_xtrategik/wp-content/uploads/2020/10/opciones-de-pasarelas-de-pago-en-colombia-XtrategiK-Blog.gif',
            imageWidth: 400,
            imageHeight: 300,
            timer: 60000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    }, 500);
})