const todos = document.querySelectorAll(".todo");
const allStatus = document.querySelectorAll(".status");
const addBtns = document.querySelectorAll("[data-target-modal]");
const closeModals = document.querySelectorAll(".close-modal");
const overlay = document.getElementById("overlay");
const todoInput = document.getElementById("todo_input");
const todoSubmit = document.getElementById("todo_submit");
const bannerUploadInput = document.getElementById('bannerUploadInput');
const uploadBannerBtn = document.getElementById('uploadBannerBtn');
const uploadedBannerImage = document.getElementById('uploadedBannerImage');


let draggableTodo = null;

uploadBannerBtn.addEventListener('click', () => {
    if (bannerUploadInput.files.length > 0) {
        const bannerFile = bannerUploadInput.files[0];
        const bannerUrl = URL.createObjectURL(bannerFile);
        uploadedBannerImage.src = bannerUrl;
        uploadedBannerImage.style.display = 'block';
    }
});

function dragStart() {
    draggableTodo = this;
    setTimeout(() => {
        this.style.display = "none";
    }, 0);
}

function dragEnd() {
    draggableTodo = null;
    setTimeout(() => {
        this.style.display = "block";
    }, 0);
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter() {
    this.style.border = "1px dashed #ccc";
}

function dragLeave() {
    this.style.border = "none";
}

function dragDrop() {
    this.style.border = "none";
    this.appendChild(draggableTodo);
}

todos.forEach((todo) => {
    todo.addEventListener("dragstart", dragStart);
    todo.addEventListener("dragend", dragEnd);
});

allStatus.forEach((status) => {
    status.addEventListener("dragover", dragOver);
    status.addEventListener("dragenter", dragEnter);
    status.addEventListener("dragleave", dragLeave);
    status.addEventListener("drop", dragDrop);
});


function openModal(targetModal) {
    document.querySelector(targetModal).classList.add("active");
    overlay.classList.add("active");
}

function closeModal(modal) {
    modal.classList.remove("active");
    overlay.classList.remove("active");
}

addBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        openModal(btn.dataset.targetModal);
    });
});

closeModals.forEach((btn) => {
    btn.addEventListener("click", () => {
        const modal = btn.closest(".modal");
        closeModal(modal);
    });
});

window.onclick = (event) => {
    if (event.target === overlay) {
        const modals = document.querySelectorAll(".modal");
        modals.forEach((modal) => closeModal(modal));
    }
};


function createTodo() {
    const todoText = todoInput.value.trim();
    if (todoText === "") return;

    const todoDiv = document.createElement("div");
    todoDiv.classList.add("todo");
    todoDiv.setAttribute("draggable", "true");
    todoDiv.innerHTML = `
        ${todoText}
        <span class="close">&times;</span>
    `;

    const closeBtn = todoDiv.querySelector(".close");
    closeBtn.addEventListener("click", () => {
        todoDiv.style.display = "none";
    });

    todoDiv.addEventListener("dragstart", dragStart);
    todoDiv.addEventListener("dragend", dragEnd);

    document.getElementById("no_status").appendChild(todoDiv);
    todoInput.value = "";
    closeModal(document.getElementById("todo_form"));
}

todoSubmit.addEventListener("click", createTodo);

// TTD
const signatureCanvas = document.getElementById("signatureCanvas");
const clearSignatureBtn = document.getElementById("clearSignatureBtn");
const signatureCtx = signatureCanvas.getContext("2d");
let isDrawing = false;

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


document.getElementById("numRadioOptions").addEventListener("input", (event) => {
    const numRadioOptions = parseInt(event.target.value);
    const radioOptionsContainer = document.getElementById("radioOptionsContainer");
    const radioOptionsHtml = Array.from({ length: numRadioOptions }, (_, index) => `
        <input type="text" name="radioOption" placeholder="Option ${index + 1}" /><br>
    `).join("");
    radioOptionsContainer.innerHTML = radioOptionsHtml;
});

const enableTextFieldCheckbox = document.getElementById("enableTextField");
const textFieldContainer = document.getElementById("textFieldContainer");

enableTextFieldCheckbox.addEventListener("change", () => {
    textFieldContainer.style.display = enableTextFieldCheckbox.checked ? "block" : "none";
});

function createTodo() {
    const todoText = todoInput.value.trim();
    if (todoText === "") return;

    const numRadioOptions = parseInt(document.getElementById("numRadioOptions").value);

    const radioOptionsContainer = document.getElementById("radioOptionsContainer");
    const radioOptions = Array.from(radioOptionsContainer.querySelectorAll("input[name=radioOption]"));

    const todoDiv = document.createElement("div");
    todoDiv.classList.add("todo");
    todoDiv.setAttribute("draggable", "true");
    todoDiv.innerHTML = `
        ${todoText}
        <span class="close">&times;</span>
        <div>
            ${radioOptions.map((option) => `
                <input type="radio" name="radioOption" value="${option.value}" ${option.checked ? "checked" : ""} />
                ${option.value}<br>
            `).join("")}
        </div>
        ${enableTextFieldCheckbox.checked ? `
        <div>
            <input type="text" id="customTextField" placeholder="..." />
        </div>
        ` : ""}
    `;

    const closeBtn = todoDiv.querySelector(".close");
    closeBtn.addEventListener("click", () => {
        todoDiv.style.display = "none";
    });

    todoDiv.addEventListener("dragstart", dragStart);
    todoDiv.addEventListener("dragend", dragEnd);

    document.getElementById("no_status").appendChild(todoDiv);
    todoInput.value = "";
    document.getElementById("numRadioOptions").value = 0;
    radioOptionsContainer.innerHTML = "";
    closeModal(document.getElementById("todo_form"));
}

todoSubmit.addEventListener("click", createTodo);
