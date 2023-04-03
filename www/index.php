<?php
include_once "../config/config.php";
include_once "../library/main_functions.php";

$controllerName = isset($_GET['controller']) ? ucfirst(($_GET['controller'])) : "Index";
$actionName = isset($_GET['action']) ? ucfirst(($_GET['action'])) : "Action";

loadPage($controllerName, $actionName);
