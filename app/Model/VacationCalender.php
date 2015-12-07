<?php
App::uses('AppModel', 'Model');
/**
 * VacationCalender Model
 *
 * @property Employee $Employee
 */
class VacationCalender extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	/*public $virtualFields = array(
    'raman' => 'CONCAT(Employee.last_name, " ", Employee.first_name, " - ",Employee.id)'
);*/

	public $displayField = 'type';


public $validate = array(
		'employee_id' => array(
			'nonEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required',
				'allowEmpty' => false
			),
			),
		'vacation_from' => array(
			'date' => array(
				//'rule' => array('date'),
				  'rule' => array('notEmpty'),
				'message' => 'Enter a valid date',
				'allowEmpty' => false
			),
			),
		'vacation_to' => array(
			'date' => array(
				//'rule' => array('date'),
				 'rule' => array('notEmpty'),
				'message' => 'Enter a valid date',
				'allowEmpty' => false
			),
			),


		);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}