<?php
    require_once('bdd.php');

    function getCategorie(){
        global $bdd;
        $req="SELECT * FROM categorie";
        return $bdd->query($req)->fetchAll();
    }

    function addProduit($libelle,$prix,$photo,$categorie,$stock){
        global $bdd;
        $req="INSERT INTO produit (libelleProduit, stock, seuil,prix, idCategorieF,photo)
        VALUES ('$libelle', '$stock','$prix', 1, '$categorie', '$photo')";
        $bdd->exec($req);
    }

    function getAllProduit(){
        global $bdd;
        $req="SELECT * FROM produit, categorie WHERE idCategorieF=idCategorie";
        return $bdd->query($req)->fetchAll();
    }