<?php
abstract class BaseModel extends BaseDatabase {
	/**
	 * Has any value changed?
	 * @var bool
	 */
	private $_changed = false;
	/**
	 * Fetch Type (see const FETCH_*)
	 * @var int
	 */
	private $_prefferedFetchStyle = 0;
	/**
	 * All data stored here
	 * @var array
	 */
	private $_data = array();
	/**
	 * UniqueKey value
	 * @var mixed
	 */
	private $_ID = 0;
	/**
	 * Array with all columns
	 * @var array
	 */
	private $_fields = array();
	/**
	 * Loads all columns
	 * @var int
	 */
	const FETCH_CACHED = 1;
	/**
	 * Load only needed columns
	 * @var int
	 */
	const FETCH_ONDEMAND = 2;

	private static $_cache = array();


	abstract static protected function _getStoreName();
	abstract static protected function _getFields();
	abstract static protected function _getUniqueKey();
	abstract static protected function _getSearchableKeys();
	abstract static protected function _getPrefferedFetchStyle();
	abstract static protected function _getClassName();


	private function __construct($ID){
		parent::__construct();
		$this->_prefferedFetchStyle = $this->_getPrefferedFetchStyle();
		$this->_fields = $this->_getFields();
		if($ID != intval($ID))
			throw new BadFunctionCallException("ID must have an integer value");

		$this->_ID = $ID;
		$this->_fetchData(self::_getUniqueKey());
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
				$statement = $db->prepare("SELECT * FROM `" . $this->_getStoreName() . "` WHERE `".self::_getUniqueKey()."` = ?");
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
			$oldChanged = $this->_changed;
			try{
				$this->$key = $value;
			} catch(Exception $e){
				//Overflow
			}
			$this->_changed = $oldChanged; //Restore changed flag
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

	/**
	 * Feteches one Object from DB
	 * @param String $key Primary key
	 * @param String $value Value (will be escaped)
	 */
	public static function getObject($key, $value){
		$db = $this->getDB();
		$data = $db->prepare("SELECT `ID` FROM `".$this->_getStoreName()."` WHERE `$key` = ? LIMIT 1");
		$result = $data->execute(array($value));
		if(!$result){
			$error = $data->errorInfo();
			throw new Exception("Error in fetch action: " .$error[2]);
		}
		$class = self::_getClassName();
		$item = $data->fetch();
		if(isset(self::$_cache[$item[0]]))
			return self::$_cache[$item[0]];
		return new $class($item[0]);
	}

	public static function getObjects($key, $value, $start = 0, $n = 0){
		$db = $this->getDB();
		$statement = "SELECT `ID` FROM `".$this->_getStoreName()."` WHERE `".$key."` = ?";
		if($start != 0 || $n != 0){
			$statement .= "LIMIT " . intval($start);
			if($n != 0){
				$statement .= "," . intval($n);
			}
		}
		$data = $db->prepare($statement);
		$result = $data->execute(array($value));
		if(!$result){
			$error = $data->errorInfo();
			throw new Exception("Error in fetch action: " .$error[2]);
		}
		$class = self::_getClassName();
		$return = array();
		foreach($data as $item){
			if(isset(self::$_cache[$item[0]]))
				$return[] = self::$_cache[$item[0]];
			else
				$return[] = new $class($item[0]);
		}
		return $return;
	}

	public final function __get($key){
		return $this->_fetchData($key);
	}

	public final function __set($key, $value){
		if(!in_array($key, $this->_fields))
			throw new Exception($key . " is not within the field list for this model");
		if($this->$key == $value)
			return;
		if(!method_exists($this, '__set_' . $key))
			throw new Exception($key . " has no set function");
		if(!call_user_method('__set_' . $key, $this, $value))
			throw new Exception($key . ' => ' . $value . ' value range check failed');
		$this->_data[$key] = $value;
		$this->_changed = true;
	}
}