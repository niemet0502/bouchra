<?php
    session_start();
    require_once('../model/commandeModel.php');
    require_once('../model/clientModel.php');

    if(isset($_POST['commande'])){
        extract($_POST);
        addClient($nom,$prenom,$telephone);
        var_dump(getLastId());
    }