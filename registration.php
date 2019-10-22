
<?php
require ("header.php");
require ("functions.php");
?>

	<main>

		<?php
		require('connect.php');

		if (isset($_POST['username']) && isset($_POST['password'] ) && isset($_POST['login'] ) ) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = md5('ds4m34dfs9'.$_POST['password'].'35sf56');
			$repassword = md5('ds4m34dfs9'.$_POST['repassword'].'35sf56');
			$login = $_POST['login'];

			$query = "INSERT INTO purchaser (purchaser_login, purchaser_name , purchaser_pass, purchaser_email, purchaser_cab) VALUES ('$login', '$username', '$password', '$email' , '1') ";
			
			
			if ($password == $repassword) {
				$result = mysqli_query($link, $query);
				if ($result) {
				$smsg = "Регистрация прошла успешно";
				} else {
					$fsmsg = "Такой логин уже существует";
				}
			} else {
				$fsmsg = "Пароли не совпадают!";
			}
			};
		?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" />
<script>
	$(document).ready (function() {
		$("#done").click (function() {
			var password = $("#password").val();
			var repassword = $("#repassword").val();
			var login = $("#login").val();
			var smsg = "";
			var fsmsg = "";
			if (login.length < 3) fsmsg = "имя меньше 3";
			if (fsmsg != "")
				$('#messageShow').html(fsmsg + "<div class='clear'><br></div>");
				$('#messageShow').show();
				return false;
			}
		});
	});
	
</script> -->

		

		<div class="container" style="margin-top: 100px">
			<form class="form-signin" method="POST">
				<h2>Регистрация</h2><br>

				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
				<?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>
				<!-- <script>
					if(!smsg = ""){"<div class=\"alert alert-success\" role=\"alert\">" + smsg.show() + "</div>"}
					if(!fsmsg = ""){"<div class=\"alert alert-danger\" role=\"alert\">" + fsmsg.show() + "</div>"}
				</script> -->
				<div class="messageShow"></div>

				<input type="text" name="username" id="username" class="form-control" placeholder="Имя" required>
				<br>							
				<input type="login" name="login" id="login" class="form-control" placeholder="Логин" required><br>
				<input type="email" name="email" id="email" class="form-control" placeholder="Email" required><br>
				<input type="password" name="password" id="password" class="form-control" placeholder="Пароль" required><br>
				<input type="password" name="repassword" id="repassword" class="form-control" placeholder="Повторите пароль" required><br>
				<button class="btn btn-lg btn-primary btn-block" name="done" type="submit" style="margin: 0">Регистрация</button>
				<a href="login.php" class="btn btn-lg btn-primary btn-block" >Войти</a>
			</form>
		</div>
	</main>

	<?php
	require ("footer.php");
	?>


