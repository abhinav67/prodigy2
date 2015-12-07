<?php
App::uses('AppModel', 'Model');
/**
 * CustomersIcd9Code Model
 *
 * @property Customer $Customer
 * @property Icd9Code $Icd9Code
 */
class CustomersIcd9Code extends AppModel {


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
		),
		'Icd9Code' => array(
			'className' => 'Icd9Code',
			'foreignKey' => 'icd9_code_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
