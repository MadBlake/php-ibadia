<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Models\Address;

final class UserTest extends TestCase
{
    public function testAddressAggregation(): void
    {
        $user = new User("Anna", new Address("Carrer Major 10", "Barcelona"));
        $this->assertSame("Anna", $user->getName());
        $this->assertStringContainsString("Barcelona", (string)$user->getAddress());
    }
}
