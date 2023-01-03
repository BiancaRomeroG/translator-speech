const dragArea = document.querySelector('.drag-area');
const dragText = document.querySelector('.header');
let button = document.querySelector('.buttonDrop');
let input = document.getElementById('img');

let file;

button.onclick = () => {
    input.click();
};

input.addEventListener('change', function () {
    file = this.files[0];
    console.log(input.value);
    dragArea.classList.add('active');
    displayFile();
});

dragArea.addEventListener('dragover', (event) => {
    event.preventDefault();
    dragText.textContent = 'Soltar imagen';
    dragArea.classList.add('active');
    // console.log('documento dentro');
});

dragArea.addEventListener('dragleave', () => {
    dragText.textContent = 'Arrastra la imagen al area';
    dragArea.classList.remove('active');
    // console.log('Archivo fuera del area');
});

dragArea.addEventListener('drop', (event) => {
    event.preventDefault();
    file = event.dataTransfer.files[0];
    displayFile();
});

function displayFile() {
    let fileType = file.type;
    // console.log(fileType);
    let validExtension = ['image/png', 'image/jpg', 'image/jpeg'];
    if (validExtension.includes(fileType)) {
        let fileReader = new FileReader();
        fileReader.onload = () => {
            let fileURL = fileReader.result;
            //console.log(fileURL);
            let tag = `<img src="${fileURL}" alt="">`;
            dragArea.innerHTML = tag;
            input.hidden = false;
            console.log(file);
            // input.value = `${fileReader.filename}`;
            console.log(input.value);
        }
        fileReader.readAsDataURL(file);
    } else {
        alert('El archivo seleccionado no es una imagen');
        dragArea.classList.remove('active');
    }
    // console.log('El archivo fue enviando en el area drag')
};