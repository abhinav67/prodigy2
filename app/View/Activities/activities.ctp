<div class="row">
  <div class="col-lg-2 col-md-3">
      <!-- Left column -->
     <strong><i class="glyphicon glyphicon-link"></i> Participant Activities</strong>
       <hr>
    </div>
 <div class="col-md-9"> 
<div class="col-md-8 col-md-offset">
<a href="<?php echo $wr;?>dashboards" class="btn btn-default">Back to Dashboards</a>
      </div><br><br>
 
          <div class="col-md-12">
           <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Activities</h4></div>
                  <div class="panel-body" id="donutchart" >                      
                      </div>
                      </div></div>
                            
                  </div>
                      </div>

                       <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<?php
$test4=array();
foreach($cities as $city)
{
  $test4[$city['City']['name']]=count($city['Customer']);
}
?>

<?php
$test7=array();
foreach($activity_types as $activity_type)
{
  $test7[$activity_type['ActivityType']['title']]=count($activity_type['Activity']);
}
?>



                      <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Title', 'ActivitiesTypes'],
         <?php
                    if(isset($this->request->data['Report']))
                    {
                      $test7=$newarr;
                    }
                            foreach ($test7 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>  
        ]);

        var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.4',
                
                };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    

