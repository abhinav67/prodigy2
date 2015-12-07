<?php
App::uses('AppModel', 'Model');
/**
 * Location Model
 *
 */
class Location extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'location';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

public $hasMany = array(
		'BirthCountry' => array(
			'className' => 'Customer',
			'foreignKey' => 'birth_country',
			'dependent' => false,
		
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'BirthState' => array(
			'className' => 'Customer',
			'foreignKey' => 'birth_state',
			'dependent' => false,
	
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		));
}
