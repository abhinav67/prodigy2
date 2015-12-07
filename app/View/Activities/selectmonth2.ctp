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
			<div class="row text-center">
			<div class="col-md-12">
				<div class="col-md-2"><h4><b> Days </b></h4></div>
				<div class="col-md-2"><h4><b> Month </b></h4></div>
				<div class="col-md-2"><h4><b> Year </b></h4></div>
				<div class="col-md-2"><h4><b> Shift </b></h4></div>				
				<div class="col-md-3"><h4><b> Ethnicity </b></h4></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form method="get" action="<?php echo $this->webroot;?>activities/add/?>" >
		<div class="col-md-2">
		
			<div class="form-group">
    	<select name="days" required=required class='form-control' id='days'>
    		<option disabled selected>Select Days</option>
    		<?php
    		for($a=1;$a<=31;$a++) {
    			echo "<option>". $a ."</option>\n";}
    		?>

		
		
		</select>
	</div></div>

			<div class="form-group col-md-2">
    	<select name="month" required=required class='form-control' id='month'>
    		<option disabled selected>Select Month</option>
		<?php
    		for($a=1;$a<=12;$a++) {
    			echo "<option>". $a ."</option>\n";}
    		?>

		</select>
	</div>

	 <div class="form-group col-md-2">
    	<select name="year" required=required class='form-control' id='year'>
		<option disabled selected>Select Year</option>
		<option><?php echo $dt; ?></option>
		<option><?php echo $dt2; ?></option>
		<option><?php echo $dt1; ?></option>
		</select>
	</div>
	 <div class="form-group col-md-2">
    	<select name="shift" required=required class='form-control' id='shift'>
		<option disabled selected>Select Shift</option>
		<option>am</option>
		<option>pm</option>
		
		</select>
	</div>
	<div class="form-group col-md-3">
    	<select name="ethnicity" required=required class='form-control' id='ethnicity'>
    		<option disabled selected>Select Ethnicity</option>
    		<?php

foreach($etypes as $etype)
    {
    echo "<option value=\"$etype\">". $etype ."</option>\n";    
}

?>
		
		
		</select>
	</div></div></div>
			
			
				<div class="form-group">
    <input type="submit" value="Go To Activities" class="btn btn-default" style="
    margin-left: 31px">
</form></div>
				

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
