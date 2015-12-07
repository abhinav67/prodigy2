<div class="charges view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Charge'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Charge'), array('action' => 'edit', $charge['Charge']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Charge'), array('action' => 'delete', $charge['Charge']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $charge['Charge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Charges'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Charge'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($charge['Charge']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount'); ?></th>
		<td>
			<?php echo h($charge['Charge']['amount']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Transition Date'); ?></th>
		<td>
			<?php echo h($charge['Charge']['start_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Insurance'); ?></th>
		<td>
			<?php echo h($charge['Insurance']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php //echo __('End Date'); ?></th>
		<td>
			<?php //echo h($charge['Charge']['end_date']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

