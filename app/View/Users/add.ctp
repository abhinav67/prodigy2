<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add User'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Groups'), array('controller' => 'groups', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Group'), array('controller' => 'groups', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-4">
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('group_id', array('class' => 'form-control', 'placeholder' => 'Group Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => ' ', 'placeholder' => 'Status'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
