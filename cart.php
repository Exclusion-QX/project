<?php 
	require("header.php");
	require("connect.php");
	require("functions.php");

	if(isset($_COOKIE['id']))
	$id_purchaser = $_COOKIE['id'];

?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<main>
	
	<?php 
		$products = get_product_from_cart($id_purchaser);
	?>

	<?php 
		// if (isset($_POST['delete'])) {
		// 	$id_del_product = $_POST['delete'];
		// 	delete_product($id_del_product);
		// }

		if (isset($_POST['delete-all'])) {

			delete_all_products($id_purchaser);
		}

		$timeNow = date('Y-m-d H:i', time());
	?>

	<div class="container">
		
		

	<section class="text-center mb-4">
		<div class="out-header">
 			<div class="row wow fadeIn">

 				<div class="content">
 				<div class="delete_all_products" id="productsAllBlock">

 				<script>
 					var number = 0;
 				</script>

 				<?php

 				$sum_price_all_products = 0;
 				$i = 0;
 				$id_card = 0;

 				 foreach ($products as $product): 
 				 	$desc = $product['product_image'];
					$image = explode(", ", $desc);
 				 	?>
				
				<?php 
					$sum_price_product = ($product['product_price'] * $product['product_number']);
					$sum_price_all_products += $sum_price_product;
				?>
				<script>
					var number = number + 1;
				</script>
 					<div class="col-lg-12 col-md-3 mb-4" id="productBlock">
 						<div class="card" id="<?=$product['id_cart']?>">
						<div class="row">
 							<div class="col-lg-2 col-md-4 view overlay">
 								<img class="card-img-top" src="<?=$image[0]?>" alt="Core-i9">
 								<a href="shop-page.php?id_product=<?=$product['id_product']?>&product_category=<?=$product['product_category']?>">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="col-lg-8 card-body cart-desc cart-text">
								<a href="shop-page.php?id_product=<?=$product['id_product']?>&product_category=<?=$product['product_category']?>" class="grey-text">
									<h5><?=$product['product_category'] ?></h5>
								</a>
								

								<h5>
									<strong>
										<a href="shop-page.php?id_product=<?=$product['id_product']?>&product_category=<?=$product['product_category']?>" class="dark-grey-text"><?=$product['product_name'] ?> <!-- <span class="badge-pill danger-color">NEW</span> --></a>
									</strong>
								</h5>

								<p>
									<?=mb_substr($product['characteristics'], 0, 50, 'UTF-8').'...' ?>								
								</p>
								
								<div class="number-panel">
									<p>Количество: <?=$product['product_number']?></p>
								</div>
								
								<div id="response"></div>

								

							</div>

								<div class="col-lg-2 block-buy">
									<div class="price" id="<?=$i?>">
										<h4 class="font-weight-bold blue-text">
											<strong><?=$sum_price_product.'₽' ?></strong>
										</h4>
										
										<form name="cartDelProdForm">
											<input type="hidden" name="deleteProduct__inp" value="<?=$product['id_cart']?>">
											<button type="submit" class="button-delete-product" value="remove" name="deleteProduct__btn" onclick="delete_product(<?=$product['id_cart']?>);">Удалить товар</button>
										</form>

										<!-- <script src="js/cart.js"></script> -->
											
									</div>
									<?php $i = $i + 1 ?>
									<div class="button-buy">
										<form name="buyProductForm">											
						 					<div class="button-buy-product">					 						
												<button type="submit" class="btn btn-lg btn-primary btn-md my-0 p" name="buy" value="remove" onclick="buy_product_from_cart(<?=$product['id_cart']?>, <?=$product['id_product']?>, <?=$id_purchaser?>, '<?=$timeNow?>', <?=$product['product_number']?> );">Купить</button>
											</div>											
										</form>
									
							
									</div>
								</div>
							</div>
 						</div>
 					</div>
 				<?php 
 					$id_card = $id_card + 1;
 					endforeach; ?>
 				</div>
				</div>
				
				

				<?php
 					if ($sum_price_all_products === 0) {
						echo "<div class='cart-empty col-lg-4 offset-4'><h1>Корзина пуста</h1></div>";
						
					}
 				?>

 			</div>
			<div class="card">
				<div class="row">
					<div class="col-lg-3 num-all-product">
						<p>Количество товаров: <script>document.write(number)</script></p>
		
					</div>
					<div class="col-lg-2 offset-3 clear-cart">
						<form name="cartDelAllProdForm">
							<button type="submit" class="button-delete-all-products" name="deleteAllProduct__btn" id="delete-all" value="<?=$id_purchaser?>">Очистить корзину </button>
						</form>


					</div>
					<div class="col-lg-2 payment-all">
						<p>Итого: <?=$sum_price_all_products?> ₽</p>
					</div>
					<div class="col-lg-2">
						<div class="act-all">
							<button button type="submit" class="btn btn-lg btn-primary btn-md my-0 p" name="buy-all" id="buy-all">Купить все</button>
						</div>
					</div>
				</div>
			</div>

 		</div>
 	</section>


	</div>	
	<script src="js/cart.js"></script>
	<script src="js/buy.js"></script>
</main>



<?php 
	require("footer.php");
?>