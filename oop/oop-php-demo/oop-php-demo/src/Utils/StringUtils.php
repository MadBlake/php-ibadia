<?php
namespace App\Utils;

final class StringUtils
{
    private function __construct(){}

    public static function slug(string $text): string
    {
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
        return trim($text, '-');
    }
}
