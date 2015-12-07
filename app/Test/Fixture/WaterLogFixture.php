<?php
/**
 * WaterLogFixture
 *
 */
class WaterLogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'water_location_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'temperature_in_fahrenheit' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'date' => '2015-01-02',
			'water_location_id' => 1,
			'temperature_in_fahrenheit' => 1
		),
	);

}
