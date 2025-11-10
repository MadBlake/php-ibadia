<?php
namespace App\Core;

final class View
{
    public static function render(string $template, array $data = [], ?string $layout = 'layout'): string
    {
        $content = self::renderPartial($template, $data);
        if ($layout === null) {
            return $content;
        }
        $layoutFile = __DIR__ . '/../Views/' . $layout . '.php';
        if (!is_file($layoutFile)) {
            return $content;
        }
        extract(['content' => $content] + $data);
        ob_start();
        include $layoutFile;
        return ob_get_clean();
    }

    public static function renderPartial(string $template, array $data = []): string
    {
        $file = __DIR__ . '/../Views/' . $template . '.php';
        if (!is_file($file)) {
            return "Vista no encontrada: {$template}";
        }
        extract($data);
        ob_start();
        include $file;
        return ob_get_clean();
    }
}
