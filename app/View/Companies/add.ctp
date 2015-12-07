<div class="companies form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Company'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Companies'), array('action' => 'index'), array('escape' => false)); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Company', array('role' => 'form')); ?>			
				 <div class="panel panel-default">
				 	<div class="panel-body">
				 		
				 			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('agency_type', array('class' => 'form-control', 'placeholder' => 'Agency Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address2', array('class' => 'form-control', 'placeholder' => 'Address2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('state_id', array('selected'=>'35','placeholder' => 'State Id',"style"=>'width: 100%;'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('zip_code', array('class' => 'form-control', 'placeholder' => 'Zip Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mail_address', array('class' => 'form-control', 'placeholder' => 'Mail Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mail_address2', array('class' => 'form-control', 'placeholder' => 'Mail Address2'));?>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('mail_city', array('class' => 'form-control', 'placeholder' => 'Mail City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('contact', array('class' => 'form-control', 'placeholder' => 'Contact'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sub_ident', array('class' => 'form-control', 'placeholder' => 'Sub Ident'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sub_tel', array('class' => 'form-control', 'placeholder' => 'Sub Tel'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('emp_numb', array('class' => 'form-control', 'placeholder' => 'Emp Numb'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fedtaxid', array('class' => 'form-control', 'placeholder' => 'Fedtaxid'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('npi', array('class' => 'form-control', 'placeholder' => 'Npi'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('receiver_name', array('class' => 'form-control', 'placeholder' => 'Receiver Name'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('receiver_code', array('class' => 'form-control', 'placeholder' => 'Receiver Code'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('receiver_code_2', array('class' => 'form-control', 'placeholder' => 'Receiver Code 2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sender_code', array('class' => 'form-control', 'placeholder' => 'Sender Code'));?>
				</div>				
				<div class="form-group"><b>Shifts</b>
					<?php echo $this->Form->input('am', array('class' => 'form-control', 'placeholder' => 'Shift', 'options' => array(''=>'None','am'=>'Morning/AM Shift'),
					'type' =>'select'));?>				
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pm', array('class' => 'form-control', 'placeholder' => 'Shift', 'options' => array(''=>'None', 'pm'=>'Evening/PM Shift'), 
					'type'=>'select'));?>
				</div>						
			</div></div></div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>
		
		<!-- end col md 12 -->
	</div><!-- end row -->
</div>