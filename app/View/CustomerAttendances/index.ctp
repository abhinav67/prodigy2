<div class="customerAttendances index">

	<div class="row page-header">
		<div class="col-md-6">
			<div class="page-header1">
				<h1 style="position: relative;top: -15px;">Participant Attendances</h1>
			</div>
		</div><!-- end col md 6 -->
		<div class="col-md-6">
		<!--
		<div class="alert alert-danger">
        Date format in SEARCH and DATE column is in yyyy-mm-dd.
    	</div>
        -->
        </div>
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant Attendance'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
		<?php include 'rsv.php'; ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						<th><?php echo $this->Paginator->sort('customer_count',"Participant Count"); ?></th>
						<th><?php echo $this->Paginator->sort('shift'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($customerAttendances as $customerAttendance): ?>
					<tr>
						<td><?php echo h($customerAttendance['CustomerAttendance']['id']); ?>&nbsp;</td>
						<td><?php echo h($customerAttendance['CustomerAttendance']['date']); ?>&nbsp;</td>
						<td><?php echo h($customerAttendance['CustomerAttendance']['customer_count']); ?>&nbsp;</td>
						<td><?php echo h($customerAttendance['CustomerAttendance']['shift']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $customerAttendance['CustomerAttendance']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $customerAttendance['CustomerAttendance']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $customerAttendance['CustomerAttendance']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customerAttendance['CustomerAttendance']['id'])); ?>
						</td>
					</tr>

				<?php endforeach; //pr ($customerAttendance);?>
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