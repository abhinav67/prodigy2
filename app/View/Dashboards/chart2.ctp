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

$g=0;
foreach($raman as $ra)
{

$test1[$g]= count($ra['Customer']);
$g++;
}
//pr($test1);
$man = array_sum($test1);
$exp =array_sum($expectedccustomers);
//pr($man);
//pr($exp);
$avg = $man/$exp*100;
//pr($avg);
?>

<html>
  <head>
 <script>

    google.load("visualization", "1", {packages:["corechart"]});
               google.setOnLoadCallback(drawChart);
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

 </script>
 
  </head>

  <body>
    <div><h2>Actual v/s Expected Attendance</h2></div>
    <div id='chart_div' style='width: 900px; height: 500px;'></div>
     
  </body>



</html>