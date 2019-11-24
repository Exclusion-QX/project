<?php 
session_start();


require("connect.php");
require("functions.php");

$username = $_SESSION['name'];
$id = $_SESSION['id'];

$_SESSION['number'] = get_number_products($id);
$number = $_SESSION['number'];
$login = $_SESSION['login'];
/*$cook_val = array('cook_id' => $id, 'cook_name' => $username, 'cook_numbProducts' => $numbProducts);

setcookie('purchaser', serialize($cook_val), time() + 60 * 60 * 24 * 7, '/');
*/

setcookie('username', $username, time() + 60 * 60 * 24 * 7, '/');
setcookie('id', $id, time() + 60 * 60 * 24 * 7, '/');
setcookie('number', $number, time() + 60 * 60 * 24 * 7, '/');
setcookie('login', $login, time() + 60 * 60 * 24 * 7, '/');
//setcookie('number', $numbProducts, time() + 60 * 60 * 24 * 7, '/');
$newproducts = get_new_products();
$discounts = get_discounts_products();

?>
<?php require("header.php");?>


<body>
 	
 	<!-- КАРУСЕЛь -->
 	<div id="carousel-ex" class="carousel slide carousel-fade pt-4" data-ride="carousel">
 		<ol class="carousel-indicators">
 			<li data-target="#carousel-ex" data-slide-to="0" class="active"></li>
 			<li data-target="#carousel-ex" data-slide-to="1"></li>
 			<li data-target="#carousel-ex" data-slide-to="2"></li>
 		</ol>
 		<div class="carousel-inner" role="listbox">

 			<!-- 1-Й СЛАЙД -->
 			<div class="carousel-item active">
 				<div class="view" style="background-image: url('img/carousel/1.jpg');
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
 				<div class="view" style="background-image: url('img/carousel/2.jpg');
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
 				<div class="view" style="background-image: url('img/carousel/3.jpg');
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

 			<nav class="navbar navbar-expand-lg navbar-dark lighten-3 mt-3 mb-5" style="background-color: #45526e;">
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
							
								<li><a href="products/processors.php">Процессоры</a></li>
								<li><a href="products/graphicscard.php">Видеокарта</a></li>
								<li><a href="#">Материнская плата</a></li>
								<li><a href="#">Оперативная память</a></li>
								<li><a href="#">Охлаждение</a></li>
								<li><a href="#">Корпус</a></li>
								<li><a href="#">SSD накопитель</a></li>
								<li><a href="#">Дисковой накопитель</a></li>
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
						<button type="submit">Поиск</button>
					</form>

				</div>
 			</nav>

			<div class="banners">
				<div class="banners-high">
					<h1>Новинка</h1>
					<div class="row wow fadeIn row-correction">
					<? foreach ($newproducts as $newproduct):
						$desc = $newproduct['product_image'];
						$image = explode(", ", $desc);
					?>
						<div class="col-md-6 banner-image banner-high">
							<div href="#" class="banner-image banner-high" style="background: url(<?=$image[1]?>) no-repeat center top; background-size: cover;">
								<a href="shop-page.php?id_product=<?=$newproduct['id_product']?>&product_category=<?=$newproduct['product_category']?>"><?=$newproduct['product_name']?></a>
							</div>
						</div>
					<? endforeach; ?>
					</div>
				</div>



				<div class="banners-low">
					<h2>Скидки</h2>
					<div class="row wow fadeIn row-correction">
					<? foreach ($discounts as $discount):
						$desc = $discount['product_image'];
						$image = explode(", ", $desc);
					 ?>
						<div class="col-md-4 banner-image">
							<div class="banner-image" style="background: url(<?=$image[0]?>) no-repeat center; background-size: cover;">
								<a href="shop-page.php?id_product=<?=$discount['id_product']?>&product_category=<?=$discount['product_category']?>"><?=$discount['product_name']?></a>
							</div>
						</div>
					<? endforeach; ?>
					</div>
				
				</div>
			</div>
			<div class="row">
			<? foreach ($discounts as $discount):?>
			<div class="col-md-4">
				<p><?=mb_substr($discount['product_desc'], 0, 500, 'UTF-8').'...' ?></p>
			</div>
			<? endforeach; ?>
			</div>
 		</div>
 		<div class="mini-cart"></div>
 	</main>

<?php
require ("footer.php");
?>

