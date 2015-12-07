<?php
	$bheader="ISA*00*          *00*          *ZZ*{$sender_id}      *ZZ*{$receiver_id}      *{$yymmdd}*{$hhmm}*^*00501*{$unknown_1}*1*T*:~GS*HC*{$sender_id}*{$receiver_id}*{$ccyymmdd}*{$hhmm}*{$gc}*X*005010X222A1~ST*837*{$unknown_1}*005010X222A1~BHT*0019*00*{$unknown_1}*{$ccyymmdd}*{$hhmm}*CH~NM1*41*2*{$agency_name}*****46*{$agency_subident}~PER*IC*{$agency_dth}*TE*{$agency_subtel}~NM1*40*2*{$health_plan}*****46*{$unknown_2}~HL*1**20*1~NM1*85*2*{$agency_name}*****XX*{$agency_hipaa_npi}~N3*{$agency_address}~N4*{$agency_city}*{$agency_state}*{$agency_zip_code}~REF*EI*{$agency_fedtaxid}~";
	
	$csvContents=$bheader;
	//$counter=11;
	foreach($ultimatecustomer as $customer0billing)
	{
	$csvContents.=($customer0billing);
	//$counter= $counter + 21;
	}	
	
	$bfooter="SE*{$counter}*{$unknown_1}~GE*1*{$gc}~IEA*1*{$unknown_1}~";
	
	$csvContents.=$bfooter;

	$ClaimsNumber=$this->BillingReconciliation->find('count',array('conditions'=>array('BillingReconciliation.billing_record_id'=>$BillingRecordsID)));

	$this->BillingReconciliation->virtualFields['TotalClaimsAmount'] = 'SUM(BillingReconciliation.amount_charged)';
	$TotalClaimsAmount = $this->BillingReconciliation->find('first', array('conditions'=>array('BillingReconciliation.billing_record_id'=>$BillingRecordsID),'fields' => array('TotalClaimsAmount')));
    //my code//////////////////////////////////////////////
   		$expectedccustomers=array();
	
	
		$this->loadModel('Customer');
		$day= date("l",strtotime(date('Mdy')));
		//pr($day);
		$gettodaycustomers=array(
      	'conditions' => array(
      			array(
      			'OR'=>array(
      			array("{$day}"."_"."am" => 1),
      			array("{$day}"."_"."pm" => 1)
      			)
      			),
      			'Customer.status_code_id' =>  ''), //array of conditions
      	'fields' => array('id','insurance_id'),
      	'recursive' => 0
   		);
   		$expectedccustomers=$this->Customer->find('list',$gettodaycustomers);
   		
	
   		//$expectedcustomers[$i]=array($this->Customer->find('count',$gettodaycustomers));
   		//pr($expectedccustomers);
   		$this->set('expectedccustomers',$expectedccustomers);
   // pr($expectedccustomers);
   



//$datestamp=date("M-d-Y",strtotime("-1 weeks"));

		$this->loadModel('Charge');
		$mth= array(//'recursive' => 0,
			//'conditions'=>array('Charge.start_date >=' => $datestamp),
			'order' => array('Charge.date DESC'),
			'fields' => array('insurance_id','amount')
		);
		//pr($mth);
		$charge= $this->Charge->find('list',$mth);
		//pr($charge);

		foreach($expectedccustomers as $key => $value){
			//pr($key);
			//pr($value);
			
				$fin[$key] = $charge[$value];
				//pr($fin);
			
			
		}
		$summ = array_sum($fin);
		//pr($summ);
			$this->set('summ',$summ);
    //my code//////////////////////////////////////////////
 $one = $select['Billing']['fromDate'];
      $ag= date('Y-m-d',strtotime($one));

	if(!empty($checkBilling))
	{
	$NewBillingRecords=array("BillingRecords"=>array(
		'id'=>$BillingRecordsID,
		'claims_submitted'=>$ClaimsNumber,  
		'amount_charged'=>$TotalClaimsAmount['BillingReconciliation']['TotalClaimsAmount'],
		'expected' => $summ	,
		'date_m' => $ag
	));
	$this->BillingRecords->Save($NewBillingRecords);
	}
	
?>