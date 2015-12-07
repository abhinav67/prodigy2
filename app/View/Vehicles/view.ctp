<div class="vehicles view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vehicle'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Vehicle'), array('action' => 'edit', $vehicle['Vehicle']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Vehicle'), array('action' => 'delete', $vehicle['Vehicle']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Vehicles'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Vehicle'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Routes'), array('controller' => 'routes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Route'), array('controller' => 'routes', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($vehicle['Vehicle']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Type'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Make'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['make']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Seating'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['seating']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Registration Number'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['registration_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Registration Expiry Date'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['registration_expiry_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Next Inspection Date'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['next_inspection_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vin'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['vin']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Route'); ?></th>
		<td>
			<?php echo $this->Html->link($vehicle['Route']['name'], array('controller' => 'routes', 'action' => 'view', $vehicle['Route']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Primary Driver Name'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['primary_driver_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ownership'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['ownership']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Insurance Information'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['insurance_information']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lease Details'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['lease_details']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($vehicle['Vehicle']['notes']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

