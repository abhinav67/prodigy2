<?php
App::uses('AppModel', 'Model');
/**
 * Insurance Model
 *
 * @property State $State
 * @property Charge $Charge
 * @property Customer $Customer
 */
class Insurance extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	

	public $validate = array(
		'name' => array(
			'rule1' => array(
				'rule' =>'isUnique',
				'message'=>'Already Present'
				),
				'rule2'=>array(
					'rule'=>'notEmpty',
					'message'=>'Please fill out this field'

				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address_1' =>array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'city' =>array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'state_id' =>array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'zip_code' =>array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'payer_code' =>array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'phone' =>array(
			'rule1' => array(
				 'rule' => array('phone', null, 'us'),
				 'message'=>'Enter valid Phone number.'
			),
		),
		'email' =>array(
			'notEmpty' => array(
				'rule' => array('email', true),
        'message' => 'Please supply a valid email address.'
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
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Charge' => array(
			'className' => 'Charge',
			'foreignKey' => 'insurance_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'insurance_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	public function beforeSave($options = array())
     
{


 $State = ClassRegistry::init('State');
//$basketballTeam = new BasketballTeam();

        	$state = $State->field('name', array(
        // Set the condition for the field
        'id' => $this->data['Insurance']['state_id']
    ));

        	
    $this->data['Insurance']['state'] =  $state;
   


}

}
