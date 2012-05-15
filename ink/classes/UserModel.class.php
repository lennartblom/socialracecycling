<?php
require_once('BaseModel.class.php');
class UserModel extends BaseModel{
	static protected function _getStoreName(){
		return 'user2';
	}
	static protected function _getFields(){
		return array('ID', 'Name');
	}
	static protected function _getUniqueKey(){
		return 'ID';
	}
	static protected function _getSearchableKeys(){
		return array('ID');
	}
	static protected function _getPrefferedFetchStyle(){
		return self::FETCH_CACHED;
	}
	static protected function _getClass(){
		return __CLASS__;
	}
	static $_cache = array();
	
	protected function _set_ID($value){
		return ($value == intval($value));
	}
	
	protected function _set_Name($value){
		return (strlen($value) < 30);
	}
}

$data = UserModel::getObject('ID', 22);
var_dump($data);