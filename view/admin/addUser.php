<?php
    include_once('index.php');
?>
<div class="content  pt-5" style=" width: 85%; margin-top:81px; position: absolute; left: 15%;">
    <div class="container-list-product col-md-11 ml-5 mt-5">
        <h2 class="text-center">Nouvel Utilisateur</h2>
        <form action="/bouchra/controller/userController.php" method="post" class="col-md-8 offset-2">
            <div class="row form-group">
                <div class="col-md-6">
                    <label for="">NOM</label>
                    <input type="text" name="nom" id="" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="">PRENOM</label>
                    <input type="text" name="prenom" id="" class="form-control">
                </div>
            </div>
            <div class="row form-group"> 
                <div class="col-md-6">
                    <label for="">E-mail</label>
                   <input type="text" name="login" id="" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center pt-4">
                <input type="submit" value="Enregistrez" name="addUser" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>