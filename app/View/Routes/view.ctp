<div class="routes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Route'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Route'), array('action' => 'edit', $route['Route']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Route'), array('action' => 'delete', $route['Route']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Routes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Route'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Driver Logs'), array('controller' => 'driver_logs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Driver Log'), array('controller' => 'driver_logs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Vehicles'), array('controller' => 'vehicles', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Vehicle'), array('controller' => 'vehicles', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($route['Route']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($route['Route']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Primary Employee Id'); ?></th>
		<td>
			<?php echo h($employes[$route['Route']['primary_employee_id']]); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Secondary Employee Id'); ?></th>
		<td>
			<?php echo h($employes[$route['Route']['secondary_employee_id']]); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('From'); ?></th>
		<td>
			<?php echo h($route['Route']['from']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('To'); ?></th>
		<td>
			<?php echo h($route['Route']['to']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($route['Route']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($route['Route']['notes']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Driver Logs'); ?></h3>
	<?php if (!empty($route['DriverLog'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Primary Driver Name'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Participants Address'); ?></th>
		<th><?php echo __('Participants Phone'); ?></th>
		<th><?php echo __('Pickup Order'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($route['DriverLog'] as $driverLog): ?>
		<tr>
			<td><?php echo $driverLog['id']; ?></td>
			<td><?php echo $driverLog['route_id']; ?></td>
			<td><?php echo $driverLog['primary_driver_name']; ?></td>
			<td><?php echo $driverLog['customer_id']; ?></td>
			<td><?php echo $driverLog['participants_address']; ?></td>
			<td><?php echo $driverLog['participants_phone']; ?></td>
			<td><?php echo $driverLog['pickup_order']; ?></td>
			<td><?php echo $driverLog['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'driver_logs', 'action' => 'view', $driverLog['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'driver_logs', 'action' => 'edit', $driverLog['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'driver_logs', 'action' => 'delete', $driverLog['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $driverLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Driver Log'), array('controller' => 'driver_logs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Vehicles'); ?></h3>
	<?php if (!empty($route['Vehicle'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Make'); ?></th>
		<th><?php echo __('Seating'); ?></th>
		<th><?php echo __('Registration Number'); ?></th>
		<th><?php echo __('Registration Expiry Date'); ?></th>
		<th><?php echo __('Next Inspection Date'); ?></th>
		<th><?php echo __('Vin'); ?></th>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Primary Driver Name'); ?></th>
		<th><?php echo __('Ownership'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Insurance Information'); ?></th>
		<th><?php echo __('Lease Details'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($route['Vehicle'] as $vehicle): ?>
		<tr>
			<td><?php echo $vehicle['id']; ?></td>
			<td><?php echo $vehicle['type']; ?></td>
			<td><?php echo $vehicle['make']; ?></td>
			<td><?php echo $vehicle['seating']; ?></td>
			<td><?php echo $vehicle['registration_number']; ?></td>
			<td><?php echo $vehicle['registration_expiry_date']; ?></td>
			<td><?php echo $vehicle['next_inspection_date']; ?></td>
			<td><?php echo $vehicle['vin']; ?></td>
			<td><?php echo $vehicle['route_id']; ?></td>
			<td><?php echo $vehicle['primary_driver_name']; ?></td>
			<td><?php echo $vehicle['ownership']; ?></td>
			<td><?php echo $vehicle['status']; ?></td>
			<td><?php echo $vehicle['insurance_information']; ?></td>
			<td><?php echo $vehicle['lease_details']; ?></td>
			<td><?php echo $vehicle['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'vehicles', 'action' => 'view', $vehicle['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'vehicles', 'action' => 'edit', $vehicle['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'vehicles', 'action' => 'delete', $vehicle['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vehicle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vehicle'), array('controller' => 'vehicles', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
