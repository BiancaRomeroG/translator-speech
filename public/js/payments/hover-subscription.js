function inElement(payment_name) {
    const payment_array = document.querySelectorAll('#item_payment')
    payment_array.forEach(payment => {
        if (payment.value == payment_name) {
            const li_item = document.getElementById('li-item-' + payment.value)
            li_item.classList.add('bg-blue-200')
        }

    });
}

function outElement(payment_name) {
    const payment_array = document.querySelectorAll('#item_payment')
    payment_array.forEach(payment => {
        if (payment.value == payment_name) {
            const li_item = document.getElementById('li-item-' + payment.value)
            li_item.classList.remove('bg-blue-200')
        }

    });
}

function inElement2(payment_name) {
    const payment_array = document.querySelectorAll('#item_payment2')
    payment_array.forEach(payment => {
        if (payment.value == payment_name) {
            const li_item = document.getElementById('li-item2-' + payment.value)
            li_item.classList.add('bg-blue-200')
        }

    });
}

function outElement2(payment_name) {
    const payment_array = document.querySelectorAll('#item_payment2')
    payment_array.forEach(payment => {
        if (payment.value == payment_name) {
            const li_item = document.getElementById('li-item2-' + payment.value)
            li_item.classList.remove('bg-blue-200')
        }

    });
}