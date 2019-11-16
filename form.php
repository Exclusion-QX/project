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
