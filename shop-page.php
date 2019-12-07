<?php
session_start();
require("connect.php");
require("functions.php");

$id_product = $_GET['id_product'];
if (!is_numeric($id_product)) exit();

require("header.php");
include("rating-controller.php"); 

if (isset($_SESSION['id'])) {
	$check = 1;
} else {
	$check = 0;
}

$product_category = $_GET['product_category'];
$id_purchaser = $_COOKIE['id'];

//ПОЛУЧАЕМ МАССИВ ПРОДУКТА
$product = get_product_by_id($id_product);

$desc = $product['characteristics'];
$characteristic = explode(", ", $desc);

$imageDesc = $product['product_image'];
$image = explode(", ", $imageDesc);

$timeNow = date('Y-m-d H:i', time());

$comments = get_comments($id_product);

$rating = get_rating($id_product);
?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/cart-function.js"></script>

 <body data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
 	
 	<main class="mt-5 pt-4">
 	<div class="container">
 		<div class="container dark-grey-text mt-5">
 			<div class="row wow fadeIn">
 				<div class="col-md-6 mb-4" style="max-width: 400px;">
 					<img src="<?=$image[0]?>" alt="macbook" class="img-fluid">
 				</div>
 				<div class="col-md-5 offset-1 mb-14">
 					<div class="p-4 mt-4" style="height: 300px;">
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
 						
 						


 						<div class="col-md-12">
 							<p class="lead font-weight-bold"><?=$product['product_name']?></p>
 						</div>
 						<div class="col-md-12">
 							<?php if ($product['product_amount'] == 0) {
 								echo '<p>Нет в наличии </p>';
 							} ?>
 						</div>
 						<div class="col-md-4">
	 						<div class="rating-mini">
								<? rating_show($rating['rating_product']); ?>
							</div>
						</div>
						<div class="col-md-12">
							<p class="lead">
	 							<!-- <span class="mr-1">
	 								<del>200₽</del>
	 							</span> -->
	 							<span class="mr-1">
	 								<?=$product['product_price'].'₽'?>
	 							</span>
	 						</p>
 						</div>
 						<div class="col-md-12">
							<div id="response"></div>
						</div>
						<form name="inCartForm">
 							<div class="d-flex justify-content-left">
								<div class="col-md-3">
	 								<input type="number" value="1" aria-label="Search" id="number" name="inCart__inp" style="width: 100px;" class="form-control">
	 							</div>
 							<!-- <input type="text" name="inCart__inp" style="width: 100px;" class="form-control"> -->
 							<div class="col-md-8">
	 							<button type="submit" class="btn btn-lg btn-primary btn-md my-0 p" name="inCart__btn" value="<?=$product['id_product']?>">
	 								Добавить в корзину <i class="fa fa-shopping-cart ml-1"></i>
	 							</button>
 							</div>
 							</div>
 						</form>
						
						
						<form name="buyProductForm">
							<div class="col-md-4">
		 						<div class="button-buy-product">
		 						
		 							<input type="hidden" name="idpurchaser__inp" value="<?=$_SESSION['id']?>">							        
							        <input type="hidden" name="timeNow__inp" value="<?=$timeNow?>">
									<button type="submit" class="btn btn-lg btn-primary btn-md my-0 p" name="buy__btn" id="buy" value="<?=$product['id_product']?>">Купить</button>
							
								</div>
							</div>
						</form>
						
						<script src='js/buy.js'></script>
 						<script src='js/ajax.js'></script>
 						
 					</div>
 				</div>
 			</div>
 		</div>
 		
	 		<div class="container">
				<div class="row wow fadeIn">
					<div class="col-md-9">
						<div class="col-md-12">
							<hr style="margin-bottom: 60px;">
						</div>
						<div class="col-md-10 offset-1">
							<hr  id="list-item-1" style="margin-bottom: 65px; visibility: hidden;">
							<h4>Описание</h4>
							<p><?=$product['product_desc']?></p>


							<hr id="list-item-2" style="margin-bottom: 65px; visibility: hidden;">		
							<h4>Характеристика</h4>
							<?php 
								if($product_category === "Процессор"){
									include("characteristics/processor-characteristics.php");
								}
							?>
							<hr id="list-item-3" style="margin-bottom: 65px; visibility: hidden;">
							<h4>Отзывы</h4>
							<div class="row">
							<div class="col-md-2 offset-1">
								<h2 style="padding-top: 20px"><?=$rating['rating_product'];
								if (!(isset($rating['rating_product']))) {
									echo "0.0";
								}
								?></h2>
							</div>
							<div class="col-md-3">
								<div class="rating-result" style="padding-top: 20px;">
									
									<?php 
										rating_show($rating['rating_product']);
									?>
									
								</div>
							</div>
							</div>

							<button type="button" class="btn btn-secondary" onclick="display(document.getElementById('form2', <?=$_SESSION['id'];?>))" /> Оставить отзыв</button>

							<form method="POST" name="sendRatingForm" id="form2" style="display: none; padding-top: 40px;">
								<div class="row wow fadeIn">
								<div class="md-col-6">
								<div class="rating-area">

										<input type="hidden" name="idproduct__inp" value="<?=$product['id_product']?>">
										<input type="radio" id="star-5" name="rating__inp" value="5">
										<label for="star-5" title="Оценка «5»"></label>	
										<input type="radio" id="star-4" name="rating__inp" value="4">
										<label for="star-4" title="Оценка «4»"></label>    
										<input type="radio" id="star-3" name="rating__inp" value="3">
										<label for="star-3" title="Оценка «3»"></label>  
										<input type="radio" id="star-2" name="rating__inp" value="2">
										<label for="star-2" title="Оценка «2»"></label>    
										<input type="radio" id="star-1" name="rating__inp" value="1">
										<label for="star-1" title="Оценка «1»"></label>

								</div>
								</div>
									<button type="submit" name="set_rating__btn" class="btn btn-primary" value="<?=$_SESSION['id']?>">Принять</button>

								
								</div>
							</form>
							<hr id="list-item-4" style="margin-bottom: 65px; visibility: hidden;">
							<h4>Комментарии</h4>

							<script>
								function display(form, id){
									if (id != '') {
									if (form.style.display == "none") {
								  		form.style.display = "block";
									} else {
								    	form.style.display = "none";
									}
								} else  {
									window.location.replace("http://project.loc/login.php");
								}
								}
						    </script>
							
							<button type="button" class="btn btn-secondary" onclick="display(document.getElementById('form1'), '<?=$_SESSION['id']?>')" /> Оставить комментарий</button>
							<form name="sendCommentForm" id="form1" style="display: none;" class="comment-form" method="POST">
								<!-- <div class="row">
									<div class="col comment-form">
														        		<input type="text" class="form-control" placeholder="Введите имя"">
														        	</div>
								
														        	<div class="col comment-form">
														        		<input type="text" class="form-control" placeholder="Введите email"">
														        	</div>
														        </div> -->
						        <textarea class="form-control" placeholder="Введите комментарий" name="comment__area" cols="30" rows="5"></textarea>
						        <div class="row">
							        <div class="md-1 offset-9">
							        	<input type="hidden" name="comment__inp" value="<?=$_SESSION['login']?>">
							        	<input type="hidden" name="idproduct__inp" value="<?=$product['id_product']?>">
							        	<input type="hidden" name="timeNow__inp" value="<?=$timeNow?>">
							        	<button type="submit" name="comment__btn" class="btn btn-primary" value="<?=$_SESSION['id']?>">Отправить</button>
							       	</div>
						       	</div>
						    </form>
						</div>
						    
						<div class="col-md-12">
							<hr style="margin-bottom: 10px;">
						</div>
						<?php foreach ($comments as $comment): ?>

							<div class="col-md-10 offset-1 comments">
							<div id="responseComment"></div>
								<span><?=$comment['purchaser_login']?></span>
								<p>
									<?=$comment['comment']?>
	                            </p>
								<div class="comment-date">
									<p><?=$comment['comment_date']?></p>
								</div>
							</div>
							<div class="col-md-12">
							<hr>
							</div>
						<?php endforeach; ?>	
						<!-- <div class="col-md-12">
							<hr id="list-item-1" style="margin-bottom: 60px;">
						</div> -->
						<div style></div>
					</div>	
					<div class="col-md-3">
			 			<nav id="list-example" class="navbar-static-top" style="position: -webkit-sticky; position: sticky; top: 0; padding-top: 60px;">
							  <a class="list-group-item list-group-item-action" href="#list-item-1">Описание</a>
							  <a class="list-group-item list-group-item-action" href="#list-item-2">Характеристика</a>
							  <a class="list-group-item list-group-item-action" href="#list-item-3">Отзывы</a>
							  <a class="list-group-item list-group-item-action" href="#list-item-4">Комментарии</a>
						</nav>
					</div>
				</div>
			</div>
 	</div>

 		<script src="js/comments.js"></script>
 		<script src="js/rating.js"></script>
 	</main> 	

<?php
require ("footer.php");
?>


