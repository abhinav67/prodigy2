<?php
App::uses('AppModel', 'Model');
/**
 * CustomersIcd10Code Model
 *
 * @property Customer $Customer
 * @property Icd10Code $Icd10Code
 */
class CustomersIcd10Code extends AppModel {


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
		'Icd10Code' => array(
			'className' => 'Icd10Code',
			'foreignKey' => 'icd10_code_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
