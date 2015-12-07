<?php
$dte=$year."-".$month."-"."01";
//$dte1=strtotime("$dte +1 days");

$no=1;
?>
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
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Activity Type'), array('controller' => 'activity_types', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php if($days>=1){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 1</p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('0.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte")),'readonly'=>true,'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true,'readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('0.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('0.time', array('type' => '', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('0.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('0.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=2){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 2 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('1.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +1 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('1.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('1.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('1.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('1.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=3){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 3 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('2.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +2 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('2.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('2.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('2.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('2.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=4){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 4 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('3.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +3 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('3.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('3.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('3.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('3.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=5){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 5 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('4.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +4 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('4.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('4.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('4.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('4.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=6){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 6 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('5.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +5 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('5.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('5.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('5.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('5.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=7){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 7 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('6.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +6 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('6.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('6.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('6.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('6.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=8){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 8 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('7.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +7 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('7.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('7.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('7.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('7.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=9){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 9 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('8.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +8 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('8.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('8.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('8.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('8.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=10){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 10 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('9.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +9 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('9.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('9.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('9.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('9.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=11){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 11 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('10.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +10 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('10.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('10.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('10.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('10.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=12){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 12 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('11.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +11 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('11.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('11.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('11.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('11.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=13){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 13 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('12.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +12 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('12.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('12.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('12.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('12.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=14){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 14 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('13.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +13 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('13.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('13.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('13.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('13.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=15){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 15 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('14.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +14 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('14.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('14.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('14.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('14.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=16){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 16 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('15.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +15 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('15.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('15.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('15.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('15.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=17){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 17 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('16.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +16 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('16.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('16.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('16.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('16.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=18){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 18 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('17.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +17 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('17.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('17.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('17.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('17.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=19){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 19 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('18.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +18 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('18.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('18.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('18.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('18.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=20){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 20 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('19.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +19 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('19.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('19.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('19.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('19.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=21){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 21 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('20.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +20 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('20.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('20.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('20.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('20.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=22){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 22 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('21.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +21 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('21.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('21.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('21.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('21.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=23){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 23 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('22.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +22 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('22.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('22.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('22.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('22.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=24){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 24 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('23.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +23 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('23.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('23.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('23.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('23.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=25){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 25 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('24.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +24 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('24.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('24.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('24.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('24.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=26){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 26 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('25.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +25 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('25.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('25.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('25.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('25.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=27){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 27 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('26.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +26 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('26.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('26.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('26.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('26.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=28){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 28 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('27.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +27 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('27.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('27.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('27.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('27.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=29){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 29 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('28.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +28 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('28.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('28.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('28.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('28.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=30){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 30 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('29.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +29 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('29.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('29.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('29.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('29.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			<?php if($days>=31){?>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-1"><p class="text-center" style="margin-top: 70%;"> 31 </p></div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('30.date', array('type' => 'text', 'default'=>date('M-d-Y', strtotime("$dte +30 days")),'label'=>'', 'class' => 'form-control', 'placeholder' => 'Date','readonly'=>true));?>
				</div>
				
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('30.activity_type_id1', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id1'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('30.time', array('type' => 'text', 'label'=>'','class' =>'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('30.activity_type_id2', array('label'=>'','options'=>$atypes,'class' => 'form-control', 'placeholder' => 'Activity Type Id2'));?>
				</div>
				<div class="form-group col-md-2">
					<?php echo $this->Form->input('30.time1', array('type' => 'text', 'label'=>'','class' => 'form-control', 'placeholder' => 'Time1'));?>
				</div>
				</div>
			</div><?php }?>
			
			
			
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('label'=>'','class' => 'btn btn-default')); ?>
				</div>
				
			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>