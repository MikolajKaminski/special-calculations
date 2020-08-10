<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Calculations\PrimeNumbers;


final class PrimeNumbersTest extends TestCase
{
	public function testPrimeNumbersOutput(): void
	{
		$this->assertEquals(
			'This is the calcPrimeNumbers function returning!',
			PrimeNumbers::calcPrimeNumbers()
		);
	}
}