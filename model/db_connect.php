<?php
function db_connect(){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
    }
    catch (Exception $e) {
        die('ERREUR : Impossible de se connecter à la base de donnée.' . $e->getMessage());
    }
}