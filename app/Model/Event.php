<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 * @property EventType $EventType
 */
class Event extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
public $validate = array(
		
		'name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
'event_date' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
'event_type_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
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
		'EventType' => array(
			'className' => 'EventType',
			'foreignKey' => 'event_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
