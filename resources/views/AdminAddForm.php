<!DOCTYPE html>
<html>

<head>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/AdminAddForm.css">
</head>

<body>
    <div id="formContainerWrapper">

        <!--Ini buat kotak utamanya -->
        <div class="form-template form-container" data-type="radio">
            <!--ini buat kotak yang ada didalam kotak utama-->
            <div class="question-title">
                <input type="text" class="option-text" placeholder="Enter Your question here">
            </div>
            <div class="question-card">
                <!-- ini isian box nya -->
                <div class="option-container">
                    <input type="radio" class="option-input">
                    <input type="text" class="option-text" placeholder="Enter option name" name="option[]">
                    <button class="delete-question">remove</button>
                </div>
            </div>

            <!-- ini tombol add question -->
            <div class="Add-container">
                <button type="button" class="button add-question-button">
                    <span class="button__text">Add Question</span>
                    <span class="button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg">
                            <line y2="19" y1="5" x2="12" x1="12"></line>
                            <line y2="12" y1="12" x2="19" x1="5"></line>
                        </svg>
                    </span>
                </button>
                <button class="Prototype">Add</button>
            </div>

            <!-- Ini buat switch required nya-->
            <div class="footer-question">
                <label class="toggle">
                    <input class="toggle-checkbox" type="checkbox" name="Required[]">
                    <div class="toggle-switch"></div>
                    <span class="toggle-label">Required</span>
                </label>
            </div>
            <button class="remove-button">Remove</button>
        </div>

        <!-- ini duplikat yang atas buat khusus text fields aja-->
        <div class="form-template form-container-1" data-type="text">
            <div class="question-title">
                <input type="text" class="option-text" placeholder="Enter Your question here">
            </div>
            <div class="question-card">
                <div class="option-container">
                    <input type="text" class="option-text" placeholder="Enter Your Answer" name="text[]">
                    <button class="delete-question">remove</button>
                </div>
            </div>
            <div class="Add-container">
                <button type="button" class="button add-question-button">
                    <span class="button__text">Add Question</span>
                    <span class="button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg">
                            <line y2="19" y1="5" x2="12" x1="12"></line>
                            <line y2="12" y1="12" x2="19" x1="5"></line>
                        </svg>
                    </span>
                </button>
                <button class="Prototype">Add</button>
            </div>
            <label class="toggle">
                <input class="toggle-checkbox" type="checkbox" name="Required[]">
                <div class="toggle-switch"></div>
                <span class="toggle-label">Required</span>
            </label>
            <button class="remove-button">Remove</button>
        </div>
    </div>

    <div class="add-button">
        <div class="button-container">
            <div class="dropdown">
                <button class="button-50" id="addNewButton" role="button">+ Add New</button>
                <div class="dropdown-content">
                    <button class="buttonss" id="radioButton"><a href="#" data-type="radio">Radio</a></button>
                    <button class="buttonss" id="textFieldButton"><a href="#" data-type="text">Text Field</a></button>
                </div>
            </div>
        </div>
    </div>





    <script src="/AdminAddForm.js"></script>
</body>

</html>