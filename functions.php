<?php

	function get_product_by_id($id_product) {

		global $link;

		$sql = "SELECT * FROM product WHERE id_product = ".$id_product;

		$result = mysqli_query($link, $sql);
		$product = mysqli_fetch_assoc($result);

		return $product;
	}

	function get_product_by_category($limit, $offset, $category) {

		global $link;
		$sql = "SELECT * FROM product WHERE product_category ='$category' LIMIT $limit OFFSET $offset";
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

	function get_product() {

		global $link;
		$sql = "SELECT * FROM product";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
		
	}

	function get_product_by_ids($idsArray) {
		
		global $link;
		$products = array();
		$sql = "SELECT * FROM product WHERE id_product IN ($idsString)";

		$result = mysqli_query($link, $sql);
		$product = mysqli_fetch_assoc($result);

		$i = 0;
		while ($row = $product->fetch()) {
			$products[$i]['id_product'] = $row['id_product'];
			$products[$i]['product_name'] = $row['product_name'];
			$products[$i]['product_image'] = $row['product_image'];
			$products[$i]['product_price'] = $row['product_price'];
			$i ++;
		}
		return $products;
	}

	function add_to_cart($product, $number) {
		global $link;

		$id_purchaser = $_COOKIE['id'];
		$id_product = $product;
		$product_number = $number;
		$cart_date = $_COOKIE['id'];

		$sql = "INSERT INTO cart (id_purchaser, id_product, product_number ) VALUES ('$id_purchaser', '$id_product', '$product_number') ";
		$result = mysqli_query($link, $sql);
		echo "Добавлено";
	}


	function get_product_from_cart ($id_purchaser) {

		global $link;
		$sql = "SELECT cart.product_number, cart.id_cart, product.product_name, product.product_desc, product.product_price, product.id_product, product.product_image FROM cart, product WHERE cart.id_purchaser = '$id_purchaser' AND product.id_product = cart.id_product";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
	}

	function delete_product ($id_cart) {

		global $link;
		$sql = "DELETE FROM cart WHERE id_cart = '$id_cart'";
		$result = mysqli_query($link, $sql);
	}

	function delete_all_products ($id_purchaser) {

		global $link;
		$sql = "DELETE FROM cart WHERE id_purchaser = '$id_purchaser'";
		$result = mysqli_query($link, $sql);
	}

	function get_number_products ($id_purchaser) {

		global $link;
		$sql = "SELECT * FROM cart WHERE id_purchaser = '$id_purchaser'";
		$result = mysqli_query($link, $sql);
		$number = mysqli_num_rows($result);
		return $number;
	}

	function change_purchaser_data ($id, $name, $firstname, $login, $phone, $email) {

		global $link;
		$sql = "UPDATE purchaser SET purchaser_name = '$name', purchaser_firstname = '$firstname', purchaser_login = '$login', purchaser_phone = '$phone', purchaser_email = '$email' WHERE id_purchaser = '$id'";
		$result = mysqli_query($link, $sql);
		return $result;
	}

	function check_password ($id, $password) {

		global $link;
		$sql = "SELECT purchaser_pass FROM purchaser WHERE id_purchaser = '$id' and purchaser_pass = 'passwordNew'";
		$result = mysqli_query($link, $sql);
		if ($result) {
			$check = true;
		} else {
			$check = false;
		}
		return $check;
	}

	function change_purchaser_password ($id, $passwordNew) {

		global $link;
		$sql = "UPDATE purchaser SET purchaser_pass = '$passwordNew' WHERE id_purchaser = '$id'";
		$result = mysqli_query($link, $sql);
		return $result;
	}