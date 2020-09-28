<?php

$get1=$_GET;

$router = [];
$router['controller'] = 'connexion';
$router['function'] = 'index';


if (!empty($get1)) {
	$router['controller'] = $_GET['c'];
	$router['function'] = $_GET['f'];
}
require_once "../Controleurs/".$router['controller'].".php";

$router['function']();
?>