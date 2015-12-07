	<?php
	//search code starts	
	$options1=str_replace("_", " ", $options);
	$options1 = array_map('ucwords', $options1);
	echo "<div class=\"col-md-5\">";
	
	$params = $this->Paginator->params();
	if($params['page']>1){
		//echo "Dinesh's Search Code";
	}
	else {
	
	echo $this->Form->create('Search', array('type' => 'get'));
	$fcnn=str_replace("_", " ", $fcn);
	echo $this->Form->input("search",array('type' => 'text','label' => "Search ",'class' => 'query form-control','id'=>"{$model}", 'div'=>false));
	echo "<br>";
	echo "</div><div class=\"col-md-3\">";
	echo $this->Form->input('field',array('type' => 'select','class' => 'field form-control', 'div'=>false, 'options' => $options1));
	echo "</div>   <div class=\"searchpad\">";
	echo "<br>";
	$options = array(
    'label' => 'Search',
    'div' => false,
    'class' => 'search btn btn-default');
	echo $this->Form->end($options);
	//echo $fcn;	
	echo "<button class='btn btn-default' onclick='myFunction()'>Reset Search Modifiers</button>";
	}
	?>
	<div class="col-md-12">
	<?php
	if(isset($searchparameter))
	{
	echo $this->Paginator->counter(array(
	'format' => __("Your search for \"{$searchparameter}\" in \"{$fieldparameter}\" returned {:count} results, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}")
	));
	}?></div></div>
	<script>
	function myFunction(){
    top.location.href = location.protocol + '//' + location.host + location.pathname;
	}
	</script>
	<!--search code ends-->