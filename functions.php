<?php

	function get_idproduct($link) {
		$sql = "SELECT id_product FROM product";

		$result = mysqli_query($link, $sql);

		echo '<pre>';
		var_dump($result);
		echo '</pre>';

	}

$idproduct = get_idproduct($link);
