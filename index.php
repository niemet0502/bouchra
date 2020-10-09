<?php
	session_start();
	require_once('model/produitModel.php');
	$condiments = getCondiment();
	$fruits = getFruit();
	$legumes = getLegume();
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">
		<img src="images/logo.jpeg" class="img-fluid" width="100px" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end align-items-center pr-4" id="navbarNav">
		<ul class="navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#legumes">Legume</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#Fruits">Fruits</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#Condiments">Condiment</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/bouchra/admin.php"><button class="btn btn-secondary">ADMIN</button></a>
		</li>
		</ul>
	</div>
	</nav>
	
	<section>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block  w-100" src="images/carousel1.jpeg" alt="First slide" style="height: 450px">
				</div>
				<div class="carousel-item">
				<img class="d-block  w-100" src="images/carousel2.jpeg" alt="Second slide" style="height: 450px">
				</div>
				<div class="carousel-item">
				<img class="d-block  w-100" src="images/carousel3.jpg" alt="Third slide" style="height: 450px">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
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
									<img src="http://localhost/bouchra/controller/upload/<?=$legume['photo']?>" class="img-fluid" alt="" style="max-height: 170px;">
								</div>
								<h6 class="text-center"><?=$legume['libelleProduit']?></h6>
								<h3 class="text-center"><?=$legume['prix']?></h3>
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
									<img src="http://localhost/bouchra/controller/upload/<?=$fruit['photo']?>" class="img-fluid" alt="" style="max-height: 170px;">
								</div>
								<h6 class="text-center"><?=$fruit['libelleProduit']?></h6>
								<h3 class="text-center"><?=$fruit['prix']?></h3>
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
									<img src="http://localhost/bouchra/controller/upload/<?=$condiment['photo']?>" class="img-fluid" alt="" style="max-height: 170px;">
								</div>
								<h6 class="text-center"><?=$condiment['libelleProduit']?></h6>
								<h3 class="text-center"><?=$condiment['prix']?></h3>
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