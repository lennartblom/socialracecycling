<?php
abstract class BaseModel extends BaseDatabase {

	private $_changed = false;
	private $_prefferedFetchStyle = 0;
	private $_data = array();
	private $_ID = 0;
	private $_fields = array();
	const FETCH_CACHED = 1;
	const FETCH_ONDEMAND = 2;

	private static $_cache = array();


	abstract static protected function _getStoreName();
	abstract static protected function _getFields();
	abstract static protected function _getUniqueKeys();
	abstract static protected function _getSearchableKeys();
	abstract static protected function _getPrefferedFetchStyle();


	private function __construct($ID){
		parent::__construct();
		$this->_prefferedFetchStyle = $this->_getPrefferedFetchStyle();
		$this->_fields = $this->_getFields();
		if($ID != intval($ID))
			throw new BadFunctionCallException("ID must have an integer value");

		$this->_ID = $ID;
		$this->_fetchData('ID');
	}

	private function _fetchData($key){
		if(!in_array($key, $this->_fields))
			throw new Exception($key . " is not within the field list for this model");
		if(isset($data[$key]))
			return $data[$key];
		$ID = $this->_ID;
		$db = $this->getDB();
		$statement = null;
		switch ($this->_prefferedFetchStyle){
			case self::FETCH_CACHED:
				$statement = $db->prepare("SELECT * FROM `" . $this->_getStoreName() . "` WHERE `ID` = ?");
				break;
			case self::FETCH_ONDEMAND:
				$statement = $db->prepare("SELECT `".$key."` FROM `" . $this->_getStoreName() . "` WHERE `ID` = ?");
				break;
			default:
				throw new Exception("No default fetch style selected");
		}
		$result = $statement->execute(array($ID));
		if(!$result){
			$error = $statement->errorInfo();
			throw new Exception($error[2]);
		}
		$data = $statement->fetch(PDO::FETCH_ASSOC);
		foreach($data as $key => $value){
			try{
				$this->$key = $value;
			} catch(Exception $e){
				//Overflow
			}
		}
	}

	public function __destruct(){
		$this->commit();
	}

	public function commit(){
		if($this->_changed == false)
			return true;
		//TODO: Do cool stuff here!
		$this->_changed = false;
	}
	public static function getObject($key, $value){

	}

	public static function getObjects($key, $value, $start = 0, $n = 0){

	}

	public final function __get($key){

	}

	public final function __set($key, $value){
		$this->_changed = true;
	}
}