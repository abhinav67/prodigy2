<?php
/**
 * VacationCalendsrFixture
 *
 */
class VacationCalendsrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'from' => array('type' => 'date', 'null' => false, 'default' => null),
		'to' => array('type' => 'date', 'null' => false, 'default' => null),
		'notes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			
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
			'employee_id' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'from' => '2015-03-20',
			'to' => '2015-03-20',
			'notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
