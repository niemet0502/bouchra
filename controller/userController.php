<?php
    session_start();
    require_once('../model/userModel.php');

    if(isset($_POST['btnConnexion'])){
        
        extract($_POST);
        $user = connexion($login,$mdp);
        $_SESSION['nom'] = $user['nomUser'];
        
        if($user){
            header('Location: /bouchra/view/admin/produits.php');
        
        }else{  
            header('Location: /bouchra/admin.php?erreur=1');
        }
        
        
    }

    if(isset($_POST['addUser'])){
        extract($_POST);

        $user = findUserByLogin($login);
        if($user){
            header('Location: /bouchra/view/admin/addUser.php'); 
        }else{
            addUser($nom,$prenom,$login,$mdp);
            header('Location: /bouchra/view/admin/user.php'); 
        }
    }
    
    if(isset($_GET['deconnexion'])){
        $_SESSION = array();
        session_unset();
        header('Location: /bouchra/admin.php');
    } 