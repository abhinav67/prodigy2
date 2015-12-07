<?php
//pr($lastBill);
//pr($expectedccustomers);

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
$newDate= date("M/d", strtotime($ra['CustomerAttendance']['date']));
$newShift= $ra['CustomerAttendance']['shift'];
$test[$i]= array($newDate,count($ra['Customer']));
$test[$i]['s']= $newShift;
$i++;
}
//pr($test);
$j=0;

?>


<?php
$test1=array();
foreach($abi as $ab)
{
  $test1[$ab['Insurance']['name']]=count($ab['Customer']);
}
?>
<?php
$test2=array();
foreach($phys as $phy)
{
  $test2[$phy['Physician']['title']]=count($phy['Customer']);
}

?>
<div class="row">
	<div class="col-lg-2 col-md-3">
      <!-- Left column -->

         <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="<?php echo $wr;?>customers/add"><i class="glyphicon glyphicon-plus"></i>Add Participants</a> </li>
                <li><a href="<?php echo $wr;?>customers"><i class="glyphicon glyphicon-th-list"></i>Participants</a></li>
                <li><a href="<?php echo $wr;?>insurances/add"><i class="glyphicon glyphicon-plus"></i>Add Insurances</a></li>
                <li><a href="<?php echo $wr;?>insurances"><i class="glyphicon glyphicon-book"></i>Insurances</a></li>
                <li><a href="<?php echo $wr;?>customer_attendances"><i class="glyphicon glyphicon-user"></i> Participant Attendances</a></li>
                <li><a href="<?php echo $wr;?>billing_records"><i class="glyphicon glyphicon-list-alt"></i> Billing Records</a></li>

                 <li><a href="<?php echo $wr;?>todos"><i class="glyphicon glyphicon-tasks"></i> Todos</a></li>
              <li><a href="<?php echo $wr;?>reports"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>



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
  	</div><!-- /col-3 -->
    <div class="col-md-10 col-sm-9">
<div class="row">
<div class="col-md-3">
<h3 style="
    margin-top: 14px;
">Dashboard</h3>
</div>
<div class="col-md-2 text-center">     
    <a href="<?php echo $wr;?>billings" class="btn btn-primary" style="
    background-color: #3366CC;
    border-color: #3366CC; margin-top:10px; width:100%;">
    Add Bill</a>
        </div>

<div class="col-md-3 text-center">
    <a href="<?php echo $wr;?>customer_attendances/add" class="btn btn-primary" style="
    background-color: #3366CC;
    border-color: #3366CC; margin-top:10px; width:100%;">
    Add Attendance</a>
        </div>

<div class="col-md-4 text-center">
    <a href="<?php echo $wr;?>customer_attendances/recent_attendance/?shift=am" class="btn btn-primary" style="
    background-color: #3366CC;
    border-color: #3366CC; margin-top:10px; width:100%;">
    Generate Today's Bill</a>
        </div>

        
      	 </div>
<hr>
		<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-info" role="alert">
    <?php  
    $lastBill['BillingRecord']['date']=date("F j, Y, g:i a",strtotime($lastBill['BillingRecord']['date']));
    $lastBill['BillingRecord']['from_date']=date("F j, Y",strtotime($lastBill['BillingRecord']['from_date']));
    $lastBill['BillingRecord']['to_date']=date("F j, Y",strtotime($lastBill['BillingRecord']['to_date']));
    echo "Last Bill \"<a href=\"billing_records/view/{$lastBill['BillingRecord']['id']}\">{$lastBill['BillingRecord']['lug_file_name']}</a>\" was generated on {$lastBill['BillingRecord']['date']}. It processed <a href=\"billing_records/view/{$lastBill['BillingRecord']['id']}/#claims\">{$lastBill['BillingRecord']['claims_submitted']}</a> claims of {$lastBill['BillingRecord']['amount_charged']} USD total amount. The bill's duration was {$lastBill['BillingRecord']['from_date']} to {$lastBill['BillingRecord']['to_date']}.";
    ?>
    </div>
    </div>

            <!-- center left-->
         	<div class="col-lg-5">
<!-- 
 <div class="col-md-6">
                  <div class="panel panel-primary" style="    border-color: #3366CC;">
    <div class="panel-heading" style="    background-color: #3366CC;    border-color: #3366CC;">
<center><div class="row">
  <div class="glyphicon glyphicon-book" style="padding:7px;font-size: 63px;"></div></div>
        <div class="row">

            <div class="col-xs-12 text-center">
                <div class="huge" style="    font-size: 37px;"><?php echo h($inst); ?>               </div>

            </div>
        </div></center>
    </div>
    <a href="<?php echo $wr;?>insurances" style="    color: #3366CC;">
        <div class="panel-footer">
           <center> <span class="pull">View Insurances</span></center>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix">
                </div>
        </div>
    </a>
</div>
     
</div>
 <div class="col-md-6">
                  <div class="panel panel-primary" style="    border-color: #5CB85C;">
    <div class="panel-heading" style="    background-color: #5CB85C;    border-color: #5CB85C;">
<center><div class="row">
  <div class="glyphicon glyphicon-user" style="padding:7px;font-size: 63px;"></div></div>
        <div class="row">

            <div class="col-xs-12 text-center">
                <div class="huge" style="
    font-size: 37px;
"><?php echo h($cnt); ?>
                </div>

            </div>
        </div></center>
    </div>
    <a href="<?php echo $wr;?>customers" style="
    color: #5CB85C;
">
        <div class="panel-footer">
           <center> <span class="">View Participants</span></center>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix">
                </div>
        </div>
    </a>
</div>
  
</div> -->
      
           

  <div class="panel panel-default high">
                  <div class="panel-heading"><h4>Insurance Breakup</h4></div>
                  <div class="panel-body" id="chart_div_pie">


                  </div><!--/panel-body-->
              </div><!--/panel-->                               
</div>



	  	<div class="col-lg-4 col-md-7">
<div class="panel panel-default high">
                                     <div class="panel-heading"><h4>Notices</h4></div>
                                     <div class="panel-body">
                                     There are <?php echo $cnt ?> Participants and <?php echo $inst ?> Insurances in database.
                                     <br><br>
                                     Billing will be generated only if the corresponding date's
                                     Attendance record is present.<br><br>
                                     The Billing, Attendance and Expected Attendance module will ignore the Participant with any Status Code.
                                      </div>
                                  </div>
  
  
			</div>

      <div class="col-lg-3 col-md-5 col-xs-6">

      <div class="panel panel-default high">
                                     <div class="panel-heading"><h4>Auths Expiring Soon</h4></div>
                                     <div class="panel-body">
                                      <ul class="list-group">
            <?php
            foreach($autho as $authi)
            {

           // echo " <li class='list-group-item'><a href='#''> {$authi['Customer']['first_name']} </a> - {$authi['Customer']['auth_expiry']}</li>";?>
           <?php  $authex=date("M-d-Y",strtotime($authi['Customer']['auth_expiry']));?>
             <span class="list-group-item"><?php echo $this->Form->postLink($authi['Customer']['first_name'], array('controller'=>'customers','action' => 'view', $authi['Customer']['id'])); ?></i>&nbsp; &nbsp;<?php echo h($authex);?></span>
<?php
            }
            ?>
          <hr>
           <a href="customers/expiring_auth" class="pull-right">View All</a> </ul></div>
      </div>
        
                      </div>


      <div class="col-md-3 col-xs-6">

      <div class="panel panel-default high ">
                                     <div class="panel-heading"><h4>Last Expired Auths</h4></div>
                                      <div class="panel-body"><ul class="list-group">
            <?php
            foreach($lautho as $authi)
            {

           // echo " <li class='list-group-item'><a href='#''> {$authi['Customer']['first_name']} </a> - {$authi['Customer']['auth_expiry']}</li>";?>
           <?php  $authexd=date("M-d-Y",strtotime($authi['Customer']['auth_expiry']));?>
             <span class="list-group-item"><?php echo $this->Form->postLink($authi['Customer']['first_name'], array('controller'=>'customers','action' => 'view', $authi['Customer']['id'])); ?></i>&nbsp;&nbsp;<?php echo h($authexd);?></span>

            <?php } ?><hr>
             <a href="customers/expired_auth" class="pull-right">View All</a>
          </ul>

      </div></div>
      </div>

      <div class="col-md-9">
        <div class="panel panel-default high">
        <div class="panel-heading col-md-12 col-xs-12"><div class="col-md-8 col-xs-8"><h4>Recent Attendance</h4></div><div class="col-md-4 col-xs-4"><a href="<?php echo $wr;?>customer_attendances" class="pull-right"><i class="glyphicon glyphicon-th-list" style="padding-top:10px;"></i></a></div></div><br>
        <div class="panel-body"><br>
<div class="list-group">
  <span class="list-group-item" id="chart_div"></span></div>
        </div>

      </div></div></div>


   <div class="row">
<div class="col-md-12">
  <div class="panel panel-default high">
                    <div class="panel-heading col-md-12 col-xs-12"><div class="col-md-8 col-xs-8"><h4>All participants according to age</h4></div><div class="col-md-4 col-xs-4"><a href="<?php echo $wr;?>dashboards/agereports" class="pull-right" style="
    padding-top: 10px;">Gender Demographics</a></div></div><br>
                    <div class="panel-body"><br>
                         <div class="list-group">
  <span class="list-group-item" id="chart_div_age"></span></div> 
                      </div>

                      </div>
         </div>
    
    <div class="col-md-4">
  <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant Gender</h4></div>
                    <div class="panel-body" id="chart_div_sex">
                     
                      </div>
                      </div>
         </div>
   <div class="col-md-4 col-sm-5">

<div class="panel panel-default high">
                    <div class="panel-heading col-md-12 col-xs-12"><div class="col-md-8 col-xs-8"><h4>To-Dos</h4></div><div class="col-md-4 col-xs-4"><a href="<?php echo $wr;?>todos/add" class="pull-right"><i class="glyphicon glyphicon-plus" style="padding-top: 10px;"></i></a></div></div><br>                         
                    <div class="panel-body">
                      <br>
                      <div class="list-group">
                        <?php foreach ($sur as $su): ?> 
                          
                        
                        <span class="list-group-item">
                          <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove pull-right"></span>', array('controller'=>'todos','action' => 'delete', $su['Todo']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $su['Todo']['id'])); ?>
                         <?php echo $this->Form->postLink($su['Todo']['title'], array('controller'=>'todos','action' => 'view', $su['Todo']['id'])); ?></i>
                      </span>
                    <?php endforeach ;?> <hr>
                    <a href="todos" class="pull-right">View All</a> 
                      </div>
                      </div>
                      </div>


   </div>

     <div class="col-md-4 col-sm-7">
      <div class="panel panel-default high">
        <div class="panel-heading col-md-12 col-xs-12"><div class="col-md-8 col-xs-8"><h4>Monthly View</h4></div><div class="col-md-4 col-xs-4"><a href="<?php echo $wr;?>events/add" class="pull-right"><i class="glyphicon glyphicon-plus" style="padding-top: 10px;"></i></a></div></div><br>                         

      <div class="panel-body">
     <div id="datepicker"  style="padding-top: 15px;"></div></div>
                                      	</div>

      </div>
 </div> 
 <br>
   <div class="row">
    <div class="col-md-4">
  <div class="panel panel-default high">
                    <div class="panel-heading"><h4>Participant Physicians</h4></div>
                    <div class="panel-body" id="chart_div_pie_ethsa">
                     
                      </div>
                      </div>
         </div>
   <div class="col-md-4 col-sm-6">
  
      <div class="panel panel-default high">
                    <div class="panel-heading col-md-12 col-xs-12"><div class="col-md-8 col-xs-8"><h4>Upcoming Events</h4></div><div class="col-md-4 col-xs-4"><a href="events/add" class="pull-right"><i class="glyphicon glyphicon-plus" style="padding-top: 10px;"></i></a></div></div>
                    <div class="panel-body">
                      <br>
                      <div class="list-group">
                        <?php foreach ($evt1 as $ev): ?> 
                        <!-- link events here -->
                        
                        <span class="list-group-item"><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove pull-right"></span>', array('controller'=>'events','action' => 'delete', $ev['Event']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $ev['Event']['id'])); ?></i>
                        <?php
                        $newdate=date("M,d",strtotime($ev['Event']['event_date']));?>

                         <?php echo $this->Form->postLink($ev['Event']['name'], array('controller'=>'events','action' => 'view', $ev['Event']['id'])); ?>
                        <?php echo " | ".$ev['EventType']['title']." on ".$newdate; ?></span>
                      <!--<a href="#" class="list-group-item ">Generate Driver logs</a>
                      <a href="#" class="list-group-item">Mark Attendance</a>
                      <a href="#" class="list-group-item">Generate Bills</a>
                      <a href="#" class="list-group-item">Submit to Emdeon</a>
                      <a href="#" class="list-group-item">Keep Full Insurance Data</a>-->
                    <?php endforeach ;?> <hr>
                    <a href="events" class="pull-right">View All</a> 
                      </div>
                      </div>
                      </div>
   </div>
     <div class="col-md-4 col-sm-6">
      <div class="panel panel-default high">
                                     <div class="panel-heading"><h4>Birthdays this Month</h4></div>
                                       <div class="panel-body">
            
                      <div class="list-group">
                        <?php foreach ($bday as $bday1): ?> 
                          
                        
                        <span class="list-group-item"><?php 
                        $birthdate=date("M,d",strtotime($bday1['Customer']['birthday']));?>
                       <?php echo $this->Form->postLink($bday1['Customer']['first_name']." ".$bday1['Customer']['last_name'],array('controller'=>'customers','action'=>'view',$bday1['Customer']['id']));?>
                      <?php echo " "." - ".$birthdate;?></span>
                    <?php endforeach ;?> <hr>
                    <a href="customers/birthday/" class="pull-right">View All</a> 
                      </div>
                      </div>
      </div>
         </div>
      </div>
   

        
 </div><!--/row--> 
  	</div><!--/col-span-9-->
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" show="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dashboard (New Features)</h4>
      </div>
      <div class="modal-body">
        <ol>
        <li>Fully Optimized for Tablets</li>
        <li>Fully Optimized for Mobiles</li>
        <li>Follows Latest 5010 HIPAA guidelines</li>
        <li>ICD 10 Compatible</li>
        <li>Also includes support for ICD 9 Codes</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
   
  </div>
</div>
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
<script>    google.load("visualization", "1", {packages:["corechart"]});
              google.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Insurances', 'Customers'],

                    <?php
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
<script>    google.load("visualization", "1", {packages:["corechart"]});
              google.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Physician', 'Customers'],

                    <?php
                            foreach ($test2 as $iname=>$ccount)
                                {
                                  echo "['{$iname}', {$ccount}],";      
                                }
                    ?>
                ]);
                var options = {
                  chartArea: {'width': '100%', 'height': '80%'},
                   
                  pieHole:'0.3',
                  is3D:true,
                  legend:'bottom'
                };
                var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie_ethsa'));
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
                                                       
                                                echo "['Female', {$fcount}],";
                                                echo "['Male', {$mcount}],";
                                             
 
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

<?php
$calarr=array();
foreach ($evt as $ev)
{
$calarr[$ev['Event']['id']]="dates[new Date('".date('m/d/Y',strtotime($ev['Event']['event_date']))."').getTime()]='".$ev['Event']['name']."'";
}
//pr($calarr);
?>
<script>
var dates = {}
<?php
foreach ($calarr as $cal) {
echo $cal.";";
}
?>
$('#datepicker').datepicker({
    beforeShowDay: function(date) {
    var hlText = dates[date.getTime()];
      return (hlText)?[true, "Highlighted", hlText]: [true, '', ''];
  }
});
</script>
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

        var chart = new google.visualization.Histogram(document.getElementById('chart_div_age'));
        chart.draw(data, options);
      }
    </script>
