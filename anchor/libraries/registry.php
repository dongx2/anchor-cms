<?php

class Registry {

	private static $data = array();

	public static function get($key) {
		if(isset(static::$data[$key])) {
			return static::$data[$key];
		}
	}

	public static function prop($object, $key) {
		if($obj = static::get($object)) {
			if(property_exists($obj, $key)) {
				return $obj->{$key};
			}
		}
	}

	public static function set($key, $value) {
		static::$data[$key] = $value;
	}

	public static function has($key) {
		return isset(static::$data[$key]);
	}

}