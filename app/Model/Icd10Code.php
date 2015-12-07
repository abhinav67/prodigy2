<?php
App::uses('AppModel', 'Model');
/**
 * Icd10Code Model
 *
 * @property Customer $Customer
 */
class Icd10Code extends AppModel {

public $virtualFields = array(
    'raman' => 'CONCAT(Icd10Code.code, " | ", Icd10Code.desc)'
);

public $displayField = 'raman';

public $validate = array(
'Icd10Code' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Customer' => array(
			'className' => 'Customer',
			'joinTable' => 'customers_icd10_codes',
			'foreignKey' => 'icd10_code_id',
			'associationForeignKey' => 'customer_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}