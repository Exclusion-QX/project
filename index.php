<?php 
session_start();


require("connect.php");
require("functions.php");

$username = $_SESSION['name'];
$id = $_SESSION['id'];

$_SESSION['number'] = get_number_products($id);
$number = $_SESSION['number'];
/*$cook_val = array('cook_id' => $id, 'cook_name' => $username, 'cook_numbProducts' => $numbProducts);

setcookie('purchaser', serialize($cook_val), time() + 60 * 60 * 24 * 7, '/');
*/

setcookie('username', $username, time() + 60 * 60 * 24 * 7, '/');
setcookie('id', $id, time() + 60 * 60 * 24 * 7, '/');
setcookie('number', $number, time() + 60 * 60 * 24 * 7, '/');
//setcookie('number', $numbProducts, time() + 60 * 60 * 24 * 7, '/');


?>
<?php require("header.php");?>


<body>
 	
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

			<?php 
				$page = isset($_GET['page']) ? $_GET['page']: 1;
				$limit = 6;
				$offset = $limit * ($page - 1);
				$category = "Процессор";
				$products = get_product_by_category($limit, $offset, $category);

			?>

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
						<div class="col-md-6 banner-image banner-high">
							<div href="#" class="banner-image banner-high" style="background: url(https://cdn.pixabay.com/photo/2019/10/29/17/56/sky-4587691_1280.jpg) no-repeat center top; background-size: cover;">
								<a href="#">High text 1</a>
							</div>
						</div>
						<div class="col-md-6 banner-image banner-high">
							<div class="banner-image banner-high" style="background: url(https://cdn.pixabay.com/photo/2019/10/25/12/29/landscape-4576897_1280.jpg) no-repeat center top; background-size: cover;">
								<a href="#">High text 2</a>
							</div>
						</div>
					</div>
				</div>



				<div class="banners-low">
					<h2>Скидки</h2>
					<div class="row wow fadeIn row-correction">
						<div class="col-md-4 banner-image">
							<div class="banner-image" style="background: url(https://cdn.pixabay.com/photo/2019/11/03/17/38/landscape-4599237_1280.jpg) no-repeat center top; background-size: cover;">
								<a href="#">Text1</a>
							</div>
						</div>
					<div class="col-md-4 banner-image row-correction">
						<div class="banner-image" style="background: url(https://cdn.pixabay.com/photo/2019/10/25/12/29/landscape-4576896_1280.jpg) no-repeat center top; background-size: cover;">
							<a href="#">Text2</a>
						</div>
					</div>
					<div class="col-md-4 banner-image row-correction">
						<div class="banner-image" style="background: url(https://cdn.pixabay.com/photo/2019/11/06/12/54/afghanistan-4606064_1280.jpg) no-repeat center top; background-size: cover;">
							<a href="#">Text3</a>
						</div>
					</div>
				</div>
				
				</div>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia veritatis dolorem quis, rerum dignissimos deserunt veniam voluptatum aliquam animi illum odio esse doloribus sint, mollitia laborum quo commodi at, similique in sunt magni quibusdam error aperiam? Ducimus optio, velit quo cumque ab. Soluta culpa provident deleniti voluptatum, earum iste sed, vitae tenetur et commodi sunt saepe sint, voluptatibus amet, corrupti eaque magni? Enim ut inventore, blanditiis necessitatibus recusandae animi voluptatem fuga suscipit quibusdam dolorum. Voluptas nesciunt dolores, doloremque ab laudantium repellat rerum ipsa a nihil! Obcaecati aperiam cupiditate ab quibusdam ipsa error sapiente praesentium magnam. Tempore ea alias, inventore illo totam optio nemo in nesciunt cum debitis odit a, quae sit magni dolorum voluptate dicta sapiente molestias delectus accusamus, nam ex tempora ab. Sapiente, tenetur. Nemo eveniet incidunt animi veritatis, voluptates odio blanditiis omnis enim quam, excepturi distinctio. Itaque velit, cumque repudiandae alias obcaecati corporis nobis, voluptatum suscipit odio, id expedita. Beatae, quod voluptas nam culpa ab quas explicabo, atque minus qui, non sapiente. Iure autem, dicta, voluptates ad aspernatur molestias aut natus ipsam, tempora impedit adipisci eos debitis repudiandae? Quae suscipit placeat, ex iusto assumenda omnis nemo commodi distinctio velit, accusamus ducimus, ipsum similique. Tempora, inventore quasi minima tempore illo a vero. Ex rem fugit illo dicta magni expedita ducimus consequatur eaque ipsa adipisci, animi eius dolorem accusamus repellat repellendus ipsam quod praesentium perspiciatis dolor quam, sunt. Nobis voluptate quidem blanditiis culpa quam veniam fuga necessitatibus doloremque laborum, iusto magni! Et quidem suscipit, aut eos nobis, deleniti dolorem recusandae ad error deserunt libero sed placeat quis autem maiores optio fuga aliquid, eaque amet est animi! Et perferendis suscipit eos rem laboriosam aspernatur iste quod consequatur ipsum quidem. Possimus architecto in iste doloribus sit asperiores, nemo suscipit numquam quas repellat nam at earum voluptatum nobis, minus, quo? Culpa, fuga.</p>
 		</div>
 		<div class="mini-cart"></div>
 	</main>


<?php
require ("footer.php");
?>

