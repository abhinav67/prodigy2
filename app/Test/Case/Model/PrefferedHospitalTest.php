<?php
App::uses('PrefferedHospital', 'Model');

/**
 * PrefferedHospital Test Case
 *
 */
class PrefferedHospitalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.preffered_hospital'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PrefferedHospital = ClassRegistry::init('PrefferedHospital');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PrefferedHospital);

		parent::tearDown();
	}

}
