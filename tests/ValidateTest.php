<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
	public function test_email(){
		$email = Validate::email('gangrel.vf@gmail.com');
		$this->assertTrue($email);
	}

	public function test_url(){
		$url = Validate::url('https://google.com');
		$this->assertTrue($url);
	}

	public function test_password(){
		$password = Validate::password('123456789e');
		$this->assertTrue($password);
	}
	
}