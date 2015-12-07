<div class="vendorMasters form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Vendor Master'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('VendorMaster.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('VendorMaster.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Vendor Masters'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Vendor Types'), array('controller' => 'vendor_types', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vendor Type'), array('controller' => 'vendor_types', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-8">
			<?php echo $this->Form->create('VendorMaster', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('vendor_type_id', array('class' => 'form-control', 'placeholder' => 'Vendor Type Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone_number', array('class' => 'form-control', 'placeholder' => 'Phone Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('setup_date', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Setup Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('payment_term', array('type'=>'select','options'=>array("30 days"=>"30 days","45 days"=>"45 days","60 days"=>"60 days","90 days"=>"90 days","other"=>"other"),'class' => 'form-control', 'placeholder' => ' ', 'label' => 'Payment Terms'));?>
				</div>
				<!--<div class="form-group">
					
					<select name="payment" required=true class='form-control' id='payment' label='Payment Terms'>
					<option>30 days</option>
					<option>45 days</option>
					<option>60 days</option>
					<option>90 days</option>
					<option>Other</option>
					</select>

				</div>-->
				<div class="form-group">
					<?php echo $this->Form->input('tax', array('class' => 'form-control', 'placeholder' => 'Tax'));?>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('pc_name', array('class' => 'form-control', 'placeholder' => 'Primary Contact Name','label'=>'Primary Contact Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pc_phone', array('class' => 'form-control', 'placeholder' => 'Primary Contact Phone','label'=>'Primary Contact Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pc_email', array('class' => 'form-control', 'placeholder' => 'Primary Contact Email','label'=>'Primary Contact Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pc_fax', array('class' => 'form-control', 'placeholder' => 'Primary Contact Fax','label'=>'Primary Contact Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sc_name', array('class' => 'form-control', 'placeholder' => 'Secondary Contact Name','label'=>'Secondary Contact Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sc_phone', array('class' => 'form-control', 'placeholder' => 'Secondary Phone','label'=>'Secondary Contact Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sc_email', array('class' => 'form-control', 'placeholder' => 'Secondary Contact Email','label'=>'Secondary Contact Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sc_fax', array('class' => 'form-control', 'placeholder' => 'Secondary Contact Fax','label'=>'Secondary Contact Fax'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
			</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>
			</div>
			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
