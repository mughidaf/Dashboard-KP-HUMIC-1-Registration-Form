<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/ResponsePage.css">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div class="form-container">
        @foreach ($form->Questions as $tanya)
        <div class="question-card">
            <div class="option-container">
                <div class="question-title">
                    <!--gaudah dikasih nomor lagi udah di counter otomatis-->
                    <p>. {{$tanya->question}}</p>
                    <a href="/Details/{{$tanya->id}}"><u>Click to see the details</u></a>
                    <div class="Number-Respond">
                        <h1 id="responsessCount">Number of responses : {{count($tanya->Answers)}} </h1>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <script>
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Choice", "Density", { role: "style" } ],
        ["Pilihan 1", 8.94, "black"],
        ["Pilihan 2", 10.49, "pink"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "The question",
        height: 400,
        bar: {groupWidth: "10%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("myChart"));
      chart.draw(view, options);
  }
    </script>
    
    <script src="/ResponsePage.js"></script>
    <script src="/MoreOption.js"></script>
    <script type="text/javascript" src="/ResponsePage.js"></script>
    <script type="text/javascript" src="/MoreOption.js"></script>
</body>
</html>