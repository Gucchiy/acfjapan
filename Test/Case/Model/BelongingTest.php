<?php
App::uses('Belonging', 'Model');

/**
 * Belonging Test Case
 *
 */
class BelongingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.belonging',
		'app.user',
		'app.team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Belonging = ClassRegistry::init('Belonging');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Belonging);

		parent::tearDown();
	}

}
