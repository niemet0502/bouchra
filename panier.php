<?php 
    session_start();
    require_once('model/produitModel.php');
    $total = 0;
    $cmd = 0;
    $sections = getSection();
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
    <div class="col-md-10 offset-1 mt-5 mb-5">
        <?php
            if(isset($_GET['success'])){
                ?>
                    <p class="alert alert-success">
                        Votre commande a ete valider
                    </p>
                <?php
            }
        ?>
        <h2 class="text-center">Votre Panier</h2>
        <table class="table mb-5 mt-5">
            <thead>
                <tr>
                <th scope="col">Photo</th>
                <th scope="col">Libelle</th>
                <th scope="col">Qte</th>
                <th scope="col">Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i=0; $i < sizeof($_SESSION['panier']['idProduit']); $i++) { 
                            $produit = findProduitById($_SESSION['panier']['idProduit'][$i]);
                            $total += $produit['prix']* $_SESSION['panier']['qte'][$i];
                            $cmd += $_SESSION['panier']['qte'][$i];
                        ?>
                        <tr>
                            <td>
                                <img src="http://localhost/bouchra/controller/upload/<?=$produit['photo']?>" class="img-fluid" width="35px" alt="">
                            </td>
                            <td>
                                <?=$produit['libelleProduit']?>
                            </td>
                            <td>
                                <?=$_SESSION['panier']['qte'][$i]?>
                            </td>
                            <td>
                                <?=$produit['prix']?> FCFA
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                <tr>
                    <td></td><td></td>
                            <td>
                                Total
                            </td>
                            <td>
                                <?=$total?> FCFA
                            </td>
                        </tr>
            </tbody>
        </table>
        <div class="col-md-8">
            <form action="/bouchra/controller/commandeController.php" method="post">
                    <input type="number" name="total" value="<?=$total?>" id="" hidden>
                    <input type="number" name="qte" value="<?=$cmd?>" id=""  hidden>
                    <div class="row form-group">
                        <div class="col-md">
                            <label for="">Nom</label>
                            <input type="text" name="nom" value="" id="" class="form-control" required>
                        </div>
                        <div class="col-md">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" id="" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md">
                            <label for="">Telephone</label>
                            <input type="number" min="111111111" name="telephone" id="" class="form-control" required>
                        </div>
                        <div class="col-md">
                            <label for="">Section</label>
                            <select name="secteur" id="" class="form-control">
                                <?php
                                    foreach ($sections as  $section) {
                                        ?>
                                            <option value="<?=$section['idSection']?>"><?=$section['libelleSection']?> &nbsp; <?=$section['prixSection']?> &nbsp; FCFA</option>
                                       <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="commande" class="btn btn-primary">Valider la commande</button>
            </form>
        </div>
        
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>