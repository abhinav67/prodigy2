
<?php
//pr($lastBill);
//pr($expectedccustomers);
//pr(date('M-D-y'));
//pr(day())
if(!isset($_SESSION['modal'])) {
 echo " <script type=\"text/javascript\">
      $(window).load(function(){
          $('#').modal('show');
      });
  </script>";
}

// visited already. get out
$_SESSION['modal']=null;

$i=0;
$test=array();
foreach($wee as $ra){
$newdate= date('M-Y');
 $test[$i] = array($date[$ra],$avgg[$ra],$exsum[$ra]);

$i++;
}
//pr($test);


//$summ


?>

<html>
  <head>


<script>

    google.load("visualization", "1", {packages:["corechart"]});

               google.setOnLoadCallback(drawChart);
               google.setOnLoadCallback(drawChart1);


               function drawChart() {
                 var data = google.visualization.arrayToDataTable([
                   ['Date', 'Avg.Customers','Expected'],

                   <?php
                   $l=0;
                                                           foreach ($test as $t)
                                                 {
                                                
                                              
                                                 echo "['{$mf[$t[0]]}', {$t[1]},{$t[2]}],";
                                                
                                  }
                                                  ?>

                 ]);

                 var options = {
                  
                   pointSize:10,
                   chartArea: {'width': '91%', 'height': '80%'},
                   legend:'top',
                   lineWidth:3

                 };

                 var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                 chart.draw(data, options);
               }

               
 </script>
</head>
  <body>
    <div class="col-md-2">
      <div class="actions">
        <div class="panel panel-default">
          <div class="panel-heading">Actions</div>
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked">
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Weekly Attendance'), array('controller' =>'Dashboards','action' => 'chart1'), array('escape' => false)); ?></li>
               <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Monthly Attendance'), array('action' => 'chart1'), array('escape' => false)); ?></li>
              </ul>
            </div><!-- end body -->
        </div><!-- end panel -->
      </div><!-- end actions -->
    </div><!-- end col md 3 -->
    <div class ="col-md-offset-3"id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
       
    