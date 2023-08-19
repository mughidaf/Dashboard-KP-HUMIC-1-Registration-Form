var hasil = 1233;

function updateResponsesCounts() {
    var h1Element = document.getElementById("responsessCount");

    idFormatter(
        h1Element.textContent = "Number of responses : " + hasil
    );
}

window.onload = function() {
    updateResponsesCounts();
};
google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    // Set Data
    const data = google.visualization.arrayToDataTable([
        ['Pilihan 1', 24],
        ['Pilihan 2', 55],
        ['Pilihan 3', 49],
    ]);

    // Set Options
    const options = {
        title: 'World Wide Wine Production'
    };

    // Draw
    const chart = new google.visualization.BarChart(document.getElementById('myChart'));
    chart.draw(data, options);

}