<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Models\Cat;

final class CatTest extends TestCase
{
    public function testMakeSound(): void
    {
        $cat = new Cat("Misu", 3);
        $this->assertSame("Miau!", $cat->makeSound());
    }
}
