<?php
session_start();
//setcookie('username', 0, time() - 2592000, '/');
?>


<?php
require ("header.php");

?>

	<main>

		<?php

		require('connect.php');

		if (isset($_POST['password'] ) and isset($_POST['login'] )) {

			$password = md5('ds4m34dfs9'.$_POST['password'].'35sf56')	;
			$login = $_POST['login'];

			$query = "SELECT * FROM purchaser WHERE purchaser_login='$login' and purchaser_pass='$password'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			if ($result) {
				$row = mysqli_fetch_row($result);
			}
			$count = mysqli_num_rows($result);

			if ($count == 1) {
				$_SESSION['name'] = $row[7];
				$_SESSION['id'] = $row[0];
				$_SESSION['email'] = $row[6];
				$_SESSION['login'] = $row[2];

			} else {  
				 $fsmsg = "Ошибка!"; }
			}
		
			?>

		<div class="container" style="margin-top: 100px">
			<form class="form-signin" method="POST">
				<h2>Вход</h2><br>
						
				<?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>
				
				<input type="login" name="login" class="form-control" placeholder="Логин" required><br>
				<input type="password" name="password" class="form-control" placeholder="Пароль" required><br>
				<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin: 0">Войти</button>
				<a href="registration.php" class="btn btn-lg btn-primary btn-block" >Регистрация</a>
				
			</form>
		</div>

		<?php
			if (isset($_SESSION['name'])) {
				$login = $_SESSION['name'];
				$_COOKIE['username'] = $login;
				var_dump($_COOKIE['username']);
				//echo "Hello " . $login . " ";
				echo "<a href='private.php' class='btn btn-lg btn-primary'> Перейти в личный кабинет </a>";
				echo "<a href='logout.php' class='btn btn-lg btn-primary'> Выйти </a>";
			}
		?>

	</main>


	<?php
	require ("footer.html");
	?>


</html>