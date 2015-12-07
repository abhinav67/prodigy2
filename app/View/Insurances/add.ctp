<div class="insurances form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Insurance'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Insurances'), array('action' => 'index'), array('escape' => false)); ?></li>
									
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<div class="col-md-12">
				<?php echo $this->Form->create('Insurance', array('role' => 'form',
				 'inputDefaults' => array('empty'=>'Choose one'))); ?>

			<div class="row">	
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address_1', array('class' => 'form-control', 'placeholder' => 'Address 1'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('type'=>'textarea','class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('state_id', array('selected'=>'35','placeholder' => 'State Id',"style"=>'width: 100%;'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('zip_code', array('class' => 'form-control', 'placeholder' => 'Zip Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('payer_code', array('class' => 'form-control', 'placeholder' => 'Payer Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
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
