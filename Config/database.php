<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'acfjapan',
		'encoding' => 'utf8',
	);

	var $staging = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'sddb0040153748.cgidb',
		'login' => 'sddbLTk3ODA3',
		'password' => 'P0urKtyD',
		'database' => 'sddb0040153748',
		'encoding' => 'utf8'
	);

	var $release = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'sddb0040158100.cgidb',
		'login' => 'sddbMTYyNTM3',
		'password' => 'S44fRMZ3',
		'database' => 'sddb0040158100',
		'encoding' => 'utf8'
	);
	
    public function __construct()
    {
        $connection = Configure::read('database');
 
        if (!empty($this->{$connection})) {
            $this->default = $this->{$connection};
        }
    }

}
