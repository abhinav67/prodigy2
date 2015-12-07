<?php
App::uses('ActivitiesController', 'Controller');

/**
 * ActivitiesController Test Case
 *
 */
class ActivitiesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activity',
		'app.activity_registration',
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
		'app.customer_attendance',
		'app.customer_attendances_customer',
		'app.icd10_code',
		'app.customers_icd10_code',
		'app.icd9_code',
		'app.customers_icd9_code'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
