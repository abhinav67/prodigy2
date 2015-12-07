<?php
App::uses('AppModel', 'Model');
/**
 * WaterLog Model
 *
 * @property WaterLocation $WaterLocation
 */
class WaterLog extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'water_location_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'temperature_in_fahrenheit' => array(
			'numeric' => array(
				'rule' => 'numeric'),
				'rule2'=>array(
					'rule'=>array('range',30,212),
					'message'=>'Range should be between 30 and 212'
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
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
		'WaterLocation' => array(
			'className' => 'WaterLocation',
			'foreignKey' => 'water_location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
