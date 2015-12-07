<?php
App::uses('AppModel', 'Model');
/**
 * CustomerAttendance Model
 *
 * @property Customer $Customer
 */
class CustomerAttendance extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

	public $virtualFields = array(
		'customer_count' => 'SELECT Count(*) FROM `customer_attendances_customers` WHERE customer_attendances_customers.customer_attendance_id =id'
	);
	var $displayField = 'date';
	public $validate = array(
		 "date"=>array( 
				"unique"=>array( 
                "rule"=>array("checkUnique", array("date", "shift")), 
                "message"=>"A record with that date already exists for that shift" 
                ) 
                ) ,									
				'shift' => array('notEmpty' => array('rule' => array('notEmpty')))
	);
	public $actsAs = array('Containable');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Customer' => array(
			'className' => 'Customer',
			'joinTable' => 'customer_attendances_customers',
			'foreignKey' => 'customer_attendance_id',
			'associationForeignKey' => 'customer_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);


public function beforeSave($options = array())
{ 
      $one = $this->data['CustomerAttendance']['date'];
      $ag= date('Y-m-d',strtotime($one));

            $this->data['CustomerAttendance']['date_m'] = $ag;
            
    return true;
}  

}
