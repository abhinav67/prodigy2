<?php
App::uses('Route', 'Model');

/**
 * Route Test Case
 *
 */
class RouteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.route',
		'app.driver_log',
		'app.vehicle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Route = ClassRegistry::init('Route');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Route);

		parent::tearDown();
	}

}
