<?php $setdatedate=date("m-d-Y");?>
<div class="form">

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
    		<div class="col-md-4">
<form method="get" action="<?php echo $this->webroot;?>customer attendances/add/?>">
	<div class="form-group">
    	<input type="text" name="select_date" value="" required=required class='form-control'  id='url' placeholder="Select Date">
    </div>
    <div class="form-group">
    	<select name="shift" required=true class='form-control' id='shift'>
	<option><?php echo($comp[0]['Companies']['am']); ?></option>
    <option><?php echo($comp[0]['Companies']['pm']); ?></option>
    </select>
	</div>
	<div class="form-group">
    <input type="submit" value="Get Expected Attendances" class="btn btn-default">
</form></div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>