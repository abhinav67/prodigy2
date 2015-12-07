<div class="activities form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Activity'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Activity.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Activity.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Activities'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Activity Types'), array('controller' => 'activity_types', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Activity Type'), array('controller' => 'activity_types', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-4">
			<?php echo $this->Form->create('Activity', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('activity_type_id1', array('class' => 'form-control', 'options'=>$atypes,'placeholder' => 'Activity Type Id1','label'=>'Activity 1'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('activity_type_id2', array('class' => 'form-control','options'=>$atypes, 'placeholder' => 'Activity Type Id2','label'=>'Activity 2'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('time', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('date', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('time1', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
