<?php
/**
 * CustomerFixture
 *
 */
class CustomerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'display_username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'admission_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'application_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'client_sex' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'social_security' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'home_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date_of_birth' => array('type' => 'date', 'null' => true, 'default' => null),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zip_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'meal_plan_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'customer_ethnicity_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fax_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photograph' => array('type' => 'binary', 'null' => true, 'default' => null),
		'education' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'occupation' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'primary_diet_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'secondary_diet_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'insurance_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'precertref' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'income' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '15,2', 'unsigned' => false),
		'status_code_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'discharge_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'discharge_reason' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'alcohol_allowed' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'trips_allowed' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'photos_allowed' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'planned_short_stay' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'veteran' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'falls_risk' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'mobility' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'monday_am' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'tuesday_am' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'wednesday_am' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'thursday_am' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'friday_am' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'saturday_am' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sunday_am' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'monday_pm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'tuesday_pm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'wednesday_pm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'thursday_pm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'friday_pm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'saturday_pm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sunday_pm' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'title_UNIQUE' => array('column' => 'display_username', 'unique' => 1)
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
			'display_username' => 'Lorem ipsum dolor sit amet',
			'admission_date' => '2015-01-02',
			'application_date' => '2015-01-02',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'client_sex' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'social_security' => 'Lorem ips',
			'phone' => 'Lorem ipsum dolor sit amet',
			'home_phone' => 'Lorem ipsum dolor sit amet',
			'date_of_birth' => '2015-01-02',
			'address' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'zip_code' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state_id' => 1,
			'meal_plan_id' => 1,
			'customer_ethnicity_id' => 1,
			'fax_number' => 'Lorem ipsum dolor sit amet',
			'photograph' => 'Lorem ipsum dolor sit amet',
			'education' => 'Lorem ipsum dolor sit amet',
			'occupation' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'primary_diet_id' => 1,
			'secondary_diet_id' => 1,
			'insurance_id' => 1,
			'precertref' => 'Lorem ipsum dolor sit amet',
			'income' => '',
			'status_code_id' => 1,
			'discharge_date' => '2015-01-02',
			'discharge_reason' => 'Lorem ipsum dolor sit amet',
			'alcohol_allowed' => 1,
			'trips_allowed' => 1,
			'photos_allowed' => 1,
			'planned_short_stay' => 1,
			'veteran' => 1,
			'falls_risk' => 1,
			'mobility' => 1,
			'monday_am' => 1,
			'tuesday_am' => 1,
			'wednesday_am' => 1,
			'thursday_am' => 1,
			'friday_am' => 1,
			'saturday_am' => 1,
			'sunday_am' => 1,
			'monday_pm' => 1,
			'tuesday_pm' => 1,
			'wednesday_pm' => 1,
			'thursday_pm' => 1,
			'friday_pm' => 1,
			'saturday_pm' => 1,
			'sunday_pm' => 1
		),
	);

}
