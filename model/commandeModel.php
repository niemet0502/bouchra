<?php
    require_once('bdd.php');

    function getAllCommande(){
        global $bdd;
        $req = "SELECT * FROM commande, client, section WHERE commande.idClient=client.idClient AND idSecteur=idSection";
        return $bdd->query($req)->fetchAll();
    }

    function getId(){
        global $bdd;
        $req = "SELECT * FROM commande, client, section WHERE idClientF=idClient AND idSecteur=idSection ORDER BY idCommande";
        $res =  $bdd->query($bdd)->fetch();
        return $res['idCommande'];
    }

    function numCommande(){
        global $bdd;
        $req="SELECT MAX(idClient) FROM commande";
        $res = $bdd->query($req)->fetch();
        return "CMD-00".$res[0]+1;
    }

    function addCommande($numero,$client,$secteur,$total,$qte){
        global $bdd;
        $req="INSERT INTO commande (numCommande, idClient,idSecteur, total, Quantite)
        VALUES ('$numero','$client','$secteur','$total','$qte')";
        $bdd->exec($req);
    }