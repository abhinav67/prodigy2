<?php
App::uses('DriverLog', 'Model');

/**
 * DriverLog Test Case
 *
 */
class DriverLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver_log',
		'app.route',
		'app.vehicle',
		'app.customer',
		'app.state',
		'app.company',
		'app.doctor',
		'app.doctor_speciality',
		'app.insurance',
		'app.charge',
		'app.customer_ethnicity',
		'app.primary_diet',
		'app.status_code',
		'app.physician',
		'app.religion',
		'app.location',
		'app.activity_registration',
		'app.activity',
		'app.activity_type',
		'app.customer_attendance',
		'app.customer_attendances_customer',
		'app.icd10_code',
		'app.customers_icd10_code',
		'app.icd9_code',
		'app.customers_icd9_code'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DriverLog = ClassRegistry::init('DriverLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DriverLog);

		parent::tearDown();
	}

}
