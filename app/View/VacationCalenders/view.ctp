<div class="vacationCalenders view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vacation Calender'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Vacation Calender'), array('action' => 'edit', $vacationCalender['VacationCalender']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Vacation Calender'), array('action' => 'delete', $vacationCalender['VacationCalender']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vacationCalender['VacationCalender']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Vacation Calenders'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Vacation Calender'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Employees'), array('controller' => 'employees', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Employee'), array('controller' => 'employees', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($vacationCalender['VacationCalender']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Employee'); ?></th>
		<td>
			<?php echo $this->Html->link($vacationCalender['Employee']['first_name'], array('controller' => 'employees', 'action' => 'view', $vacationCalender['Employee']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Type'); ?></th>
		<td>
			<?php echo h($vacationCalender['VacationCalender']['type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vacation From'); ?></th>
		<td>
			<?php echo h($vacationCalender['VacationCalender']['vacation_from']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vacation To'); ?></th>
		<td>
			<?php echo h($vacationCalender['VacationCalender']['vacation_to']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($vacationCalender['VacationCalender']['notes']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

