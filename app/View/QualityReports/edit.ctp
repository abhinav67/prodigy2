<div class="qualityReports form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Incident Report'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('QualityReport.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('QualityReport.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Incident Report'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-7">
			<?php echo $this->Form->create('QualityReport', array('role' => 'form')); ?>
			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('to', array('class' => 'form-control', 'placeholder' => 'To'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('from', array('class' => 'form-control', 'placeholder' => 'From'));?>
				</div>
				</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('date', array('type'=>'text',"data-date-format"=>"mm-dd-yyyy",'class' => 'form-control', 'placeholder' => 'Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('subject', array('class' => 'form-control', 'placeholder' => 'Subject'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Content'));?>
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