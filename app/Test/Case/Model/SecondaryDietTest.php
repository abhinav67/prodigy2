<?php
App::uses('SecondaryDiet', 'Model');

/**
 * SecondaryDiet Test Case
 *
 */
class SecondaryDietTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.secondary_diet',
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
		'app.status_code',
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
		$this->SecondaryDiet = ClassRegistry::init('SecondaryDiet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SecondaryDiet);

		parent::tearDown();
	}

}
