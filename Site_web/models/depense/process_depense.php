<?php

require_once "../models/db_conn/database_connexion.php";
require_once "depenses_functions.php";

function process_depense(){
	if(!empty($_POST)){

		if(isset($_POST['month']) && isset($_POST['year']) && isset($_POST['lunch']) && isset($_POST['bedtime']) 
		&& isset($_POST['step']) && isset($_POST['distance']) && isset($_POST['date_hors_frais']) && isset($_POST['motif'])
		&& isset($_POST['amount']) && isset($_POST['justificate']) && isset($_POST['total_amount'])){

			try{
				
				//		$_POST
				$date = $_POST['year'].$_POST['month'];
				$dateModif = "STR_TO_DATE(str";
				$date_hors_frais = $_POST['date_hors_frais'];
				$month = $_POST['month'];

				$lunch = $_POST['lunch'];
				$bedtime = $_POST['bedtime'];
				$step = $_POST['step'];
				$distance = $_POST['distance'];
				
				$motif = $_POST['motif'];
				$amount = $_POST['amount'];
				$nb_justificate = $_POST['justificate'];
				$total_amount = $_POST['total_amount'];
				$etat_fiche = 'CR';
				
				$id_visiteur = $_SESSION['id_visiteur'];

				//		REQUEST vers SQL
				$request_fiche_frais = "INSERT INTO fichefrais (idVisiteur, mois, nbJustificatifs, dateModif, idEtat) VALUES (:id_visiteur, ':month', ':nb_justificate', ':dateModif', ':etat_fiche')";
				$request_fiche_lunch = "INSERT INTO lignefraisforfait (idVisiteur, mois, idFraisForfait, quantite) VALUES (:id_visiteur, '$month', 'REP', '$lunch')";
				$request_fiche_bedtime = "INSERT INTO lignefraisforfait (idVisiteur, mois, idFraisForfait, quantite) VALUES (:id_visiteur, '$month', 'NUI', '$bedtime')";
				$request_fiche_step = "INSERT INTO lignefraisforfait (idVisiteur, mois, idFraisForfait, quantite) VALUES (:id_visiteur, '$month', 'ETP', '$step')";
				$request_fiche_distance = "INSERT INTO lignefraisforfait (idVisiteur, mois, idFraisForfait, quantite) VALUES (:id_visiteur, '$month', 'KM', '$distance')";
				$request_hors_frais = "INSERT INTO lignefraishorsforfait (idVisiteur, mois, libelle, date, montant) VALUES (:id_visiteur, '$month', '$motif', '$date', '$amount')";

				$connex = connexion_db();

				//		Query
				$query = $connex->prepare($request_fiche_frais);
				$query->execute([ ":id_visiteur" => $id_visiteur,
					":month" => $month,
					":nb_justificate" => $nb_justificate,
					":dateModif" => $dateModif,
					":etat_fiche" => $etat_fiche
				]);
				$query = $connex->prepare($request_fiche_lunch);
				$query->execute([ ":id_visiteur" => $id_visiteur,
					":month" => $month,
					":lunch" => $lunch
				]);
				$query = $connex->prepare($request_fiche_bedtime);
				$query->execute([ ":id_visiteur" => $id_visiteur,
					":month" => $month,
					":bedtime" => $bedtime
				]);
				$query = $connex->prepare($request_fiche_step);
				$query->execute([ ":id_visiteur" => $id_visiteur,
					":month" => $month,
					":step" => $step
				]);
				$query = $connex->prepare($request_fiche_distance);
				$query->execute([ ":id_visiteur" => $id_visiteur,
					":month" => $month,
					":distance" => $distance
				]);
				$query = $connex->prepare($request_hors_frais);
				$query->execute([ ":id_visiteur" => $id_visiteur,
					":month" => $month,
					":date" => $date,
					':amount' => $amount
				]);
				
				echo "Votre demande est enregistré";

			}catch (PDOException $e){
				echo "Error : " . $e -> getMessage()."<br/>";
			}

		}else{
			echo "Veuillez remplir tous les champs" ;
		}
	}
}
?>