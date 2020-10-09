<?php
    require_once('bdd.php');

    function getAllCommande(){
        global $bdd;
        $req = "SELECT * FROM commande, client, section WHERE idClientF=idClient AND idSecteur=idSection";
        return $bdd->query($bdd)->fetchAll();
    }

    function getId(){
        global $bdd;
        $req = "SELECT * FROM commande, client, section WHERE idClientF=idClient AND idSecteur=idSection ORDER BY idCommande";
        $res =  $bdd->query($bdd)->fetch();
        return $res['idCommande'];
    }