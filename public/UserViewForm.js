const uploadContainer = document.querySelector('.upload-container');
const fileInput = document.getElementById('file-input');

uploadContainer.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadContainer.classList.add('highlight');
});

uploadContainer.addEventListener('dragleave', () => {
    uploadContainer.classList.remove('highlight');
});

uploadContainer.addEventListener('drop', (e) => {
    e.preventDefault();
    uploadContainer.classList.remove('highlight');

    const files = e.dataTransfer.files;

    if (files.length > 0 && (files[0].type === 'image/png' || files[0].type === 'image/jpeg' || files[0].type === "image/jpg")) {
        displayFile(files[0]);
    }
});

fileInput.addEventListener('change', (e) => {
    const file = e.target.files[0];

    if (file.type === 'image/png' || file.type === 'image/jpeg' || file[0].type === "image/jpg") {
        displayFile(file);
    }
});

function displayFile(file) {
    const uploadText = document.querySelector('.upload-text');
    const fileDisplay = document.createElement('p');
    fileDisplay.textContent = `Selected file: ${file.name}`;

    if (uploadText.children.length > 1) {
        uploadText.removeChild(uploadText.lastChild);
    }

    uploadText.appendChild(fileDisplay);
}