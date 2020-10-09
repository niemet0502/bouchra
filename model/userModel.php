<?php
    require_once('bdd.php');

    function connexion($login,$mdp){
        global $bdd;
        $req = "SELECT * FROM user WHERE login='$login' AND mdp='$mdp'";
        return $bdd->query($req)->fetch();

    }

    function getAllUser(){
        global $bdd;
        $req = "SELECT * FROM user";
        return $bdd->query($req)->fetchAll();
    }

    function findUserByLogin($login){
        global $bdd;
        $req = "SELECT * FROM user WHERE login='$login'";
        return $bdd->query($req)->fetch();
    }
    function addUser($nom,$prenom,$login,$mdp){
        global $bdd;
        $req = "INSERT INTO user (nomUser, prenomUser, login, mdp) 
        VALUES ('$nom', '$prenom', '$login', '$mdp')";
        $bdd->exec($req);
    }