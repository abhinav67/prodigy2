<?php
$test1=array();
foreach($abi as $ab)
{
  $test1[$ab['Insurance']['name']]=count($ab['Customer']);
}
?>

<?php
$test2=array();
foreach($eths as $eth)
{
  $test2[$eth['CustomerEthnicity']['title']]=count($eth['Customer']);
}

?>

<?php
$test3=array();
foreach($phys as $phy)
{
  $test3[$phy['Physician']['title']]=count($phy['Customer']);
}

?>

<?php
$test4=array();
foreach($cities as $city)
{
  $test4[$city['City']['name']]=count($city['Customer']);
}

?>

<?php
$test5=array();
foreach($icd9Codes as $icd9Code)
{
  $test5[$icd9Code['Icd9Code']['code']]=count($icd9Code['Customer']);
}

?>

<?php
$test6=array();
foreach($icd10Codes as $icd10Code)
{
  $test6[$icd10Code['Icd10Code']['desc']]=count($icd10Code['Customer']);
}

?>

<div class="row">
	<div class="col-lg-2 col-md-3">
      <!-- Left column -->

     <strong><i class="glyphicon glyphicon-link"></i> Participant Enrollment</strong>

       <hr>
  	</div>
 <div class="col-md-9"> 
 	<!--<div class="row">
 		<?php //echo $this->Form->create('Report', array('role' => 'form')); ?>
 		<div class="form-group">
 			<div class="col-md-5">
 <?php //echo $this->Form->input('from', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Name','id'=>'from'));?>

 	</div>
<div class="col-md-5">
	 <?php //echo $this->Form->input('to', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Name','id'=>'to'));?>
 </div><br>
 <div class="col-xs-2">
<?php //echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
 </div>
</div><br>
<div class="col-md-12">
    <?php //echo $this->Html->image('preloader.gif', array('class'=>'loader')); ?>
</div><br>
      <div class="col-md-8">
<a href="<?php //echo $wr;?>dashboards/agereports" class="btn btn-default">Go to Age Reports</a>
      </div><br>
</div><br>-->
<div class="col-md-8 col-md-offset">
<a href="<?php echo $wr;?>dashboards" class="btn btn-default">Back to Dashboards</a>
      </div><br><br>
  <div class="row">
  	<div class="col-md-12">
  		<div class="panel panel-default high">
                  <div class="panel-heading"><h4>Participant Insurance</h4></div>
                  <div class="panel-body" id="chart_div_pie">


                  </div><!--/panel-body-->
              </div><!--/panel-->
              </div>
          </div>
         
      <div class="row">
      	<div class="col-md-12">
      		 <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant Gender</h4></div>
                    <div class="panel-body" id="chart_div_sex">
                     
                      </div>
                      </div></div></div>
                      <div class="row">
      	<div class="col-md-12">
      		 <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant Etinicity</h4></div>
                    <div class="panel-body" id="chart_div_etinicity">
                     
                      </div>
                      </div></div>

        <div class="col-md-12">
      		 <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant Shift</h4></div>
                    <div class="panel-body" id="chart_div_shift">
                     
                      </div>
                      </div></div>

                <div class="col-md-12">
           <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant City</h4></div>
                    <div class="panel-body" id="chart_div_city">
                     
                      </div>
                      </div></div>

                      <div class="col-md-12">
           <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant Physician</h4></div>
                    <div class="panel-body" id="chart_div_physician">
                     
                      </div>
                      </div></div>

                       <div class="col-md-12">
           <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant ICD - 9</h4></div>
                    <div class="panel-body" id="chart_div_icd9">
                     
                      </div>
                      </div></div>
                      
                        <div class="col-md-12">
           <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant ICD - 10</h4></div>
                    <div class="panel-body" id="chart_div_icd10">
                     
                      </div>
                      </div></div>
                            
                  </div>
                      </div></div>



<script>    google.load("visualization", "1", {packages:["corechart"]});
              google.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Insurances', 'Customers'],

                    <?php
                    if(isset($this->request->data['Report']))
                    {
                      $test1=$newarr;
                    }
                            foreach ($test1 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>
                ]);
                var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };
                var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie'));
                chart.draw(data, options);
              }

</script>

<script>
google.load("visualization", "1", {packages:["corechart"]});
              google.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Client Sex', 'Customers'],

                  <?php
                   if(isset($this->request->data['Report']))
                   {
                                                       
                                                echo "['Female', {$totalfemaleCount}],";
                                                echo "['Male', {$totalCount}],";
                                             }
                                             else
                                             {
                                               echo "['Female', {$fcount}],";
                                                echo "['Male', {$mcount}],";
                                             }
 
                                                 ?>

                ]);

                 var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('chart_div_sex'));
                chart.draw(data, options);
              }
</script>

<script>
$(".btn").click(function(){
    $(".loader").toggle();
});
</script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Etinicity ', 'Customers'],

                    <?php
                    if(isset($this->request->data['Report']))
                    {
                      $test2=$newarr;
                    }
                            foreach ($test2 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>
                ]);

        var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div_etinicity'));

        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Shift', 'Customers'],
          ['AM',     11],
          ['PM',      2],
          ['Both',  2],          
        ]);

         var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div_shift'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['City', 'Customers'],
          <?php
                    if(isset($this->request->data['Report']))
                    {
                      $test4=$newarr;
                    }
                            foreach ($test4 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>            
        ]);

         var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div_city'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Physician', 'Customers'],
          <?php
                    if(isset($this->request->data['Report']))
                    {
                      $test3=$newarr;
                    }
                            foreach ($test3 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>
                      
        ]);

         var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div_physician'));

        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Icd9 Codes', 'Customers'],
           <?php
                    if(isset($this->request->data['Report']))
                    {
                      $test5=$newarr;
                    }
                            foreach ($test5 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>                
        ]);

         var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div_icd9'));

        chart.draw(data, options);
      }
    </script>

     <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Icd10 Codes', 'Customers'],
           <?php
                    if(isset($this->request->data['Report']))
                    {
                      $test6=$newarr;
                    }
                            foreach ($test6 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>                
        ]);

         var options = {
                  chartArea: {'width': '100%', 'height': '100%'},
                  legend:'right', 
                  pieHole:'0.3',
                  is3D:true,
                };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div_icd10'));

        chart.draw(data, options);
      }
    </script>