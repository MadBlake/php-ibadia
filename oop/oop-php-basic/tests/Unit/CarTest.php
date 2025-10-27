<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Models\Car;

final class CarTest extends TestCase
{
    public function testStart(): void
    {
        $car = new Car("Toyota", 120);
        $this->assertStringContainsString("Toyota: Engine", $car->start());
    }
}
