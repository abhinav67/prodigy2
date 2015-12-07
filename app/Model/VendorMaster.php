<?php
App::uses('AppModel', 'Model');
/**
 * VendorMaster Model
 *
 * @property VendorType $VendorType
 */
class VendorMaster extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $validate = array(
		
		'vendor_type_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'Choose one.'
			),
		),
		'name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'address' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'phone_number' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'fax' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'setup_date' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'pc_name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'pc_phone' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		));


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'VendorType' => array(
			'className' => 'VendorType',
			'foreignKey' => 'vendor_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

		public function beforeSave($options = array())
     
{


 $VendorType = ClassRegistry::init('VendorType');
//$basketballTeam = new BasketballTeam();

        	$vendortype = $VendorType->field('type', array(
        // Set the condition for the field
        'id' => $this->data['VendorMaster']['vendor_type_id']
    ));

        	
    $this->data['VendorMaster']['vendor_type'] =  $vendortype;
   


}
}
