<div class="doctors view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Doctor'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Doctor'), array('action' => 'edit', $doctor['Doctor']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Doctor'), array('action' => 'delete', $doctor['Doctor']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Doctors'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Doctor'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Doctor Specialities'), array('controller' => 'doctor_specialities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Doctor Speciality'), array('controller' => 'doctor_specialities', 'action' => 'add'), array('escape' => false)); ?> </li>
		
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
			<?php echo h($doctor['Doctor']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Display Username'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['display_username']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Doctor Speciality'); ?></th>
		<td>
			<?php echo $this->Html->link($doctor['DoctorSpeciality']['title'], array('controller' => 'doctor_specialities', 'action' => 'view', $doctor['DoctorSpeciality']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Office Phone'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['office_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address2'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['address2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Distance From Center'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['distance_from_center']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip Code'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['zip_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo $this->Html->link($doctor['State']['name'], array('controller' => 'states', 'action' => 'view', $doctor['State']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($doctor['Doctor']['city']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

