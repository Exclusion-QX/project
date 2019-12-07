<?php

require("functions.php");
require("connect.php");


// Добавление товара в корзину


	if (isset($_POST['inCart__inp']) && isset($_POST['inCart__btn'])){
		$number = $_POST['inCart__inp'];
		$id = $_POST['inCart__btn'];
		add_to_cart($id, $number);
	}
 	

// Удаление товара из корзины

	if (isset($_POST['idCart__btn'])) {
		echo "string";
		$idCart = $_POST['idCart__btn'];
		delete_product($idCart);
		$_SESSION['number'] = $_SESSION['number'] - 1;
	}

// Очищение корзины

	if (isset($_POST['deleteAllProduct__btn'])) {
		$id = $_POST['deleteAllProduct__btn'];
		delete_all_products($id);
		$_SESSION['number'] = 0;
	}

// Добавление комментария

	if (isset($_POST['comment__inp']) && isset($_POST['comment__btn']) && 
		isset($_POST['comment__area'])  && isset($_POST['idproduct__inp']) && isset($_POST['timeNow__inp'])) {
   
   		$login = $_POST['comment__inp']; 
    	$id = $_POST['comment__btn'];
    	$comment = $_POST['comment__area']; 	
    	$idProduct = $_POST['idproduct__inp'];
    	$time = $_POST['timeNow__inp'];

    	$result = send_comment($login, $id, $comment, $idProduct, $time);
	}


//Покупка из корзины

	if(isset($_POST['idpurchaser__inp']) && isset($_POST['timeNow__inp']) && 
		isset($_POST['buy__btn']) && isset($_POST['idCartBuy']) && 
		isset($_POST['inCart__inp'])) {

		$id = $_POST['idpurchaser__inp']; 
    	$time = $_POST['timeNow__inp'];
    	$idProduct = $_POST['buy__btn']; 	
    	$number = $_POST['inCart__inp'];
    	$idCart = $_POST['idCartBuy'];
		delete_product($idCart);   	
    	$result = buy_product_func($idProduct, $id, $number, $time);
    	$decAmount = buy_product_dec($idProduct, $number);
	}

	//отправка рейтинга

	if (isset($_POST['id_purchaser']) && isset($_POST['rating']) && 
		isset($_POST['id_product'])) {
   
   		$id_purchaser = $_POST['id_purchaser']; 
    	$rating = $_POST['rating'];
    	$id_product = $_POST['id_product']; 	

    	$result = send_rating($id_purchaser, $rating, $id_product);
	}
	
	//Покупка со страницы товара

	if (isset($_POST['idpurchaser_inp']) && isset($_POST['timeNow_inp']) &&
	 isset($_POST['buy_btn']) && isset($_POST['inCart_inp'])) {

		$id = $_POST['idpurchaser_inp']; 
    	$time = $_POST['timeNow_inp'];
    	$idProduct = $_POST['buy_btn']; 	
    	$number = $_POST['inCart_inp'];
    	$result = buy_product_func($idProduct, $id, $number, $time);
    	$decAmount = buy_product_dec($idProduct, $number);
	}

	// if (isset($_POST['idpur']) && isset($_POST['timeN']) && 
	// 	isset($_POST['buy']) && isset($_POST['num'])) {

	// 	$id = $_POST['idpur']; 
 //    	$time = $_POST['timeN'];
 //    	$idProduct = $_POST['buy']; 	
 //    	$number = $_POST['num'];   	
 //    	$result = buy_product_func($idProduct, $id, $number, $time);
 //    	$decAmount = buy_product_dec($idProduct, $number);
	// }