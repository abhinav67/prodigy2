<?php
App::uses('AppModel', 'Model');
/**
 * Doctor Model
 *
 * @property DoctorSpeciality $DoctorSpeciality
 * @property State $State
 */
class Doctor extends AppModel {

public $virtualFields = array(
    'raman' => 'CONCAT(Doctor.name, " - ",Doctor.id)'
);
 /** Validation rules
 *
 * @var array
 */
 public $display_Field='raman';
	public $validate = array(
		
		'name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'address' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'state_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'doctor_speciality_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'city' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'zip_code' => array(
			'notEmpty' => array(
			'rule' => array('postal', null, 'us'),
			'message' => '9 digit valid zip 08820-0000',
		)),
		'phone' => array(
			'notEmpty' => array(
				'rule' => '/^[0-9]{10,10}$/i',
				'message' => 'Please enter a 10 digit number.',
			)
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DoctorSpeciality' => array(
			'className' => 'DoctorSpeciality',
			'foreignKey' => 'doctor_speciality_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
