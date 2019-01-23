@extends('layouts.app')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 ml-auto">
						<form>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Votre recherche" aria-label="Votre recherche" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn btn-secondary" type="button">Rechercher</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div class="card">
							<div class="card-header">
								Catégories
							</div>
							<div class="card-body">
								<form>
									<div class="form-group">
										@foreach($tags as $tag)
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="defaultCheck{{$tag->IDtag}}">
											<label class="form-check-label" for="defaultCheck{{$tag->IDtag}}">
												{{$tag->name}}
											</label>
										</div>
										@endforeach
									</div>
									<div class="form-row">
										<button type="submit" class="btn btn-secondary">
										Filtrer
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
										<ol class="carousel-indicators">
											<li data-target="#carousel" data-slide-to="0" class="active"></li>
											<li data-target="#carousel" data-slide-to="1"></li>
											<li data-target="#carousel" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner" role="listbox">
											<div class="carousel-item active">
												<a href="#">
													<img srcset="http://placehold.it/1250x200" alt="responsive image" class="d-block img-fluid">
													<div class="carousel-caption">
														<div>
															<h2>{{$topArticles[0]->title}}</h2>
															<p>{{$topArticles[0]->nbSell}} articles vendus</p>
															<span class="btn btn-sm btn-outline-secondary">Voir</span>
														</div>
													</div>
												</a>
											</div>
											<!-- /.carousel-item -->
											<div class="carousel-item">
												<a href="#">
													<img srcset="http://placehold.it/1250x200" alt="responsive image" class="d-block img-fluid">
													<div class="carousel-caption justify-content-center align-items-center">
														<div>
															<h2>{{$topArticles[1]->title}}</h2>
															<p>{{$topArticles[1]->nbSell}} articles vendus</p>
															<span class="btn btn-sm btn-outline-secondary">Voir</span>
														</div>
													</div>
												</a>
											</div>
											<!-- /.carousel-item -->
											<div class="carousel-item">
												<a href="#">
													<img srcset="http://placehold.it/1250x200" alt="responsive image" class="d-block img-fluid">
													
													<div class="carousel-caption justify-content-center align-items-center">
														<div>
															<h2>{{$topArticles[2]->title}}</h2>
															<p>{{$topArticles[2]->nbSell}} articles vendus</p>
															<span class="btn btn-sm btn-outline-secondary">Voir</span>
														</div>
													</div>
												</a>
											</div>
											<!-- /.carousel-item -->
										</div>
										<!-- /.carousel-inner -->
										<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>

							<div class="row margintop">
								@foreach ($articles as $article)
								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100">
										<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
										<div class="card-body">
											<h4 class="card-title">
											<a href="#">{{$article->title}}</a>
											</h4>
											<h5>{{$article->price}}€</h5>
											<p class="card-text">{{$article->description}}</p>
										</div>
									</div>
								</div>
								@endforeach	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection