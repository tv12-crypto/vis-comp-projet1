<?php
session_start();

require_once "../models/identification/connexion.php";

function inicio(){ 
		
	if (isset($_SESSION['id_visiteur'])){
		header("Location: ?c=visiteur&f=homepage");
	}
	if (!isset($_SESSION['error_connexion'])){
		$_SESSION['error_connexion']=0;
	}
	require_once "../views/connexion/index.php";
}

function connexion(){
if (!empty($_POST)){
	if (isset($_POST['login']) && isset($_POST['mdp'])){
		validation_connexion($_POST['login'], $_POST['mdp']);
	}
}
$_SESSION['error_connexion']=1; //variable pour afficher un message d'erreur 
header("Location: ?c=connexion&f=index");
}
?>