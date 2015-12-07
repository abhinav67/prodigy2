<?php
/**
 * CustomerAttendancesCustomerFixture
 *
 */
class CustomerAttendancesCustomerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'customer_attendance_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'customer_attendance_id' => 1,
			'customer_id' => 1
		),
	);

}
