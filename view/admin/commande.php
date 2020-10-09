<?php
    include_once('index.php');
    require_once('../../model/commandeModel.php');
    $commandes = getAllCommande();
?>
<style>
    .commande{
        text-decoration: underline;
        color: #fff !important;
    }
</style>

<div class="content  pt-5" style=" width: 85%; margin-top:81px; position: absolute; left: 15%;">
        <h2 class="text-center mb-3">LISTES DES COMMANDES</h2>
        <div class="container-list-product col-md-11 ml-5 mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Numéro Commande</th>
                <th scope="col">Client</th>
                <th scope="col">Secteur</th>
                <th scope="col">Montant Total</th>
                <th scope="col">Quantité Commandé</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($commandes as $commande) {
                    ?>
                    <tr>
                            <td>
                            <a href=""><?= $commande['numCommande']?></a>
                            
                            </td>
                        <td>
                            <?= $commande['nomClient']?> &nbsp;  <?= $commande['prenomClient']?>
                        </td>
                        <td> <?= $commande['libelleSection']?></td>
                        <td> <?= $commande['total']?></td>
                        <td> <?= $commande['Quantite']?></td>
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