<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 * @property State $State
 * @property MealPlan $MealPlan
 * @property CustomerEthnicity $CustomerEthnicity
 * @property PrimaryDiet $PrimaryDiet
 * @property SecondaryDiet $SecondaryDiet
 * @property Insurance $Insurance
 * @property StatusCode $StatusCode
 * @property ActivityRegistration $ActivityRegistration
 * @property CustomerAttendance $CustomerAttendance
 * @property Icd10Code $Icd10Code
 * @property Icd9Code $Icd9Code
 */
class Customer extends AppModel {

public $virtualFields = array(
    'raman' => 'CONCAT(Customer.last_name, " ", Customer.first_name, " - ",Customer.id)',

    'birthday' => 'DATE_FORMAT(Customer.date_of_birth,"%M %d")',
    'birthday1' => 'DATE_FORMAT(Customer.date_of_birth,"%M-%d-%Y")',
    'age' => "YEAR(NOW())-YEAR(Customer.date_of_birth)"


);

public $displayField = 'raman';

	public $actsAs = array('Containable');
	//var $displayField = 'display_username';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		
		'first_name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'last_name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'auth_expiry' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		    ),
		),
		'insurance_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'Enter a valid insurance ID.'
		    ),
		),
		
		'admission_date' => array(
		'futureDate' => array('rule' => array('futureDate', 'admission_date'), 
		'message' => 'The start time can not be in the future.',
		'required' => false,
       	        'allowEmpty' => true
			
			),
		
		),
		
		'client_sex' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'Choose one.'
			),
		),
		'date_of_birth' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
				
			),
		),
		'city' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
			),
		),
		'address' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'city_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
		)),
		'insurance_policy_number' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'state_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message'=>'Choose a state.'
		)),
		'phone' => array(
			'notEmpty' => array(
				'rule' => '/^[0-9]{10,10}$/i',
				'message' => 'Please enter a 10 digit number.',
			)
		),

		'payer_name_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),

		'religion_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'physician_id' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		/*
		'birth_state' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),*/
		/*'birth_country' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),*/
		'ec1_name' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'ec1_relationship' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'ec1_address' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'ec1_phone' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'precertref' => array(
			'notEmpty' => array(
			'rule' => '/^[0-9]{10,12}$/i',
			'message' => 'Please enter a 10-12 digit number.',
		)),
		'zip_code' => array(
			'notEmpty' => array(
			'rule' => array('postal', null, 'us'),
			'message' => 'Enter a valid ZIP code eg 08820-0000',
		)),
		'photograph' => array(
			'rule' => array('fileSize', '<=', '1MB'),
			'message' => 'Image size must be less than 1MB.',
			'allowEmpty'=>true
		),
	
		'social_security' => array(

				'rule' => '/^[0-9]{9,9}$/i',
				'message' => 'Please enter a 9 digit number.',
				'allowEmpty'=>true

   		 ),
		'email' => array(
			'rule' => array('email', true),
			'message' => 'Please supply a valid email address.',
			'allowEmpty'=>true
		),
		'Icd9Code' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		'Icd10Code' => array(
			'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message'=>'This field cannot be left blank.'
		)),
		

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
		),
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			),
		/*'Icd9Code' => array(
			'className' => 'Icd9Code',
			'foreignKey' => 'icd9_codes_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			),
		'Icd10Code' => array(
			'className' => 'Icd10Code',
			'foreignKey' => 'icd10_codes_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			),*/
		
		'CustomerEthnicity' => array(
			'className' => 'CustomerEthnicity',
			'foreignKey' => 'customer_ethnicity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PrimaryDiet' => array(
			'className' => 'PrimaryDiet',
			'foreignKey' => 'primary_diet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
		'Insurance' => array(
			'className' => 'Insurance',
			'foreignKey' => 'insurance_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StatusCode' => array(
			'className' => 'StatusCode',
			'foreignKey' => 'status_code_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Physician' => array(
			'className' => 'Physician',
			'foreignKey' => 'physician_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Religion' => array(
			'className' => 'Religion',
			'foreignKey' => 'religion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LocationCountry' => array(
			'className' => 'Location',
			'foreignKey' => 'birth_country',
		  //'conditions' => array('Location.location_type == ' => '0'),
			'fields' => '',
			'order' => ''
		),
		'LocationState' => array(
			'className' => 'Location',
			'foreignKey' => 'birth_state',
		  //'conditions' => array('Location.location_type != ' => '0'),
			'fields' => '',
			'order' => ''
		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ActivityRegistration' => array(
			'className' => 'ActivityRegistration',
			'foreignKey' => 'customer_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'CustomerAttendance' => array(
			'className' => 'CustomerAttendance',
			'joinTable' => 'customer_attendances_customers',
			'foreignKey' => 'customer_id',
			'associationForeignKey' => 'customer_attendance_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Icd10Code' => array(
			'className' => 'Icd10Code',
			'joinTable' => 'customers_icd10_codes',
			'foreignKey' => 'customer_id',
			'associationForeignKey' => 'icd10_code_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Icd9Code' => array(
			'className' => 'Icd9Code',
			'joinTable' => 'customers_icd9_codes',
			'foreignKey' => 'customer_id',
			'associationForeignKey' => 'icd9_code_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}