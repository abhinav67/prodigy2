<div class="cities view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('City'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit City'), array('action' => 'edit', $city['City']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete City'), array('action' => 'delete', $city['City']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List States'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New State'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Companies'), array('controller' => 'companies', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Company'), array('controller' => 'companies', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Doctors'), array('controller' => 'doctors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Doctor'), array('controller' => 'doctors', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Insurances'), array('controller' => 'insurances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Insurance'), array('controller' => 'insurances', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($city['City']['name']); ?>
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
	<h3><?php echo __('Related Companies'); ?></h3>
	<?php if (!empty($state['Company'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Agency Type'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Address2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Zip Code'); ?></th>
		<th><?php echo __('Mail Address'); ?></th>
		<th><?php echo __('Mail Address2'); ?></th>
		<th><?php echo __('Mail City'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Sub Ident'); ?></th>
		<th><?php echo __('Sub Tel'); ?></th>
		<th><?php echo __('Emp Numb'); ?></th>
		<th><?php echo __('Fedtaxid'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Receiver Name'); ?></th>
		<th><?php echo __('Receiver Code 2'); ?></th>
		<th><?php echo __('Receiver Code'); ?></th>
		<th><?php echo __('Submitter Code'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($state['Company'] as $company): ?>
		<tr>
			<td><?php echo $company['id']; ?></td>
			<td><?php echo $company['name']; ?></td>
			<td><?php echo $company['phone']; ?></td>
			<td><?php echo $company['fax']; ?></td>
			<td><?php echo $company['agency_type']; ?></td>
			<td><?php echo $company['address']; ?></td>
			<td><?php echo $company['address2']; ?></td>
			<td><?php echo $company['city']; ?></td>
			<td><?php echo $company['state_id']; ?></td>
			<td><?php echo $company['zip_code']; ?></td>
			<td><?php echo $company['mail_address']; ?></td>
			<td><?php echo $company['mail_address2']; ?></td>
			<td><?php echo $company['mail_city']; ?></td>
			<td><?php echo $company['contact']; ?></td>
			<td><?php echo $company['sub_ident']; ?></td>
			<td><?php echo $company['sub_tel']; ?></td>
			<td><?php echo $company['emp_numb']; ?></td>
			<td><?php echo $company['fedtaxid']; ?></td>
			<td><?php echo $company['npi']; ?></td>
			<td><?php echo $company['receiver_name']; ?></td>
			<td><?php echo $company['receiver_code_2']; ?></td>
			<td><?php echo $company['receiver_code']; ?></td>
			<td><?php echo $company['submitter_code']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'companies', 'action' => 'view', $company['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'companies', 'action' => 'edit', $company['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'companies', 'action' => 'delete', $company['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Company'), array('controller' => 'companies', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($state['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Display Username'); ?></th>
		<th><?php echo __('Admission Date'); ?></th>
		<th><?php echo __('Application Date'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Client Sex'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Social Security'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Address2'); ?></th>
		<th><?php echo __('Zip Code'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Meal Plan Id'); ?></th>
		<th><?php echo __('Customer Ethnicity Id'); ?></th>
		<th><?php echo __('Fax Number'); ?></th>
		<th><?php echo __('Photograph'); ?></th>
		<th><?php echo __('Education'); ?></th>
		<th><?php echo __('Occupation'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Primary Diet Id'); ?></th>
		<th><?php echo __('Secondary Diet Id'); ?></th>
		<th><?php echo __('Insurance Id'); ?></th>
		<th><?php echo __('Precertref'); ?></th>
		<th><?php echo __('Income'); ?></th>
		<th><?php echo __('Status Code Id'); ?></th>
		<th><?php echo __('Discharge Date'); ?></th>
		<th><?php echo __('Discharge Reason'); ?></th>
		<th><?php echo __('Alcohol Allowed'); ?></th>
		<th><?php echo __('Trips Allowed'); ?></th>
		<th><?php echo __('Photos Allowed'); ?></th>
		<th><?php echo __('Planned Short Stay'); ?></th>
		<th><?php echo __('Veteran'); ?></th>
		<th><?php echo __('Falls Risk'); ?></th>
		<th><?php echo __('Mobility'); ?></th>
		<th><?php echo __('Monday Am'); ?></th>
		<th><?php echo __('Tuesday Am'); ?></th>
		<th><?php echo __('Wednesday Am'); ?></th>
		<th><?php echo __('Thursday Am'); ?></th>
		<th><?php echo __('Friday Am'); ?></th>
		<th><?php echo __('Saturday Am'); ?></th>
		<th><?php echo __('Sunday Am'); ?></th>
		<th><?php echo __('Monday Pm'); ?></th>
		<th><?php echo __('Tuesday Pm'); ?></th>
		<th><?php echo __('Wednesday Pm'); ?></th>
		<th><?php echo __('Thursday Pm'); ?></th>
		<th><?php echo __('Friday Pm'); ?></th>
		<th><?php echo __('Saturday Pm'); ?></th>
		<th><?php echo __('Sunday Pm'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($state['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['display_username']; ?></td>
			<td><?php echo $customer['admission_date']; ?></td>
			<td><?php echo $customer['application_date']; ?></td>
			<td><?php echo $customer['first_name']; ?></td>
			<td><?php echo $customer['last_name']; ?></td>
			<td><?php echo $customer['client_sex']; ?></td>
			<td><?php echo $customer['email']; ?></td>
			<td><?php echo $customer['social_security']; ?></td>
			<td><?php echo $customer['phone']; ?></td>
			<td><?php echo $customer['home_phone']; ?></td>
			<td><?php echo $customer['date_of_birth']; ?></td>
			<td><?php echo $customer['address']; ?></td>
			<td><?php echo $customer['address2']; ?></td>
			<td><?php echo $customer['zip_code']; ?></td>
			<td><?php echo $customer['city']; ?></td>
			<td><?php echo $customer['state_id']; ?></td>
			<td><?php echo $customer['meal_plan_id']; ?></td>
			<td><?php echo $customer['customer_ethnicity_id']; ?></td>
			<td><?php echo $customer['fax_number']; ?></td>
			<td><?php echo $customer['photograph']; ?></td>
			<td><?php echo $customer['education']; ?></td>
			<td><?php echo $customer['occupation']; ?></td>
			<td><?php echo $customer['notes']; ?></td>
			<td><?php echo $customer['primary_diet_id']; ?></td>
			<td><?php echo $customer['secondary_diet_id']; ?></td>
			<td><?php echo $customer['insurance_id']; ?></td>
			<td><?php echo $customer['precertref']; ?></td>
			<td><?php echo $customer['income']; ?></td>
			<td><?php echo $customer['status_code_id']; ?></td>
			<td><?php echo $customer['discharge_date']; ?></td>
			<td><?php echo $customer['discharge_reason']; ?></td>
			<td><?php echo $customer['alcohol_allowed']; ?></td>
			<td><?php echo $customer['trips_allowed']; ?></td>
			<td><?php echo $customer['photos_allowed']; ?></td>
			<td><?php echo $customer['planned_short_stay']; ?></td>
			<td><?php echo $customer['veteran']; ?></td>
			<td><?php echo $customer['falls_risk']; ?></td>
			<td><?php echo $customer['mobility']; ?></td>
			<td><?php echo $customer['monday_am']; ?></td>
			<td><?php echo $customer['tuesday_am']; ?></td>
			<td><?php echo $customer['wednesday_am']; ?></td>
			<td><?php echo $customer['thursday_am']; ?></td>
			<td><?php echo $customer['friday_am']; ?></td>
			<td><?php echo $customer['saturday_am']; ?></td>
			<td><?php echo $customer['sunday_am']; ?></td>
			<td><?php echo $customer['monday_pm']; ?></td>
			<td><?php echo $customer['tuesday_pm']; ?></td>
			<td><?php echo $customer['wednesday_pm']; ?></td>
			<td><?php echo $customer['thursday_pm']; ?></td>
			<td><?php echo $customer['friday_pm']; ?></td>
			<td><?php echo $customer['saturday_pm']; ?></td>
			<td><?php echo $customer['sunday_pm']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'customers', 'action' => 'view', $customer['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'customers', 'action' => 'edit', $customer['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Doctors'); ?></h3>
	<?php if (!empty($state['Doctor'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Display Username'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Doctor Speciality Id'); ?></th>
		<th><?php echo __('Office Phone'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Address2'); ?></th>
		<th><?php echo __('Distance From Center'); ?></th>
		<th><?php echo __('Zip Code'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($state['Doctor'] as $doctor): ?>
		<tr>
			<td><?php echo $doctor['id']; ?></td>
			<td><?php echo $doctor['display_username']; ?></td>
			<td><?php echo $doctor['name']; ?></td>
			<td><?php echo $doctor['phone']; ?></td>
			<td><?php echo $doctor['doctor_speciality_id']; ?></td>
			<td><?php echo $doctor['office_phone']; ?></td>
			<td><?php echo $doctor['address']; ?></td>
			<td><?php echo $doctor['address2']; ?></td>
			<td><?php echo $doctor['distance_from_center']; ?></td>
			<td><?php echo $doctor['zip_code']; ?></td>
			<td><?php echo $doctor['state_id']; ?></td>
			<td><?php echo $doctor['city']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'doctors', 'action' => 'view', $doctor['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'doctors', 'action' => 'edit', $doctor['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'doctors', 'action' => 'delete', $doctor['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $doctor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Doctor'), array('controller' => 'doctors', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Insurances'); ?></h3>
	<?php if (!empty($state['Insurance'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address 1'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Zip Code'); ?></th>
		<th><?php echo __('Payer Code'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($state['Insurance'] as $insurance): ?>
		<tr>
			<td><?php echo $insurance['id']; ?></td>
			<td><?php echo $insurance['name']; ?></td>
			<td><?php echo $insurance['address_1']; ?></td>
			<td><?php echo $insurance['city']; ?></td>
			<td><?php echo $insurance['state_id']; ?></td>
			<td><?php echo $insurance['zip_code']; ?></td>
			<td><?php echo $insurance['payer_code']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'insurances', 'action' => 'view', $insurance['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'insurances', 'action' => 'edit', $insurance['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'insurances', 'action' => 'delete', $insurance['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $insurance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Insurance'), array('controller' => 'insurances', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
