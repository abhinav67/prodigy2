<?php

	$this->loadModel('PayerName');
	$this->set('payernames', $this->PayerName->find('list'));
	
	if ($this->request->is('post')) {
         
	$this->set('selected', $this->request->data);
	$select=$this->request->data;
	
	$this->loadModel('PayerName');
	$payername= $this->PayerName->findById($select['Billing']['payernames']);
	
	$this->loadModel('Company');
	$company= $this->Company->find('first');
	
	$companyname=$company['Company']['first_name']." ".$company['Company']['last_name'];
	
	$this->loadModel('Charge');
	$charge= $this->Charge->find(
	'first',array (
    'recursive' => 0,
	'order' => array('Charge.id DESC'),
	));
	
$sub_charges= round($charge['Charge']['amount']);
	
$agency_address=$company['Company']['address'];
$agency_city=$company['City']['title'];
$agency_dth=$company['Company']['contact'];
$agency_fedtaxid= $company['Company']['fedtaxid'];
$agency_hipaa_npi= $company['Company']['npi'];
$agency_name=$companyname;
$agency_state=$company['State']['state_code'];
$agency_subident=$company['Company']['sub_ident'];
$agency_subtel=$company['Company']['sub_tel'];
$agency_taxonomy=$company['Company']['taxonomy'];
$agency_zip_code=str_replace("-","",$company['Company']['zip_code']); //strip -

$gc=date("is");//3600
$unknown_1="00000{$gc}";	 //add unique codes
$unknown_2="610515"; 		//second receiver_id 2
//$unknown_3="2352";  		// can be 40
$health_plan="New Jersey Medicaid"; //receiver_name

//$originalDate = "2010-03-21";
//$newDate = date("d-m-Y", strtotime($originalDate));

date_default_timezone_set('UTC');
$ccyymmdd=date("M-d-Y");
$yymmdd=date("M-d-Y");
$hhmm=date("Hi");
$hhmmss=date("His");

$sender_id=$payername['PayerName']['payer_id_sender'];
$receiver_id=$payername['PayerName']['payer_id_receiver'];

//DB CHANGES
$iaddress="3423 47D";
$icity="edison";
$izip="08820-0000";
$istatecode="NJ";

?>