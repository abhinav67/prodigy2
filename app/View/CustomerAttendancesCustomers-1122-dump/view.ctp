<div class="customerAttendancesCustomers view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Customer Attendances Customer'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Customer Attendances Customer'), array('action' => 'edit', $customerAttendancesCustomer['CustomerAttendancesCustomer']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Customer Attendances Customer'), array('action' => 'delete', $customerAttendancesCustomer['CustomerAttendancesCustomer']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customerAttendancesCustomer['CustomerAttendancesCustomer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customer Attendances Customers'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer Attendances Customer'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customer Attendances'), array('controller' => 'customer_attendances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer Attendance'), array('controller' => 'customer_attendances', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Customer Attendance'); ?></th>
		<td>
			<?php echo $this->Html->link($customerAttendancesCustomer['CustomerAttendance']['id'], array('controller' => 'customer_attendances', 'action' => 'view', $customerAttendancesCustomer['CustomerAttendance']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Customer'); ?></th>
		<td>
			<?php echo $this->Html->link($customerAttendancesCustomer['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $customerAttendancesCustomer['Customer']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

