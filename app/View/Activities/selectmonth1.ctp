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
				<div class="col-md-2"><h4><b> From </b></h4></div>
				<div class="col-md-4"><h4><b> To </b></h4></div>
				<div class="col-md-2"><h4><b> Shift </b></h4></div>				
				<div class="col-md-3"><h4><b> Ethnicity </b></h4></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form method="get" action="<?php echo $this->webroot;?>activities/add1/?>" >
		<div class="col-md-3">
			<div class="form-group">
    	<input name="fromdays" type="date" required=required class='form-control' id='fromMonth' 
    	placeholder='From Date'/>
	</div></div>

			<div class="form-group col-md-3">
			<div class="form-group">
    	<input name="days" type="date" required=required class='form-control' id='Month' 
    	placeholder='To Date'/>
	</div>
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
    <input type="submit" value="Go To Activities" class="btn btn-success" style="
    margin-left: 31px">
</form></div>
				

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
