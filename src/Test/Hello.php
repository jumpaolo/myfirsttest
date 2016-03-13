<?php
namespace Mytest\Test;

class Hello {
	public function __construct() {
		echo __CLASS__.PHP_EOL;
	}
	
	public function hello() {
		echo "Hello ".PHP_EOL;
	}
}
