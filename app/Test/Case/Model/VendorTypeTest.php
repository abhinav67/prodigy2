<?php
App::uses('VendorType', 'Model');

/**
 * VendorType Test Case
 *
 */
class VendorTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vendor_type',
		'app.vendor_master'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VendorType = ClassRegistry::init('VendorType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VendorType);

		parent::tearDown();
	}

}
