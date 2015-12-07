<?php
App::uses('Physician', 'Model');

/**
 * Physician Test Case
 *
 */
class PhysicianTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.physician'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Physician = ClassRegistry::init('Physician');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Physician);

		parent::tearDown();
	}

}
