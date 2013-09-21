<?php
App::uses('ContactSubject', 'Model');

/**
 * ContactSubject Test Case
 *
 */
class ContactSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contact_subject',
		'app.contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContactSubject = ClassRegistry::init('ContactSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContactSubject);

		parent::tearDown();
	}

}
