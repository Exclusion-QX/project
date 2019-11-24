<?php 

if (isset($_POST['add-product'])) {
	
	$name = $_POST['productName'];
	$category = $_POST['category'];
	$desc = $_POST['desc__area'];
	$characteristics = $_POST['charac__area'];
	$image = $_POST['image'];
	$price = $_POST['price'];

	$result = add_product($name, $category, $desc, $characteristics, $image, $price);

	if ($result === true) {
		$added = "Товар добавлен";
	} else {
		$fadded = "Ошибка";
	}

}