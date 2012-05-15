<?php
require_once('Base.class.php');
require_once('../const.ink.php');
abstract class BaseDatabase extends Base{
	private static $_db = null;
	
	protected function __construct(){
		$this->_db = $this->getDB();
	}

	/**
	 * Establishes a new connnection to the Database or recycles another one.
	 * @return PDO
	 */
	public static final function getDB(){
		if(self::$_db == null)
			self::_connectDb();
		return self::$_db;
	}

	private static final function _connectDb(){
		$dsn = 'mysql:dbname='.MYSQL_DATA.';host=' . MYSQL_HOST;

		try {
			$dbh = new PDO($dsn, MYSQL_USER, MYSQL_PASS);
		} catch (PDOException $e) {
			die('Aktuell gibt es technische Probleme: ' . $e->getMessage());
		}

		self::$_db = $dbh;
	}
}