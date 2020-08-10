<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Calculations\Divisors;


final class DivisorsTest extends TestCase
{
	public function testDivisorsOutput(): void
	{
		$this->assertEquals(
			'This is the calcDivisors function returning!',
			Divisors::calcDivisors()
		);
	}
}