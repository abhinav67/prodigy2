<?php
	
	$this->loadModel('BillingReconciliation');

	$ultimatecustomer=array();
	$i=2;
	$counter=11;
$this->loadModel('Charge');
foreach ($icustomers as $id)
{
	
	$containAttendance = $this->Customer->find('first',
    array(
    'contain' => array(
	'CustomerAttendance' => array(
        'conditions' => 
			array('date >=' =>  $select['Billing']['fromDate'],   //billing from date
			   	  'date <=' => $select['Billing']['tillDate']		//billing till date
				),
	'order'=>array('date ASC')
								)
					),
	'fields' => array('Customer.id'),
	'conditions'=>array('id'=>$id)
        )
	);
	$get_customer_attendance = $containAttendance['CustomerAttendance']; //if empty can exit this loop
	//pr($containAttendancee);
	if(!empty($get_customer_attendance))
	{
	$k=0;
	foreach($get_customer_attendance as $a_dates)
	{
	$c_bill_dates_dup[$k]=str_replace("-","-",$a_dates['date']);
	$k++;
	}
	$c_bill_dates=array_unique($c_bill_dates_dup);
	
	$customer= $this->Customer->findById($id);
	
	$sub_id= $customer ['Customer']['id'];          //in reconciliation table
	$sub_pcr= $customer ['Customer']['precertref'];
	$sub_last_name=$customer ['Customer']['last_name'];
	$sub_first_name= $customer ['Customer']['first_name'];
	$sub_address=$customer ['Customer']['address'];	
	$sub_city=$customer ['Customer']['city'];
	$sub_state=$customer ['State']['abbrev'];
	$sub_zip_code= str_replace("-","",$customer ['Customer']['zip_code']); //strip-
	$sub_dob= str_replace("-","",$customer ['Customer']['date_of_birth']);
	$sub_sex=$customer ['Customer']['client_sex'];
	
	$insuranceId= $customer['Insurance']['id'];
	$epayer_name= $customer['Insurance']['name'];
	$epayer_id= $customer['Insurance']['payer_code'];
	$sub_insurance_pn=$customer['Customer']['insurance_policy_number'];
	$iaddress= $customer['Insurance']['address_1'];
	$icity= $customer['Insurance']['city'];
	$izip= $customer['Insurance']['zip_code'];
	$this->loadModel('State');
	$statecode1= $this->State->findById($customer['Insurance']['state_id']);
	$istatecode=$statecode1['State']['abbrev'];
	
	/*
	//DB CHANGES
	$iaddress="3423 47D";
	$icity="edison";
	$izip="08820-0000";
	$istatecode="NJ";
	*/
	
	if(empty($customer['Icd10Code']))
	{
	$prefixSecondary="BF";
	$prefixPrimary="BK";
	$pcode=array_shift($customer['Icd9Code']);
	$scodes=$customer['Icd9Code'];
	}
	else
	{
	$prefixPrimary="ABK";
	$prefixSecondary="ABF";
	$pcode=array_shift($customer['Icd10Code']);
	$scodes=$customer['Icd10Code'];
	}
	if (isset($customer['Icd10Code']) or isset($customer['Icd9Code']))
	{
	$pstring="HI*{$prefixPrimary}:{$pcode['code']}";
	$sstring="";
	
	foreach ($scodes as $scode)
	{
	$sstring .="*{$prefixSecondary}:{$scode['code']}";
	}

	$icdsanitize=array('-','.');
	$firststring=str_replace($icdsanitize,"",$pstring);
	$secondstring=str_replace($icdsanitize,"",$sstring);
	
	$icdline=$firststring.$secondstring;
	}
	else
	{
	$icdline="";
	}
	$total_claim=0;
	$l=1;
	$d_c_counter=17;
	$serviceline="";

	foreach($c_bill_dates as $service_date)
	{
		$datestamp=date("M-d-Y",strtotime($service_date));
		
		$charge= $this->Charge->find(
			'first',array (
			'recursive' => 0,
			'conditions'=>array('Charge.start_date' <= $datestamp, "Charge.insurance_id = "=> $insuranceId),
			'order' => array('Charge.date DESC'),
		));

		$sub_charges= $charge['Charge']['amount'];
   // pr($sub_charges);
    //pr($sub_chargess);
	$serviceline.="LX*{$l}~SV1*HC:S5102*{$sub_charges}*UN*1*99**1:2~DTP*472*D8*{$service_date}~REF*6R*{$i}{$l}~";
	
	$total_claim=$total_claim+$sub_charges;
	
	$d_c_counter=$d_c_counter+4;
	$l++;
	}
//pr($datstamp);
	//customers loop starts
	$ultimatecustomer[$id]="HL*{$i}*1*22*0~SBR*P*18*******MC~NM1*IL*1*{$sub_last_name}*{$sub_first_name}****MI*{$sub_insurance_pn}~N3*{$sub_address}~N4*{$sub_city}*{$sub_state}*{$sub_zip_code}~DMG*D8*{$sub_dob}*{$sub_sex}~NM1*PR*2*{$epayer_name}*****PI*{$epayer_id}~N3*{$iaddress}~N4*{$icity}*{$istatecode}*{$izip}~CLM*{$sub_id}*{$total_claim}***11:B:1*Y*A*Y*Y~REF*G1*{$sub_pcr}~{$icdline}~NM1*82*2*{$agency_name}*****XX*{$agency_hipaa_npi}~NM1*77*2*{$agency_name}*****XX*{$agency_hipaa_npi}~N3*{$agency_address}~N4*{$agency_city}*{$agency_state}*{$agency_zip_code}~REF*G2*{$agency_fedtaxid}~{$serviceline}";   //
	//customers loop ends

	$this->BillingReconciliation->create( );
	$checkReconciliation=$this->BillingReconciliation->find('first',array('conditions'=>array('BillingReconciliation.customer_id'=>$sub_id,
																 'BillingReconciliation.billing_record_id'=>$BillingRecordsID)));


	if(!empty($checkReconciliation))
	{
	$NewBillingReconciliation=array("BillingReconciliation"=>array(
		'id'=>$checkReconciliation['BillingReconciliation']['id'],
		'billing_record_id'=>$BillingRecordsID,  
		'customer_id'=>$sub_id,	
		'amount_charged'=>$total_claim
	));
	$this->BillingReconciliation->Save($NewBillingReconciliation);
	}
	else
	{
	$NewBillingReconciliation=array("BillingReconciliation"=>array(
		'billing_record_id'=>$BillingRecordsID,  
		'customer_id'=>$sub_id,	
		'amount_charged'=>$total_claim
	));
	$this->BillingReconciliation->Save($NewBillingReconciliation);
	}

	unset($checkReconciliation);

	$counter=$counter+$d_c_counter;
	unset($c_bill_dates);
	unset($get_customer_attendance);
	unset($containAttendance);
	unset($c_bill_dates_dup);
	
	unset($pcode);
	unset($scodes);
	unset($customer['Icd9Code']);
	unset($customer['Icd10Code']);
	
	
	$i++;
	

	}
	
}

	if($counter==11)
	{
	die('<h3>No attendance record present for this date range.</h3>');
	}	
	
	
?>