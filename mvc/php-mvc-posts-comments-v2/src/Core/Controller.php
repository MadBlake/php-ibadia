<?php
namespace App\Core;

use App\Core\Http\Response;

class Controller
{
    protected function view(string $template, array $data = [], ?string $layout = 'layout'): Response
    {
        $html = View::render($template, $data, $layout);
        return Response::html($html);
    }

    protected function redirect(string $to): Response
    {
        return Response::redirect($to);
    }
}
