<?php
/**
 * EmployeeFixture
 *
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'city' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zip_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'home_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mobile_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hire_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'social_security' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_of_birth' => array('type' => 'date', 'null' => false, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'designation' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'termination_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'last_day_worked' => array('type' => 'date', 'null' => false, 'default' => null),
		'pay_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pay_frequency' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'standard_hours_pay_period' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'notes' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'state_id' => 1,
			'city' => 'Lorem ipsum dolor sit amet',
			'zip_code' => 'Lorem ipsum dolor sit amet',
			'home_phone' => 'Lorem ipsum dolor sit amet',
			'mobile_phone' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'hire_date' => '2015-03-20',
			'social_security' => 'Lorem ips',
			'gender' => 'Lorem ipsum dolor sit amet',
			'date_of_birth' => '2015-03-20',
			'status' => 'Lorem ipsum dolor sit amet',
			'designation' => 'Lorem ipsum dolor sit amet',
			'termination_date' => '2015-03-20',
			'last_day_worked' => '2015-03-20',
			'pay_type' => 'Lorem ipsum dolor sit amet',
			'pay_frequency' => 'Lorem ipsum dolor sit amet',
			'standard_hours_pay_period' => 1,
			'notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
