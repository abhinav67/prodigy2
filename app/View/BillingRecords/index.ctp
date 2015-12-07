<div class="billingRecords index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Billing Records'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

	

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('from_date'); ?></th>
						<th><?php echo $this->Paginator->sort('to_date'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						<th><?php echo $this->Paginator->sort('lug_file_name',"File Name"); ?></th>
						<th><?php echo $this->Paginator->sort('claims_submitted'); ?></th>
						<th><?php echo $this->Paginator->sort('claims_processed'); ?></th>
						<th><?php echo $this->Paginator->sort('amount_charged'); ?></th>
						<th><?php echo $this->Paginator->sort('amount_allowed'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($billingRecords as $billingRecord): ?>
					<tr>
						<td><?php echo h($billingRecord['BillingRecord']['id']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['from_date']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['to_date']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['date']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['lug_file_name']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['claims_submitted']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['claims_processed']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['amount_charged']); ?>&nbsp;</td>
						<td><?php echo h($billingRecord['BillingRecord']['amount_allowed']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $billingRecord['BillingRecord']['id']), array('escape' => false)); ?>
							
								
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