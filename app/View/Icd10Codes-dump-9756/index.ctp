<div class="icd10Codes index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Icd10 Codes'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Icd10 Code'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('code'); ?></th>
						<th><?php echo $this->Paginator->sort('desc'); ?></th>
						<th><?php echo $this->Paginator->sort('icd10_codescol'); ?></th>
						<th><?php echo $this->Paginator->sort('icd10_codescol1'); ?></th>
						<th><?php echo $this->Paginator->sort('icd10_codescol2'); ?></th>
						<th><?php echo $this->Paginator->sort('icd10_codescol3'); ?></th>
						<th><?php echo $this->Paginator->sort('icd10_codescol4'); ?></th>
						<th><?php echo $this->Paginator->sort('icd10_codescol5'); ?></th>
						<th><?php echo $this->Paginator->sort('icd10_codescol6'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($icd10Codes as $icd10Code): ?>
					<tr>
						<td><?php echo h($icd10Code['Icd10Code']['id']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['code']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['desc']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['icd10_codescol']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['icd10_codescol1']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['icd10_codescol2']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['icd10_codescol3']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['icd10_codescol4']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['icd10_codescol5']); ?>&nbsp;</td>
						<td><?php echo h($icd10Code['Icd10Code']['icd10_codescol6']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $icd10Code['Icd10Code']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $icd10Code['Icd10Code']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $icd10Code['Icd10Code']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $icd10Code['Icd10Code']['id'])); ?>
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