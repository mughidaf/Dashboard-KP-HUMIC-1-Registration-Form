const teksButton = document.getElementById("tambah-teks");
const choiceButton = document.getElementById("tambah-pilihan");
const fileButton = document.getElementById("tambah-file");
const signButton = document.getElementById("tambah-ttd");
const tombol = document.querySelector(".dropdown");
const tempat = document.querySelector(".form-container");


//cekin
fileInput.addEventListener("change", (e) => {
    const file = e.target.files[0];
    if (file) {
        displayFile(file);
        if (file.type.startsWith("image/")) {
            displayImagePreview(file);
        }
    }
});

//funtion
// function addText() {
//     var x = document.getElementById("add-text");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// }

// function addFile() {
//     var x = document.getElementById("add-file");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// }

// function addSign() {
//     var x = document.getElementById("add-Sign");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// }

// function addTtd() {
//     var x = document.getElementById("add-ttd");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// }
const previewButton = document.getElementById("btn-txt");
const addTextContainer = document.getElementById("add-text");
const addFileContainer = document.getElementById("add-file");
const addChoiceContainer = document.getElementById("add-choice");
const addTtdContainer = document.getElementById("add-ttd");

function previewForm() {
    const previewData = {
        text: addTextContainer.querySelector('input[type="text"]').value,
        file: addFileContainer.querySelector('input[type="file"]').value,
        choice: addChoiceContainer.querySelector('input[type="radio"]:checked').value,
        ttd: addTtdContainer.querySelector('textarea').value,
    };

    // You can now use the 'previewData' object to display the preview data
    console.log(previewData);
    // You can also display this data in a popup or a separate preview area on your page.
}
//new approach
// function addText() {
//     var template = document.getElementById("add-text");
//     var clone = template.cloneNode(true);
//     clone.style.display = "block";

//     var parent = document.getElementById("teks-content");
//     parent.appendChild(clone);

//     // var removeButton = document.querySelector(".remove");
//     // removeButton.addEventListener("click", function() {
//     //     var parentGroup = removeButton.closest(".add-text");
//     //     if (parentGroup) {
//     //         parentGroup.remove();
//     //     }
//     //     clone.remove();
//     // });

//     var removeButton = document.createElement("button");
//     removeButton.textContent = "Remove";
//     removeButton.style.marginTop = "10px";
//     removeButton.addEventListener("click", function() {
//         clone.remove();
//     });

//     clone.appendChild(removeButton);
// }



// function addFile() {
//     var template = document.getElementById("add-file");
//     var clone = template.cloneNode(true);

//     //ubah display dari none ke block
//     clone.style.display = "block";

//     //append ke parent
//     var parent = document.getElementById("teks-content");
//     parent.appendChild(clone);

//     var removeButton = document.createElement("button");
//     removeButton.textContent = "Remove";
//     removeButton.style.marginTop = "10px";
//     removeButton.addEventListener("click", function() {
//         clone.remove();
//     });

//     clone.appendChild(removeButton);

// }

// function addChoice() {
//     var template = document.getElementById("add-choice");
//     var clone = template.cloneNode(true);

//     //ubah display dari none ke block
//     clone.style.display = "block";

//     //append ke parent
//     var parent = document.getElementById("teks-content");
//     parent.appendChild(clone);

//     var removeButton = document.createElement("button");
//     removeButton.textContent = "Remove";
//     removeButton.style.marginTop = "10px";
//     removeButton.addEventListener("click", function() {
//         clone.remove();
//     });

//     clone.appendChild(removeButton);
// }

// function addTtd() {
//     var template = document.getElementById("add-ttd");
//     var clone = template.cloneNode(true);

//     //ubah display dari none ke block
//     clone.style.display = "block";

//     //append ke parent
//     var parent = document.getElementById("teks-content");
//     parent.appendChild(clone);

//     var removeButton = document.createElement("button");
//     removeButton.textContent = "Remove";
//     removeButton.style.marginTop = "10px";
//     removeButton.addEventListener("click", function() {
//         clone.remove();
//     });

//     clone.appendChild(removeButton);
// }

// preview file apa yang di upload dengan <p>
function displayFile(file) {
    const uploadText = document.querySelector(".input-judul");
    const fileDisplay = document.createElement("p");
    fileDisplay.textContent = `Selected file is : ${file.name}`;

    if (uploadText.children.length > 1) {
        uploadText.removeChild(uploadText.lastChild);
    }

    uploadText.appendChild(fileDisplay);
}
// image preview
function displayImagePreview(file) {
    const imagePreview = document.getElementById("imagePreview");

    const reader = new FileReader();

    reader.onload = function(e) {
        imagePreview.src = e.target.result;
    };
    reader.readAsDataURL(file);
}

let counter = 0;

teksButton.addEventListener("click", function() {
    counter++;
    // Buat elemen div dengan class "question-group"
    const questionGroup = document.createElement("div");
    questionGroup.classList.add("question-group");
    questionGroup.style.paddingBottom = "5px";

    // Buat elemen input pertanyaan baru
    const questionInput = document.createElement("input");
    questionInput.classList.add("text_question");
    questionInput.placeholder = "Pertanyaan";
    questionInput.type = "text";
    questionInput.name = "pertanyaan[]";
    questionInput.required = true;

    // Buat elemen input rujukan baru (hidden input)
    const hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "rujukan[]";
    hiddenInput.value = counter;

    //Buat elemen input tipe (hidden)
    const hiddenTipe = document.createElement("input");
    hiddenTipe.type = "hidden";
    hiddenTipe.name = "tipe[]";
    hiddenTipe.value = "teks";

    // Buat elemen input jawaban baru
    const answerInput = document.createElement("input");
    answerInput.classList.add("jawaban");
    answerInput.placeholder = "Jawaban";
    answerInput.type = "text";
    answerInput.name = "jawaban";
    answerInput.disabled = true;

    //input ininput
    const textInput = document.createElement("input");
    textInput.id = "txt";
    textInput.setAttribute("oninput", "textdata()");
    textInput.type = "text";

    // Buat elemen tombol "Remove"
    const removeButton = document.createElement("button");
    removeButton.classList.add("remove");
    removeButton.setAttribute("type", "button");
    removeButton.textContent = "Remove";

    // Tambahkan elemen-elemen ke dalam grup pertanyaan
    questionGroup.appendChild(questionInput);
    questionGroup.appendChild(hiddenInput);
    questionGroup.appendChild(hiddenTipe);
    questionGroup.appendChild(answerInput);
    questionGroup.appendChild(removeButton);

    // Tambahkan grup pertanyaan ke dalam container sebelum tombol
    tempat.insertBefore(questionGroup, tombol);

    // Menambahkan event listener untuk tombol "Remove"
    removeButton.addEventListener("click", function(e) {
        const parentGroup = e.target.closest(".question-group");
        if (parentGroup) {
            parentGroup.remove();
        }
    });
});

choiceButton.addEventListener("click", function() {
    counter++;
    // Buat elemen div dengan class "question-group"
    const questionGroup = document.createElement("div");
    questionGroup.classList.add("question-group");
    questionGroup.style.paddingBottom = "15px";

    // Buat elemen input pertanyaan baru
    const questionInput = document.createElement("input");
    questionInput.classList.add("text_question");
    questionInput.placeholder = "Pertanyaan";
    questionInput.type = "text";
    questionInput.name = "pertanyaan[]";
    questionInput.required = true;

    // Buat elemen input rujukan baru (hidden input)
    const hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "rujukan[]";
    hiddenInput.value = counter;

    //Buat elemen input tipe (hidden)
    const hiddenTipe = document.createElement("input");
    hiddenTipe.type = "hidden";
    hiddenTipe.name = "tipe[]";
    hiddenTipe.value = "choice";

    // Buat elemen div "opsi-jawaban"
    const opsiJawaban = document.createElement("div");
    opsiJawaban.classList.add("opsi-jawaban");

    // Buat elemen span "custom-checkbox"
    const customCheckbox = document.createElement("span");
    customCheckbox.classList.add("custom-checkbox");

    // Buat elemen input tanda opsi (hidden input)
    const tandaOpsiInput = document.createElement("input");
    tandaOpsiInput.type = "hidden";
    tandaOpsiInput.name = "tanda-opsi[]";
    tandaOpsiInput.value = counter;

    // Buat elemen input opsi jawaban
    const opsiInput = document.createElement("input");
    opsiInput.placeholder = "Option";
    opsiInput.type = "text";
    opsiInput.classList.add("jawaban");
    opsiInput.name = "opsi[]";

    // // Buat div
    const tombolOpsiContainer = document.createElement("div");
    tombolOpsiContainer.classList.add("tombol-opsi");
    tombolOpsiContainer.classList.add("mb-2");

    // Buat tombol "Tambah Opsi"
    const tambahOpsiButton = document.createElement("button");
    tambahOpsiButton.type = "button";
    tambahOpsiButton.classList.add("tambah-opsi");
    tambahOpsiButton.classList.add("me-2");
    tambahOpsiButton.textContent = "+";

    // Buat tombol "Hapus Opsi"
    const hapusOpsiButton = document.createElement("button");
    hapusOpsiButton.type = "button";
    hapusOpsiButton.classList.add("hapus-opsi");
    hapusOpsiButton.classList.add("ms-2");
    hapusOpsiButton.textContent = "x";

    // tombolOpsiContainer.appendChild(tambahOpsiButton);
    // tombolOpsiContainer.appendChild(hapusOpsiButton);

    // Buat tombol "Remove"
    const removeButton = document.createElement("button");
    removeButton.type = "button";
    removeButton.textContent = "Remove";

    // Tambahkan elemen-elemen ke dalam div "opsi-jawaban"
    opsiJawaban.appendChild(customCheckbox);
    opsiJawaban.appendChild(tandaOpsiInput);
    opsiJawaban.appendChild(opsiInput);
    opsiJawaban.appendChild(hapusOpsiButton);

    tombolOpsiContainer.appendChild(tambahOpsiButton);

    // Tambahkan elemen-elemen ke dalam grup pertanyaan
    questionGroup.appendChild(questionInput);
    questionGroup.appendChild(hiddenInput);
    questionGroup.appendChild(hiddenTipe);
    questionGroup.appendChild(opsiJawaban);
    questionGroup.appendChild(tombolOpsiContainer);
    questionGroup.appendChild(removeButton);

    // Tambahkan grup pertanyaan ke dalam container sebelum tombol
    tempat.insertBefore(questionGroup, tombol);

    // Menambahkan event listener untuk tombol "Remove"
    removeButton.addEventListener("click", function(e) {
        const parentGroup = e.target.closest(".question-group");
        if (parentGroup) {
            parentGroup.remove();
        }
    });

    const ngapus = document.querySelectorAll(".hapus-opsi");
    ngapus.forEach(function(el) {
        el.addEventListener("click", function(e) {
            const dihapus = e.target.parentNode;
            e.target.parentElement.parentElement.removeChild(dihapus);
        });
    });

    const nambah = document.querySelectorAll(".tambah-opsi");
    nambah.forEach(function(el) {
        el.addEventListener("click", function(e) {
            const tempatnya = e.target.parentNode;
            const bungkus = e.target.parentElement.parentNode;
            const isiVal = e.target.parentElement.previousSibling.querySelector(
                "input[type='hidden']"
            ).value;

            // Buat elemen div untuk opsi jawaban
            const opsiJawabanDiv = document.createElement("div");
            opsiJawabanDiv.classList.add("opsi-jawaban");

            // Buat elemen span "custom-checkbox"
            const customCheckbox = document.createElement("span");
            customCheckbox.classList.add("custom-checkbox");
            opsiJawabanDiv.appendChild(customCheckbox);

            // Buat elemen input tanda opsi (hidden input)
            const tandaOpsiInput = document.createElement("input");
            tandaOpsiInput.type = "hidden";
            tandaOpsiInput.name = "tanda-opsi[]";
            tandaOpsiInput.value = isiVal;
            opsiJawabanDiv.appendChild(tandaOpsiInput);

            // Buat elemen input opsi jawaban
            const opsiInput = document.createElement("input");
            opsiInput.placeholder = "Option";
            opsiInput.type = "text";
            opsiInput.classList.add("jawaban");
            opsiInput.name = "opsi[]";
            opsiJawabanDiv.appendChild(opsiInput);

            // Buat tombol "Hapus Opsi"
            const hapusOpsiButton = document.createElement("button");
            hapusOpsiButton.type = "button";
            hapusOpsiButton.classList.add("hapus-opsi", "ms-2");
            hapusOpsiButton.textContent = "x";
            opsiJawabanDiv.appendChild(hapusOpsiButton);

            bungkus.insertBefore(opsiJawabanDiv, tempatnya);

            const ngapus = document.querySelectorAll(".hapus-opsi");
            ngapus.forEach(function(el) {
                el.addEventListener("click", function(e) {
                    const dihapus = e.target.parentNode;
                    e.target.parentElement.parentElement.removeChild(dihapus);
                });
            });
        });
    });
});

fileButton.addEventListener("click", function() {
    counter++;
    // Buat elemen div dengan class "question-group"
    const questionGroup = document.createElement("div");
    questionGroup.classList.add("question-group");
    questionGroup.style.paddingBottom = "15px";

    // Buat elemen input pertanyaan baru
    const questionInput = document.createElement("input");
    questionInput.classList.add("text_question");
    questionInput.placeholder = "Pertanyaan";
    questionInput.type = "text";
    questionInput.name = "pertanyaan[]";
    questionInput.required = true;

    // Buat elemen input rujukan baru (hidden input)
    const hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "rujukan[]";
    hiddenInput.value = counter;

    //Buat elemen input tipe (hidden)
    const hiddenTipe = document.createElement("input");
    hiddenTipe.type = "hidden";
    hiddenTipe.name = "tipe[]";
    hiddenTipe.value = "file";

    // Buat elemen div untuk tombol "Upload file"
    const uploadDiv = document.createElement("div");
    const uploadButton = document.createElement("button");
    uploadButton.classList.add("upload-file");
    uploadButton.textContent = "Upload file";
    uploadDiv.appendChild(uploadButton);

    // Buat tombol "Remove"
    const removeButton = document.createElement("button");
    removeButton.type = "button";
    removeButton.style.marginTop = "5px";
    removeButton.textContent = "Remove";

    // Tambahkan elemen-elemen ke dalam grup pertanyaan
    questionGroup.appendChild(questionInput);
    questionGroup.appendChild(hiddenInput);
    questionGroup.appendChild(hiddenTipe);
    questionGroup.appendChild(uploadDiv);
    questionGroup.appendChild(removeButton);

    // Tambahkan grup pertanyaan ke dalam container sebelum tombol
    tempat.insertBefore(questionGroup, tombol);

    // Menambahkan event listener untuk tombol "Remove"
    removeButton.addEventListener("click", function(e) {
        const parentGroup = e.target.closest(".question-group");
        if (parentGroup) {
            parentGroup.remove();
        }
    });
});

signButton.addEventListener("click", function() {
    counter++;
    // Buat elemen div dengan class "question-group"
    const questionGroup = document.createElement("div");
    questionGroup.classList.add("question-group");
    questionGroup.style.paddingBottom = "15px";

    // Buat elemen input pertanyaan baru
    const questionInput = document.createElement("input");
    questionInput.classList.add("text_question");
    questionInput.placeholder = "Pertanyaan";
    questionInput.type = "text";
    questionInput.name = "pertanyaan[]";
    questionInput.required = true;

    // Buat elemen input rujukan baru (hidden input)
    const hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "rujukan[]";
    hiddenInput.value = counter;

    //Buat elemen input tipe (hidden)
    const hiddenTipe = document.createElement("input");
    hiddenTipe.type = "hidden";
    hiddenTipe.name = "tipe[]";
    hiddenTipe.value = "ttd";

    // Buat elemen div untuk textarea
    const textareaDiv = document.createElement("div");
    const textarea = document.createElement("textarea");
    textarea.rows = "1";
    textarea.cols = "30";
    textarea.disabled = true;
    textareaDiv.appendChild(textarea);

    // Buat tombol "Remove"
    const removeButton = document.createElement("button");
    removeButton.type = "button";
    removeButton.style.marginTop = "5px";
    removeButton.textContent = "Remove";

    // Tambahkan elemen-elemen ke dalam grup pertanyaan
    questionGroup.appendChild(questionInput);
    questionGroup.appendChild(hiddenInput);
    questionGroup.appendChild(hiddenTipe);
    questionGroup.appendChild(textareaDiv);
    questionGroup.appendChild(removeButton);

    // Tambahkan grup pertanyaan ke dalam container sebelum tombol
    tempat.insertBefore(questionGroup, tombol);

    // Menambahkan event listener untuk tombol "Remove"
    removeButton.addEventListener("click", function(e) {
        const parentGroup = e.target.closest(".question-group");
        if (parentGroup) {
            parentGroup.remove();
        }
    });


});