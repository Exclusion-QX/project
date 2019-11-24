<?php 
session_start();

if (!isset($_SESSION['name'])) { ?>
<script>window.location.replace("http://project.loc/login.php");</script>
<?php } ?>
 <?php

	require ("header.php");
	require ("connect.php");
	require ("functions.php");
	include ("addProduct.php");

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

	if (isset($_POST['change-product'])) {
		$productName = $_POST['productName'];

		if (isset($_POST['check1'])) {
			$check = 1;
		} elseif (isset($_POST['check2'])) {
			$check = 2;
		} elseif (isset($_POST['check3'])) {
			$check = 3;
		} else {
			$check = 0;
		}

		$newPrice = $_POST['new-price'];
		$changeProduct = change_product_price($productName, $check, $newPrice);

		if ($changeProduct) {
			$smsg = "Товар изменён";
		} else {
			$fsmsg = "Ошибка";
		}
		

	}

//История покупок

	$products = get_order_by_id($id);


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
				      <a class="list-group-item list-group-item-action" id="list-story-list" data-toggle="list" href="#list-story" role="tab" aria-controls="story">История покупок</a>
				    
				    	<?php if (($_SESSION['group'] === 'manager' || $_SESSION['group'] === 'admin')) {
				    		echo '<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-add-product" role="tab" aria-controls="settings">Добавить товар</a>
				    			<a class="list-group-item list-group-item-action" id="list-change-product-list" data-toggle="list" href="#list-change-product" role="tab" aria-controls="change-product">Изменить товар</a>';
				    	} ?>
				      
				    	
				      
				      
				     
				   	</div>

  				</div>

  				<div class="col-md-8 offset-1">
			    <div class="tab-content" id="nav-tabContent">
			    	<div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
			    	<!-- <div class="col-md-8 offset-1"> -->
				    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
					<?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>
					<?php if(isset($added)){ ?><div class="alert alert-success" role="alert"> <?php echo $added; ?> </div><?php }?>
					<?php if(isset($fadded)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fadded; ?> </div><?php }?>
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
			    <div class="tab-pane fade" id="list-story" role="tabpanel" aria-labelledby="list-story-list">
			    	
					<? foreach ($products as $product): 
						$sum_price_product = ($product['product_price'] * $product['product_amount']);
						$desc = $product['product_image'];
						$image = explode(", ", $desc);
					?>

						<div class="col-lg-12 col-md-3 mb-4" id="productBlock">
 						<div class="card">
						<div class="row">
 							<div class="col-lg-2 col-md-4 view overlay">
 								<img class="card-img-top" src="<?=$image[0]?>">
 								<a href="shop-page.php?id_product=<?=$product['id_product']?>&product_category=<?=$product['product_category']?>">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="col-lg-8 card-body cart-desc cart-text">
								<h5>
									<strong>
										<a href="shop-page.php?id_product=<?=$product['id_product']?>&product_category=<?=$product['product_category']?>" class="dark-grey-text"><?=$product['product_name'] ?></a>
									</strong>
								</h5>

								<p>
									<?=mb_substr($product['characteristics'], 0, 50, 'UTF-8').'...' ?>								
								</p>
								
								<div class="number-panel">
									<p>Количество: <?=$product['product_amount']?></p>
								</div>
								
							</div>

								<div class="col-lg-2 block-buy">
									<div class="price" id="<?=$i?>">
										<h4 class="font-weight-bold blue-text">
											<strong><?=$sum_price_product.'₽' ?></strong>
										</h4>
									</div>
									<?php $i = $i + 1 ?>
								</div>
							</div>
 						</div>
 					</div>

					<? endforeach; ?>

					<?php
 					if ($i == 0) {
						echo "<div class='cart-empty col-lg-5 offset-4'><h1>История пуста</h1></div>";
						
					}
 				?>

			    </div>
			    <div class="tab-pane fade" id="list-add-product" role="tabpanel" aria-labelledby="list-add-product">	
			    		<form method="POST">
			    		<div class="row">
			    			<div class="col-md-6">		    			
					    		<div class="form-group">
					    			<label>Наименование</label>
					    			<input type="text" class="form-control" name="productName" required>
					    		</div>
					    	</div>
					    	<div class="col-md-6">					
					    		<div class="form-group">
					    			<label>Категория</label>
					    			<select class="form-control" id="FormControlSelect" name="category" required>
								      <option>Процессор</option>
								      <option>Видеокрта</option>
								      <option>Материнская плата</option>
								      <option>Оперативная память</option>
								      <option>Блок питания</option>
								      <option>Жёсткий диск</option>
								      <option>Охлаждение</option>
								      <option>Корпус</option>
								      <option>SSD накопитель</option>								     
								    </select>					    		
					    	</div>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-md-6">
					    		<div class="form-group">
					    			<label>Производитель</label>
					    			<input type="text" class="form-control" name="provider" required>
					    		</div>
					    	</div>

					    </div>
					    		<div class="form-group">
					    			<label>Описание</label>
					    			<textarea class="form-control" name="desc__area" cols="30" rows="5" required></textarea>
					    		</div>
					    		<div class="form-group">
					    			<label>Характеристики</label>
					    			<textarea class="form-control" placeholder="Напрмер: FM2+, 4 x 3100 МГц, L2 - 4 МБ..." name="charac__area" cols="30" rows="5" required></textarea>
					    		</div>
					    	<div class="row">
					    		<div class="col-md-6">
					    		<div class="form-group">
					    			<label>Путь к изображению</label>
					    			<input type="text" class="form-control" name="image" required>
								</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
					    			<label>Цена за товар (в рублях)</label>
					    			<input type="text" class="form-control" name="price" required>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 offset-4">
								<button type="submit" class="btn btn-success" name="add-product">Добавить</button>
								</div>
							</div>
					    </form>
					
			    </div>
			    <div class="tab-pane fade" id="list-change-product" role="tabpanel" aria-labelledby="list-change-product">
			    	<form method="POST">
			    		<div class="row">
			    			<div class="col-md-6">		    			
					    		<div class="form-group">
					    			<label>Наименование</label>
					    			<input type="text" class="form-control" name="productName" required>
					    		</div>
					    	</div>
					    	<div class="col-md-6">
					    	<p>Отображение на главной странице</p>					
					    		<div class="form-check form-check-inline">
								  <input class="form-check-input" name="check1" type="checkbox" id="inlineCheckbox1" value="1">
								  <label class="form-check-label" for="inlineCheckbox1">Новый</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" name="check2" type="checkbox" id="inlineCheckbox2" value="2">
								  <label class="form-check-label" for="inlineCheckbox2">Скидка</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" name="check3" type="checkbox" id="inlineCheckbox3" value="3">
								  <label class="form-check-label" for="inlineCheckbox3">Лучший</label>
								</div>
					    	</div>
					    </div>
					    	<div class="row">
								<div class="col-md-6">
								<div class="form-group">
					    			<label>Новая цена (в рублях)</label>
					    			<input type="text" class="form-control" name="new-price" required>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 offset-4">
								<button type="submit" class="btn btn-success" name="change-product">Изменить</button>
								</div>
							</div>
					    </form>
			    </div>
				</div>
				</div>
			</div>
		</div>
	</main>

<?php
require ("footer.php");
?>
