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

<div class="row">
	<div class="col-lg-2 col-md-3">
      <!-- Left column -->

         <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="<?php echo $wr;?>customers/add"><i class="glyphicon glyphicon-plus"></i>Add Participants</a> </li>
                <li><a href="<?php echo $wr;?>customers"><i class="glyphicon glyphicon-th-list"></i>Participants - <?php echo $cnt ?></a></li>
                <li><a href="<?php echo $wr;?>insurances/add"><i class="glyphicon glyphicon-plus"></i>Add Insurances</a></li>
                <li><a href="<?php echo $wr;?>insurances"><i class="glyphicon glyphicon-book"></i>Insurances - <?php echo $inst ?></a></li>
                <li><a href="<?php echo $wr;?>customer_attendances"><i class="glyphicon glyphicon-user"></i> Participant Attendances</a></li>
                 <li><a href="todos"><i class="glyphicon glyphicon-tasks"></i> Todos</a></li>
              



              </ul>

               


      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Settings <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse in" id="userMenu">
                
               <!-- <li><a href="roles"><i class="glyphicon glyphicon-edit"></i> Manage Roles</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Staff List</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>-->
                 <li><a href="<?php echo $wr;?>companies"><i class="glyphicon glyphicon-briefcase"></i> Companies</a></li>
                <li><a href="<?php echo $wr;?>charges"><i class="glyphicon glyphicon-usd"></i> Charges</a></li>
                    <li><a href="<?php echo $wr;?>users"><i class="glyphicon glyphicon-user"></i> Users</a></li>
                
            </ul>


      </li>



       <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Add-ons <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>

            <ul class="list-unstyled collapse" id="menu2">
                <li><a href="<?php echo $wr;?>activities"><i class="glyphicon glyphicon-align-justify"></i> Activities</a></li>
                <li><a href="<?php echo $wr;?>doctors"><i class="glyphicon glyphicon-eye-open"></i> Doctors</a></li>
                <li><a href="<?php echo $wr;?>water_logs"><i class="glyphicon glyphicon-globe"></i> Water Logs</a></li>
                <li><a href="<?php echo $wr;?>quality_reports"><i class="glyphicon glyphicon-stats"></i> Quality Reports</a></li>
                <li><a href="<?php echo $wr;?>status_codes"><i class="glyphicon glyphicon-tasks"></i> Status Codes</a></li>
                <li><a href="<?php echo $wr;?>prefferedhospitals"><i class="glyphicon glyphicon-plus-sign"></i> Preferred Hospitals</a></li>

                <li><a href="#"><i class="glyphicon glyphicon-transfer"></i> Transportation*</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Human Resources*</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Vendor Management*</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-barcode"></i> Document Manager*</a></li>
            </ul>
        </li>

      </ul>

       

      <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources*</strong></a>

       <hr>
  	</div>
 <div class="col-md-9"> 
 	<div class="row">
 		<?php echo $this->Form->create('Report', array('role' => 'form')); ?>
 		<div class="form-group">
 			<div class="col-md-5">
 <?php echo $this->Form->input('from', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Name','id'=>'from'));?>

 	</div>
<div class="col-md-5">
	 <?php echo $this->Form->input('to', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Name','id'=>'to'));?>
 </div><br>
 <div class="col-xs-2">
<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
 </div>
</div><br>
<div class="col-md-12">
    <?php echo $this->Html->image('preloader.gif', array('class'=>'loader')); ?>
</div><br>
      <div class="col-md-8">
<a href="<?php echo $wr;?>dashboards/agereports" class="btn btn-default">Go to Age Reports</a>
      </div><br>
</div><br>

  <div class="row">
  	<div class="col-md-12">
  		<div class="panel panel-default high">
                  <div class="panel-heading"><h4>Insurance Breakup</h4></div>
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
                  chartArea: {'width': '100%', 'height': '80%'},
                  legend:'bottom', 
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
                  chartArea: {'width': '100%', 'height': '80%'},
                   
                  is3D:true,
                  legend:'bottom'
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