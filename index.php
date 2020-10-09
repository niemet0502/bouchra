<?php
	session_start();
	require_once('model/produitModel.php');
	$condiments = getCondiment();
	$fruits = getFruit();
	$legumes = getLegume();

	if(!isset($_SESSION['panier'])){
		$_SESSION['panier'] = array();
		$_SESSION['panier']['idProduit'] = array();
		$_SESSION['panier']['qte'] = array();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boutique</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		section{
			height: 300px;
		}
		section div img{
			height: 200px;
		}
	</style>
</head>
<body style="background-color: #F8F8F8">
	<?php 
		include_once('navbar.php');
	?>
	<table height="200px">
			<tr>
				<td>
				</td>
			</tr>
		</table>
	<div id="legumes" class="col-md-10 offset-1">
		<h4 class="text-center">Legumes</h4>
		<div class="row">
			<?php
				foreach ($legumes as  $legume) {
					?>
						<div class="col-md-3 p-5">
							<div style="background: white; height: 300px; border-radius: 5px; box-shadow: 0px 2px 1px 2px rgba(0,0,0,0.25);">
								<div class="p-3">
									<a href="unproduit.php?produit=<?=$legume['idProduit']?>">
										<img src="http://localhost/bouchra/controller/upload/<?=$legume['photo']?>" class="img-fluid" alt="" style="max-height: 170px;">
									</a>
								</div>
								<h6 class="text-center"><?=$legume['libelleProduit']?></h6>
								<h3 class="text-center"><?=$legume['prix']?>  FCFA</h3>
							</div>
						</div>
					<?php
				}
			?>
		</div>
	</div>

	<div id="Fruits" class="col-md-10 offset-1 mt-5">
		<h4 class="text-center">Fruit</h4>
		<div class="row">
			<?php
				foreach ($fruits as  $fruit) {
					?>
						<div class="col-md-3 p-5">
							<div style="background: white; height: 300px; border-radius: 5px; box-shadow: 0px 2px 1px 2px rgba(0,0,0,0.25);">
								<div class="p-3">
									<a href="unproduit.php?produit=<?=$fruit['idProduit']?>">
										<img src="http://localhost/bouchra/controller/upload/<?=$fruit['photo']?>" class="img-fluid" alt="" style="max-height: 170px;">
									</a>
								</div>
								<h6 class="text-center"><?=$fruit['libelleProduit']?></h6>
								<h3 class="text-center"><?=$fruit['prix']?>  FCFA</h3>
							</div>
						</div>
					<?php
				}
			?>
		</div>
	</div>

	<div id="Condiments" class="col-md-10 offset-1 mt-5">
		<h4 class="text-center">Condiment</h4>
		<div class="row">
			<?php
				foreach ($condiments as  $condiment) {
					?>
						<div class="col-md-3 p-5">
							<div style="background: white; height: 300px; border-radius: 5px; box-shadow: 0px 2px 1px 2px rgba(0,0,0,0.25);">
								<div class="p-3">
									<a href="unproduit.php?produit=<?=$condiment['idProduit']?>">
										<img src="http://localhost/bouchra/controller/upload/<?=$condiment['photo']?>" class="img-fluid" alt="" style="max-height: 170px;">
									</a>
								</div>
								<h6 class="text-center"><?=$condiment['libelleProduit']?></h6>
								<h3 class="text-center"><?=$condiment['prix']?>  FCFA</h3>
							</div>
						</div>
					<?php
				}
			?>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>