<?php
App::uses('VendorMaster', 'Model');

/**
 * VendorMaster Test Case
 *
 */
class VendorMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vendor_master',
		'app.vendor_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VendorMaster = ClassRegistry::init('VendorMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VendorMaster);

		parent::tearDown();
	}

}
