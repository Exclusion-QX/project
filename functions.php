<?php

	function get_idproduct() {

		global $link;
		/*$sql = "SELECT id_product FROM product";*/

		$sql = "SELECT product_desc FROM product WHERE id_product ='1'";

		$result = mysqli_query($link, $sql);
		$idproduct = mysqli_fetch_all($result);

		return $idproduct;
	}

/*$idproduct = get_idproduct($link);*/

	function get_product() {

		global $link;
		$sql = "SELECT * FROM product WHERE product_category ='Процессор'";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
		
	}
