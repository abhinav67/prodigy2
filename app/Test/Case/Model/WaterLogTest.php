<?php
App::uses('WaterLog', 'Model');

/**
 * WaterLog Test Case
 *
 */
class WaterLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.water_log',
		'app.water_location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WaterLog = ClassRegistry::init('WaterLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WaterLog);

		parent::tearDown();
	}

}
