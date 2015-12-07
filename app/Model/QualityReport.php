<?php
App::uses('AppModel', 'Model');
/**
 * QualityReport Model
 *
 */
class QualityReport extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
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
		'to' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				),
			),
		'from' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				),
			),
		'date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				),
			),
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				),
			),
	);
}
