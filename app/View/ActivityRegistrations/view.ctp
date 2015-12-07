<div class="activityRegistrations view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Activity Registration'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Activity Registration'), array('action' => 'edit', $activityRegistration['ActivityRegistration']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Activity Registration'), array('action' => 'delete', $activityRegistration['ActivityRegistration']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $activityRegistration['ActivityRegistration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Activity Registrations'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Activity Registration'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participants'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Activities'), array('controller' => 'activities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Activity'), array('controller' => 'activities', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($activityRegistration['ActivityRegistration']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Participants'); ?></th>
		<td>
			<?php echo $this->Html->link($activityRegistration['Customer']['first_name'], array('controller' => 'customers', 'action' => 'view', $activityRegistration['Customer']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Customer'); ?></th>
		<td>
			<?php echo $this->Html->link($activityRegistration['Customer']['last_name'], array('controller' => 'customers', 'action' => 'view', $activityRegistration['Customer']['id'])); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Activity'); ?></th>
		<td>
			<?php echo $this->Html->link($activityRegistration['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $activityRegistration['Activity']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date Of Registration'); ?></th>
		<td>
			<?php echo h($activityRegistration['ActivityRegistration']['date_of_registration']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

