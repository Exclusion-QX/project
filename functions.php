<?php

	function get_idproduct($link) {
		global $link;
		$sql = "SELECT id_product FROM product";
		$result = mysqli_query($link, $sql);

		echo '<pre>';
		var_dump($result);
		echo '</pre>';

	}

/*$idproduct = get_idproduct($link);*/

	function get_product() {

		global $link;
		$sql = "SELECT * FROM product";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
		
	}
