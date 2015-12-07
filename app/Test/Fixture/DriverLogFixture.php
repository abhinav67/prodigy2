<?php
/**
 * DriverLogFixture
 *
 */
class DriverLogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'route_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'primary_driver_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'participants_address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'participants_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pickup_order' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'route_id' => 1,
			'primary_driver_name' => 'Lorem ipsum dolor sit amet',
			'customer_id' => 1,
			'participants_address' => 'Lorem ipsum dolor sit amet',
			'participants_phone' => 'Lorem ipsum dolor sit amet',
			'pickup_order' => 1,
			'notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
