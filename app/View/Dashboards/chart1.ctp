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
foreach($raman as $ra)
{
$newDate= date("M-d-Y", strtotime($ra['CustomerAttendance']['date']));
$newShift= $ra['CustomerAttendance']['shift'];
$test[$i]= array($newDate,count($ra['Customer']));
$test[$i]['s']= $newShift;
$i++;
}
//pr($test);
$j=0;
//pr($expectedccustomers);



$t=0;
$test1=array();
foreach($raman1 as $ra)
{
$newDate1= date("M-d-Y", strtotime($ra['CustomerAttendance']['date']));
$newShift1= $ra['CustomerAttendance']['shift'];
$test1[$t]= array($newDate1,count($ra['Customer']));
$test1[$t]['s']= $newShift1;
$t++;
}
//pr($newShift1);
$d=0;
//pr($expectedccustomers);

?>

<html>
  <head>
 <script>

    google.load("visualization", "1", {packages:["corechart"]});

               google.setOnLoadCallback(drawChart);
               google.setOnLoadCallback(drawChart1);


               function drawChart() {
                 var data = google.visualization.arrayToDataTable([
                   ['Date', 'Customers','Expected'],

                   <?php
                   $l=0;
                                                           foreach ($test as $t)
                                                 {
                                                 $k=$j+1;
                                              
                                                 echo "['{$test[$j][0]}-{$test[$j]['s']}', {$test[$j][1]},{$expectedccustomers[$l]}],";
                                                 $j++;
                                                 $l++;
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

               function drawChart1() {
                 var data = google.visualization.arrayToDataTable([
                   ['Date', 'Customers','Expected'],

                   <?php
                   $p=0;
                                                           foreach ($test1 as $t)
                                                 {
                                                 $v=$d+1;
                                              
                                                 echo "['{$test1[$d][0]}-{$test1[$d]['s']}', {$test1[$d][1]},{$expectedccustomers1[$p]}],";
                                                 $d++;
                                                 $p++;
                                  }
                                                  ?>

                 ]);

                 var options = {
                  
                   pointSize:10,
                   chartArea: {'width': '91%', 'height': '80%'},
                   legend:'top',
                   lineWidth:3

                 };

                 var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
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
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Yearly Attendance'), array('controller' =>'CustomerAttendances','action' => 'chart2'), array('escape' => false)); ?></li>
               <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Monthly Attendance'), array('controller' =>'CustomerAttendances','action' => 'chart1'), array('escape' => false)); ?></li>
              </ul>
            </div><!-- end body -->
        </div><!-- end panel -->
      </div><!-- end actions -->
    </div><!-- end col md 3 -->
    <div class="col-md-10">
 
    <h2>Am Actual v/s Expected Attendance</h2>
    <div id='chart_div' style='width: 900px; height: 500px;'></div>
    <div><h2>Pm Actual v/s Expected Attendance</h2></div>
    <div id='chart_div1' style='width: 900px; height: 500px;'></div>
  </div>
  </body>



</html>