<?php
App::uses('WaterLocation', 'Model');

/**
 * WaterLocation Test Case
 *
 */
class WaterLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.water_location',
		'app.water_log'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WaterLocation = ClassRegistry::init('WaterLocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WaterLocation);

		parent::tearDown();
	}

}
