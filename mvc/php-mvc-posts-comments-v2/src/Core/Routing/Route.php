<?php
namespace App\Core\Routing;

use App\Core\Http\Request;

final class Route
{
    public function __construct(
        public string $method,
        public string $pattern,
        public array $handler
    ) {}

    public static function get(string $pattern, array $handler): self
    {
        return new self('GET', $pattern, $handler);
    }
    public static function post(string $pattern, array $handler): self
    {
        return new self('POST', $pattern, $handler);
    }

    public function matches(Request $req, ?array &$params = []): bool
    {
        if ($req->method !== $this->method) return false;
        if (preg_match($this->pattern, $req->path, $m)) {
            array_shift($m);
            $params = $m;
            return true;
        }
        return false;
    }
}
