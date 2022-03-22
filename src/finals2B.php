<!-- Program #2
• Develop a class that will get the name, age, favorite color of an employee.
• Name should accept alphabet only.
• Age should only accept numbers and must not exceed to 70.
• Favorite color should only accept alphabet.
• Should return name + age + favorite color values.
• Create 8 test cases for this class. -->
<?php

$name, $age, $favColor;

class finals2B {

	public function employeeInfo()
	{
		$name = (string)readline('Enter Your Name: ');

		$age = (int)readline('Enter Your Age: ');

		$favColor = (string)readline('Enter Your Favorite Color: ');

		return $name . $age . $favColor;
	}
}