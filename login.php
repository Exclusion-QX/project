<?php
session_start();
?>


<?php
require ("header.html");

?>

	<main>

	
	
		<div class="container" style="margin-top: 100px">
			<form class="form-signin" method="POST">
				<h2>Вход</h2><br>
						
				<input type="login" name="login" class="form-control" placeholder="Логин" required><br>
				<input type="password" name="password" class="form-control" placeholder="Пароль" required><br>
				<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin: 0">Войти</button>
				<a href="registration.php" class="btn btn-lg btn-primary btn-block" >Регистрация</a>
			</form>
		</div>

		<?php

		require('connect.php');

		if (isset($_POST['password'] ) and isset($_POST['login'] )) {

			$password = $_POST['password'];
			$login = $_POST['login'];

			$query = "SELECT * FROM purchaser WHERE purchaser_login='$login' and purchaser_pass='$password'";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			$count = mysqli_num_rows($result);

			if ($count == 1) {
				$_SESSION['purchaser_login'] = $login;
			} else { ?> 
				 <div class="alert alert-danger" role="alert" style="text-align: center;"> <?php echo "Ошибка"; ?> </div><?php }
			}
		

		if (isset($_SESSION['purchaser_login'])) {
			$login = $_SESSION['purchaser_login'];
			echo "Hello " . $login . " ";
			echo "<a href='logout.php' class='btn btn-lg btn-primary'> Выйти </a>";
		}

			?>

	</main>


	<?php
	require ("footer.html");
	?>

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