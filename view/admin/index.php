<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: rgb(244,247,254);">
    <div class="sidebar  d-flex flex-column" style="width: 15%; height: 100%; position: fixed;  ">
        <a href="commande.php" class="commande">COMMANDES</a>
        <a href="clients.php" class="client">CLIENT</a>
        <a href="produits.php" class="stock">STOCK</a>
        <a href="user.php" class="user">UTILISATEURS</a>
    </div>
    <div class="topbar d-flex align-items-center justify-content-end p-4 " style="z-index: 2000;">
        <input type="text" class="col-md-2 form-control mr-2" placeholder="Recherchez">
        <img src="http://localhost/bouchra/images/marius.jpg" class="rounded-circle mr-2" width="30px" alt="">
        <?= $_SESSION['nom'] ?>
        <a href="/bouchra/controller/userController.php?deconnexion=1">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"/>
            </svg>
        </a>
    </div>
    
</body>
</html>