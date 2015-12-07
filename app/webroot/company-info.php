<?php	

	$this->loadModel('BillingRecords');

	$checkBilling=$this->BillingRecords->find('first',array('conditions'=>array('BillingRecords.from_date'=>$select['Billing']['fromDate'],
																 'BillingRecords.to_date'=>$select['Billing']['tillDate'])));


	if(!empty($checkBilling))
	{
	$NewBillingRecords=array("BillingRecords"=>array(
		'id'=>$checkBilling['BillingRecords']['id'],
		'from_date'=>$select['Billing']['fromDate'],  
		'to_date'=>$select['Billing']['tillDate'],
		'lug_file_name'=>$select['Billing']['fileName'],
	));
	$this->BillingRecords->Save($NewBillingRecords);
	}
	else
	{
	$NewBillingRecords=array("BillingRecords"=>array(
		'from_date'=>$select['Billing']['fromDate'],  
		'to_date'=>$select['Billing']['tillDate'],
		'lug_file_name'=>$select['Billing']['fileName'],	
	));
	$this->BillingRecords->Save($NewBillingRecords);
	}

	$checkBilling=$this->BillingRecords->find('first',array('conditions'=>array('BillingRecords.from_date'=>$select['Billing']['fromDate'],
																 'BillingRecords.to_date'=>$select['Billing']['tillDate'])));
	
	$BillingRecordsID=$checkBilling['BillingRecords']['id']; //stored for billing reconciliation
	
	//get company details
	$this->loadModel('Company');
	$company= $this->Company->find('first');
	
	$companyname=$company['Company']['name'];
	$agency_address=$company['Company']['address'];
	$agency_city=$company['Company']['city'];
	$agency_dth=$company['Company']['contact'];
	$agency_fedtaxid= $company['Company']['fedtaxid'];
	$agency_hipaa_npi= $company['Company']['npi'];
	$agency_name=$company['Company']['name'];
	$agency_state=$company['State']['abbrev'];
	$agency_subident=$company['Company']['sub_ident'];
	$agency_subtel=$company['Company']['sub_tel'];
	$agency_taxonomy=$company['Company']['fedtaxid'];
	$agency_zip_code=str_replace("-","",$company['Company']['zip_code']); //strip 

	//get charges latest
/*
	$this->loadModel('Charge');
	$charge= $this->Charge->find(
	'first',array (
    'recursive' => 0,
	'order' => array('Charge.id DESC'),
	));
	$sub_charges= round($charge['Charge']['amount']);
	*/

	$gc=date("is");					//3600
	$unknown_1="00000{$gc}";	 //add unique codes
	
	//not added to db
	$unknown_2=$company['Company']['receiver_code_2'];		//second receiver_id 2
	//$unknown_3="2352";  									// can be 40
	$health_plan=$company['Company']['receiver_name'];		//receiver_name
	
	//important
	//$originalDate = "2010-03-21";
	//$customer_loop_date = date("Ymd", strtotime($select['Billing']['Date']));
	//$to_date = date("Ymd", strtotime($select['Billing']['toDate']));
	
	date_default_timezone_set('UTC');
	$ccyymmdd=date("M-d-Y");
	$yymmdd=date("M-d-Y");
	$hhmm=date("Hi");
	$hhmmss=date("His");
	
	$sender_id=$company['Company']['sender_code'];
	$receiver_id=$company['Company']['receiver_code'];
		
?>