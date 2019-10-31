<?php 
	require("header.php");
	require("connect.php");
	require("functions.php");

	if(isset($_COOKIE['id']))
	$id_purchaser = $_COOKIE['id'];

?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<main>
	
	<?php 
		$products = get_product_from_cart($id_purchaser);
	?>

	<?php 
		if (isset($_POST['delete'])) {
			$id_del_product = $_POST['delete'];
			delete_product($id_del_product);
		}

		if (isset($_POST['delete-all'])) {

			delete_all_products($id_purchaser);
		}
	?>

	<div class="container">
		
		

	<section class="text-center mb-4">
		<div class="out-header">
 			<div class="row wow fadeIn">

 				<div class="content">

 				<?php

 				$sum_price_all_products = 0;
 				$number_products = 0;
 				 foreach ($products as $product): ?>
				
				<?php 
					$sum_price_product = ($product['product_price'] * $product['product_number']);
					$sum_price_all_products += $sum_price_product;
					$number_products += 1;
				?>
 					<div class="col-lg-12 col-md-3 mb-4">
 						<div class="card">
						<div class="row">
 							<div class="col-lg-2 col-md-4 view overlay">
 								<img class="card-img-top" src="/img/proc.jpg" alt="Core-i9">
 								<a href="shop-page.php?id_product=<?=$product['id_product']?>">
 									<div class="mask rgba-white-slight"></div>
 								</a>
 							</div>

							<div class="col-lg-8 card-body cart-desc cart-text">
								<a href="shop-page.php?id_product=<?=$product['id_product']?>" class="grey-text">
									<h5><?=$product['product_category'] ?></h5>
								</a>
								

								<h5>
									<strong>
										<a href="shop-page.php?id_product=<?=$product['id_product']?>" class="dark-grey-text"><?=$product['product_name'] ?> <!-- <span class="badge-pill danger-color">NEW</span> --></a>
									</strong>
								</h5>

								<p>
									<?=mb_substr($product['product_desc'], 0, 50, 'UTF-8').'...' ?>								
								</p>
								
								<div class="number-panel">
									<p>Количество: <?=$product['product_number']?></p>
								</div>

								

							</div>

								<div class="col-lg-2 block-buy">
									<div class="price">
										<h4 class="font-weight-bold blue-text">
											<strong><?=$sum_price_product.'₽' ?></strong>
										</h4>
										<form method="POST">
											<button type="submit" class="button-delete-product" name="delete" id="delete" value="<?=$product['id_cart']?>">Удалить товар</button>
										</form>
											
									</div>
									
									<div class="button-buy">
										<button type="submit" class="btn btn-lg btn-primary btn-md my-0 p" name="buy" id="buy">Купить</button>
									</div>
								</div>
							</div>
 						</div>
 					</div>

 				<?php endforeach; ?>
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
						<p>Количество товаров: <?=$number_products?></p>
					</div>
					<div class="col-lg-2 offset-3 clear-cart">
						<form method="POST">
							<button type="submit" class="button-delete-all-products" name="delete-all" id="delete-all">Очистить корзину </button>
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

</main>



<?php 
	require("footer.php");
?>