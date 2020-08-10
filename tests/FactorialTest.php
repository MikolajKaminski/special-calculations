<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Calculations\Factorial;


final class FactorialTest extends TestCase
{
	public function testFactorialOutput(): void
	{
		$this->assertEquals(
			'This is the calcFactorial function returning!',
			Factorial::calcFactorial()
		);
	}
}