<?php

session_start();
// Inicio
require_once "../models/depenses/consult_depenses_queries.php";
require_once "../models/depenses/depenses_functions.php";
require_once "../models/depenses/process_depense.php";

//Query
$_SESSION['form_depense_00']=["Nom", "Prénom", "Date", "Nombre de justificatifs", "Montant de la fiche", "Date de la dernière modification", "Etat de la fiche"];


function homepage(){
	require_once "../views/visiteur/homepage.php";
}

function depense(){
	require_once "../views/visiteur/depense.php";
}

function consult_depenses(){
	$dispo_informes=afficher_dispo_informes();
	require_once "../views/visiteur/consult_depenses.php";
}

function disconnexion(){
	session_destroy();
	header("Location: ?c=connexion&f=index"); 
}

function afficher_selected_informe(){
	$informe=afficher_informe($_POST['informe_date']);
	$dispo_informes=afficher_dispo_informes();
	require_once "../views/visiteur/consult_depenses.php";
}
?>
