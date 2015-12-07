<div class="qualityReports view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Incident Report'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Incident Report'), array('action' => 'edit', $qualityReport['QualityReport']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Incident Report'), array('action' => 'delete', $qualityReport['QualityReport']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $qualityReport['QualityReport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Incident Report'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Incident Report'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($qualityReport['QualityReport']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($qualityReport['QualityReport']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('To'); ?></th>
		<td>
			<?php echo h($qualityReport['QualityReport']['to']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('From'); ?></th>
		<td>
			<?php echo h($qualityReport['QualityReport']['from']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($qualityReport['QualityReport']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Subject'); ?></th>
		<td>
			<?php echo h($qualityReport['QualityReport']['subject']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Content'); ?></th>
		<td>
			<?php echo h($qualityReport['QualityReport']['content']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>