
<?php
require("header.html");
require ("functions.php");
?>

 	
 	<!-- КАРУСЕЛь -->
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
 								<strong>Интернет-магазин</strong>
 							</h1>

 							<p>
 								<strong>Создайте свой компьютер</strong>
 							</p>

 							<p class="mb-4 d-none d-md-block">
 								<strong>Большой выбор комплектующих и готовые сборки компьютеров</strong>
 							</p>

 							<a href="#" class="btn btn-outline-white btn-lg">
 								Перейти к каталогу<i class="fa fa-graduation-cap ml-2"></i>
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
 								<strong>Интернет-магазин</strong>
 							</h1>

 							<p>
 								<strong>Создайте свой компьютер</strong>
 							</p>

 							<p class="mb-4 d-none d-md-block">
 								<strong>Большой выбор комплектующих и готовые сборки компьютеров</strong>
 							</p>

 							<a href="#" class="btn btn-outline-white btn-lg">
 								Перейти к каталогу<i class="fa fa-graduation-cap ml-2"></i>
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
 								<strong>Интернет-магазин</strong>
 							</h1>

 							<p>
 								<strong>Создайте свой компьютер</strong>
 							</p>

 							<p class="mb-4 d-none d-md-block">
 								<strong>Большой выбор комплектующих и готовые сборки компьютеров</strong>
 							</p>

 							<a href="#" class="btn btn-outline-white btn-lg">
 								Перейти к каталогу<i class="fa fa-graduation-cap ml-2"></i>
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
 				<span class="navbar-brand">Меню</span>

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
 								<a href="shop-page.php">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center">
								<a href="shop-page.php" class="grey-text">
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
 		<div class="mini-cart"></div>
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

