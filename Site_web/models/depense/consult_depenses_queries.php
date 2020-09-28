<?php

require_once "../models/db_conn/database_connexion.php";

function verif_informes_dispo():array
{ 
    $connex = db_connexion();
	$request="SELECT mois FROM fichefrais WHERE idVisiteur=:id_visiteur ORDER BY dateModif DESC";
    $query = $connex->prepare($request);
    $query->execute([ ":id_visiteur" => $_SESSION['id_visiteur'] ]);
	$results = $query->fetchAll(PDO::FETCH_NUM); //retourne qu'une seule colonne
    return $results;
}

function afficher_dispo_informes():array
{
    $dispo_informes=array();
    $results=verif_informes_dispo($_SESSION['id_visiteur']);
    
    $i=1;
    foreach ($results as $value) { //$results est sous la forme : 082018 (mois + annee)
        $month_dispo=$value[0][0].$value[0][1];
        $year_dispo=$value[0][2].$value[0][3].$value[0][4].$value[0][5];
        $dispo_informes['date_value '.$i]=$value[0];
        $dispo_informes['date_name '.$i]=calendar_mois($month_dispo)." ".$year_dispo;
        $i++;
    }

    return $dispo_informes;
}

function afficher_informe($informe_date):array
{
    $connex = db_connexion();
	$request="SELECT visiteur.nom, visiteur.prenom, fichefrais.mois, fichefrais.nbJustificatifs,
	            fichefrais.montantValide, fichefrais.dateModif, fichefrais.idEtat FROM fichefrais INNER JOIN visiteur 
	            ON fichefrais.idVisiteur=visiteur.id WHERE fichefrais.idVisiteur=:id_visiteur AND fichefrais.mois=:informe_date";

    $query = $connex->prepare($request);
    $query->execute([ ":id_visiteur" => $_SESSION['id_visiteur'],   ":informe_date" => $informe_date]);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    $month='';
    $year='';
    

	foreach ($results as $value){
		for ($i=0; $i < 6; $i++) { 
			if ($i<2) {
				$month=$month.$value['mois'][$i];
			}else{
				$year=$year.$value['mois'][$i];
			}          
        }
        $data_informe=[ $value['nom'], $value['prenom'], $value['mois'], $value['nbJustificatifs'],$value['montantValide'], $value['dateModif'], $value['idEtat'] ];
    }
    
	$informe=[
        'date_name' => calendar_mois($month)." ".$year,
        'data_informe' => $data_informe
    ];

    return $informe;
}
?>