<?php

require_once __DIR__ . "/app/controllers/UserController.php";
require_once __DIR__ . "/app/models/UserModel.php";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/lib/db/MysqliDb.php";






$config = require "config/config.php";

$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);

$request = $_SERVER['REQUEST_URI'];

define("BASE_PATH","/darrebni/mvc/");
var_dump($request);
use userM\UserModel;
use userC\UserController;
$model = new UserModel($db);
$controller = new UserController($model);

switch($request)
{
    case BASE_PATH:
        $controller->index();
        break;
    case BASE_PATH."addForm":
        $controller->insertForm();
        break;
    case BASE_PATH . "add":
        $controller->createUser();
        break;
    case BASE_PATH."editForm?id=".$_GET['id']."":
        $controller->updateForm();
        break;
    case BASE_PATH. "edit?id=" . $_GET["id"] . "":
        $controller->update();
        break;
    
    default:
        echo "action not found";
        break;
}

var_dump($request);