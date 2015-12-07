<div class="companies view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Company'); ?></h1>
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
						
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Companies'), array('action' => 'index'), array('escape' => false)); ?> </li>
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participant'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($company['Company']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($company['Company']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($company['Company']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Agency Type'); ?></th>
		<td>
			<?php echo h($company['Company']['agency_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address2'); ?></th>
		<td>
			<?php echo h($company['Company']['address2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($company['Company']['city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo h($company['State']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip Code'); ?></th>
		<td>
			<?php echo h($company['Company']['zip_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mail Address'); ?></th>
		<td>
			<?php echo h($company['Company']['mail_address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mail Address2'); ?></th>
		<td>
			<?php echo h($company['Company']['mail_address2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mail City'); ?></th>
		<td>
			<?php echo h($company['Company']['mail_city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact'); ?></th>
		<td>
			<?php echo h($company['Company']['contact']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sub Ident'); ?></th>
		<td>
			<?php echo h($company['Company']['sub_ident']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sub Tel'); ?></th>
		<td>
			<?php echo h($company['Company']['sub_tel']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Emp Numb'); ?></th>
		<td>
			<?php echo h($company['Company']['emp_numb']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fedtaxid'); ?></th>
		<td>
			<?php echo h($company['Company']['fedtaxid']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Npi'); ?></th>
		<td>
			<?php echo h($company['Company']['npi']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Receiver Name'); ?></th>
		<td>
			<?php echo h($company['Company']['receiver_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Receiver Code 2'); ?></th>
		<td>
			<?php echo h($company['Company']['receiver_code_2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Receiver Code'); ?></th>
		<td>
			<?php echo h($company['Company']['receiver_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Submitter Code'); ?></th>
		<td>
			<?php echo h($company['Company']['submitter_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sender Code'); ?></th>
		<td>
			<?php echo h($company['Company']['sender_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Shifts'); ?></th>
		<td>
			<?php echo h($company['Company']['am']."|".$company['Company']['pm']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>