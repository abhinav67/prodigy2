<?php
App::uses('AppModel', 'Model');
/**
 * VendorType Model
 *
 * @property VendorMaster $VendorMaster
 */
class VendorType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'type';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
public $validate = array(
		
		'type' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'Choose one.'
			),
		));
		


	public $hasMany = array(
		'VendorMaster' => array(
			'className' => 'VendorMaster',
			'foreignKey' => 'vendor_type_id',
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

}
