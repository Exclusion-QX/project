
<?php
require ("header.html");
?>

	<main>

		<?php
		require('connect.php');

		if (isset($_POST['username']) && isset($_POST['password'] ) && isset($_POST['login'] ) ) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			$login = $_POST['login'];

			$query = "INSERT INTO purchaser (purchaser_login, purchaser_name , purchaser_pass, purchaser_email, purchaser_cab) VALUES ('$login', '$username', '$password', '$email' , '1') ";
			if ($password == $repassword) {
				$result = mysqli_query($link, $query);
				if ($result) {
				$smsg = "Регистрация прошла успешно";
				} else {
					$fsmsg = "Ошибка";
				}
			} else {
				$fsmsg = "Пароли не совпадают!";
			}

		}
		?>

		<div class="container" style="margin-top: 100px">
			<form class="form-signin" method="POST">
				<h2>Регистрация</h2><br>
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
				<?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>

				<input type="text" name="username" class="form-control" placeholder="Имя" required>
				<br>							
				<input type="login" name="login" class="form-control" placeholder="Логин" required><br>
				<input type="email" name="email" class="form-control" placeholder="Email" required><br>
				<input type="password" name="password" class="form-control" placeholder="Пароль" required><br>
				<input type="password" name="repassword" class="form-control" placeholder="Повторите пароль" required><br>
				<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin: 0">Регистрация</button>
				<a href="login.php" class="btn btn-lg btn-primary btn-block" >Войти</a>
			</form>
		</div>
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

