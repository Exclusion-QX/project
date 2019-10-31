 <?php
require("connect.php");
require("functions.php");

$id_product = $_GET['id_product'];
if (!is_numeric($id_product)) exit();

require("header.php");

//ПОЛУЧАЕМ МАССИВ ПРОДУКТА
$product = get_product_by_id($id_product);
?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/cart-function.js"></script>

 
 	<main class="mt-5 pt-4">
 		<div class="container dark-grey-text mt-5">
 			<div class="row wow fadeIn">
 				<div class="col-md-6 mb-4" style="max-width: 400px;">
 					<img src="https://shop.by/images/intel_core_i9_9900k_1.jpg" alt="macbook" class="img-fluid">
 				</div>
 				<div class="col-md-5 mb-14">
 					<div class="p-4">
 						<!-- <div class="mb-3">
 							<a href="">
 								<span class="badge purple mr-1">Категория 2</span>
 							</a>
 							<a href="">
 								<span class="badge blue mr-1">Новинка</span>
 							</a>
 							<a href="">
 								<span class="badge red mr-1">Лидер продаж</span>
 							</a>
 						</div> -->
 						
 						<?php 
 							$id = $product['id_product'];
							if (isset($_POST['number']) && isset($_POST['send']) && ($_POST['number'] > 0) ){
								$number = $_POST['number'];
								add_to_cart($id, $number);
							}
 						?>


 						<p class="lead">
 							<span class="mr-1">
 								<del>200₽</del>
 							</span>
 							<span class="mr-1">
 								<?=$product['product_price'].'₽'?>
 							</span>
 						</p>
 						<p class="lead font-weight-bold">Описание</p>

						
						<form class="form-signin" method="POST">
 							<div class="d-flex justify-content-left">

 							<input type="number" value="1" aria-label="Search" id="number" name="number" style="width: 100px;" class="form-control">
 							<button type="submit" class="btn btn-lg btn-primary btn-md my-0 p" name="send" id="send" data-id="<?=$product['id_product']?>">
 								Добавить в корзину <i class="fa fa-shopping-cart ml-1"></i>
 							</button>
 							</div>
 						</form>
 						
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="mini-cart"></div>
 	</main> 	

<?php
require ("footer.php");
?>

