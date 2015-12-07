<?php
App::uses('AppModel', 'Model');
/**
 * CustomerAttendancesCustomer Model
 *
 * @property CustomerAttendance $CustomerAttendance
 * @property Customer $Customer
 */
class CustomerAttendancesCustomer extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CustomerAttendance' => array(
			'className' => 'CustomerAttendance',
			'foreignKey' => 'customer_attendance_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
