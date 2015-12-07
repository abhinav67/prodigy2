<?php
App::uses('AppModel', 'Model');

class Billing extends AppModel
{

public $useTable = false;
public $validate = array(
		'payernames' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'))
				),
		'fileName' => array(
			'notEmpty' => array('rule' => 'alphaNumeric'),
				),
		'scheduleType' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'))
				),
	
				
		'Date' => array(
	
		'mdy' => array(
        'rule' => array('date', 'MdY'),
        'message' => 'Enter a valid date in MM-DD-YY format.',
		)),
		
			
		'toDate' => array(
	
		'mdy' => array(
        'rule' => array('date', 'MdY'),
        'message' => 'Enter a valid date in MM-DD-YY format.',
		)),
		
		'customers' => array(
         'notEmpty' => array(
			'rule' => array('notEmpty')
		)
		)
				
		);
		

}

?>