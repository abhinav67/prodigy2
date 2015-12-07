<div class="companies index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Companies'); ?></h1>
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
								
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Company'), array('controller' => 'companies', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('fax'); ?></th>
						<th><?php echo $this->Paginator->sort('agency_type'); ?></th>-->
						<th><?php echo $this->Paginator->sort('address'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('address2'); ?></th>
						<th><?php echo $this->Paginator->sort('city'); ?></th>-->
						<th><?php echo $this->Paginator->sort('state_id'); ?></th>
						<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('mail_address'); ?></th>
						<th><?php echo $this->Paginator->sort('mail_address2'); ?></th>
						<th><?php echo $this->Paginator->sort('mail_city'); ?></th>-->
						<th><?php echo $this->Paginator->sort('contact'); ?></th>
						<th><?php echo $this->Paginator->sort('sub_ident'); ?></th>
						<th><?php echo $this->Paginator->sort('sub_tel'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('emp_numb'); ?></th>-->
						<th><?php echo $this->Paginator->sort('fedtaxid'); ?></th>
						<th><?php echo $this->Paginator->sort('npi'); ?></th>
						<!--<th><?php echo $this->Paginator->sort('receiver_name'); ?></th>
						<th><?php echo $this->Paginator->sort('receiver_code_2'); ?></th>
						<th><?php echo $this->Paginator->sort('receiver_code'); ?></th>
						<th><?php echo $this->Paginator->sort('sender_code'); ?></th>-->
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($companies as $company): ?>
					<tr>
						<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['name']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['phone']); ?>&nbsp;</td>
						<!--<td><?php echo h($company['Company']['fax']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['agency_type']); ?>&nbsp;</td>-->
						<td><?php echo h($company['Company']['address']); ?>&nbsp;</td>
						<!--<td><?php echo h($company['Company']['address2']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['city']); ?>&nbsp;</td>-->
								<td>
			<?php echo h($company['State']['name'] ); ?>
		</td>
						<td><?php echo h($company['Company']['zip_code']); ?>&nbsp;</td>
						<!--<td><?php echo h($company['Company']['mail_address']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['mail_address2']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['mail_city']); ?>&nbsp;</td>-->
						<td><?php echo h($company['Company']['contact']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['sub_ident']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['sub_tel']); ?>&nbsp;</td>
						<!--<td><?php echo h($company['Company']['emp_numb']); ?>&nbsp;</td>-->
						<td><?php echo h($company['Company']['fedtaxid']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['npi']); ?>&nbsp;</td>
						<!--<td><?php echo h($company['Company']['receiver_name']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['receiver_code_2']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['receiver_code']); ?>&nbsp;</td>
						<td><?php echo h($company['Company']['sender_code']); ?>&nbsp;</td>-->
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $company['Company']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $company['Company']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $company['Company']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
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