const uploadContainer = document.querySelector(".upload-container");
const fileInput = document.getElementById("file-input");
const signatureCanvas = document.getElementById("signatureCanvas");
const clearSignatureBtn = document.getElementById("clearSignatureBtn");
const signatureCtx = signatureCanvas.getContext("2d");
let isDrawing = false;

uploadContainer.addEventListener("dragover", (e) => {
    e.preventDefault();
    uploadContainer.classList.add("highlight");
});

uploadContainer.addEventListener("dragleave", () => {
    uploadContainer.classList.remove("highlight");
});

uploadContainer.addEventListener("drop", (e) => {
    e.preventDefault();
    uploadContainer.classList.remove("highlight");

    const files = e.dataTransfer.files;

    if (
        files.length > 0 &&
        (files[0].type === "image/png" ||
            files[0].type === "image/jpeg" ||
            files[0].type === "image/jpg")
    ) {
        displayFile(files[0]);
    }
});

fileInput.addEventListener("change", (e) => {
    const file = e.target.files[0];

    if (
        file.type === "image/png" ||
        file.type === "image/jpeg" ||
        file[0].type === "image/jpg"
    ) {
        displayFile(file);
    }
});

function displayFile(file) {
    const uploadText = document.querySelector(".upload-text");
    const fileDisplay = document.createElement("p");
    fileDisplay.textContent = `Selected file: ${file.name}`;

    if (uploadText.children.length > 1) {
        uploadText.removeChild(uploadText.lastChild);
    }

    uploadText.appendChild(fileDisplay);
}

//ttd

function startPosition(e) {
    isDrawing = true;
    draw(e);
}

function endPosition() {
    isDrawing = false;
    signatureCtx.beginPath();
}

function draw(e) {
    if (!isDrawing) return;

    const rect = signatureCanvas.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    signatureCtx.lineWidth = 2;
    signatureCtx.lineCap = "round";
    signatureCtx.strokeStyle = "black";

    signatureCtx.lineTo(x, y);
    signatureCtx.stroke();
    signatureCtx.beginPath();
    signatureCtx.moveTo(x, y);
}

signatureCanvas.addEventListener("mousedown", startPosition);
signatureCanvas.addEventListener("mouseup", endPosition);
signatureCanvas.addEventListener("mousemove", draw);
clearSignatureBtn.addEventListener("click", () => {
    signatureCtx.clearRect(0, 0, signatureCanvas.width, signatureCanvas.height);
});
