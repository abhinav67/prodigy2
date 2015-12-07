<?php
App::uses('QualityReport', 'Model');

/**
 * QualityReport Test Case
 *
 */
class QualityReportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quality_report'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QualityReport = ClassRegistry::init('QualityReport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QualityReport);

		parent::tearDown();
	}

}
