<div class="driverLogs form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Driver Log'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Driver Logs'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Routes'), array('controller' => 'routes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Route'), array('controller' => 'routes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participants'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-4">
			<?php echo $this->Form->create('DriverLog', array('role' => 'form','inputDefaults' => array('empty'=>'Choose one'))); ?>

				<div class="form-group">
					<?php echo $this->Form->input('route_id', array('class' => 'form-control', 'placeholder' => 'Route Id'));?>
				</div>
				<!--<div class="form-group">
					<?php 
					echo $this->Form->input('primary_driver_name', array('type'=>'select','options'=>$newemp,'class' => 'form-control', 'placeholder' => 'Primary Driver Name'));?>
				</div>-->
				<div class="form-group">
					<?php echo $this->Form->input('primary_employee_id', array('options'=>$employes,'class' => 'form-control', 'label'=>'Primary Driver Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('customer_id', array('class' => 'form-control', 'placeholder' => 'Customer Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pickup_order', array('class' => 'form-control', 'placeholder' => 'Pickup Order'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
				<div class="form-group">
					<div class="row">
					<?php echo $this->Form->button('Submit and Add Another', ['type' => 'submit','class'=>'btn btn-default','name'=>'type_1']);?>
					<?php echo $this->Form->button('Submit', ['type' => 'submit','class'=>'btn btn-default','name'=>'type_2']);?>
					<!--<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>-->
				</div></div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
<?php
$this->Js->get('#DriverLogParticipantsAddress')->event('change', 
$this->Js->request(array(
'controller'=>'driverlogs',
'action'=>'get_address'
), array(
'update'=>'#DriverLogParticipantsAddress',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);
?>