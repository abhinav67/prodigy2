<?php
App::uses('AppModel', 'Model');
/**
 * Company Model
 *
 * @property State $State
 */
class Company extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'notEmpty' => array(
				'rule' => '/^[0-9]{10,10}$/i',
				'message' => 'Please enter a 10 digit number.',
			)
		),
		'address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'email' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'zip_code' => array(
			'notEmpty' => array(
			  'rule' => array('postal', null, 'us'),
			  'message' => '9 digit valid zip 08820-0000',
			),
		),
		'city' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'state_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'fedtaxid' => array(
		'notEmpty' => array(
			'rule' => '/^[0-9]{9,9}$/i',
			'message' => 'Alpha Numeric, 8-10 characters'
			),
		),
		'npi' => array(
		'notEmpty' => array(
			'rule' => '/^[0-9]{10,10}$/i',
			'message' => 'Alpha Numeric, 10 characters'
			),
		),
		'sub_ident' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'contact' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'receiver_code' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'receiver_code_2' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'sender_code' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'receiver_name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			),
		),
		'sub_tel' => array(
			'notEmpty' => array(
			'rule' => array('phone', null, 'us'),
			'message' => '10 digit phone number',
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order'=> ''
		),
		'Icd9Code' => array(
			'className' => 'Icd9Code',
			'foreignKey' => 'icd9_codes_id',
			'conditions' => '',
			'fields' => '',
			'order'=> ''
		),
		'Icd10Code' => array(
			'className' => 'Icd10Code',
			'foreignKey' => 'icd10_codes_id',
			'conditions' => '',
			'fields' => '',
			'order'=> ''
		),
	);
}
