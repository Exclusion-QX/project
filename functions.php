<?php

	function get_product_by_id($id_product) {

		global $link;

		$sql = "SELECT * FROM product WHERE id_product = ".$id_product;

		$result = mysqli_query($link, $sql);
		$product = mysqli_fetch_assoc($result);

		return $product;
	}

	function get_product($limit, $offset) {

		global $link;
		$sql = "SELECT * FROM product WHERE product_category ='Процессор' LIMIT $limit OFFSET $offset";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
		
	}

	function get_product_desc() {

		global $link;
		$sql = "SELECT * FROM product WHERE product_category ='Процессор'";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
		
	}
?>
	<script>
					function password_check (password, repassword){

							if (password == repassword) {
									var smsg = "Регистрация прошла успешно";
									return smsg;
								} else {
									var fsmsg = "Пароли не совпадают!";
									return fsmsg;
								} 
					}
	</script>


