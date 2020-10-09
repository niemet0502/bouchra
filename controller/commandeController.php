<?php
    session_start();
    require_once('../model/commandeModel.php');
    require_once('../model/clientModel.php');

    if(isset($_POST['commande'])){
        extract($_POST);
        addClient($nom,$prenom,$telephone);
        $id = getLastId();
        $numero =  numCommande();
        addCommande($numero,$id,$secteur,$total,$qte);
        $_SESSION['panier'] = array();
		$_SESSION['panier']['idProduit'] = array();
		$_SESSION['panier']['qte'] = array();
        header('Location: /bouchra/panier.php?success=1');
    }