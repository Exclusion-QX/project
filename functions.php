<?php

	function get_idproduct($link) {
		$sql = "SELECT product_desc FROM product WHERE id_product ='123'";
		$result = mysqli_query($link, $sql);
		$idproduct = mysqli_fetch_all($result);

		return $idproduct;
	}

$idproduct = get_idproduct($link);

