<?php
App::uses('AppModel', 'Model');
/**
 * Todo Model
 *
 */
class Todo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This field cannot be empty',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter a 10 digit number.',
			)
		));
		

}
