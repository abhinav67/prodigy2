<div class="primaryDiets view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Primary Diet'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Primary Diet'), array('action' => 'edit', $primaryDiet['PrimaryDiet']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Primary Diet'), array('action' => 'delete', $primaryDiet['PrimaryDiet']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $primaryDiet['PrimaryDiet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Primary Diets'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Primary Diet'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($primaryDiet['PrimaryDiet']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($primaryDiet['PrimaryDiet']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($primaryDiet['PrimaryDiet']['description']); ?>
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
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($primaryDiet['Customer'])): ?>
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
	<?php foreach ($primaryDiet['Customer'] as $customer): ?>
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
