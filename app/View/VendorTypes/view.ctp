<div class="vendorTypes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vendor Type'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Vendor Type'), array('action' => 'edit', $vendorType['VendorType']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Vendor Type'), array('action' => 'delete', $vendorType['VendorType']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vendorType['VendorType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Vendor Types'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Vendor Type'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Vendor Masters'), array('controller' => 'vendor_masters', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Vendor Master'), array('controller' => 'vendor_masters', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($vendorType['VendorType']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Type'); ?></th>
		<td>
			<?php echo h($vendorType['VendorType']['type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($vendorType['VendorType']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($vendorType['VendorType']['notes']); ?>
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
	<h3><?php echo __('Related Vendor Masters'); ?></h3>
	<?php if (!empty($vendorType['VendorMaster'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vendor Type Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Setup Date'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Pc Name'); ?></th>
		<th><?php echo __('Pc Phone'); ?></th>
		<th><?php echo __('Pc Email'); ?></th>
		<th><?php echo __('Pc Fax'); ?></th>
		<th><?php echo __('Sc Name'); ?></th>
		<th><?php echo __('Sc Phone'); ?></th>
		<th><?php echo __('Sc Email'); ?></th>
		<th><?php echo __('Sc Fax'); ?></th>
		<th><?php echo __('Payment Term'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($vendorType['VendorMaster'] as $vendorMaster): ?>
		<tr>
			<td><?php echo $vendorMaster['id']; ?></td>
			<td><?php echo $vendorMaster['vendor_type_id']; ?></td>
			<td><?php echo $vendorMaster['name']; ?></td>
			<td><?php echo $vendorMaster['address']; ?></td>
			<td><?php echo $vendorMaster['phone_number']; ?></td>
			<td><?php echo $vendorMaster['fax']; ?></td>
			<td><?php echo $vendorMaster['setup_date']; ?></td>
			<td><?php echo $vendorMaster['email']; ?></td>
			<td><?php echo $vendorMaster['pc_name']; ?></td>
			<td><?php echo $vendorMaster['pc_phone']; ?></td>
			<td><?php echo $vendorMaster['pc_email']; ?></td>
			<td><?php echo $vendorMaster['pc_fax']; ?></td>
			<td><?php echo $vendorMaster['sc_name']; ?></td>
			<td><?php echo $vendorMaster['sc_phone']; ?></td>
			<td><?php echo $vendorMaster['sc_email']; ?></td>
			<td><?php echo $vendorMaster['sc_fax']; ?></td>
			<td><?php echo $vendorMaster['payment_term']; ?></td>
			<td><?php echo $vendorMaster['tax_id']; ?></td>
			<td><?php echo $vendorMaster['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'vendor_masters', 'action' => 'view', $vendorMaster['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'vendor_masters', 'action' => 'edit', $vendorMaster['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'vendor_masters', 'action' => 'delete', $vendorMaster['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vendorMaster['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vendor Master'), array('controller' => 'vendor_masters', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
