<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Models\Dog;

final class DogTest extends TestCase
{
    public function testMakeSound(): void
    {
        $dog = new Dog("Rex", 4);
        $this->assertSame("Bup!", $dog->makeSound());
    }

    public function testRunTrait(): void
    {
        $dog = new Dog("Rex", 4);
        $this->assertStringContainsString("is running", $dog->run());
    }
}
