<div class="customerAttendances form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Participant Attendance'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participant Attendances'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('CustomerAttendance', array('role' => 'form',
				 'inputDefaults' => array('empty'=>'Choose one'))); ?>
			<?php	$human=date('M-d-Y', $dateinurl);
            		echo "<h3>Date Selected - {$day} | {$human} | {$shift}</h3>"; 		?>
            		<h3><a href="<?php echo $this->webroot;?>customer Attendances/selectday">Click here to Change Date</a></h3>

<?php
//asort($expectedcustomers);
$abi=array_keys($expectedcustomers);
//pr($expectedcustomers);

		echo $this->Form->input('date', array('type' => 'text',"default"=>"{$human}",'type' => 'hidden'));
		echo $this->Form->input('shift', array('type' => 'text',"default"=>"{$shift}",'type' => 'hidden'));
		?>
				<div class="form-group">

					<?php echo $this->Form->input('Customer', array('selected'=>$abi,'label'=>'Participants',"options"=>$customers,'id'=>"rattendance","required"=>true,"style"=>'width:200px','label' => 'Participants <font color="red">*</font>'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
