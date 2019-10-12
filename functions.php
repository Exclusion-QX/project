<?php

	function get_product_by_id($id_product) {

		global $link;

		$sql = "SELECT * FROM product WHERE id_product = ".$id_product;

		$result = mysqli_query($link, $sql);
		$product = mysqli_fetch_assoc($result);

		return $product;
	}

	function get_product() {

		global $link;
		$sql = "SELECT * FROM product WHERE product_category ='Процессор'";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
		
	}

