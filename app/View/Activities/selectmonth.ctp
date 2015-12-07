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
				<div class="col-md-6"><h4><b>Add Monthly</b></h4></div>				
				<div class="col-md-6"><h4><b> Add Daily </b></h4></div>
			</div>
		</div>
		<div class="row" style="margin-top:25px;">
			<a href="<?php echo $this->webroot; ?>activities/selectmonth1/"> <div class="col-md-5 btn btn-primary" role="buttton" style="margin-left: 45px; margin-right: 40px;"> Monthly </div></a>
			<a href="<?php echo $this->webroot; ?>activities/selectmonth2/"</a><div class="col-md-5 btn btn-primary" role="buttton"> Daily </div></a>
			</div><!-- end row -->
</div>
