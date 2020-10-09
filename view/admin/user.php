<?php
    include_once('index.php');
    require_once('../../model/userModel.php');
    $users = getAllUser();
?>
<style>
    .user{
        text-decoration: underline;
        color: #fff !important;
    }
</style>

<div class="content  pt-5" style=" width: 85%; margin-top:81px; position: absolute; left: 15%;">
        
        
        <div class="container-list-product col-md-11 ml-5 mt-5">
        <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-3">LISTES DES UTILISATEURS</h2>
        <a href="addUser.php"><button class="btn btn-primary">Nouvel utilisateur</button></a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">e-mail</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                    <?php
                        foreach($users as $user){
                            ?>
                                <tr>
                                    <td>
                                        <a href=""><?=$user['idUser']?></a>
                                        
                                    </td>
                                    <td>
                                        <?=$user['nomUser']?>
                                    </td>
                                    <td><?=$user['prenomUser']?></td>
                                    <td><?=$user['login']?></td>
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