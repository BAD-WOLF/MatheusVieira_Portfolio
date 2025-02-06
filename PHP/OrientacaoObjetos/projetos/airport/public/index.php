<?php
require_once dirname(__DIR__) . "/vendor/autoload.php";
use App\Controllers\VooController;

$vooController = new VooController();
$vooController->Main();