<?php
    include_once('index.php');
    require_once('../../model/clientModel.php');
    $clients = getAllClient();
    
?>
<style>
    .client{
        text-decoration: underline;
        color: #fff !important;
    }
</style>

<div class="content  pt-5" style=" width: 85%; margin-top:81px; position: absolute; left: 15%;">
        <h2 class="text-center mb-3">LISTES DES CLIENTS</h2>
        <div class="container-list-product col-md-11 ml-5 mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Nombre de Commande</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($clients as $client) {
                        ?>
                        <tr>
                            <td>
                            <a href=""><?= $client['idClient']?></a>
                            </td>
                        <td>
                        <?= $client['nomClient']?>
                        </td>
                        <td> <?= $client['prenomClient']?></td>
                        <td><?= $client['Telephone']?></td>
                        <td>3</td>
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