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
            
           chartArea: {'width': '85%', 'height': '80%'},

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
  
           chartArea: {'width': '85%', 'height': '80%'},

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
         
           chartArea: {'width': '85%', 'height': '80%'},
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_divf'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      <div class="col-md-8 col-md-offset-2">
<a href="<?php echo $wr;?>reports" class="btn btn-default">Back to Reports</a>
      </div><br><br>
        <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default high">
                    <div class="panel-heading"><h4>All Customers According to Age</h4></div>
                    <div class="panel-body" id="chart_div">
                     
                      </div>
                      </div>
         </div>

             <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default high">
                    <div class="panel-heading"><h4>All Male Customers According to Age</h4></div>
                    <div class="panel-body" id="chart_divm">
                     
                      </div>
                      </div>
         </div>

             <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default high">
                    <div class="panel-heading"><h4>All Female Customers According to Age</h4></div>
                    <div class="panel-body" id="chart_divf">
                     
                      </div>
                      </div>
         </div>

   
  </body>