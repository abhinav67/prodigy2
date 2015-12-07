<div class="doctors form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Doctor'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Doctors'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Doctor Specialities'), array('controller' => 'doctor_specialities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Doctor Speciality'), array('controller' => 'doctor_specialities', 'action' => 'add'), array('escape' => false)); ?> </li>
		
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<div class="col-md-12">
			<?php echo $this->Form->create('Doctor', array('role' => 'form',
				 'inputDefaults' => array('empty'=>'Choose one'))); ?>

				<!--<div class="form-group">
					<?php echo $this->Form->input('display_username', array('class' => 'form-control', 'placeholder' => 'Display Username'));?>
				</div>-->
		<div class="row">	
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('doctor_speciality_id', array('class' => 'form-control', 'placeholder' => 'Doctor Speciality Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('office_phone', array('class' => 'form-control', 'placeholder' => 'Office Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('address2', array('class' => 'form-control', 'placeholder' => 'Address2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('distance_from_center', array('class' => 'form-control', 'placeholder' => 'Distance From Center'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('zip_code', array('class' => 'form-control', 'placeholder' => 'Zip Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('state_id', array('selected'=>'35','placeholder' => 'State Id',"style"=>'width: 100%;'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
			</div>
		</div>
			<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
			</div>

			<?php echo $this->Form->end() ?>
			</div>
		</div><!-- end col md 9 -->
	</div><!-- end row -->
</div>
