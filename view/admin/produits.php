<?php
    include_once('index.php');
     if(sizeof($_SESSION)==0){
        header('Location: /bouchra/admin.php');
    }
    require_once('../../model/produitModel.php');
    $produits = getAllProduit();
   
?>
<style>
    .content img{
        width: 100px;
    }
    .content table{
        margin-bLegumesm: 50px;
    }
    .name-product{
        text-transform:uppercase;
        font-weight: bold;
    }
    .stock{
        text-decoration: underline;
        color: #fff !important;
    }
</style>
<div class="content  pt-5" style=" width: 85%; margin-top:81px; position: absolute; left: 15%;">
        <div class="container-list-product col-md-11 ml-5 mt-5">
        <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-3">LISTES DES  PRODUITS</h2>
        <a href="addProduit.php"><button class="btn btn-primary">Nouveau Produit</button></a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Photos</th>
                <th scope="col">Libelle</th>
                <th scope="col">Quantite en stock</th>
                <th scope="col">Prix</th>
                <th scope="col">Categorie</th>
                <th scope="col">Quantite Seuil</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($produits as $produit) {
                    ?>
                        <tr>
                            <td>
                            

                                    <img src="http://localhost/bouchra/controller/upload/<?=$produit['photo']?>" class="img-fluid" width="35px" alt="">
                                </td>
                            <td>
                                <span class="name-product">
                                   <?=$produit['libelleProduit'] ?>
                                </span>
                            </td>
                            <td> <?=$produit['stock'] ?></td>
                            <td> <?=$produit['seuil'] ?></td>
                            <td> <?=$produit['libelleCategorie'] ?></td>
                            <td> <?=$produit['prix'] ?></td>
                            <td>
                                <button class="btn btn-warning">MODIFIER</button>
                                <button class="btn btn-danger">SUPPRIMER</button>
                                
                            </td>
                        </tr>
                    <?php
                }
            ?>
            </tbody>
            </table>
        </div>
</div>