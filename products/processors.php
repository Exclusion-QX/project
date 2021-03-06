<?php
require("../header.php");
require("../connect.php");
require("../functions.php");
include("../rating-controller.php");

$page = isset($_GET['page']) ? $_GET['page']: 1;
$limit = 8;
$offset = $limit * ($page - 1);
$category = "Процессор";


if (isset($_POST['showProducts__btn'])) {
	$first_price = $_POST['first_price'];
	$second_price = $_POST['second_price'];
	$provider = $_POST['provider'];
	if (!($first_price == "")) {
		if (!($second_price == "")) {
			if (!($provider == "Все")) {
				$products = filter_show_products($first_price, $second_price, $provider, $category, $limit, $offset);
			} else {
				$products = filter_show_prosucts($first_price, $second_price, $limit, $offset, $category);
			}
		} else {
			$second_price = "500000";
			if (!($provider == "Все")) {
				$products = filter_show_products($first_price, $second_price, $provider, $category, $limit, $offset);
			} else {
				$products = filter_show_prosucts($first_price, $second_price, $limit, $offset, $category);
			}
		}
	} else {
		$first_price = "0";
		if (!($second_price == "")) {
			if (!($provider == "Все")) {
				$products = filter_show_products($first_price, $second_price, $provider, $category, $limit, $offset);
			} else {
				$products = filter_show_prosucts($first_price, $second_price, $limit, $offset, $category);
			}
		} else {
			$second_price = "500000";
			if (!($provider == "Все")) {
				$products = filter_show_products($first_price, $second_price, $provider, $category, $limit, $offset);
			} else {
				$products = filter_show_prosucts($first_price, $second_price, $limit, $offset, $category);
			}
		}
	}
}

if (!(isset($_POST['showProducts__btn']))) {
	$products = show_prosucts_by_category($limit, $offset, $category);
}

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

 
 		<div class="container">

			

			<!-- MENU  -->

 			<nav class="navbar navbar-expand-lg navbar-dark lighten-3 mt-3" style="background-color: #45526e;">
 				<span class="navbar-brand">Меню</span>

 				<button class="navbar-toggler" type="button"
					data-toggle="collapse" data-target="#nextNav"
					aria-controls="nextNav" aria-expanded="false" aria-label="Toggle navigation">

					<span class="navbar-toggler-icon"></span>

				</button>
				<div class="collapse navbar-collapse" id="nextNav">
					<ul class="navbar-nav mr-auto" id="top_menu">
						<li>
							<a >Комплектующие</a>
							<ul class="inner_menu">
							
								<li><a href="/products/processors.php">Процессоры</a></li>
								<li><a href="/products/graphicscard.php">Видеокарта</a></li>
								<li><a href="#">Материнская плата</a></li>
								<li><a href="#">Оперативная память</a></li>
								<li><a href="#">Блок питания</a></li>
								<li><a href="#">Охлаждение</a></li>
								<li><a href="#">Корпус</a></li>
								<li><a href="#">SSD накопитель</a></li>
								<li><a href="#">Жёсткий диск</a></li>
							</ul>
					
						</li>
						<li>
							<a href="#">Компьютеры</a>
						</li>
						<li>
							<a href="#" >Конструктор</a>
						</li>
						<li>
							<a href="#">Ноутбуки</a>
							<ul class="inner_menu">
								<li><a href="#">Нетбуки</a></li>
								<li><a href="#">Ультрабук</a></li>
								<li><a href="#">Бюджетные ноутбуки</a></li>
								<li><a href="#">Игровые ноутбуки</a></li>
							</ul>
						</li>
					</ul>
					 


					<form class="form-inline">
						<input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
						<button type="submit" class="btn-sm btn-light text-muted">Поиск</button>
					</form>

				</div>
 			</nav>

 			<nav class="navbar navbar-expand-lg navbar-dark lighten-3 mb-5" style="background-color: #8f8f8f;">
 				<span class="navbar-brand">Фильтр</span>
 				<div class="container">
 				
	 				<form method="POST">
	 				<div class="row">
		 				<div class="col-md-1 mt-2 text-white">
		 					<label style="float: right;">Цена</label>
		 				</div>
		 				<div class="col-md-2 mt-1">
		 					<input type="text" class="form-control form-control-sm" placeholder="От" name="first_price" value="<?=$first_price?>">
		 				</div>
		 				<div class="col-md-2 mt-1">
		 					<input type="text" class="form-control form-control-sm" placeholder="До" name="second_price" value="<?=$second_price?>">
	 					</div>
	 					<div class="col-md-2 mt-2 text-white">
		 					<label style="float: right;">Производитель</label>
		 				</div>
		 				<div class="col-md-2 mt-1">
		 					<select class="form-control form-control-sm" name="provider">
							  <option>Все</option>
							  <option value="1">Intel</option>
							  <option value="2">AMD</option>
							</select>
	 					</div>
	 					<div class="col-md-2 mt-1">
	 						<button type="submit" class="btn-sm btn-light text-muted" name="showProducts__btn">Показать</button>
	 					</div>
	 				</div>
	 				</form>
 				
 				</div>
 			</nav>

 			<section class="text-center mb-4">
 				<div class="row wow fadeIn">
 				

 				<?php
 				 foreach ($products as $product): 
 				 $desc = $product['product_image'];
					$image = explode(", ", $desc);
					$rating = get_rating($product['id_product']);
 				 	?>

 					<div class="col-lg-3 col-md-6 mb-4">
 						<div class="card">

 							<div class="view overlay">
 								<img class="card-img-top" src="<?=$image[0]?>" style="padding: 20px;" >
 								<a href="/shop-page.php?id_product=<?=$product['id_product']?>&product_category=<?=$product['product_category']?>">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="card-body text-center card-desc">
									<div class="rating-mini">
										<? rating_show($rating['rating_product']); ?>
									</div>
								

								<h5>
									<strong>
										<a href="/shop-page.php?id_product=<?=$product['id_product']?>&product_category=<?=$product['product_category']?>" class="dark-grey-text"><?=$product['product_name'] ?> <!-- <span class="badge-pill danger-color">NEW</span> --></a>
									</strong>
								</h5>

								<p>
									<?=mb_substr($product['characteristics'], 0, 50, 'UTF-8').'...' ?>								
								</p>

								<hr>

								<h4 class="font-weight-bold blue-text">
									<strong><?=$product['product_price'].'₽' ?></strong>
								</h4>

							</div>

 						</div>
 					</div>

 				<?php endforeach; ?>

 					</div>

 		
 			</section>


 <nav class="d-flex justify-content-center wow fadeIn">
 	<ul class="pagination pg-blue">
 		<li class="page-item">
 			<a href="index.php?page=<?= $page - 1?>" class="page-link" aria-label="Previous">
 				<span aria-hidden="true">&laquo;</span>
 			</a>
 		</li>
 		<li class="page-item">
 			<a href="processors.php?page=1" class="page-link" aria-label="Previous">
 				<span aria-hidden="true">1</span>
 			</a>
 		</li>
 		<li class="page-item">
 			<a href="processors.php?page=2" class="page-link" aria-label="Previous">
 				<span aria-hidden="true">2</span>
 			</a>
 		</li>
 		<li class="page-item">
 			<a href="processors.php?page=3" class="page-link" aria-label="Previous">
 				<span aria-hidden="true">3</span>
 			</a>
 		</li>
 		<li class="page-item">
 			<a href="processors.php?page=<?= $page + 1?>" class="page-link" aria-label="Next">
 				<span aria-hidden="true">&raquo;</span>
 			</a>
 		</li>
 	</ul>
 </nav>
 		</div>
 		<div class="mini-cart"></div>
 	</main>



<?php
require ("../footer.php");
?>
