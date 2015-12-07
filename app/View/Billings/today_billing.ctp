<div class="row ">
				<div class="col-md-6 col-md-offset-3">
		
			<div class="panel panel-default" style="box-shadow: 0 2px 4px black;">
				<div class="panel-body">
					If the record is already present it will skip that step.
					
<?php

if (isset($selected))
{

//echo date("e").'<br>';
//echo "<pre>";
pr ($selected);

//pr ($customers);

//echo "</pre>";

}
else{
	$date= date('M_j_Y');
	$datefield= date('M-d-Y');
	$dt = strtotime($datefield);
	$day=date("l", $dt);
	echo "<div id='' class='form'>";
	echo "<h1>Step 3 of 3</h1><div class='progress'>
			  <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='33' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width:99%''>    99%
			  </div>
		</div><h3>Billing of All Participants through Attendance</h3><hr>";
	//echo "<center>";

	echo $this->Form->create('Billing');
	//echo $this->Form->input('customers');
	//echo $this->Form->input('payernames',array('label' => 'Payer Name'));?>
	<div class="form-group">
	<?php //echo $this->Form->input('scheduleType',array('type' => 'select','class'=>'form-control', 'options' => array('Attendance'=>'Attendance')));?>
	
	<?php echo $this->Html->image('preloader.gif', array('class'=>'loader')); ?>

	<div class="form-group">
	<?php echo"<h3>{$day}, {$datefield}</h3>";?>
	</div>
	<div class="form-group">
	<?php echo $this->Form->input('fromDate', array('type' => 'hidden',"data-date-format"=>"mm-dd-yyyy",'class'=>'form-control',"default"=>"{$datefield}","placeholder"=>"From Date"));?>
	</div>
	<div class="form-group">
		<?php echo $this->Form->input('tillDate',array('label'=>'To Date','type' => 'hidden',"data-date-format"=>"mm-dd-yyyy",'class'=>'form-control',"default"=>"{$datefield}","placeholder"=>"To Date"));?>
	</div>
	<div class="form-group">
		<?php echo "Click below to change File Name - ";?></div>
	<div class="row">
		<div class="form-group col-md-6">
			<?php
			$defaultfilename="Claim_{$date}";
			echo $this->Form->input('fileName', array('type' => 'text','class'=>'form-control','selected'=>'true',"placeholder"=>"Please choose a filename"));?>
		</div>
	</div>
<div class="row">
	<div class="form-group col-md-4">
    					<?php echo $this->Form->submit(__('Get Bill'), array('class' => 'btn btn-default')); ?>
    				</div>
    		</div>

<?php
	}
?><?php echo '<a href="../dashboards/dashboard_daytrack">Back to Day Track</a>'; ?>
</div>


<script>
$(".btn").click(function(){
    $(".loader").toggle();
});
</script>