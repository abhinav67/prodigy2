<?php
echo $this->Html->link('Download',array('controller'=>'VendorMasters','action'=>'download'), array('target'=>'_blank'));
?>


<div class="vendorMasters index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vendor Masters'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vendor Master'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Vendor Types'), array('controller' => 'vendor_types', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vendor Type'), array('controller' => 'vendor_types', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('vendor_type_id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('address'); ?></th>
						<th><?php echo $this->Paginator->sort('phone_number'); ?></th>
						<th><?php echo $this->Paginator->sort('fax'); ?></th>
						<th><?php echo $this->Paginator->sort('setup_date'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('pc_name'); ?></th>
						<th><?php echo $this->Paginator->sort('pc_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('pc_email'); ?></th>
						<th><?php echo $this->Paginator->sort('pc_fax'); ?></th>
						<th><?php echo $this->Paginator->sort('sc_name'); ?></th>
						<th><?php echo $this->Paginator->sort('sc_phone'); ?></th>
						<th><?php echo $this->Paginator->sort('sc_email'); ?></th>
						<th><?php echo $this->Paginator->sort('sc_fax'); ?></th>
						<th><?php echo $this->Paginator->sort('payment_term'); ?></th>
						<th><?php echo $this->Paginator->sort('tax'); ?></th>
						<th><?php echo $this->Paginator->sort('notes'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($vendorMasters as $vendorMaster): ?>
					<tr>
						<td><?php echo h($vendorMaster['VendorMaster']['id']); ?>&nbsp;</td>
								<td>
			<?php //echo $this->Html->link($vendorMaster['VendorType']['id'], array('controller' => 'vendor_types', 'action' => 'view', $vendorMaster['VendorType']['id'])); ?>
			<?php echo $this->Html->link($vendorMaster['VendorType']['type'], array('controller' => 'vendor_types', 'action' => 'view', $vendorMaster['VendorType']['id'])); ?>
		</td>
						<td><?php echo h($vendorMaster['VendorMaster']['name']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['address']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['phone_number']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['fax']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['setup_date']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['email']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['pc_name']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['pc_phone']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['pc_email']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['pc_fax']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['sc_name']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['sc_phone']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['sc_email']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['sc_fax']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['payment_term']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['tax']); ?>&nbsp;</td>
						<td><?php echo h($vendorMaster['VendorMaster']['notes']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $vendorMaster['VendorMaster']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $vendorMaster['VendorMaster']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $vendorMaster['VendorMaster']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vendorMaster['VendorMaster']['id'])); ?>
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