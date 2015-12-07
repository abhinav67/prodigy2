<?php
	//to fetch customers list
	$this->loadModel('Customers');
	$customers = $this->Customers->find(
	'list',array (
	'conditions' => array('status_code' =>  ''),
    'recursive' => 0,
	));	
	
?>