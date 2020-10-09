<?php
    require_once('bdd.php');

    function getAllClient(){
        global $bdd;
        $req="SELECT * FROM client";
        return $bdd->query($req)->fetchAll();
    }

    function addClient($nom,$prenom,$telephone){
        global $bdd;
        $req="INSERT INTO client (nomClient, prenomClient, Telephone) VALUES ('$nom','$prenom','$telephone')";
        $bdd->exec($req);
    }

    function getLastId(){
        global $bdd;
        $req="SELECT M"
    }