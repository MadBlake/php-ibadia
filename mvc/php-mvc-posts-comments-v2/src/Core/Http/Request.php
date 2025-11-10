<?php
namespace App\Core\Http;

final class Request
{
    public string $method;
    public string $uri;
    public string $path;
    public array $query;
    public array $post;
    public array $server;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->uri    = $_SERVER['REQUEST_URI'] ?? '/';
        $this->path   = parse_url($this->uri, PHP_URL_PATH) ?? '/';
        $this->query  = $_GET ?? [];
        $this->post   = $_POST ?? [];
        $this->server = $_SERVER ?? [];
    }

    public function input(string $key, $default = null)
    {
        return $this->post[$key] ?? $this->query[$key] ?? $default;
    }

    public function all(): array
    {
        return array_merge($this->query, $this->post);
    }
}
