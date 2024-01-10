<?php

require_once 'vendor/autoload.php';

use Php2\Oop\Controller\BaseController;
use Php2\Oop\Core\Route;
use Php2\Oop\Model\BaseModel;
use Php2\Oop\Model\Database;

$Control = new BaseController();
$Core = new Route();
$Model = new BaseModel();
$Database = new Database();
$databaseObject = new Database();
$connection = $databaseObject->getDatabaseConnection();



