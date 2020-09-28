<?php

function connection_db():PDO
{
    $pdo = new PDO('mysql:Localhost;dbname=gsb;','root','',
        [
            // uniquement en mod dev
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
        ]
    );
    return $pdo;
}
?>