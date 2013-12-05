<?php 
include 'autoload.php';
$class = "BaseController";
$action = 'index';
if (isset($_GET['a'])) {
	$action = $_GET['a'];
}
$action = "action" . ucfirst($action); 
$controller = new $class();
if (isset($_GET['p'])) {
	$controller->$action($_GET['p']);
} else {
	$controller->$action();
}
?>
