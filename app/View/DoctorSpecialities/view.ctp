<div class="doctorSpecialities view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Doctor Speciality'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Doctor Speciality'), array('action' => 'edit', $doctorSpeciality['DoctorSpeciality']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Doctor Speciality'), array('action' => 'delete', $doctorSpeciality['DoctorSpeciality']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $doctorSpeciality['DoctorSpeciality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Doctor Specialities'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Doctor Speciality'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Doctors'), array('controller' => 'doctors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Doctor'), array('controller' => 'doctors', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($doctorSpeciality['DoctorSpeciality']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($doctorSpeciality['DoctorSpeciality']['title']); ?>
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
	<h3><?php echo __('Related Doctors'); ?></h3>
	<?php if (!empty($doctorSpeciality['Doctor'])): ?>
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
	<?php foreach ($doctorSpeciality['Doctor'] as $doctor): ?>
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
