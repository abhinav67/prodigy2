<div class="customers index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Participants Status'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('action' => 'index'), array('escape' => false)); ?></li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Meal Plans'), array('controller' => 'meal_plans', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Meal Plan'), array('controller' => 'meal_plans', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants Ethnicities'), array('controller' => 'customer_ethnicities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant Ethnicity'), array('controller' => 'customer_ethnicities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Primary Diets'), array('controller' => 'primary_diets', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Primary Diet'), array('controller' => 'primary_diets', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Secondary Diets'), array('controller' => 'secondary_diets', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Secondary Diet'), array('controller' => 'secondary_diets', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Insurances'), array('controller' => 'insurances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Insurance'), array('controller' => 'insurances', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Status Codes'), array('controller' => 'status_codes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Status Code'), array('controller' => 'status_codes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Activity Registrations'), array('controller' => 'activity_registrations', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Activity Registration'), array('controller' => 'activity_registrations', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participant Attendances'), array('controller' => 'customer_attendances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant Attendance'), array('controller' => 'customer_attendances', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Participants Status'), array('controller' => 'customers', 'action' => 'status_index'), array('escape' => false)); ?> </li>

												</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			
			<?php
	//search code starts	
	$options1=str_replace("_", " ", $options);
	$options1 = array_map('ucwords', $options1);
	echo "<div class=\"col-md-3\">";
	echo $this->Form->create('Customer');

	echo $this->Form->input("search",array('type' => 'text','label' => "Search ",'class' => 'query form-control','id'=>"", 'div'=>false));
	echo "<br>";
	echo "</div><div class=\"col-md-2\">";
	echo $this->Form->input('field',array('type' => 'select','class' => 'field form-control', 'div'=>false, 'options' => $options1));
		echo "</div><div class=\"col-md-2\">";
	echo $this->Form->input('Status code',array('type' => 'select','class' => 'field form-control', 'div'=>false,'empty'=>'None', 'options' => $statusCodes));
	echo "</div>   <div class=\"searchpad\">";
	echo "<br>";
	$options = array(
    'label' => 'Search',
    'div' => false,
    'class' => 'search btn btn-default');
	echo $this->Form->end($options);
	//echo $fcn;
	?>
	<button class="btn btn-default" onclick="myFunction()">Reset Search Modifiers</button>
	<div class="col-md-12">
	<?php
	if(isset($select))
	{
	if(empty($statusCodes[$select['Customer']['Status code']]))
	{
	$statusCodes[$select['Customer']['Status code']]="None";
	}
	echo $this->Paginator->counter(array(
	'format' => __("Your search for \"{$select['Customer']['search']}\" in \"{$options1[$select['Customer']['field']]}\" for Status Code \"{$statusCodes[$select['Customer']['Status code']]}\" returned {:count} results, showing {:current} records out of {:count} total,<br> starting on record {:start}, ending on {:end}.")
	));
	}?></div></div>
	<script>
	function myFunction(){
    top.location.href = location.protocol + '//' + location.host + location.pathname;
	}
	</script>

			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('status_code_id'); ?></th>
						<!--<th><?php //echo $this->Paginator->sort('discharge_date','Date'); ?></th>-->
						<th><?php echo $this->Paginator->sort('discharge_date',' Discharge Date'); ?></th>
						<th><?php echo $this->Paginator->sort('discharge_reason','Discharge Reason'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($customers as $customer): ?>
					<tr>
						<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($customer['StatusCode']['title']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['discharge_date']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['discharge_reason']); ?>&nbsp;</td>

							<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'status_edit', $customer['Customer']['id']), array('escape' => false)); ?>
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