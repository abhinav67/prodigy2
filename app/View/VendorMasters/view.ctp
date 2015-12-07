<button type="button" class="btn btn-link" onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
var prtContent = document.getElementById("view");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
   
}
</script>

<div class="vendorMasters view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vendor Master'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Vendor Master'), array('action' => 'edit', $vendorMaster['VendorMaster']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Vendor Master'), array('action' => 'delete', $vendorMaster['VendorMaster']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vendorMaster['VendorMaster']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Vendor Masters'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Vendor Master'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Vendor Types'), array('controller' => 'vendor_types', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Vendor Type'), array('controller' => 'vendor_types', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9" id="view">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vendor Type'); ?></th>
		<td>
			<?php echo $this->Html->link($vendorMaster['VendorType']['id'], array('controller' => 'vendor_types', 'action' => 'view', $vendorMaster['VendorType']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone Number'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['phone_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Setup Date'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['setup_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pc Name'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['pc_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pc Phone'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['pc_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pc Email'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['pc_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pc Fax'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['pc_fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sc Name'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['sc_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sc Phone'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['sc_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sc Email'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['sc_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sc Fax'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['sc_fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Payment Term'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['payment_term']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tax Id'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['tax_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($vendorMaster['VendorMaster']['notes']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

