<div class="vehicles index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vehicles'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vehicle'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Routes'), array('controller' => 'routes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Route'), array('controller' => 'routes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('type'); ?></th>
						<th><?php echo $this->Paginator->sort('make'); ?></th>
						<th><?php echo $this->Paginator->sort('seating'); ?></th>
						<th><?php echo $this->Paginator->sort('registration_number'); ?></th>
						<th><?php echo $this->Paginator->sort('registration_expiry_date'); ?></th>
						<th><?php echo $this->Paginator->sort('next_inspection_date'); ?></th>
						<th><?php echo $this->Paginator->sort('vin'); ?></th>
						<th><?php echo $this->Paginator->sort('route_id'); ?></th>
						<th><?php echo $this->Paginator->sort('primary_driver_name'); ?></th>
						<th><?php echo $this->Paginator->sort('ownership'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('insurance_information'); ?></th>
						<th><?php echo $this->Paginator->sort('lease_details'); ?></th>
						<th><?php echo $this->Paginator->sort('notes'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($vehicles as $vehicle): ?>
					<tr>
						<td><?php echo h($vehicle['Vehicle']['id']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['type']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['make']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['seating']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['registration_number']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['registration_expiry_date']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['next_inspection_date']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['vin']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($vehicle['Route']['name'], array('controller' => 'routes', 'action' => 'view', $vehicle['Route']['id'])); ?>
		</td>
						<td><?php echo h($vehicle['Vehicle']['primary_driver_name']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['ownership']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['status']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['insurance_information']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['lease_details']); ?>&nbsp;</td>
						<td><?php echo h($vehicle['Vehicle']['notes']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $vehicle['Vehicle']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $vehicle['Vehicle']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $vehicle['Vehicle']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->