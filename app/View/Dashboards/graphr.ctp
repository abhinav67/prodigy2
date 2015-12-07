<?php
//pr($age);
?>

 <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Customer', 'Age'],


          <?php
foreach ($age as $key => $value) {
 echo "['".$key."',".$value."],";
}

         ?> 
         ]);

        var options = {
          title: 'Customers Age All',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

     <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Customer', 'Age'],


          <?php
foreach ($ageM as $key => $value) {
 echo "['".$key."',".$value."],";
}

         ?> 
         ]);

        var options = {
          title: 'Customers Age Male',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_divm'));
        chart.draw(data, options);
      }
    </script>

     <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Customer', 'Age'],


          <?php
foreach ($ageF as $key => $value) {
 echo "['".$key."',".$value."],";
}

         ?> 
         ]);

        var options = {
       title: 'Customers Age Female',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_divf'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
    <div id="chart_divm" style="width: 900px; height: 500px;"></div>
    <div id="chart_divf" style="width: 900px; height: 500px;"></div>
  </body>