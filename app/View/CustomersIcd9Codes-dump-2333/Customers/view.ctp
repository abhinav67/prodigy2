<?php
echo $this->Html->link('Download',array('controller'=>'customers','action'=>'downloadv'), array('target'=>'_blank'));
?>


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

<div class="customers view">
	<?php
//pr($customer);
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Participants'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Clone Participant'), array('action' => 'editm', $customer['Customer']['id']), array('escape' => false)); ?> </li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Participant'), array('action' => 'edit', $customer['Customer']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Participant'), array('action' => 'delete', $customer['Customer']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participants'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participant'), array('action' => 'add'), array('escape' => false)); ?> </li>
		
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participant Ethnicities'), array('controller' => 'customer_ethnicities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participant Ethnicity'), array('controller' => 'customer_ethnicities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Primary Diets'), array('controller' => 'primary_diets', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Primary Diet'), array('controller' => 'primary_diets', 'action' => 'add'), array('escape' => false)); ?> </li>
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Insurances'), array('controller' => 'insurances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Insurance'), array('controller' => 'insurances', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Status Codes'), array('controller' => 'status_codes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Status Code'), array('controller' => 'status_codes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Activity Registrations'), array('controller' => 'activity_registrations', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Activity Registration'), array('controller' => 'activity_registrations', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participant Attendances'), array('controller' => 'customer_attendances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participant Attendance'), array('controller' => 'customer_attendances', 'action' => 'add'), array('escape' => false)); ?> </li>

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
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Admission Date'); ?></th>
		<td>
			<?php 
			echo h($customer['Customer']['admission_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Application Date'); ?></th>
		<td>
			<?php 
			echo h($customer['Customer']['application_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($customer['Customer']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($customer['Customer']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Middle Initial'); ?></th>
		<td>
			<?php echo h($customer['Customer']['mi']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Client Sex'); ?></th>
		<td>
			<?php echo h($customer['Customer']['client_sex']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($customer['Customer']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Social Security'); ?></th>
		<td>
			<?php echo h($customer['Customer']['social_security']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cell Phone'); ?></th>
		<td>
			<?php echo h($customer['Customer']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Home Phone'); ?></th>
		<td>
			<?php echo h($customer['Customer']['home_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date Of Birth'); ?></th>
		<td>
			<?php echo h($customer['Customer']['date_of_birth']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Birth Country'); ?></th>
		<td>
			<?php echo h($customer['LocationCountry']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Birth State'); ?></th>
		<td>
			<?php echo h($customer['LocationState']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($customer['Customer']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address2'); ?></th>
		<td>
			<?php echo h($customer['Customer']['address2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip Code'); ?></th>
		<td>
			<?php echo h($customer['Customer']['zip_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($customer['Customer']['city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo h($customer['State']['name']); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Customer Ethnicity'); ?></th>
		<td>
			<?php echo $this->Html->link($customer['CustomerEthnicity']['title'], array('controller' => 'customer_ethnicities', 'action' => 'view', $customer['CustomerEthnicity']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax Number'); ?></th>
		<td>
			<?php echo h($customer['Customer']['fax_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photograph'); ?></th>
		<td>
			<?php echo h($customer['Customer']['photograph']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Education'); ?></th>
		<td>
			<?php echo h($customer['Customer']['education']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Occupation'); ?></th>
		<td>
			<?php echo h($customer['Customer']['occupation']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($customer['Customer']['notes']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Primary Diet'); ?></th>
		<td>
			<?php echo $this->Html->link($customer['PrimaryDiet']['name'], array('controller' => 'primary_diets', 'action' => 'view', $customer['PrimaryDiet']['id'])); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Insurance'); ?></th>
		<td>
			<?php echo $this->Html->link($customer['Insurance']['name'], array('controller' => 'insurances', 'action' => 'view', $customer['Insurance']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Authorization'); ?></th>
		<td>
			<?php echo h($customer['Customer']['precertref']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Income'); ?></th>
		<td>
			<?php echo h($customer['Customer']['income']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status Code'); ?></th>
		<td>
			<?php echo $this->Html->link($customer['StatusCode']['title'], array('controller' => 'status_codes', 'action' => 'view', $customer['StatusCode']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Discharge Date'); ?></th>
		<td>
			<?php 
			echo date("m-d-Y",strtotime($customer['Customer']['discharge_date'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Discharge Reason'); ?></th>
		<td>
			<?php echo h($customer['Customer']['discharge_reason']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Alcohol Allowed'); ?></th>
		<td>
			<?php echo h($customer['Customer']['alcohol_allowed']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trips Allowed'); ?></th>
		<td>
			<?php echo h($customer['Customer']['trips_allowed']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photos Allowed'); ?></th>
		<td>
			<?php echo h($customer['Customer']['photos_allowed']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Planned Short Stay'); ?></th>
		<td>
			<?php echo h($customer['Customer']['planned_short_stay']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Veteran'); ?></th>
		<td>
			<?php echo h($customer['Customer']['veteran']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Falls Risk'); ?></th>
		<td>
			<?php echo h($customer['Customer']['falls_risk']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mobility'); ?></th>
		<td>
			<?php echo h($customer['Customer']['mobility']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Physician'); ?></th>
		<td>
			<?php echo h($customer['Physician']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Religion'); ?></th>
		<td>
			<?php echo h($customer['Religion']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Medicare Number'); ?></th>
		<td>
			<?php echo h($customer['Customer']['medicare_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Medicaid Number'); ?></th>
		<td>
			<?php echo h($customer['Customer']['medicaid_number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Auth Expiry'); ?></th>
		<td>
			<?php echo h($customer['Customer']['auth_expiry']); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Shift'); ?></th>
		<td>
		<?php
		if($customer['Customer']['monday_am']){?>
			<?php echo __('Monday am | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['tuesday_am']){?>
			<?php echo __('Tuesday am | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['wednesday_am']){?>
			<?php echo __('Wednesday am | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['thursday_am']){?>
			<?php echo __('Thursday am | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['friday_am']){?>
			<?php echo __('Friday am | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['saturday_am']){?>
			<?php echo __('Saturday am | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['sunday_am']){?>
			<?php echo __('Sunday am | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['monday_pm']){?>
			<?php echo __('Monday pm | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['tuesday_pm']){?>
			<?php echo __('Tuesday pm | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['wednesday_pm']){?>
			<?php echo __('Wednesday pm | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['thursday_pm']){?>
			<?php echo __('Thursday pm | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['friday_pm']){?>
			<?php echo __('Friday pm | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['saturday_pm']){?>
			<?php echo __('Saturday pm | ') ?>
			&nbsp;
		<?php }?>
		<?php
		if($customer['Customer']['sunday_pm']){?>
			<?php echo __('Sunday pm') ?>
			&nbsp;
		<?php }?>
	</td>
</tr>
<?php
if ($customer['Icd9Code']){?>
<tr>
		<th><?php echo __('Icd9'); ?></th>
		<td>
			<?php
			foreach ($customer['Icd9Code'] as $ckdicd)
			{
			echo h($ckdicd['code']."-".$ckdicd['short_desc']); 
			echo " | ";
			}?>
		</td>
</tr>
<?php }?>
<?php 
if ($customer['Icd10Code']){?>
	<tr>
		<th><?php echo __('Icd10'); ?></th>
		<td>
			<?php
			foreach ($customer['Icd10Code'] as $ckdicd)
			{
			echo h($ckdicd['code']."-".$ckdicd['desc']); 
			echo " | ";
			}?>
		</td>
</tr><?php }?>

				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>


</div>
