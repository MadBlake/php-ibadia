<?php
namespace App\Core\Http;

final class Response
{
    private string $body = '';
    private int $status = 200;
    private array $headers = [];

    public static function html(string $html, int $status = 200, array $headers = []): self
    {
        $r = new self();
        $r->status = $status;
        $r->headers = $headers + ['Content-Type' => 'text/html; charset=utf-8'];
        $r->body = $html;
        return $r;
    }

    public static function json($data, int $status = 200, array $headers = []): self
    {
        $r = new self();
        $r->status = $status;
        $r->headers = $headers + ['Content-Type' => 'application/json; charset=utf-8'];
        $r->body = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return $r;
    }

    public static function redirect(string $to, int $status = 302): self
    {
        $r = new self();
        $r->status = $status;
        $r->headers = ['Location' => $to];
        return $r;
    }

    public function send(): void
    {
        http_response_code($this->status);
        foreach ($this->headers as $k => $v) {
            header($k . ': ' . $v);
        }
        echo $this->body;
    }
}
