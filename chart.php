<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <style media="screen">
    #chart-container {
        width: 50%;
        height: auto;
    }
    </style>
  </head>
  <body>
    <div id="chart-container">
        <canvas id="graphCanvas" height="300" width="500"></canvas>
    </div>
    <script>
        $(document).ready(function () {
            showGraph();
        });
        function showGraph()
        {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].design);
                        marks.push(data[i].stock);
                    }
                    var chartdata = {
                        labels: name,
                        datasets: [{
                                label: 'Produit en stock',
                                backgroundColor:'#abcdef',
                                borderColor: 'blue',
                                hoverBackgroundColor: '#ffffff',
                                hoverBorderColor: 'red',
                                data: marks
                            }]
                    };
                    var graphTarget = $("#graphCanvas");
                    window.pie = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
            });
        }
    </script>
  </body>
</html>
