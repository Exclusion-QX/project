<?php 
include('start.php');
if(isset($_COOKIE['username']))
	$username = $_COOKIE['username'];
	$number = $_COOKIE['number'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Главная</title>
  
<!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/css/style.css" rel="stylesheet">

  <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
</head>

<header>
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
							<a href="/index.php" class="nav-link waves-effect">Главная</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link waves-effect">Товары</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link waves-effect">О нас</a>
						</li>
						<?php if (($_SESSION['group'] === 'admin')) {
							echo '<li class="nav-item">
							<a href="sale.php" class="nav-link waves-effect">Продажи</a>
						</li>';
						} ?>
					</ul>
					<!-- Количество продуктов в карзине -->
					<ul class="navbar-nav nav-flex-icons">
						<li class="nav-item">
							<a href="/cart.php" class="nav-link waves-effect">
								<span id="cart-count" class="badge red z-depth-1 mr-1"><?=$number?></span>
								<i class="fa fa-shopping-cart"></i>
								<span class="clearfix d-none d-sm-inline-block">Корзина</span>
							</a>
						</li>
					</ul>

					<!-- Кнопки регистрации и авторизации-->

					<ul class="navbar-nav mr-0">
						<li class="nav-item">
							<?php 
								if (isset($username)){?>
									<a href="/private.php" class="nav-link waves-effect"><?=$username ?></a>
								<?}
								else {?>
									<a href="/login.php" class="nav-link waves-effect">Авторизация</a>
									<?}?>
	
						</li>
						<li class="nav-item">
							
							<?php 
								if (isset($username)){?>
									<a href="/logout.php" class="nav-link waves-effect">Выход</a>
								<?}
								else { ?>									
									<a href="/registration.php" class="nav-link waves-effect">Регистрация</a>
								<?}?>
						</li>
					</ul>
				</div>
			</div>
		</nav>
</header>