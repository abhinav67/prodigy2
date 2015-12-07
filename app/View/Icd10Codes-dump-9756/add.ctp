<div class="icd10Codes form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Icd10 Code'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Icd10 Codes'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Icd10Code', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('code', array('class' => 'form-control', 'placeholder' => 'Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('desc', array('class' => 'form-control', 'placeholder' => 'Desc'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icd10_codescol', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icd10_codescol1', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol1'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icd10_codescol2', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icd10_codescol3', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol3'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icd10_codescol4', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol4'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icd10_codescol5', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol5'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icd10_codescol6', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol6'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('Customer', array('class' => 'form-control', 'placeholder' => 'Icd10 Codescol6'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
