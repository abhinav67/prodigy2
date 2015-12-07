<div class="driverLogs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Driver Log'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Driver Log'), array('action' => 'edit', $driverLog['DriverLog']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Driver Log'), array('action' => 'delete', $driverLog['DriverLog']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $driverLog['DriverLog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Driver Logs'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Driver Log'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Routes'), array('controller' => 'routes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Route'), array('controller' => 'routes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participants'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($driverLog['DriverLog']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Route'); ?></th>
		<td>
			<?php echo $this->Html->link($driverLog['Route']['name'], array('controller' => 'routes', 'action' => 'view', $driverLog['Route']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Primary Driver Name'); ?></th>
		<td>
			<?php echo h($employes[$driverLog["DriverLog"]["primary_driver_name"]]); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Customer'); ?></th>
		<td>
			<?php echo $this->Html->link($driverLog['Customer']['raman'], array('controller' => 'customers', 'action' => 'view', $driverLog['Customer']['id'])); ?>
			&nbsp;
		</td>
</tr>
<!--<tr>
		<th><?php echo __('Participants Address'); ?></th>
		<td>
			<?php echo h($driverLog['DriverLog']['participants_address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Participants Phone'); ?></th>
		<td>
			<?php echo h($driverLog['DriverLog']['participants_phone']); ?>
			&nbsp;
		</td>
</tr>-->
<tr>
		<th><?php echo __('Pickup Order'); ?></th>
		<td>
			<?php echo h($driverLog['DriverLog']['pickup_order']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($driverLog['DriverLog']['notes']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>
