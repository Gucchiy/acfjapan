<?php
App::uses('Wait', 'Model');

/**
 * Wait Test Case
 *
 */
class WaitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wait'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Wait = ClassRegistry::init('Wait');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Wait);

		parent::tearDown();
	}

}
