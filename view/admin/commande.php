<?php
    include_once('index.php');
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
                <tr>
                    <td>
                    <a href="">CMD-001</a>
                       
                    </td>
                <td>
                   Bineta NDIAYE
                </td>
                <td>Dakar Plateau</td>
                <td>4500 FCFA</td>
                <td>3</td>
                <td>
                    <button class="btn btn-warning">MODIFIER</button>
                    <button class="btn btn-danger">SUPPRIMER</button>
                    
                </td>
                </tr>
                <tr>
                    <td>
                    <a href="">CMD-002</a>
                       
                    </td>
                <td>
                   Ndeye Mar 
                </td>
                <td>Liberté 6</td>
                <td>7500 FCFA</td>
                <td>4</td>
                <td>
                    <button class="btn btn-warning">MODIFIER</button>
                    <button class="btn btn-danger">SUPPRIMER</button>
                    
                </td>
                </tr>
                <tr>
                    <td>
                    <a href="">CMD-003</a>
                       
                    </td>
                <td>
                   Abdoul Bachir
                </td>
                <td>Médina</td>
                <td>1500 FCFA</td>
                <td>1</td>
                <td>
                    <button class="btn btn-warning">MODIFIER</button>
                    <button class="btn btn-danger">SUPPRIMER</button>
                    
                </td>
                </tr>
            </tbody>
            </table>
        </div>
</div>