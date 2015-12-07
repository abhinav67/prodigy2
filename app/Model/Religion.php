<?php
App::uses('AppModel', 'Model');
/**
 * Religion Model
 *
 */
class Religion extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	public $validate=array(
		'title'=>array(
			'rule'=>array('notEmpty'),)

		); 

public $hasMany = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'religion_id',
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
