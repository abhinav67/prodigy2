<?php
App::uses('AppModel', 'Model');
/**
 * Vehicle Model
 *
 * @property Route $Route
 */
class Vehicle extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'type';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'route_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
