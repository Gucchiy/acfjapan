<?php
App::uses('Aid', 'Model');

/**
 * Aid Test Case
 *
 */
class AidTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aid',
		'app.participation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aid = ClassRegistry::init('Aid');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aid);

		parent::tearDown();
	}

}
