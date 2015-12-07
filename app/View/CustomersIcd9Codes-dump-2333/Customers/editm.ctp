<div class="customers form">

	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="page-header">
				<h1><?php echo __('Edit New Participants'); ?></h1>

				<?php
				if(!isset($_SESSION['legacy']))
							{
				$_SESSION['legacy']=0;
							}
				if(isset ($_GET['legacy']) && $_GET['legacy']==0)
				{
				$_SESSION['legacy']=0;
				}
				else if(isset ($_GET['legacy']) && $_GET['legacy']==1)
				{
				$_SESSION['legacy']=1;
				}
				if($_SESSION['legacy']==0)
				{
				echo "<a href='?legacy=1'>Switch to ICD 9</a>";
				}
				else if($_SESSION['legacy']==1)
				{
				echo "<a href='?legacy=0'>Switch to ICD 10</a>";
				}
				?>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-lg-3 col-sm-4">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants'), array('action' => 'index'), array('escape' => false)); ?></li>
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participants Ethnicities'), array('controller' => 'customer_ethnicities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant Ethnicity'), array('controller' => 'customer_ethnicities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Primary Diets'), array('controller' => 'primary_diets', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Primary Diet'), array('controller' => 'primary_diets', 'action' => 'add'), array('escape' => false)); ?> </li>
		
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Insurances'), array('controller' => 'insurances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Insurance'), array('controller' => 'insurances', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Status Codes'), array('controller' => 'status_codes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Status Code'), array('controller' => 'status_codes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Activity Registrations'), array('controller' => 'activity_registrations', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Activity Registration'), array('controller' => 'activity_registrations', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participant Attendances'), array('controller' => 'customer_attendances', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participant Attendance'), array('controller' => 'customer_attendances', 'action' => 'add'), array('escape' => false)); ?> </li>
				<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Participant Status'), array('controller' => 'customers', 'action' => 'status_index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Religions'), array('controller' => 'religions', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Religion'), array('controller' => 'religions', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Physicians'), array('controller' => 'physicians', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Physician'), array('controller' => 'physicians', 'action' => 'add'), array('escape' => false)); ?> </li>
										</div>
					</div>
				</div>
		</div><!-- end col lg 3 -->
		<div class="col-lg-9 col-sm-8">
			<?php echo $this->Form->create('Customer', array('role' => 'form',
				 'inputDefaults' => array('empty'=>'Choose one'))); ?>


<div class="">
					<?php echo $this->Form->input('id', array('class' => 'form-control'));?>
				</div>



  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
<!--         <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
 -->          Primary Information
<!--         </a>
 -->      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		<div class="panel-body">
		<div class="row"> <!-- 1st main row -->
			<div class="col-lg-6 col-sm-6">	  <!-- 1st column -->
	<div class="form-group col-lg-12">
					<?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name'));?>
				</div>
			
				<div class="form-group col-lg-9">
					<?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name'));?>
				</div>
					<div class="form-group col-lg-3">
					<?php echo $this->Form->input('mi', array('class' => 'form-control', 'label' => 'MI', 'placeholder' => 'MI'));?>
				</div>
					<div class="form-group col-lg-6">
					<?php echo $this->Form->input('client_sex', array('type'=>'select','options'=>array("M"=>"Male","F"=>"Female"),'class' => 'form-control', 'placeholder' => ' ', 'label' => 'Gender'));?>
				</div>
				
				
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('date_of_birth', array('type'=>'text',"data-date-format"=>"mm-dd-yyyy",'class' => 'form-control', 'placeholder' => 'Date Of Birth'));?>
				</div>
			<div class="form-group col-lg-6">
					<?php echo $this->Form->input('social_security', array('class' => 'form-control', 'placeholder' => '9 digit valid SSN'));?>
				</div>		

				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone 10 digit number'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('home_phone', array('class' => 'form-control', 'placeholder' => 'Home Phone'));?>
				</div>	
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('physician_id', array('class' => 'form-control', 'placeholder' => 'Physician'));?>
				</div>
								<div class="form-group col-lg-6">
					<?php echo $this->Form->input('admission_date', array('type'=>'text',"data-date-format"=>"mm-dd-yyyy",'class' => 'form-control', 'placeholder' => 'Admission Date'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('religion_id', array('class' => 'form-control', 'placeholder' => 'Religion'));?>
				</div>
					

			</div>
			<div class="col-lg-6 col-sm-6">  <!-- 2nd column -->

					<div class="form-group col-lg-12">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>

				
				<div class="form-group col-lg-12">
					<?php echo $this->Form->input('address2', array('class' => 'form-control', 'placeholder' => 'Address2'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('state_id', array('selected'=>'35','class' => '', 'placeholder' => 'State Id',"style"=>'width: 100%;'));?>
				</div>
				<div class="form-group col-lg-12">
					<?php echo $this->Form->input('zip_code', array('class' => 'form-control', 'placeholder' => 'Zip Code'));?>
				</div>		
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('birth_country', array('type'=>'select','options'=>$locationCountry,'class' => '', 'placeholder' => 'birth_state', 'label' => 'Birth Country',"style"=>'width: 100%;'));?>
				</div>
			<div class="form-group col-lg-6">
					<?php
				
					$editstate="";
					if(!empty($customer['LocationState']))
					{
					$editstate=$customer['LocationState']['id'];
				
					}
					 echo $this->Form->input('birth_state', array('type'=>'select','class' => '','options'=>$locationState, 'selected'=>$editstate, 'placeholder' => 'birth_country', 'label' => 'Birth State',"style"=>'width: 100%;'));?>
				</div>							

			</div>
		</div>
		</div>
		<div class="panel-body">
		<div class="row"> <!-- 2nd main row -->
			<div class="col-lg-6 col-sm-6"> <!-- 1st column -->
			
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('medicare_number', array('class' => 'form-control', 'placeholder' => 'Medicare Number'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('medicaid_number', array('class' => 'form-control', 'placeholder' => 'Medicaid Number'));?>
				</div>

				<div class="form-group col-lg-12"  id="">
					<?php
					if(isset($_SESSION['legacy']) && $_SESSION['legacy']==1)
					{
					echo $this->Form->input('Icd9Code', array('class' => '',"style"=>'width: 100%;', 'placeholder' => 'Select ICD9 codes', 'label' => 'ICD9 Code '));
					}
					else if(isset($_SESSION['legacy']) && $_SESSION['legacy']==0)
					{
					echo $this->Form->input('Icd10Code', array('class' => '',"style"=>'width: 100%;', 'placeholder' => 'Select ICD10 codes', 'label' => 'ICD10 Code '));
					}
					?>

				</div>
				
				
			</div>
			<div class="col-lg-6 col-sm-6">
	<div class="form-group">

				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('insurance_id', array('class' => 'form-control', 'placeholder' => 'Insurance Id'));?>
				</div>

				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('insurance_policy_number', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Policy Number', 'label' => 'Policy Number'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('precertref', array('class' => 'form-control', 'placeholder' => 'PRECERTREF 10-12 digit number', 'label' => 'Authorization'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('auth_expiry', array('type'=>'text','class' => 'form-control', 'placeholder' => 'Authorization Expiry', 'label' => 'Authorization Expiry'));?>
				</div>
			</div>
		</div>
		</div>
		<div class="panel-body">
			<div class="row"> <!-- 3rd main row -->
        			<div class="col-lg-12 col-sm-12">
        				<h4>Customer Schedule Table</h4>
        				</div>
        				<div class="row">
        				<div class="col-lg-12 col-sm-12">
        					<div class="col-lg-2 col-sm-2">
        						<div class="col-xs-6">Mon AM
        						<?php echo $this->Form->input('monday_am', array('class' => ' ', 'label' => ''));?>
        						</div>
        						<div class="col-xs-6">Mon PM
        						<?php echo $this->Form->input('monday_pm', array('class' => ' ', 'label' => ''));?>
        						</div>
        					</div>
        					<div class="col-lg-2 col-sm-2">
        						<div class="col-xs-6">Tues AM
        						<?php echo $this->Form->input('tuesday_am', array('class' => ' ', 'label' => ''));?>
        						</div>
        						<div class="col-xs-6">Tues PM
        						<?php echo $this->Form->input('tuesday_pm', array('class' => ' ', 'label' => ''));?>
        						</div>
        					</div>
        					<div class="col-lg-2 col-sm-2">
        						<div class="col-xs-6">Wed AM
        						<?php echo $this->Form->input('wednesday_am', array('class' => ' ', 'label' => ''));?>
        						</div>
        						<div class="col-xs-6">Wed PM
        						<?php echo $this->Form->input('wednesday_pm', array('class' => ' ', 'label' => ''));?>
        						</div>
        					</div>
        					<div class="col-lg-2 col-sm-2">
        						<div class="col-xs-6">Thus AM
        						<?php echo $this->Form->input('thursday_am', array('class' => ' ', 'label' => ''));?>
        						</div>
        						<div class="col-xs-6">Thus PM
        						<?php echo $this->Form->input('thursday_pm', array('class' => ' ', 'label' => ''));?>
        						</div>
        					</div>
        					<div class="col-lg-2 col-sm-2">
        						<div class="col-xs-6">Fri AM
        						<?php echo $this->Form->input('friday_am', array('class' => ' ', 'label' => ''));?>
        						</div>
        						<div class="col-xs-6">Fri PM
        						<?php echo $this->Form->input('friday_pm', array('class' => ' ', 'label' => ''));?>
        						</div>
        					</div>
        					<div class="col-lg-2 col-sm-2">
        						<div class="col-xs-6">Sat AM
        						<?php echo $this->Form->input('saturday_am', array('class' => ' ', 'label' => ''));?>
        						</div>
        						<div class="col-xs-6">Sat PM
        						<?php echo $this->Form->input('saturday_pm', array('class' => ' ', 'label' => ''));?>
        						</div>
        					</div>
        					<div class="col-lg-2 col-sm-2">
        						<div class="col-xs-6">Sun AM
        						<?php echo $this->Form->input('sunday_am', array('class' => ' ', 'label' => ''));?>
        						</div>
        						<div class="col-xs-6">Sun PM
        						<?php echo $this->Form->input('sunday_pm', array('class' => ' ', 'label' => ''));?>
        						</div>
        					</div>      						
        					</div>   							
        				</div>
		</div>
		</div>

      </div>
    </div>    </div>



  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
         Emergency Contact Information
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		<div class="panel-body">
						<div class="col-lg-6 col-sm-6">	

				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec1_name', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 1 Name'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec1_relationship', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 1 Relationship'));?>
				</div>
					<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec1_address', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 1 Address'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec1_phone', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 1 Phone Number'));?>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">	
					<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec2_name', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 2 Name'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec2_relationship', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 2 Relationship'));?>
				</div>
					<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec2_address', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 2 Address'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('ec2_phone', array('class' => 'form-control', 'placeholder' => '', 'label' => 'Emergency Contact 2 Phone Number'));?>
				</div>
		</div>
</div>
		</div>
		
		</div>
<div class="form-group panel-group">
				<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
			</div>
			
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Secondary Information
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

		<div class="row">
			<div class="col-lg-6 col-sm-6">	<!-- 1st column -->
				<div class="form-group">
					<?php echo $this->Form->input('photograph', array('class' => 'form-control', 'placeholder' => 'Photograph'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('education', array('class' => 'form-control', 'placeholder' => 'Education'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('primary_diet_id', array('class' => 'form-control', 'placeholder' => 'Primary Diet Id'));?>
				</div>
			
				
                <div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Valid Email'));?>
				</div>
				<div class="form-group">
                	<?php echo $this->Form->input('allergies', array('class' => 'form-control', 'placeholder' => 'Allergies'));?>
                </div>
                <div class="row">
				<div class="col-lg-12 col-sm-12">
					<div class="col-xs-6"><?php echo $this->Form->input('alcohol_allowed', array('class' => ' ', 'placeholder' => 'Alcohol Allowed'));?></div>
                					<div class="col-xs-6"><?php echo $this->Form->input('photos_allowed', array('class' => ' ', 'placeholder' => 'Photos Allowed'));?></div>
                					<div class="col-xs-6"><?php echo $this->Form->input('planned_short_stay', array('class' => ' ', 'placeholder' => 'Planned Short Stay'));?></div>
               						<div class="col-xs-6"><?php echo $this->Form->input('veteran', array('class' => ' ', 'placeholder' => 'Veteran'));?></div>
                					<div class="col-xs-6"><?php echo $this->Form->input('falls_risk', array('class' => ' ', 'placeholder' => 'Falls Risk'));?></div>
                					<div class="col-xs-6"><?php echo $this->Form->input('mobility', array('class' => ' ', 'placeholder' => 'Mobility'));?></div>
                					<div class="col-xs-6"><?php echo $this->Form->input('trips_allowed', array('class' => ' ', 'placeholder' => 'Trips Allowed'));?></div>
                					
				</div>

</div>
			</div>
			<div class="col-lg-6 col-sm-6">	<!-- 2nd column -->
				<div class="form-group">
					<?php echo $this->Form->input('fax_number', array('class' => 'form-control', 'placeholder' => 'Fax Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('occupation', array('class' => 'form-control', 'placeholder' => 'Occupation'));?>
				</div>
				<div class="form-group col-lg-6">
					<?php echo $this->Form->input('customer_ethnicity_id', array('class' => 'form-control', 'placeholder' => 'Participant Ethnicity Id'));?>
				</div>
				<div class="form-group col-lg-6">
                	<?php echo $this->Form->input('income', array('class' => 'form-control', 'placeholder' => 'Income'));?>
                </div>
				
				<div class="form-group">
					<?php echo $this->Form->input('application_date', array('type'=>'text',"data-date-format"=>"dd-mm-yyyy",'class' => 'form-control', 'placeholder' => 'Application Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('type'=>'textarea','rows'=>'10','class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>
			</div>
		</div>
		
			</div>
		</div>
      </div>
    		
	</div>
  </div>

</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col lg 9 -->
	</div><!-- end row -->
</div>
<?php
$this->Js->get('#CustomerBirthCountry')->event('change', 
$this->Js->request(array(
'controller'=>'customers',
'action'=>'get_state'
), array(
'update'=>'#CustomerBirthState',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);
?>