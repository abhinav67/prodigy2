<?php
App::uses('AppModel', 'Model');
/**
 * Physician Model
 *
 */
class Physician extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	public $validate = array(
		'title' => array(
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
			),
		),
		'address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
'fax' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		)
		);

public $hasMany = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'physician_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		));
}
