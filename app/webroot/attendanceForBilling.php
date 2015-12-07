<?php
	/*
	$conditions = array(
    'Date' => $customer_loop_date,
	);
	if ($this->CustomerAttendance->hasAny($conditions)){
    //do something
	}
	else
	{
	
	}
	*/
	//$loopdate= $this->CustomerAttendance->findById($select['Billing']['Date']);
	//$customer_loop_date = date("Ymd", strtotime($loopdate['CustomerAttendance']['date']));
	$customer_loop_date = date("M-d-Y", strtotime($select['Billing']['Date']));

	$atten=$this->CustomerAttendance->findByDate($customer_loop_date);	
	$attendedCustomers=array();
	$j="0";
	foreach($atten['Customer'] as $customeratten)
	{
	$attendedCustomers[$j]=$customeratten['id'];
	$j++;
	}
		
	
?>