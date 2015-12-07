<div class="customerAttendances view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Participants Attendance'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Participant Attendance'), array('action' => 'edit', $customerAttendance['CustomerAttendance']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Participant Attendance'), array('action' => 'delete', $customerAttendance['CustomerAttendance']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customerAttendance['CustomerAttendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participant Attendances'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participant Attendance'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participant'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($customerAttendance['CustomerAttendance']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($customerAttendance['CustomerAttendance']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Shift'); ?></th>
		<td>
			<?php echo h($customerAttendance['CustomerAttendance']['shift']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Participant Attendance'); ?></th>
		<td>
			<?php
			foreach ($customerAttendance['Customer'] as $ckdcustomer)
			{
			echo h($ckdcustomer['raman']); 
			echo " <br> ";
			}?>
		</td>
	</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>


	</div><!-- end col md 12 -->
</div>
