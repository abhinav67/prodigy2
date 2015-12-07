<?php
App::uses('AppModel', 'Model');
/**
 * Route Model
 *
 * @property DriverLog $DriverLog
 * @property Vehicle $Vehicle
 */
class Route extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
public $validate = array(
		
		'name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'primary_employee_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'secondary_employee_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'description' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		));
public $belongsTo=array(
/*
	'Employee1' => array(
			'className' => 'Employee',
			'foreignKey' => 'primary_employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	'Employee2' => array(
			'className' => 'Employee',
			'foreignKey' => 'secondary_employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
*/
	);
public $hasMany = array(
		'DriverLog' => array(
			'className' => 'DriverLog',
			'foreignKey' => 'route_id',
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
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'route_id',
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

	);

	

}
