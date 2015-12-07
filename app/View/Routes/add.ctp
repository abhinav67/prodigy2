<div class="routes form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Route'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Routes'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Driver Logs'), array('controller' => 'driver_logs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Driver Log'), array('controller' => 'driver_logs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Vehicles'), array('controller' => 'vehicles', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vehicle'), array('controller' => 'vehicles', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-4">
			<?php echo $this->Form->create('Route', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('primary_employee_id', array('options'=>$employes,'class' => 'form-control', 'label'=>'Primary Driver'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('secondary_employee_id', array('options'=>$employes,'class' => 'form-control','label'=>'Secondary Driver'));?>
				</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places"></script>
<script type="text/javascript">
  var placeSearch,autocomplete;
  function initialize() {
    autocomplete = new google.maps.places.Autocomplete(document.getElementById('autocomplete'), { types: [ 'geocode' ] });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      fillInAddress();
    });
    autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('autocomplete2'), { types: [ 'geocode' ] });
    google.maps.event.addListener(autocomplete2, 'place_changed', function() {
    fillInAddress();
});
  }
  function fillInAddress() {
    var place = autocomplete.getPlace();
    }
</script>
				<body onload="initialize()">
    				<div class="form-group">
					<?php echo $this->Form->input('from', array('class' => 'form-control', 'placeholder' => 'Enter driver pickup location', 'id' => 'autocomplete', 'autocomplete' => 'off'));?>
				</div>
    				<div class="form-group">
					<?php echo $this->Form->input('to', array('class' => 'form-control', 'placeholder' => 'Enter driver pickup location', 'id' => 'autocomplete2', 'autocomplete' => 'off'));?>
				</div>
				</body>

				<div class="form-group">
					<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notes', array('class' => 'form-control', 'placeholder' => 'Notes'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
