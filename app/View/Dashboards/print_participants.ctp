

   <?php echo $this->Html->css('font-awesome.min'); ?>   


   <?php echo $this->Html->css('metro-bootstrap.min'); ?>   
<style>
.metro .tile {
  width: 160px;
}
.metro h4
{
    margin-top: 90px;
}

.panel-icon
{
    margin-top: -46px !important;
}
.metro a:hover, .metro .link:hover {
color: transparent;
}
.daytrack-nav
{
  margin-top: -14.7%;
  text-align: center;
  width: 21%;
  color: white;
  font-size: 12px;
}

</style>

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
	<div class="col-lg-3 col-md-3">
      <!-- Left column -->
         
         <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"><h4><center>Actions</center></h4></li>
                <li class="active"><a href="<?php echo $wr;?>dashboards/dashboard_daytrack"><i class="glyphicon glyphicon-th-list"></i>Day Track</a> </li>
                <li><a href="<?php echo $wr;?>"><i class="glyphicon glyphicon-th-list"></i>Dashboard</a></li>
                <li><a href="<?php echo $wr;?>dashboards/dashboard_attendance"><i class="glyphicon glyphicon-th-list"></i>Attendance and Billing</a></li>
                <li><a href="<?php echo $wr;?>dashboards/dashboard_activities"><i class="glyphicon glyphicon-th-list"></i>Activities</a></li>
                <li><a href="<?php echo $wr;?>dashboards/dashboard_settings"><i class="glyphicon glyphicon-th-list"></i>Settings</a></li>  
                <li><a href="<?php echo $wr;?>dashboards/dashboard_participants"><i class="glyphicon glyphicon-th-list"></i>Participants</a></li>              
                <li><a href="<?php echo $wr;?>dashboards/dashboard_employee"><i class="glyphicon glyphicon-th-list"></i>Employees</a></li>
                <li><a href="<?php echo $wr;?>dashboards/dashboard_vendors"><i class="glyphicon glyphicon-th-list"></i>Vendors</a></li>
                <li><a href="<?php echo $wr;?>dashboards/dashboard_transport"><i class="glyphicon glyphicon-th-list"></i>Transport</a></li>
                <li><a href="<?php echo $wr;?>dashboards/dashboard_others"><i class="glyphicon glyphicon-th-list"></i>Others</a></li>
 
              </ul>

       <hr>

        <div class="panel panel-default high2">
        <div class="panel-heading col-md-12 col-xs-12"><div class="col-md-8 col-xs-8"><h4>Calendar</h4></div><div class="col-md-4 col-xs-4"><a href="<?php echo $wr;?>events/add" class="pull-right"><i class="glyphicon glyphicon-plus" style="padding-top: 10px;"></i></a></div></div><br>                         

      <div class="panel-body">
     <div id="datepicker"  style="padding-top: 15px;"></div></div>
                                        </div>

                                        
                      <div class="panel panel-default high">
                                     <div class="panel-heading"><h4>CMS News and Updates</h4></div>
                                     <div class="panel-body">
                                     There are <?php echo $cnt ?> Participants and <?php echo $inst ?> Insurances in database.
                                     <br><br>
                                     Billing will be generated only if the corresponding date's
                                     Attendance record is present.<br><br>
                                     The Billing, Attendance and Expected Attendance module will ignore the Participant with any Status Code.
                                      </div>
                                  </div>
  	</div><!-- /col-3 -->
    <div class="col-md-6 col-sm-6">
<div class="row">

<h3 style="margin-top: 14px;">Day Track</h3>

        
      	 </div>
<hr>
    <div class="row"  style="margin-left:-10px;">
                <br>
                
                <div class="col-md-12">
                <svg height="100" width="600">
                   <polygon points="400,0 560,0 595,40 560,80 400,80" style="fill:#16a085;" /></a>
                   <polygon points="300,0 440,0 475,40 440,80 300,80" style="fill:#1abc9c;" />
                   <polygon points="200,0 320,0 355,40 320,80 200,80" style="fill:#4DCF9D;" />
                   <polygon points="100,0 205,0 245,40 205,80 100,80" style="fill:#27ae60;" />
                   <polygon points="0,0 100,0 133,40 100,80 0,80" style="fill:#2ecc71;" />
                </svg>
                </div>
                <div class="col-md-12">
                    <a href="<?php echo $wr;?>#"><div class="col-md-2 daytrack-nav">Print Participant Sign-In Sheets</div></a>
                    <a href="<?php echo $wr;?>driverlogs"><div class="col-md-2 daytrack-nav" style="margin-left:20%;">Print Driver Schedules</div></a>
                    <a href="<?php echo $wr;?>customer_attendances/recent_attendance/?shift=am"><div class="col-md-2 daytrack-nav" style="margin-left:40%;">Mark Attendance</div></a>
                    <a href="<?php echo $wr;?>primary_diets/add"><div class="col-md-2 daytrack-nav" style="margin-left:60%;">Receive Daily Meals</div></a>
                    <a href="<?php echo $wr;?>billings/today_billing"><div class="col-md-2 daytrack-nav" style="margin-left:80%;">Generate Today's Billing</div></a>
                </div>
          </div>
<hr>
<?php echo $this->Form->create('printpart', array('role' => 'form',
         )); ?>
         <?php $abhi=array_keys($selected_part); 
         ?>

     <h3>Date - <?php echo $date; ?>&nbsp;&nbsp;| Insurance Company - <?php echo $insure;?>  |  Shift - <?php echo $shift;?></h3>
     <div class="col-md-4">

     <div class="form-group">

          <?php echo $this->Form->input('', array('selected'=>$abhi,'label'=>'Participants',"options"=>$selected_part,"id"=>"print_par","required"=>true,"style"=>'width:200px','label' => 'Participants <font color="red">*</font>'));?>
        </div>
<?php
echo $this->Form->button('Download',array('controller'=>'Dashboards','action'=>'download'), array('target'=>'_blank'));
?>
      </div>
 </div><!--/row--> 
 <div class="col-md-3">
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
                      <hr>



                            <div class="panel panel-default high">
                    <div class="panel-heading col-md-12 col-xs-12"><div class="col-md-8 col-xs-8"><h4>Reminders</h4></div><div class="col-md-4 col-xs-4"><a href="events/add" class="pull-right"><i class="glyphicon glyphicon-plus" style="padding-top: 10px;"></i></a></div></div>
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


                      <hr>





                                  <hr>



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


  	</div><!--/col-span-9-->

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