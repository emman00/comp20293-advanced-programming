<?php
require_once __DIR__ . '/../src/finals2B.php';

class finals2BTest extends \PHPUnit\Framework\TestCase
{
	public function testName()
	{
		$name = new finals2B('Pineda');
		$employeeName = $name->employeeInfo($name);
		$age = new finals2B(20);
		$employeeAge = $age->employeeInfo($age);
		$color = new finals2B('Indigo');
		$employeeFavColor = $color->employeeInfo($color);
		return 0;

	}
}