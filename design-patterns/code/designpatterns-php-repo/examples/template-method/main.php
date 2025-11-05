<?php
require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Behavioral\TemplateMethod\CSVExporter;
(new CSVExporter())->export([['id'=>1,'name'=>'Ana'],['id'=>2,'name'=>'Luis']]);
