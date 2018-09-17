<?php

include_once '../../config/Config.php';
include_once '../../libraries/AdminFunctions.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'AdminIndex';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
loadpage($controllerName, $actionName);
?>