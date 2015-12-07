<?php
/**
 * VehicleFixture
 *
 */
class VehicleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'make' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'seating' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'registration_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'registration_expiry_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'next_inspection_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'vin' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'route_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'primary_driver_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ownership' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'insurance_information' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lease_details' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'type' => 'Lorem ipsum dolor sit amet',
			'make' => 'Lorem ipsum dolor sit amet',
			'seating' => 1,
			'registration_number' => 'Lorem ipsum dolor sit amet',
			'registration_expiry_date' => '2015-03-21',
			'next_inspection_date' => '2015-03-21',
			'vin' => 'Lorem ipsum dolor sit amet',
			'route_id' => 1,
			'primary_driver_name' => 'Lorem ipsum dolor sit amet',
			'ownership' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'insurance_information' => 'Lorem ipsum dolor sit amet',
			'lease_details' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
