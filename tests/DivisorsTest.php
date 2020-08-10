<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Calculations\Divisors;


final class DivisorsTest extends TestCase
{
	public function testCorrectDivisorsOutput(): void
	{
		$this->assertEquals(
			array(3, 5),
			Divisors::calcDivisors(15)
		);
		$this->assertEquals(
			array(2, 5),
			Divisors::calcDivisors(10)
		);
		$this->assertEquals(
			array(2, 4, 8),
			Divisors::calcDivisors(16)
		);
	}

	public function testNegativeDivisorsOutput(): void
	{
		$this->expectException(InvalidArgumentException::class);
        Divisors::calcDivisors(3);
	}
}