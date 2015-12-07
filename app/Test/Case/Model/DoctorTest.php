<?php
App::uses('Doctor', 'Model');

/**
 * Doctor Test Case
 *
 */
class DoctorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doctor',
		'app.doctor_speciality',
		'app.state',
		'app.company',
		'app.customer',
		'app.meal_plan',
		'app.customer_ethnicity',
		'app.primary_diet',
		'app.secondary_diet',
		'app.insurance',
		'app.status_code',
		'app.activity_registration',
		'app.activity',
		'app.activity_type',
		'app.customer_attendance',
		'app.customer_attendances_customer',
		'app.icd10_code',
		'app.customers_icd10_code',
		'app.icd9_code',
		'app.customers_icd9_code',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Doctor = ClassRegistry::init('Doctor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Doctor);

		parent::tearDown();
	}

}
