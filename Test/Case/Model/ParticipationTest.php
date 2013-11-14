<?php
App::uses('Participation', 'Model');

/**
 * Participation Test Case
 *
 */
class ParticipationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participation',
		'app.project',
		'app.user',
		'app.aid'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Participation = ClassRegistry::init('Participation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Participation);

		parent::tearDown();
	}

}
