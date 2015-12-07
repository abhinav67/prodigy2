<div class="employees form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Employee'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Employees'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<div class="col-md-12 col-sm-12">
			<?php echo $this->Form->create('Employee', array('role' => 'form','inputDefaults' => array('empty'=>'Choose one'))); ?>
			<div class="row">
				<div class="col-md-6 col-sm-6">
				<div class="form-group">
					<?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('state_id', array('class' => 'form-control', 'placeholder' => 'State Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('zip_code', array('class' => 'form-control', 'placeholder' => 'Zip Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('home_phone', array('class' => 'form-control', 'placeholder' => 'Home Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mobile_phone', array('class' => 'form-control', 'placeholder' => 'Mobile Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('hire_date', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Hire Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('social_security', array('class' => 'form-control', 'placeholder' => 'Social Security'));?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="form-group">
					<?php echo $this->Form->input('gender', array('type'=>'select','options'=>array("Male"=>"Male","Female"=>"Female"),'class' => 'form-control', 'placeholder' => 'Gender'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('date_of_birth', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Date Of Birth'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('type'=>'select','options'=>array("Active"=>"Active","Terminated"=>"Terminated","Leave of Absence"=>"Leave of Absence"),'class' => 'form-control', 'placeholder' => 'Status'));?>
					
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('employment_type', array('type'=>'select','options'=>array("Full Time"=>"Full Time","Temporary"=>"Temporary","Part Time"=>"Part Time"),'class' => 'form-control', 'placeholder' => 'Employment Type'));?></div>
				<div class="form-group">
					<?php echo $this->Form->input('designation', array('class' => 'form-control', 'placeholder' => 'Designation'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('termination_date', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Termination Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_day_worked', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Last Day Worked'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pay_type', array('type'=>'select','options'=>array("Hourly"=>"Hourly","Salary"=>"Salary"),'class' => 'form-control', 'placeholder' => 'Pay Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pay_frequency', array('type'=>'select','options'=>array("Biweekly"=>"Biweekly"),'class' => 'form-control', 'placeholder' => 'Pay Frequency'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('standard_hours_pay_period', array('class' => 'form-control', 'placeholder' => 'Standard Hours Pay Period'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
			</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>
			</div>
		</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
