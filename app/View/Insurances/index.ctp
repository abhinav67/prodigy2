<?php
echo $this->Html->link('Download',array('controller'=>'insurances','action'=>'download'), array('target'=>'_blank'));
?>
<div class="insurances index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Insurances'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Insurance'), array('action' => 'add'), array('escape' => false)); ?></li>
								
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('address_1'); ?></th>
						<th><?php echo $this->Paginator->sort('city'); ?></th>
						<th><?php echo $this->Paginator->sort('state_id'); ?></th>
						<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
						<th><?php echo $this->Paginator->sort('payer_code'); ?></th>
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
					
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($insurances as $insurance): ?>
					<tr>
						<td><?php echo h($insurance['Insurance']['id']); ?>&nbsp;</td>
						<td><?php echo h($insurance['Insurance']['name']); ?>&nbsp;</td>
						<td><?php echo h($insurance['Insurance']['address_1']); ?>&nbsp;</td>
						<td><?php echo h($insurance['Insurance']['city']); ?>&nbsp;</td>
								<td>
			<?php echo h($insurance['State']['name']); ?>
		</td>
						<td><?php echo h($insurance['Insurance']['zip_code']); ?>&nbsp;</td>
						<td><?php echo h($insurance['Insurance']['payer_code']); ?>&nbsp;</td>
						<td><?php echo h($insurance['Insurance']['phone']); ?>&nbsp;</td>
						
						<td><?php echo h($insurance['Insurance']['email']); ?>&nbsp;</td>
						
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $insurance['Insurance']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $insurance['Insurance']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $insurance['Insurance']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $insurance['Insurance']['id'])); ?>
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