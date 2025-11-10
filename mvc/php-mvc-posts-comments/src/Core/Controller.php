<?php
namespace App\Core;

class Controller
{
    protected function view(string $template, array $data = []): string
    {
        extract($data);
        ob_start();
        include __DIR__ . '/../Views/' . $template . '.php';
        $content = ob_get_clean();
        ob_start();
        include __DIR__ . '/../Views/layout.php';
        return ob_get_clean();
    }

    protected function redirect(string $to): never
    {
        header('Location: ' . $to);
        exit;
    }
}
