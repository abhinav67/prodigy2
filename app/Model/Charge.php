<?php
App::uses('AppModel', 'Model');
/**
 * Charge Model
 *
 * @property Insurance $Insurance
 */
class Charge extends AppModel {

public $validate = array(
		'amount' => array(
			'notEmpty' => array(
			 'rule' => 'numeric',
				'message' => 'Numbers Only ',
			),
		),
		'start_date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end_date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Insurance' => array(
			'className' => 'Insurance',
			'foreignKey' => 'insurance_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	public function beforeSave($options = array())
{ 
      $one = $this->data['Charge']['start_date'];
      $ag= date('Y-m-d',strtotime($one));

            $this->data['Charge']['date'] = $ag;
            
    return true;
} 
}
