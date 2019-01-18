<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-md-12">
				<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
					<a class="navbar-brand" href="#">
						<img src="assets/img/logo.png" alt="Logo" class="logo">
						<span class="title">BDE Cesi Strasbourg</span>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNavbar">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="headerNavbar">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Evènements</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Boutique</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Boîte à idées</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
									Profil
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Mon profil</a>
									<a class="dropdown-item" href="#">Mon panier</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Déconnexion</a>
								</div>
							</li>
							<li>
								@auth
								@if (Route::has('login'))
								<a href="{{ url('home')}}" class="btn btn-outline-secondary">Connexion</a>
								@endif
								@endauth
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>