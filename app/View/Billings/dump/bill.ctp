<?php
if (isset($selected))
{
echo "<pre>";
print_r($selected);

echo $selected['Billing']['customers'];

echo "</pre>";

$result = array_merge($customer, $icd9customer, $icd10customer, $company, $charge, $schedulecode);

/*
foreach ($icd9codes as $icd9code)
{
$item[]=$icd9code['code'];
}
$items=implode(',',$item);
echo $items;
*/

if(isset($icd9customer['Icd9Code']))
{
$icd9codes = $icd9customer['Icd9Code'];	
$icd9 = implode(',', array_map(function($el){ return $el['code']; }, $icd9codes));
}else{ $icd9=NULL;}
if(isset($icd10customer['Icd10Code']))
{
$icd10codes = $icd10customer['Icd10Code'];	
$icd10 = implode(',', array_map(function($el){ return $el['code']; }, $icd10codes));
}
else{  $icd10=NULL;}

$companyname=$company['Company']['first_name']." ".$company['Company']['last_name'];

$getthis= array(

'Customer.first_name'=>			$customer ['Customer']['first_name'],
'Customer.last_name'=>			$customer ['Customer']['last_name'],
'Customer.client_sex'=>			$customer ['Customer']['client_sex'],
'Customer.date_of_birth'=>		$customer ['Customer']['date_of_birth'],
'Customer.address'=>			$customer ['Customer']['address'],
'Customer.zip_code'=>			$customer ['Customer']['zip_code'],
'Customer.city_id'=>			$customer ['City']['title'],
'Customer.state_id'=>			$customer ['State']['state_code'],
'Customer.phone'=>				$customer ['Customer']['phone'],
'Customer.marital_status_id'=>	$customer ['MaritalStatus']['title'],
'PayerName.name'=>				$payername['PayerName']['name'],
'PayerName.address'=>			$payername['PayerName']['address'],
'PayerName.city_id'=>			$payername['City']['title'],
'PayerName.state_id'=>			$payername['State']['state_code'],
'PayerName.zip_code'=>			$payername['PayerName']['zip_code'],
'Authorization.auth_number'=>	$customer ['Authorization']['0']['auth_number'],
'Icd9 Codes'=>        	      	$icd9,
'Icd10 Codes'=>					$icd10,
'ScheduleCode.code'=>			$schedulecode['ScheduleCode']['code'],
'Charge.amount'=>				$charge['Charge']['amount'],

'Company.first_name+Company.last_name'=>				$companyname,
'Company.address'=>   			$company['Company']['address'],
'Company.zip_code'=>	  		$company['Company']['zip_code'],
'Company.city_id'=>		  	$company['City']['title'],
'Company.state_id'=>	  		$company['State']['state_code'],

'Company.fedtaxid'=>   		$company['Company']['fedtaxid'],
'Company.npi'=>   			$company['Company']['npi'],

'RenderingProvider.name'=>   		$company['RenderingProvider']['0']['name'],
'RenderingProvider.taxonomy'=>	  	$company['RenderingProvider']['0']['taxonomy'],
'RenderingProvider.provider_pin'=>		  	$company['RenderingProvider']['0']['provider_pin'],

'BillingProvider.name'=>   			$billingprovider['BillingProvider']['name'],
'BillingProvider.address'=>	  		$billingprovider['BillingProvider']['address'],
'BillingProvider.city_id'=>		  	$billingprovider['City']['title'],
'BillingProvider.state_id'=>	  		$billingprovider['State']['state_code'],
'BillingProvider.phone'=>   		$billingprovider['BillingProvider']['phone'],
'BillingProvider.taxonomy'=>	  	$billingprovider['BillingProvider']['taxonomy'] ,               

'Type' => 'id'	,
'rel_insurances' => 'self',
'employers name' => 'Not Known',
'insurance plan' =>'Not Known',
'reserved_local' =>'Not Known',

'auth signed' => '1',
'signed date' => 'Not Known',

'health benefit' =>'1',
'health benefit signed' =>'Not Known',

'from date'=> $from,
'to date'=> $to,

'place_of_service'=>'99',

'pointer' => '1',	

'ndc qty' => '1',

'ein' =>'1',

'accept_assignment'=>'1',

'amount_paid'=>'0',

);

echo '<table>';
foreach($getthis as $key => $get)
{
echo '<tr><td>';
echo $key;
echo '</td><td>';
echo $get;
echo '</td></tr>';
}
echo '</table>';

}
else{
	echo "<div id='bill'>";
	echo "<center>";
	echo $this->Form->create('Billing');
	echo $this->Form->input('customers');
	echo $this->Form->input('payernames',array('label' => 'Payer Name'));

	echo $this->Form->input('scheduleType',array('type' => 'select', 'options' => array('Attendance'=>'Attendance')));

	echo $this->Form->input('numberOfDays',array('type' => 'number'));
	
	echo $this->Form->end(__('Submit'));
	echo "</center>";
echo "</div>";
	}
?>