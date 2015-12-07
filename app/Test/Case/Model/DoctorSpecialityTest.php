<?php
App::uses('DoctorSpeciality', 'Model');

/**
 * DoctorSpeciality Test Case
 *
 */
class DoctorSpecialityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doctor_speciality',
		'app.doctor',
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
		$this->DoctorSpeciality = ClassRegistry::init('DoctorSpeciality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DoctorSpeciality);

		parent::tearDown();
	}

}
