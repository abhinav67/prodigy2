<?php

	$this->loadModel('Customer');
	$this->loadModel('Insurance');
	$this->loadModel('Charge');
	$this->loadModel('Company');

	$checkCustomers = $this->Customer->find('first');    
	$checkInsurance = $this->Insurance->find('first');    
	$checkCharge = $this->Charge->find('first');    
	$checkCompany = $this->Company->find('first');    

	if(!$checkCustomers)
	{
	die('Cannot Generate Bill Because their is NO Customer Record in Database'); 
	}
	if(!$checkInsurance)
	{
	die('Cannot Generate Bill Because their is NO Insurance Record in Database'); 
	}
	if(!$checkCharge)
	{
	die('Cannot Generate Bill Because their is NO Charge Record in Database'); 
	}
	if(!$checkCompany)
	{
	die('Cannot Generate Bill Because their is NO Company Record in Database'); 
	}

	$checkInsuranceCharge = $this->Insurance->find('all');    
 	//pr($checkInsuranceCharge);
    	
    foreach ($checkInsuranceCharge as $check) {
    	# code...
    	if (empty($check['Charge'])) {
    			die("Cannot Generate Bill Because their is NO Charge Record in Database for {$check['Insurance']['name']} Insurance Company"); 

}
    }
?>