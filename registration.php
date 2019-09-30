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
			</div>
		</div>
	</nav>

	<main>

		<?php
		require('connect.php');

		if (isset($_POST['username']) && isset($_POST['password'] ) && isset($_POST['login'] )) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$login = $_POST['login'];

			$query = "INSERT INTO purchaser (purchaser_login, purchaser_name , purchaser_pass, purchaser_email, purchaser_cab) VALUES ('$login', '$username', '$password', '$email' , '1') ";
			$result = mysqli_query($connection, $query);

			if ($result) {
				$smsg = "Регистрация прошла успешно";
			} else {
				$fsmsg = "Ошибка";
			}
		}
		?>

		<div class="container" style="margin-top: 100px">
			<form class="form-signin" method="POST">
				<h2>Регистрация</h2>
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
				<?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>

				<input type="text" name="username" class="form-control" placeholder="Username" required>							
				<input type="login" name="login" class="form-control" placeholder="Login" required>
				<input type="email" name="email" class="form-control" placeholder="Email" required>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin: 0">Регистрация</button>
			</form>
		</div>
	</main>


	<footer class="page-footer text-center font-small mt-4 wow fadeIn">
		<div class="pt-4">
			<a href="#" role="button" class="btn btn-outline-white">Shop <i class="fa fa-graduation-cap ml-2"></i></a>

			<a href="#" role="button" class="btn btn-outline-white">Internet <i class="fa fa-graduation-cap ml-2"></i></a>
		</div>

		<hr class="my-4">

		<div class="pb-4">
			<a href="#">
				<i class="fab fa-facebook-f mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-twitter mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-youtube mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-google-plus mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-dribbble mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-pinterest mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-github mr-3"></i>
			</a>
		</div>

		<div class="footer-copyright py-3">
			Net shop
		</div>
	</footer>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>