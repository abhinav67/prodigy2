<?php

		
	// to fetch those customers whose payer_name_id is 1
	$this->loadModel('Customers');
	$customers = $this->Customers->find(
	'list',array (
	'conditions' => array('payer_name_id' =>  $select['Billing']['payernames']),
    'recursive' => 0,
	));
	//to fetch customers list
	//$this->loadModel('Customers');
	$customers = $this->Customers->find(
	'list',array (
	'conditions' => array('payer_name_id' =>  $select['Billing']['payernames']),
    'recursive' => 0,
	));	
	
	$ultimatecustomer=array();
	$i=2;

	foreach ($customers as $id)
	
	{
	
	$this->loadModel('Customer');
	$customer= $this->Customer->findById($id);
	
	$this->loadModel('CustomerInsurance');
	$insurancecompany= $this->CustomerInsurance->find(
	'first',array (
	'conditions' => array('Customer.id' =>  $id),
    'recursive' => 1,
	'order' => array('CustomerInsurance.Insurance_Start_Date DESC'),
	));	

?>