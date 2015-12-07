<?php
echo $this->Html->link('Download',array('controller'=>'employees','action'=>'download'), array('target'=>'_blank'));
?>

<div class="employees index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Employees'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Employee'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List States'), array('controller' => 'states', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New State'), array('controller' => 'states', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('address'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('state_id'); ?></th>-->
						<th><?php echo $this->Paginator->sort('city'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('zip_code'); ?></th>-->
						<th><?php echo $this->Paginator->sort('home_phone'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('mobile_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>-->
						<th><?php echo $this->Paginator->sort('hire_date'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('social_security'); ?></th>-->
						<th><?php echo $this->Paginator->sort('gender'); ?></th>
						<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('employment_type'); ?></th>
						<th><?php echo $this->Paginator->sort('designation'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('termination_date'); ?></th>
						<th><?php echo $this->Paginator->sort('last_day_worked'); ?></th>
						<th><?php echo $this->Paginator->sort('pay_type'); ?></th>
						<th><?php echo $this->Paginator->sort('pay_frequency'); ?></th>
						<th><?php echo $this->Paginator->sort('standard_hours_pay_period'); ?></th>
						<th><?php echo $this->Paginator->sort('notes'); ?></th>-->
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($employees as $employee): ?>
					<tr>
						<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['address']); ?>&nbsp;</td>
								<!--<td>
			<?php echo h($employee['State']['raman']); ?>
		</td>-->
						<td><?php echo h($employee['Employee']['city']); ?>&nbsp;</td>
						<!--<td><?php echo h($employee['Employee']['zip_code']); ?>&nbsp;</td>-->
						<td><?php echo h($employee['Employee']['home_phone']); ?>&nbsp;</td>
						<!--<td><?php echo h($employee['Employee']['mobile_phone']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['email']); ?>&nbsp;</td>-->
						<td><?php echo h($employee['Employee']['hire_date']); ?>&nbsp;</td>
						<!--<td><?php echo h($employee['Employee']['social_security']); ?>&nbsp;</td>-->
						<td><?php echo h($employee['Employee']['gender']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['date_of_birth']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['status']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['employment_type']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['designation']); ?>&nbsp;</td>
						<!--<td><?php echo h($employee['Employee']['termination_date']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['last_day_worked']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['pay_type']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['pay_frequency']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['standard_hours_pay_period']); ?>&nbsp;</td>
						<td><?php echo h($employee['Employee']['notes']); ?>&nbsp;</td>-->
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $employee['Employee']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $employee['Employee']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $employee['Employee']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?>
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