<?php
App::uses('Entry', 'Model');

/**
 * Entry Test Case
 *
 */
class EntryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entry',
		'app.project',
		'app.user',
		'app.belonging',
		'app.team',
		'app.report',
		'app.investment',
		'app.participation',
		'app.aid',
		'app.project_comment',
		'app.comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entry = ClassRegistry::init('Entry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entry);

		parent::tearDown();
	}

}
