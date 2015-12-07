<div class="charges form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Charge'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Charges'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-4">
			<?php echo $this->Form->create('Charge', array('role' => 'form',
				 'inputDefaults' => array('empty'=>'Choose one'))); ?>

				<div class="form-group">
					<?php echo $this->Form->input('amount', array('class' => 'form-control', 'placeholder' => 'Amount'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('insurance_id', array('class' => 'form-control', 'placeholder' => 'Insurances'));?>
				</div>
				<div class="form-group">
					
					<?php echo $this->Form->input('start_date', array('type'=>'text',"label"=>'Transition Date',"data-date-format"=>"mm-dd-yyyy",'class' => 'form-control', 'placeholder' => 'Start Date'));?>
				</div>
				<div class="form-group">
					<?php //echo $this->Form->input('end_date', array('type'=>'text',"data-date-format"=>"mm-dd-yyyy",'class' => 'form-control', 'placeholder' => 'End Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>