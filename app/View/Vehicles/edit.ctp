<div class="vehicles form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Vehicle'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Vehicle.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Vehicle.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Vehicles'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Routes'), array('controller' => 'routes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Route'), array('controller' => 'routes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Vehicle', array('role' => 'form')); ?>
			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('type', array('class' => 'form-control', 'placeholder' => 'Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('make', array('class' => 'form-control', 'placeholder' => 'Make'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('seating', array('class' => 'form-control', 'placeholder' => 'Seating'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('registration_number', array('class' => 'form-control', 'placeholder' => 'Registration Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('registration_expiry_date', array('type'=>'text', 'class' => 'form-control', 'placeholder' => 'Registration Expiry Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('next_inspection_date', array('type'=>'text', 'class' => 'form-control', 'placeholder' => 'Next Inspection Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('vin', array('class' => 'form-control', 'placeholder' => 'Vin'));?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group"><?php echo "</br>" ?>
					<?php echo $this->Form->input('route_id', array('class' => 'form-control', 'placeholder' => 'Route Id'));?>
				</div>
				<!--<div class="form-group">
					<?php echo $this->Form->input('primary_driver_name', array('class' => 'form-control', 'placeholder' => 'Primary Driver Name'));?>
				</div>-->
				<div class="form-group">
					<?php echo $this->Form->input('primary_employee_id', array('options'=>$employes,'class' => 'form-control', 'label'=>'Primary Driver Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ownership', array('class' => 'form-control', 'placeholder' => 'Ownership'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('insurance_information', array('class' => 'form-control', 'placeholder' => 'Insurance Information'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lease_details', array('class' => 'form-control', 'placeholder' => 'Lease Details'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
			</div>
		</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>