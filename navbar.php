<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">
		<img src="images/logo.jpeg" class="img-fluid" width="100px" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end pr-4" id="navbarNav">
		<ul class="navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="/bouchra/index.php">Accueil</a>
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
			<a href="panier.php">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
			</svg>
			 <span class="badge badge-pill badge-dark"><?=sizeof($_SESSION['panier']['qte'])?></span></a>
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