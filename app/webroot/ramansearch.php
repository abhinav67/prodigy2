<?php

/*function lcfirst($str) {
        $str[0] = strtolower($str[0]);
        return $str;
    }*/
	$optionscount=count ($options);
	$this->set('options',  $options);
	$fcn=strtolower($this->params['controller']);
	//pr($this->params['controller']);
	$model = Inflector::camelize(Inflector::singularize($this->params['controller']));
	$this->set(compact('model'));
	$this->set('fcn', ucfirst( $fcn));
	
	$fcn=str_replace(" ", "_", $fcn);
	$fcn=Inflector::camelize($fcn);
	$fcn=lcfirst ( $fcn);
	
	$this->set('model',$model);
	
	$this->loadModel('Search');
	
	if(isset($_GET['search']) && $this->Search->validates() && preg_replace("/[^0-9]/",'',$this->request->query['field'])<$optionscount)
	{
	$searchparameter=preg_replace("/[^A-Za-z0-9-]/",'',$this->request->query['search']);
	$fieldparameter0=preg_replace("/[^0-9]/",'',$this->request->query['field']);	
	$fieldparameter=$options[$fieldparameter0];	
	
	if(!isset($conditionModel))
	{
	$conditionModel=$model;
	}
	else
	{
	$this->loadModel("{$conditionModel}");
	}
	
	// we prepare our query, the cakephp way!
    $this->paginate = array(
        'conditions' => array("{$conditionModel}.{$fieldparameter} LIKE" => "%".$searchparameter."%"),
        'limit' => 10,
        //'order' => array('id' => 'desc')
    );
     
    // we are using the 'User' model
    $check = $this->paginate("{$model}");
     
    // pass the value to our view.ctp
	$this->set($fcn,  $check);
	
	$this->set('searchparameter', ucfirst ($searchparameter));
	$this->set('fieldparameter', ucwords (str_replace("_", " ", $fieldparameter)));
	
	}
	
	else{
	$this->$model->recursive = $r;
	//$cspace	=str_replace(" ", "", $this->params['controller']);
	$this->set($fcn, $this->Paginator->paginate());
	}

	//search code ends here
	?>