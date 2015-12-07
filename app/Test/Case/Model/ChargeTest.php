<?php
App::uses('Charge', 'Model');

/**
 * Charge Test Case
 *
 */
class ChargeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.charge',
		'app.insurance',
		'app.state',
		'app.company',
		'app.customer',
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
		'app.customers_icd9_code',
		'app.doctor',
		'app.doctor_speciality'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Charge = ClassRegistry::init('Charge');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Charge);

		parent::tearDown();
	}

}
