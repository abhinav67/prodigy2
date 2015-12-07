<?php
App::uses('AppModel', 'Model');
/**
 * Activity Model
 *
 * @property ActivityRegistration $ActivityRegistration
 */
class Activity extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	public $validate = array(
		
		'date' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'activity_type_id1' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
'activity_type_id2' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
'time' => array(
			'notEmpty' => array(
			'rule' => array('time'),
			'message'=>'Enter valid time.'
		    ),
		),
'time1' => array(
			'notEmpty' => array(
			'rule' => array('time'),
			'message'=>'Enter valid time.'
		    ),
		));



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ActivityRegistration' => array(
			'className' => 'ActivityRegistration',
			'foreignKey' => 'activity_id',
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
	
	public $belongsTo = array(
		'ActivityType' => array(
			'className' => 'ActivityType',
			'foreignKey' => 'activity_type_id1',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),
		/*'ActivityType' => array(
			'className' =>  'ActivityType',
			'foreignKey' => 'activity_type_id2',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),*/
		);
		
		public function beforeSave($options = array()) {
    if (!empty($this->data['Activity']['date'])
    ) 
    {
	    $beforedate=$this->data['Activity']['date'];
		$newDate = date("Y-m-d", strtotime($beforedate));
		$this->data['Activity']['date'] = $newDate;

	    $beforetime=$this->data['Activity']['time'];
		$newTime = date("G:i", strtotime($beforetime));
		$this->data['Activity']['time'] = $newTime;

	    $beforetime1=$this->data['Activity']['time1'];
		$newTime1 = date("G:i", strtotime($beforetime1));
		$this->data['Activity']['time1'] = $newTime1;
	}
    return true;
}

}