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
foreach($yo13 as $ra)
{
$newDate= date("M-d-Y", strtotime($ra['billing_records']['from_date']));

$test[$i]= array($newDate,$ra['billing_records']['amount_charged']);
$i++;
}
//pr($test);

$j=0;
//pr($summ);


?>

<html>
  <head>


<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['bar']}]}"></script>
<script>
google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Actual Billing', 'Expected Billing'],
          <?php
                   $l=0;
                                                           foreach ($test as $t)
                                                 {
                                                 $k=$j+1;
                                              
                                                 echo "['{$test[$j][0]}', {$test[$j][1]},{$summ[$l]}],";
                                                 $j++;
                                                 $l++;
                                  }
                                                  ?>
        ]);


        var options = {
          chart: {
            title: 'Monthly Billing Performance',
            subtitle: 'Average Billing, Actual Billing, and Expected Biling: 2015',
          },
          bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
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
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Monthly Billing'), array('action' => 'billingchart1'), array('escape' => false)); ?></li>
               <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Yearly Billing'), array('action' => 'billingchart2'), array('escape' => false)); ?></li>
              </ul>
            </div><!-- end body -->
        </div><!-- end panel -->
      </div><!-- end actions -->
    </div><!-- end col md 3 -->
    <div class ="col-md-offset-3"id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
       
    