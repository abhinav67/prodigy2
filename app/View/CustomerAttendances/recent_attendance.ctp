<div class="customerAttendances form">

	<div class="row ">
				<div class="col-md-6 col-md-offset-3">
		
			<div class="panel panel-default" style="box-shadow: 0 2px 4px black;">
				<div class="panel-body">
					If the record is already present it will skip that step.
			<div class="page-header">
				<?php if($shiftclean=="am"){?>
				<h1>Step 1 of 2</h1>
						<div class="progress">
				  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width:99%">
				    99%
				  </div></div>
				
				<?php } else if($shiftclean=="pm"){?>
					
				<h1><?php echo __('Step 2 of 2'); ?></h1>
<div class="progress">
				  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width:99%">
				    99%
				  </div>
				</div>
				<?php }?>
			</div>
		
			<?php echo $this->Form->create('CustomerAttendance', array('role' => 'form',
				 'inputDefaults' => array('empty'=>'Choose one'))); ?>

			<?php	

					//$human=date('Y-m-d', $dateinurl);
					$human = date('M-d-Y', $dateinurl);
            		echo "<h3>{$day}, {$human} | Shift - {$shift}</h3>"; 		?>
            		<!--<h3><a href="<?php echo $this->webroot;?>customer Attendances/selectday">Click here to Change Date</a></h3>-->

<?php
//asort($expectedcustomers);
$abi=array_keys($expectedcustomers);
//pr($expectedcustomers);

		echo $this->Form->input('date', array('type' => 'text',"default"=>"{$human}",'type' => 'hidden'));
		echo $this->Form->input('shift', array('type' => 'text',"default"=>"{$shift}",'type' => 'hidden'));
		?>
				<div class="form-group">

					<?php echo $this->Form->input('Customer', array('selected'=>$abi,'label'=>'Participants',"options"=>$customers,'id'=>"rattendance","required"=>true,"style"=>'width:200px'));?>
				</div>
				<?php if($shiftclean=="am"){?>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>
			<?php } else if($shiftclean=="pm"){?>
			<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div><?php }?>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
	<?php echo '<a href="/prodigysmartflow3/dashboards/dashboard_daytrack">Back to Day Track</a>'; ?>
</div>

</div>

</div>
</div>