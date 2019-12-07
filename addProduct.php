<?php 

if (isset($_POST['add-product'])) {
	
	$name = $_POST['productName'];
	$category = $_POST['category'];
	$desc = $_POST['desc__area'];
	$characteristics = $_POST['charac__area'];
	$image = $_POST['image'];
	$price = $_POST['price'];
	$providerPrice = $_POST['provider_price'];
	$amount = $_POST['amount'];
	$provider = $_POST['provider'];
	if ($provider == "Intel") {
		$provider = 1;
	} elseif ($provider == "AMD") {
		$provider = 2;
	} elseif ($provider == "GIGABYTE") {
		$provider = 3;
	} else {
		$provider = 4;
	}

	$result = add_product($name, $category, $desc, $characteristics, $image, $price, $providerPrice, $amount, $provider);

	if ($result === true) {
		$added = "Товар добавлен";
	} else {
		$fadded = "Ошибка";
	}

}