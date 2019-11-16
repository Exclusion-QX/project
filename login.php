<?php
session_start();
//setcookie('username', 0, time() - 2592000, '/');

if(isset($_SESSION['login']) ){
	header("Location: /index.php");
}

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
				$_SESSION['id'] = $row[0];
				$_SESSION['login'] = $row[2];				
				$_SESSION['group'] = $row[4];
				$_SESSION['phone'] = $row[5];
				$_SESSION['email'] = $row[6];
				$_SESSION['name'] = $row[7];
				$_SESSION['firstname'] = $row[8];
				?>
				<script>window.location.replace("http://project.loc/index.php");</script>
				<?
				//Генерация ключа для пользователя
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

		

	</main>


	<?php
	require ("footer.php");
	?>


