<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Participants Billing'), array('action' => 'customers'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Participants Attendance'), array('controller' => 'customer_attendances', 'action' => 'add'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-12">
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
	echo "<div id='' class='form'>";
	echo "<h1>Billing of All Participants through Attendance</h1>";

	//echo "<center>";
	echo $this->Form->create('Billing');
	//echo $this->Form->input('customers');
	//echo $this->Form->input('payernames',array('label' => 'Payer Name'));?>
	<div class="form-group">
	<?php //echo $this->Form->input('scheduleType',array('type' => 'select','class'=>'form-control', 'options' => array('Attendance'=>'Attendance')));?><br>
	<?php echo $this->Html->image('preloader.gif', array('class'=>'loader')); ?>
	<div class="form-group">
	<?php echo "
	Billing will be generated only if the corresponding date's Attendance record is present.<br>
	Today's date has been automatically selected. Select any date range for multi-day billing (Dates are inclusive) -";?>
	</div>
	<div class="row">
	<div class="form-group col-md-4">
	<?php echo $this->Form->input('fromDate', array('type' => 'text',"data-date-format"=>"mm-dd-yyyy",'class'=>'form-control',"default"=>"{$datefield}","placeholder"=>"From Date"));?>
	</div>
	</div>
	<div class="row">

	<div class="form-group col-md-4">
		<?php echo $this->Form->input('tillDate',array('label'=>'To Date','type' => 'text',"data-date-format"=>"mm-dd-yyyy",'class'=>'form-control',"default"=>"{$datefield}","placeholder"=>"To Date"));?>
	</div>
	</div>
	<div class="row">
	<div class="form-group col-md-4">
	<?php
	$defaultfilename="Claim_{$date}";
	echo $this->Form->input('fileName', array('type' => 'text','class'=>'form-control','selected'=>'true',"placeholder"=>"Please choose a filename"));?>
	</div>
	</div>
	<div class="form-group">
    					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
    				</div>

<?php
	}
?>
</div>


<script>
$(".btn").click(function(){
    $(".loader").toggle();
});
</script>