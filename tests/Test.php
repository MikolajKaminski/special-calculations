<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Calculations\Divisors;
use Calculations\Factorial;
use Calculations\PrimeNumbers;


final class Test extends TestCase
{
	public function testDivisorsOutput(): void
	{
		$this->assertEquals(
			'This is the calcDivisors function returning!',
			Divisors::calcDivisors()
		);
	}

	public function testFactorialOutput(): void
	{
		$this->assertEquals(
			'This is the calcFactorial function returning!',
			Factorial::calcFactorial()
		);
	}

	public function testPrimeNumbersOutput(): void
	{
		$this->assertEquals(
			'This is the calcPrimeNumbers function returning!',
			PrimeNumbers::calcPrimeNumbers()
		);
	}
}