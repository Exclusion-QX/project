<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Главная</title>

<?php

require("header.html");
?>

 	<!-- Карусель -->
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
  	html,
	body,
	header,
	.carousel
	{
		height: 60vh;
	}
	@media (max-width: 740px){
		html,
		body,
		header,
		.carousel
		{
			height: 100vh;
		}
	@media (min-width: 800px) and (max-width: 850px) {
		html,
		body,
		header,
		.carousel
		{
			height: 100vh;
		}
	}
}	

  </style>
</head>

<body>

	<!-- Шапка сайта -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
		<div class="container">
		<!-- Логотип -->
			<a href="#" class="navbar-brand waves-effect">
				<strong class="blue-text">Project</strong>
			</a>

		<!-- Кнопка меню, при уменьшении экрана -->
			<button class="navbar-toggler" type="button"
			data-toggle="collapse" data-target="#navbarContent"
			aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
				
			</button>
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="#" class="nav-link waves-effect">Главная</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link waves-effect">Товары</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link waves-effect">Конструктор</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link waves-effect">О нас</a>
					</li>
				</ul>
				<!-- Количество продуктов в карзине -->
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a href="#" class="nav-link waves-effect">
							<span class="badge red z-depth-1 mr-1">12</span>
							<i class="fa fa-shopping-cart"></i>
							<span class="clearfix d-none d-sm-inline-block">Корзина</span>
						</a>
					</li>
				</ul>

				<!-- Кнопки регистрации-->

				<ul class="navbar-nav mr-0">
					<li class="nav-item">
						<a href="" class="nav-link waves-effect">Авторизация</a>
					</li>
					<li class="nav-item">
						<a href="registration.php" class="nav-link waves-effect">Регистрация</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
 	<!-- КАРУСЕЛь -->
>>>>>>> 14ea87e06dcafef497fad8574fced2d95d93677c:index.html
 	<div id="carousel-ex" class="carousel slide carousel-fade pt-4" data-ride="carousel">
 		<ol class="carousel-indicators">
 			<li class="active" data-target="#carousel-ex" data-slide-to="0"></li>
 			<li data-target="#carousel-ex" data-slide-to="1"></li>
 			<li data-target="#carousel-ex" data-slide-to="2"></li>
 		</ol>
 		<div class="carousel-inner" role="listbox">

 			<!-- 1-Й СЛАЙД -->
 			<div class="carousel-item active">
 				<div class="view" style="background-image: url('https://images.pexels.com/photos/163125/board-printed-circuit-board-computer-electronics-163125.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
 				background-repeat: no-repeat; background-size: cover;">
 					<div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
 						<div class="text-center white-text mx-5 wow fadeIn">
 							<h1 class="mb-4">
 								<strong>E-shop</strong>
 							</h1>

 							<p>
 								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, cumque.</strong>
 							</p>

 							<p class="mb-4 d-none d-md-block">
 								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores libero sapiente at explicabo, dolorem placeat!</strong>
 							</p>

 							<a href="#" class="btn btn-outline-white btn-lg">
 								Lorem ipsum dolor. <i class="fa fa-graduation-cap ml-2"></i>
 							</a>
 						</div>
 					</div>
 				</div>
 			</div>


			<!-- 2-Й СЛАЙД -->
 			<div class="carousel-item">
 				<div class="view" style="background-image: url('https://images.pexels.com/photos/2582932/pexels-photo-2582932.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
 				background-repeat: no-repeat; background-size: cover;">
 					<div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
 						<div class="text-center white-text mx-5 wow fadeIn">
 							<h1 class="mb-4">
 								<strong>Интернет магазин</strong>
 							</h1>

 							<p>
 								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, cumque.</strong>
 							</p>

 							<p class="mb-4 d-none d-md-block">
 								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores libero sapiente at explicabo, dolorem placeat!</strong>
 							</p>

 							<a href="#" class="btn btn-outline-white btn-lg">
 								Lorem ipsum dolor. <i class="fa fa-graduation-cap ml-2"></i>
 							</a>
 						</div>
 					</div>
 				</div>
 			</div>


			<!-- 3-Й СЛАЙД -->
 			<div class="carousel-item">
 				<div class="view" style="background-image: url('https://images.pexels.com/photos/2588757/pexels-photo-2588757.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');
 				background-repeat: no-repeat; background-size: cover;">
 					<div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
 						<div class="text-center white-text mx-5 wow fadeIn">
 							<h1 class="mb-4">
 								<strong>Интернет магазин</strong>
 							</h1>

 							<p>
 								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, cumque.</strong>
 							</p>

 							<p class="mb-4 d-none d-md-block">
 								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores libero sapiente at explicabo, dolorem placeat!</strong>
 							</p>

 							<a href="#" class="btn btn-outline-white btn-lg">
 								Lorem ipsum dolor. <i class="fa fa-graduation-cap ml-2"></i>
 							</a>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<a href="#carousel-ex" class="carousel-control-prev" role="button" data-slide="prev">
 			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 		</a>
 		<a href="#carousel-ex" class="carousel-control-next" role="button" data-slide="next">
 			<span class="carousel-control-next-icon" aria-hidden="true"></span>
 		</a>
 	</div>

 	<main>

 	<!-- MENU  -->
 		<div class="container">
 			<nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
 				<span class="navbar-brand">Categories:</span>

 				<button class="navbar-toggler" type="button"
					data-toggle="collapse" data-target="#nextNav"
					aria-controls="nextNav" aria-expanded="false" aria-label="Toggle navigation">

					<span class="navbar-toggler-icon"></span>

				</button>
				<div class="collapse navbar-collapse" id="nextNav">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">Все</a>
						</li>
						<li class="nav-item active">
							<a href="#" class="nav-link">Процессоры</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Видеокарты</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Материнские платы</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Компьютеры</a>
						</li>
					</ul>

					<form class="form-inline">
						<div class="md-form my-0">
							<input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
						</div>
					</form>
				</div>
 			</nav>

 			<section class="text-center mb-4">
 				<div class="row wow fadeIn">
 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>


 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>


 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>


 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>
 				</div>
 				<div class="row wow fadeIn">
 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>

 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>

 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>

 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="" class="grey-text">
									<h5>Процессоры</h5>
								</a>

								<h5>
									<strong>
										<a href="" class="dark-grey-text">Intel Core-i9 <span class="badge-pill danger-color">NEW</span></a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>500$</strong>
								</h4>

							</div>

 						</div>
 					</div>
 				</div>
 			</section>


 			<nav class="d-flex justify-content-center wow fadeIn">
 				<ul class="pagination pg-blue">
 					<li class="page-item">
 						<a href="" class="page-link" aria-label="Previous">
 							<span aria-hidden="true">&laquo;</span>
 						</a>
 					</li>
 					<li class="page-item active">
 						<a href="" class="page-link" aria-label="Previous">
 							<span aria-hidden="true">1</span>
 						</a>
 					</li>
 					<li class="page-item">
 						<a href="" class="page-link" aria-label="Previous">
 							<span aria-hidden="true">2</span>
 						</a>
 					</li>
 					<li class="page-item">
 						<a href="" class="page-link" aria-label="Previous">
 							<span aria-hidden="true">3</span>
 						</a>
 					</li>
 					<li class="page-item">
 						<a href="" class="page-link" aria-label="Previous">
 							<span aria-hidden="true">4</span>
 						</a>
 					</li>
 					<li class="page-item">
 						<a href="" class="page-link" aria-label="Previous">
 							<span aria-hidden="true">5</span>
 						</a>
 					</li>
 					<li class="page-item">
 						<a href="" class="page-link" aria-label="Next">
 							<span aria-hidden="true">&raquo;</span>
 						</a>
 					</li>
 				</ul>
 			</nav>
 		</div>
 	</main>

 
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

<?php
require ("footer.html");
?>

