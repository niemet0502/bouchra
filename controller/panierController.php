<?php
    session_start();
    echo'existe pas !';
    if(isset($_POST['ajoutPanier'])){
        extract($_POST);

        if(!isset($_SESSION['panier'])){
            echo'existe pas';
            $_SESSION['panier'] = array();
            $_SESSION['panier']['idProduit'] = array();
            $_SESSION['panier']['qte'] = array();
        }
        if(array_search($idProduit,$_SESSION['panier']['idProduit']) == false){
            $_SESSION['panier']['idProduit'][] = $idProduit;
            $_SESSION['panier']['qte'][] = $qte;
        }else{
            $position = array_search($idProduit,$_SESSION['panier']['idProduit']);
            $_SESSION['panier']['qte'][$position] += $qte;
        }
       header('Location: /bouchra/unproduit.php?produit='.$idProduit);
        
    }