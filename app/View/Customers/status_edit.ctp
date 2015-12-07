<div class="customers form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Participants Status'); ?></h1>
				

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

		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('action' => 'index'), array('escape' => false)); ?></li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Meal Plans'), array('controller' => 'meal_plans', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Meal Plan'), array('controller' => 'meal_plans', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants Ethnicities'), array('controller' => 'customer_ethnicities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant Ethnicity'), array('controller' => 'customer_ethnicities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Primary Diets'), array('controller' => 'primary_diets', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Primary Diet'), array('controller' => 'primary_diets', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Secondary Diets'), array('controller' => 'secondary_diets', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Secondary Diet'), array('controller' => 'secondary_diets', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Insurances'), array('controller' => 'insurances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Insurance'), array('controller' => 'insurances', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Status Codes'), array('controller' => 'status_codes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Status Code'), array('controller' => 'status_codes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Activity Registrations'), array('controller' => 'activity_registrations', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Activity Registration'), array('controller' => 'activity_registrations', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participant Attendances'), array('controller' => 'customer_attendances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant Attendance'), array('controller' => 'customer_attendances', 'action' => 'add'), array('escape' => false)); ?> </li>
				<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Participants Status'), array('controller' => 'customers', 'action' => 'status_index'), array('escape' => false)); ?> </li>

										</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Customer',  array('role' => 'form',
				 'inputDefaults' => array('empty'=>'No Value'))); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>			
			


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
<!--         <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
 -->          Primary Information
<!--         </a>
 -->      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		<div class="panel-body">
		<div class="row"> <!-- 1st main row -->
			<div class="col-md-6">	  <!-- 1st column -->
				<div class="form-group">
                					<?php echo $this->Form->input('status_code_id', array('class' => 'form-control', 'placeholder' => 'Status Code Id'));?>
                				</div>
                				<!--<div class="form-group">
                					<?php //echo $this->Form->input('discharge_date', array('type' => 'text',"data-date-format"=>"yyyy-mm-dd", 'class' => 'form-control', 'label' => 'Date','placeholder'=>'Discharge Date'));?>
                				</div>-->
                				<div class="form-group">
                					<?php echo $this->Form->input('discharge_date', array('type' => 'text',"data-date-format"=>"yyyy-mm-dd", 'class' => 'form-control', 'label' => 'Discharge Date','placeholder'=>'Discharge Date'));?>
                				</div>
                				<div class="form-group">
                					<?php echo $this->Form->input('discharge_reason', array('class' => 'form-control', 'placeholder' => 'Discharge Reason','label'=>'Discharge Reason'));?>
                				</div>

			</div>

		</div>

    		<div class="form-group">
    			<br>
				<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
			</div>


			<?php echo $this->Form->end() ?>

		</div><!-- end col md 9 -->
	</div><!-- end row -->
</div>