<div class="customersIcd9Codes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Customers Icd9 Code'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Customers Icd9 Code'), array('action' => 'edit', $customersIcd9Code['CustomersIcd9Code']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Customers Icd9 Code'), array('action' => 'delete', $customersIcd9Code['CustomersIcd9Code']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customersIcd9Code['CustomersIcd9Code']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customers Icd9 Codes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customers Icd9 Code'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Icd9 Codes'), array('controller' => 'icd9_codes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Icd9 Code'), array('controller' => 'icd9_codes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Customer'); ?></th>
		<td>
			<?php echo $this->Html->link($customersIcd9Code['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $customersIcd9Code['Customer']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Icd9 Code'); ?></th>
		<td>
			<?php echo $this->Html->link($customersIcd9Code['Icd9Code']['id'], array('controller' => 'icd9_codes', 'action' => 'view', $customersIcd9Code['Icd9Code']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

