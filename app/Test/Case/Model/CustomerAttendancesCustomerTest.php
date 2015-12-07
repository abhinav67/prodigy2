<?php
App::uses('CustomerAttendancesCustomer', 'Model');

/**
 * CustomerAttendancesCustomer Test Case
 *
 */
class CustomerAttendancesCustomerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_attendances_customer',
		'app.customer_attendance',
		'app.customer',
		'app.state',
		'app.company',
		'app.doctor',
		'app.doctor_speciality',
		'app.country',
		'app.insurance',
		'app.meal_plan',
		'app.customer_ethnicity',
		'app.primary_diet',
		'app.secondary_diet',
		'app.status_code',
		'app.activity_registration',
		'app.activity',
		'app.activity_type',
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
		$this->CustomerAttendancesCustomer = ClassRegistry::init('CustomerAttendancesCustomer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerAttendancesCustomer);

		parent::tearDown();
	}

}
