   <?php

    $this->loadModel('CustomerAttendance');

    $CheckAttendanceRecord=$this->CustomerAttendance->find('all',array(
        'conditions' => array(
        		'date >= ' => $select['Billing']['fromDate'], 	  //billing from date
			   	'date <= ' => $select['Billing']['tillDate']		//billing till date
				)));

    if(empty($CheckAttendanceRecord))
    {
    	die('<h3>No attendance record present for this date range.</h3>');
    }

   ?> 