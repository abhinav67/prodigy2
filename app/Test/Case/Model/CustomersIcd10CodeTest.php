<?php
App::uses('CustomersIcd10Code', 'Model');

/**
 * CustomersIcd10Code Test Case
 *
 */
class CustomersIcd10CodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customers_icd10_code',
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
		'app.customer_attendance',
		'app.customer_attendances_customer',
		'app.icd10_code',
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
		$this->CustomersIcd10Code = ClassRegistry::init('CustomersIcd10Code');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomersIcd10Code);

		parent::tearDown();
	}

}
