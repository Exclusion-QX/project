<?php 
session_start();

if (!isset($_SESSION['name'])) { ?>
<script>window.location.replace("http://project.loc/login.php");</script>
<?php } ?>
 <?php

	require ("header.php");
	require ("connect.php");
	require ("functions.php");

   $name = $_SESSION['name'];
   $id = $_SESSION['id'];
   $email = $_SESSION['email'];
   $login = $_SESSION['login'];
   $firstname = $_SESSION['firstname'];
   $phone = $_SESSION['phone'];

   if (isset($_POST['send-data']) ) {

	   	if (isset($_POST['name']) ) {
	   		$name = $_POST['name'];
	   	}
	   	if (isset($_POST['firstname']) ) {
			$firstname = $_POST['firstname'];
		}
		if (isset($_POST['login']) ) {
			$login = $_POST['login'];
		}
		if (isset($_POST['phone']) ) {
			$phone = $_POST['phone'];
		}
		if (isset($_POST['email']) ) {
			$email = $_POST['email'];
		}

	$result = change_purchaser_data($id, $name, $firstname, $login, $phone, $email);
   }

	if (isset($_POST['send-new-pass']) ) {

		if (isset($_POST['password']) && isset($_POST['passwordNew']) ) {
			$password = md5('ds4m34dfs9'.$_POST['password'].'35sf56');
			$passwordNew = md5('ds4m34dfs9'.$_POST['passwordNew'].'35sf56');

			$check = check_password($id, $password);

			if ($check === true) {
				$resultPass = change_purchaser_password($id, $passwordNew);
				if ($resultPass) {
					$smsg = "Пароль изменён";
				}
			} else {
				$fsmsg = "Неверный пароль";
			}
		} else {
			echo "Введите пароль";
		}
}

?>
  <!-- 	echo "<br/><br/><br/>С возвращением. $login,<br/>
  Ваше имя $name,<br/>
  Ваша почта '$email'и Ваш id '$id'.";
  	echo "<a href='logout.php' class='btn btn-lg btn-primary'> Выйти </a>"; -->

	<main>
		<div class="container" style="padding-top: 130px; min-height: 600px;">
			<div class="row">
				<div class="col-md-3 col-sm-12">

				    <div class="list-group" id="list-tab" role="tablist">
				      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Профиль</a>
				      <a class="list-group-item list-group-item-action" id="list-change-profile-list" data-toggle="list" href="#list-change-profile" role="tab" aria-controls="change-profile">Изменить личный данные</a>
				      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Рейтинг</a>
				   	</div>

  				</div>

  				<div class="col-md-8 offset-1">
  				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
				<?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>
			    <div class="tab-content" id="nav-tabContent">
			    	<div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
			    	<!-- <div class="col-md-8 offset-1"> -->
						<table class="table table-borderless">
								 <tbody>
								    <tr>
								      <th scope="row">Имя:</th>
								      <td><?=$name?></td>
								    </tr>
								    <tr>
								      <th scope="row">Фамилия:</th>
								      <td><?=$firstname?></td>
								    </tr>
								    <tr>
								      <th scope="row">Логин:</th>
								      <td><?=$login?></td>
								    </tr>
								    <tr>
								      <th scope="row">Телефон:</th>
								      <td><?=$phone?></td>
								    </tr>
								    <tr>
								      <th scope="row">Email:</th>
								      <td><?=$email?></td>
								    </tr>
								  </tbody>
						</table>
					</div>
				    <div class="tab-pane fade" id="list-change-profile" role="tabpanel" aria-labelledby="list-change-profile-list">
				    	<div class="row">
				    	<div class="col-md-8">
					    	<form method="POST">
					    		<div class="form-group">
					    			<label>Имя</label>
					    			<input type="text" class="form-control" name="name" id="name" placeholder="Имя" value="<?php echo @$name?>" required>
					    		</div>
					    		<div class="form-group">
					    			<label>Фамилия</label>
					    			<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Фамилия" value="<?php echo @$firstname?>">
					    		</div>
					    		<div class="form-group">
					    			<label>Логин</label>
					    			<input type="login" class="form-control" name="login" id="login" placeholder="Логин" value="<?php echo @$login?>" required>
					    		</div>
					    		<div class="form-group">
					    			<label>Телефон</label>
					    			<input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон" value="<?php echo @$phone?>">
					    		</div>
					    		<div class="form-group">
					    			<label>Email</label>
					    			<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo @$email?>" required>
								</div>
								<button type="submit" class="btn btn-primary" name="send-data">Сохранить</button>
					    	</form>

					    	<script>
						    function display(form) {
						        if (form.style.display == "none") {
						            form.style.display = "block";
						        } else {
						            form.style.display = "none";
						        }
						    }
						    </script>
							
							<button type="button" class="btn btn-primary" onclick="display(document.getElementById('formPass'))" /> Изменить пароль</button>
							<form method="POST" id="formPass" style="display: none; padding-top: 30px;">
								<div class="form-group">
					    			<input type="password" class="form-control" name="password" id="password" placeholder="Старый пароль">
					    		</div>
					    		<div class="form-group">
					    			<input type="password" class="form-control" name="passwordNew" id="passwordNew" placeholder="Новый пароль">
					    		</div>
					    		<button type="submit" class="btn btn-primary" name="send-new-pass">Сохранить</button>
							</form>
					    </div>
					    </div>
				    </div>
			    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
				</div>
				</div>
			</div>
		</div>
	</main>

<?php
require ("footer.php");
?>
