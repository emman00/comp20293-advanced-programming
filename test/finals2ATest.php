<?php

require_once __DIR__ . '/../src/finals2A.php';

class finals2ATest extends \PHPUnit\Framework\TestCase {

	public function testModulus() {

		$modulus = new finals2A(20);
		$answer = $modulus->modulus(3);

		$this->assertEquals(5, $answer);
	}

	
}