//export berdasarkan data type
var $table = $('#table');

$(function() {
    $('#toolbar').find('select').change(function() {
        $table.bootstrapTable('refreshOptions', {
            exportDataType: $(this).val()
        });
    });
})

var trBoldBlue = $("table");

$(trBoldBlue).on("click", "tr", "th", function() {
    $(this).toggleClass("bold-blue");
});

//total data

function idFormatter(data) {
    hasil = data.length
    return 'Total Data : ' + hasil;
}

//Buat ngecek value responses
function updateResponsesCount() {
    var h1Element = document.getElementById("responsesCount");
    h1Element.textContent = "Number of responses : " + hasil;
}