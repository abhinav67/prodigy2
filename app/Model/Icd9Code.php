<?php
App::uses('AppModel', 'Model');
/**
 * Icd9Code Model
 *
 * @property Customer $Customer
 */
class Icd9Code extends AppModel {
//public $displayField = 'short_desc';

public $virtualFields = array(
    'raman' => 'CONCAT(Icd9Code.code, " | ", Icd9Code.short_desc)'
);

public $displayField = 'raman';

public $validate = array(
'Icd9Code' => array(
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
			'joinTable' => 'customers_icd9_codes',
			'foreignKey' => 'icd9_code_id',
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