<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Utils\StringUtils;

final class StringUtilsTest extends TestCase
{
    public function testSlug(): void
    {
        $this->assertSame("hola-mon-poo-en-php", StringUtils::slug("Hola Món! POO en PHP"));
    }
}
