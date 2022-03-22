<!-- Program 1:
 Develop a class that will return the modulus value of two numbers
• Should only accept numbers
• Throw an Invalid Exception if the given divisor is greater than the
dividend
• Create 5 test cases for this class. -->
<?php

class finals2A 
{ 
	

	public function __construct($num1) {

		$this->dividendNum = $num1;
	}

	public function modulus($divisorNum) {

		if($divisorNum > $this->dividendNum) { 

			throw new \InvalidArgumentExpression('Dividend must be greater than the divisor');
		}

		return $this->dividendNum % $divisorNum;
	}

}