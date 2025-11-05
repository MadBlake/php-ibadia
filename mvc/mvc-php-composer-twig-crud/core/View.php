<?php
namespace Core;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\TwigFilter;
class View {
    private static ?Environment $twig = null;
    public static function init(string $viewsPath, bool $debug=false): void {
        $loader = new FilesystemLoader($viewsPath);
        $options = ['cache'=>false, 'autoescape'=>'html'];
        if ($debug) $options['debug']=true;
        self::$twig = new Environment($loader, $options);
        self::$twig->addFilter(new TwigFilter('nl2br', fn($s)=> nl2br($s)));
    }
    public static function render(string $view, array $data=[]): void {
        if (!self::$twig) throw new \RuntimeException('Twig no inicializado');
        $tpl = str_replace('.', '/', $view) . '.twig';
        echo self::$twig->render($tpl, $data);
    }
}
