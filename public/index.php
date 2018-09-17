<?php
	
include_once '../config/Config.php';
include_once '../libraries/Functions.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
loadpage($controllerName, $actionName);

?>