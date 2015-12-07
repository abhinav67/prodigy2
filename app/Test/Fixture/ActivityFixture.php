<?php
/**
 * ActivityFixture
 *
 */
class ActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'activity_type_id2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'activity_type_id1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'time' => array('type' => 'time', 'null' => true, 'default' => null),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'time1' => array('type' => 'time', 'null' => true, 'default' => null),
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
			'activity_type_id2' => 1,
			'activity_type_id1' => 1,
			'time' => '09:11:39',
			'date' => '2015-04-14',
			'time1' => '09:11:39'
		),
	);

}
