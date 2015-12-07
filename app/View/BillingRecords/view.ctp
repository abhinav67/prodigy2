<div class="billingRecords view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Billing Record'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('From Date'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['from_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('To Date'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['to_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last User Generated File Name'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['lug_file_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Claims Submitted'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['claims_submitted']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Claims Processed'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['claims_processed']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount Charged'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['amount_charged']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Amount Allowed'); ?></th>
		<td>
			<?php echo h($billingRecord['BillingRecord']['amount_allowed']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

<h2 id="claims">Participants Billing Details</h2>

			<?php //pr($claims); 
echo '<table cellpadding="0" cellspacing="0" class="table table-striped">';
echo "<th>No</th>";
echo "<th>Customer</th>";
echo "<th>Amount Charged</th>";
echo "<th>Amount Allowed</th>";
echo "<th>Reason Code</th>";
$key=1;
foreach ($claims as $claim)
{
echo "<tr><td>".$key."</td>";
echo "<td>".$customers[$claim['BillingReconciliation']['customer_id']]."</td>";
echo "<td>".$claim['BillingReconciliation']['amount_charged']."</td>";
echo "<td>".$claim['BillingReconciliation']['amount_allowed']."</td>";
echo "<td>".$claim['BillingReconciliation']['reason_code']."</td></tr>";
$key++;
}
echo "</table>";

?>


		</div><!-- end col md 9 -->

	</div>
</div>

