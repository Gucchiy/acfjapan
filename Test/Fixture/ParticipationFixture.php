<?php
/**
 * ParticipationFixture
 *
 */
class ParticipationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'amount' => array('type' => 'integer', 'null' => false, 'default' => null),
		'comment' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'project_id' => 1,
			'user_id' => 1,
			'amount' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-07-24 00:26:45',
			'modified' => '2013-07-24 00:26:45'
		),
	);

}
