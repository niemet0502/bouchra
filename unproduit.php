<?php 
    session_start();
    require_once('model/produitModel.php');
    $produit = findProduitById($_GET['produit']);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: #F8F8F8">
    <?php 
		include_once('navbar.php');
	?>

    <div class="col-md-8 offset-2 mt-5 mb-5" style="height: 400px; background-color:#fff; box-shadow: 0px 2px 1px 2px rgba(0,0,0,0.25);">
        <div class="row">
            <div class="col-md-4">
                <img src="http://localhost/bouchra/controller/upload/<?=$produit['photo']?>" class="img-fluid mt-5" alt="" style="max-height: 70%">
            </div>
            <div class="col-md-8">
                <h1><?= $produit['libelleProduit']?></h1>
                <h3><?= $produit['prix']?> FCFA</h3>
                <h5>Quantite: <?= $produit['stock']?></h5>

                <div class="d-flex mt-5">
                    <form action="/bouchra/controller/panierController.php" method="post" class="d-flex mt-5 col-md-12">
                        <input type="number" name="qte" value="1" id="" min="1" max="<?= $produit['stock']?>" class="col-md-2 form-control">
                        <button type="submit" name="ajoutPanier" class="btn btn-primary ml-2">Ajouter au panier</button>
                        <input type="text" name="idProduit" value="<?= $produit['idProduit']?>" hidden>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>