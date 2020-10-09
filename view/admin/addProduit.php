<?php
include_once('index.php');
    if(sizeof($_SESSION)==0){
        header('Location: /bouchra/admin.php');
    }
    require_once('../../model/produitModel.php');
    $categories = getCategorie();
    
?>
<style>
  
</style>


<div class="content  pt-5" style=" width: 85%; margin-top:81px; position: absolute; left: 15%;">
        <h2 class="text-center mb-3">Nouveau produit</h2>
        <form method="POST" action="/bouchra/controller/produitController.php" enctype="multipart/form-data" class="col-md-8 offset-2">
            <div class="row form-group">
                <div class="col-md-6">
                    <label for="">Libelle</label>
                    <input type="text" name="libelle" id="" class="form-control" required="">
                </div>
                <div class="col-md-6">
                    <label for="">Quantité</label>
                    <input type="number" name="stock" id="" class="form-control" required="">
                </div>
            </div>
            <div class="row form-group"> 
                <div class="col-md-6">
                    <label for="">Catégorie</label>
                    <select name="idCategorie" class="form-control" id="">
                        <?php
                            foreach($categories as $categorie){
                                ?>
                                    <option value="<?=$categorie['idCategorie'] ?>"><?=$categorie['libelleCategorie'] ?></option>
                                <?php
                            } 
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Photo</label>
                    <input type="file" name="avatar" class="form-control-file">
                </div>
            </div>
            <div class="row form-group"> 
                <div class="col-md-6">
                    <label for="">Prix</label>
                    <input type="number" name="prix" id="" class="form-control">
                </div>
                <div class="col-md-6">
                <label for="" hidden>Prix</label> <br>
                <input type="submit" value="Enregistrez" name="addProduit" class="btn btn-primary mt-2" required="">
                </div>
            </div>
            
        </form>
        
</div>