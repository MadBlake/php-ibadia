<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Http\Response;

final class HomeController extends Controller
{
    public function index(): Response
    {
        return $this->view('home/index', []);
    }
}
