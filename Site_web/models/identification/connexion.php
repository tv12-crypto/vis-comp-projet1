<?php

require_once "../models/db_conn/database_connexion.php";

function query_connexion($login, $password):array
{
    $connex=connexion_db();

	$request="SELECT id, nom, prenom FROM visiteur WHERE login=:login AND mdp=sha1(:password)";
    
    $query = $connex->prepare($request);
    $query->execute([
        ":login" => $login,
        ":password" => $password
    ]);
    
    $results=$query->fetchAll(PDO::FETCH_ASSOC);

	return $results;
}

function validation_connexion($login, $password)
{
    $connex_logs=query_connexion($login, $password);

    foreach ($connex_logs as $value) { $id_visiteur=$value['id'];
        $nom_visiteur=$value['nom'];
        $prenom_visiteur=$value['prenom'];
    }

    if (!empty($id_visiteur)) { $_SESSION['id_visiteur']=$id_visiteur;
        $_SESSION['nom_visiteur']=$nom_visiteur;
        $_SESSION['prenom_visiteur']=$prenom_visiteur;
    header("Location: ?c=visiteur&f=homepage");
    }else{
        $_SESSION['error_connexion']=1; //Ceci affiche Error
    header("Location: ?c=connexion&f=index");
    }
}

?>