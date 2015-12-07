<div class="activities form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Activity'); ?></h1>
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
				<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Activities'), array('action' => 'index'), array('escape' => false)); ?></li>
				<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Activity Types'), array('controller' => 'activity_types', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Activity Type'), array('controller' => 'activity_types', 'action' => 'add'), array('escape' => false)); ?> 
								</li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Activity', array('role' => 'form', 'inputDefaults' => array('empty'=>'Choose one'))); ?>
			<div class="row text-center">
				<div class="col-md-12">
				<div class="col-md-1"><h4><b> Day </b></h4></div>
				<div class="col-md-2"><h4><b> Date </b></h4></div>
				<div class="col-md-2"><h4><b> Activity 1 </b></h4></div>
				<div class="col-md-2"><h4><b> Time 1 </b></h4></div>				
				<div class="col-md-2"><h4><b> Activity 2 </b></h4></div>
				<div class="col-md-2"><h4><b> Time 2 </b></h4></div>				
				</div>
			</div>
			<?php
			$n=0;
			$total=$check-$check1;
			?>
   <div class="row">
	<?php
		for ($e=0, $x=$check1; $e<=$total, $x<=$check; $e++, $x++) {?>
					<?php
						$dte=$year."-".$month."-".$x;
					?>
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> <?php echo $x; ?></p>
				</div>
				<div class="form-group col-md-2">
				<?php echo $this->Form->input("$e.date", array('type' => 'text', 'default'=>date('Y-m-d', strtotime("$dte + $n days")),'readonly'=>true,'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','disabled' => 'disabled','readonly'=>true,'readonly'=>true,
					'style' => 'margin-top:20px;'));?>
				<?php echo $this->Form->input("$e.date", array('type' => 'hidden', 'default'=>date('Y-m-d', strtotime("$dte + $n days")),'readonly'=>true,'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date', 'value' => $dte,
					'style' => 'margin-top:20px;'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input("$e.activity_type_id1", array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input("$e.time", array('type' => '', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input("$e.activity_type_id2", array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input("$e.time1", array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div>
<?php
}
?>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('label'=>'','class' => 'btn btn-default')); ?>
				</div>
				
			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
