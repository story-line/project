<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/9
 * Time: 9:27
 */

define('APP_HOST', $_SERVER['HTTP_HOST']);

$module = isset($_GET['module']) ? ucfirst($_GET['module']) : 'Home';

$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$config = require('./config.php');
require('./function.php');

use Controller\Controller;

$controller = 'Controller\Admin\\' . $controller;
$obj = new $controller();
$obj->$action();