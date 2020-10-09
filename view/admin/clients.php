<?php
include_once('index.php');
    if(sizeof($_SESSION)==0){
        header('Location: /bouchra/admin.php');
    }
    
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
                <tr>
                    <td>
                    <a href="">1</a>
                       
                    </td>
                <td>
                Bachir
                </td>
                <td> Abdoul</td>
                <td>705520077</td>
                <td>3</td>
                <td>
                    <button class="btn btn-warning">MODIFIER</button>
                    <button class="btn btn-danger">SUPPRIMER</button>
                    
                </td>
                </tr>
                <tr>
                    <td>
                    <a href="">2</a>
                       
                    </td>
                <td>
                    Mar 
                </td>
                <td>Ndeye</td>
                <td>767774477</td>
                <td>4</td>
                <td>
                    <button class="btn btn-warning">MODIFIER</button>
                    <button class="btn btn-danger">SUPPRIMER</button>
                    
                </td>
                </tr>
                <tr>
                    <td>
                    <a href="">2</a>
                       
                    </td>
                <td>
                 NDIAYE
                </td>
                <td>Bineta</td>
                <td>76885522</td>
                <td>4</td>
                <td>
                    <button class="btn btn-warning">MODIFIER</button>
                    <button class="btn btn-danger">SUPPRIMER</button>
                    
                </td>
                </tr>
            </tbody>
            </table>
        </div>
</div>