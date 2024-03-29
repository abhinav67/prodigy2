<?php
App::uses('AppModel', 'Model');
/**
 * Authorization Model
 *
 * @property Customer $Customer
 */
class Authorization extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'customer_id';
	public $validate = array(
		'customer_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'precetref' => array(
			'notEmpty' => array(
				'rule' => '/^[0-9]{10,10}$/i',
				'message' => 'Please enter a 10 digit number.',
			)
		),
		'expiry_date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
