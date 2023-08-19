document.addEventListener("DOMContentLoaded", function() {
    const addRadio = document.getElementById("radioButton");
    const addText = document.getElementById("textFieldButton");
    const formContainerWrapper = document.getElementById("formContainerWrapper");

    //ini buat opsi pertanyaan
    formContainerWrapper.addEventListener("click", function(event) {
        if (event.target.classList.contains("Prototype")) {
            const selectedType = event.target.closest(".form-container, .form-container-1").getAttribute("data-type");
            const optionContainer = event.target.closest(".form-container, .form-container-1").querySelector(".question-card");
            const newOption = optionContainer.cloneNode(true);

            optionContainer.parentElement.insertBefore(newOption, optionContainer.nextSibling);
        }
    });

    //ini buat button ngapus
    formContainerWrapper.addEventListener("click", function(event) {
        if (event.target.classList.contains("remove-button")) {
            const formContainer = event.target.closest(".form-container, .form-container-1");
            if (formContainer) {
                formContainer.remove();
            }
        }
    });

    //ini buat hapus opsi nya
    formContainerWrapper.addEventListener("click", function(event) {
        if (event.target.classList.contains("delete-question")) {
            const formContainer = event.target.closest(".question-card");
            if (formContainer) {
                formContainer.remove();
            }
        }
    });

    //ini buat tiap neken option radio maka akan muncul radio
    addRadio.addEventListener("click", function(event) {
        event.preventDefault();

        const selectedType = document.querySelector(".dropdown-content a.active").getAttribute("data-type");
        const formTemplate = document.querySelector(`.form-template[data-type="${selectedType}"]`);
        const newForm = formTemplate.cloneNode(true);

        newForm.classList.remove("form-template");
        //ganti display ssebelumnya dari hidden ke block dan dibikin aktif
        newForm.style.display = "block";
        newForm.classList.add("active");

        formContainerWrapper.appendChild(newForm);
    });

    //ini buat tiap neken option radio maka akan muncul text
    addText.addEventListener("click", function(event) {
        event.preventDefault();

        const selectedType = document.querySelector(".dropdown-content a.active").getAttribute("data-type");
        const formTemplate = document.querySelector(`.form-template[data-type="${selectedType}"]`);
        const newForm = formTemplate.cloneNode(true);

        newForm.classList.remove("form-template");
        //ganti display ssebelumnya dari hidden ke block dan dibikin aktif
        newForm.style.display = "block";
        newForm.classList.add("active");

        formContainerWrapper.appendChild(newForm);
    });

    //gabungin radio n text button dan jadiin event listener
    const radioButtons = document.querySelectorAll("[data-type='radio']");
    const textFieldButtons = document.querySelectorAll("[data-type='text']");

    //iterate radio button
    radioButtons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            toggleButton(button);
        });
    });

    //iterate text button
    textFieldButtons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            toggleButton(button);
        });
    });

    //buat ngaktivin state dari button  radio n text
    function toggleButton(button) {
        radioButtons.forEach(rb => rb.classList.remove("active"));
        textFieldButtons.forEach(tb => tb.classList.remove("active"));
        button.classList.add("active");
    }
});