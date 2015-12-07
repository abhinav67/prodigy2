<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 * @property State $State
 */
class Employee extends AppModel {


public $virtualFields = array(
    'raman' => 'CONCAT(Employee.last_name, " ", Employee.first_name, " - ",Employee.id)'
);
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'raman';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $validate = array(
		
		'first_name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'last_name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'address' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'state_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'zip_code' => array(
			'notEmpty' => array(
			'rule' => array('postal', null, 'us'),
			'message' => 'Enter a valid ZIP code eg 08820-0000',
		)),
		'home_phone' => array(
			'notEmpty' => array(
				'rule' => '/^[0-9]{10,10}$/i',
				'message' => 'Please enter a 10 digit number.',
			)
		),
				
	'hire_date' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
				
			),
		),
	'date_of_birth' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
				
			),
		),
	/*'last_day_worked' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
				
			),
		),
	'termination_date' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
				
			),
		),*/
	'gender' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
	'status' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
	'employment_type' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
	'pay_type' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
	'pay_frequency' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
	'standard_hours_pay_period' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
	'email' => array(
			'rule' => array('email', true),
			'message' => 'Please supply a valid email address.',
			'allowEmpty'=>true
		),

	);
public $hasMany = array(
	/*
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'primary_employee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'secondary_employee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
		*/
		);

	public $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
}
