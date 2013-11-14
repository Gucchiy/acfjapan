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
		'host' => 'mysql470.db.sakura.ne.jp',
		'login' => 'acfjapan1',
		'password' => 'lottegolf1',
		'database' => 'acfjapan1_staging',
		'encoding' => 'utf8'
	);

	var $release = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'mysql470.db.sakura.ne.jp',
		'login' => 'acfjapan1',
		'password' => 'lottegolf1',
		'database' => 'acfjapan1_release',
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
