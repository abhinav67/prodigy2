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
<div class="employees view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Employee'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Employee'), array('action' => 'edit', $employee['Employee']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Employees'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Employee'), array('action' => 'add'), array('escape' => false)); ?> </li>
		
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
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($employee['Employee']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($employee['Employee']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($employee['Employee']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo $this->Html->link($employee['State']['raman'], array('controller' => 'states', 'action' => 'view', $employee['State']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($employee['Employee']['city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Zip Code'); ?></th>
		<td>
			<?php echo h($employee['Employee']['zip_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Home Phone'); ?></th>
		<td>
			<?php echo h($employee['Employee']['home_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mobile Phone'); ?></th>
		<td>
			<?php echo h($employee['Employee']['mobile_phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($employee['Employee']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Hire Date'); ?></th>
		<td>
			<?php
			 	echo date("M-d-Y",strtotime($employee['Employee']['hire_date'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Social Security'); ?></th>
		<td>
			<?php echo h($employee['Employee']['social_security']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Gender'); ?></th>
		<td>
			<?php echo h($employee['Employee']['gender']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date Of Birth'); ?></th>
		<td>
			<?php echo h($employee['Employee']['date_of_birth']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($employee['Employee']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Employment Type'); ?></th>
		<td>
			<?php echo h($employee['Employee']['employment_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Designation'); ?></th>
		<td>
			<?php echo h($employee['Employee']['designation']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Termination Date'); ?></th>
		<td>
			<?php echo h($employee['Employee']['termination_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Day Worked'); ?></th>
		<td>
			<?php echo h($employee['Employee']['last_day_worked']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pay Type'); ?></th>
		<td>
			<?php echo h($employee['Employee']['pay_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pay Frequency'); ?></th>
		<td>
			<?php echo h($employee['Employee']['pay_frequency']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Standard Hours Pay Period'); ?></th>
		<td>
			<?php echo h($employee['Employee']['standard_hours_pay_period']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Notes'); ?></th>
		<td>
			<?php echo h($employee['Employee']['notes']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

