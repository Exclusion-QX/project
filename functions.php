<?php

	function get_product_by_id($id_product) {

		global $link;

		$sql = "SELECT * FROM product WHERE id_product = ".$id_product;

		$result = mysqli_query($link, $sql);
		$product = mysqli_fetch_assoc($result);

		return $product;
	}

	function show_prosucts_by_category($limit, $offset, $category) {

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
		
	}


	function get_product_from_cart ($id_purchaser) {

		global $link;
		$sql = "SELECT cart.product_number, cart.id_cart, product.product_name, product.product_desc, product.product_price, product.id_product, product.product_image, product.product_category FROM cart, product WHERE cart.id_purchaser = '$id_purchaser' AND product.id_product = cart.id_product";
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

	function send_comment($login, $id, $comment, $idProduct, $time) {
		
		global $link;

	    $query = "INSERT INTO review (id_product, id_purchaser, comment, comment_date) VALUES ('$idProduct', '$id', '$comment', '$time') ";
	    $result = mysqli_query($link, $query);
	    return $result;
	}

	function get_comments($idProduct) {

		global $link;
		$sql = "SELECT review.rating, review.comment, review.comment_date, purchaser.purchaser_login FROM review, purchaser WHERE review.id_product = '$idProduct' AND purchaser.id_purchaser = review.id_purchaser ORDER BY review.comment_date DESC";
		$result = mysqli_query($link, $sql);
		$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $comments;
	}

	function buy_product($idProduct, $id, $number, $time) {
		
		global $link;
		$sql = "INSERT INTO orders (id_product, id_purchaser, product_amount, order_date ) VALUES ('$idProduct', '$id', '$number', '$time') ";
		$result = mysqli_query($link, $sql);
		
	}

	function add_product($name, $category, $desc, $characteristics, $image, $price) {

		 global $link;
		 $sql = "INSERT INTO product (product_name, product_category, product_desc, characteristics, product_image, product_price) VALUES ('$name', '$category', '$desc', '$characteristics', '$image', '$price') ";
		 $result = mysqli_query($link, $sql);
		 return true;
	}


	function get_order_by_id ($id) {

		global $link;
		$sql = "SELECT orders.product_amount, orders.order_date, product.product_name, product.characteristics, product.id_product, product.product_image, product.product_price, product.product_category FROM orders, product WHERE orders.id_purchaser = '$id' AND product.id_product = orders.id_product ORDER BY orders.order_date DESC";

		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $products;

	}


	function show_statistics_all($firstdate, $seconddate) {

		global $link;
		$sql = "SELECT product.product_name, SUM(orders.product_amount) AS amount, orders.order_date, SUM(product.product_price) AS price FROM orders, product WHERE product.id_product = orders.id_product AND orders.order_date BETWEEN '$firstdate' AND '$seconddate' GROUP BY orders.id_product ORDER BY product.product_price DESC";

		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $products;
	}


	function show_statistics_by_category($category, $firstdate, $seconddate) {

		global $link;
		$sql = "SELECT product.product_name, SUM(orders.product_amount) AS amount, orders.order_date, SUM(product.product_price) AS price FROM orders, product WHERE product.id_product = orders.id_product AND product.product_category = '$category' AND orders.order_date BETWEEN '$firstdate' AND '$seconddate' GROUP BY orders.id_product ORDER BY orders.order_date DESC";

		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $products;
	}


		function show_statistics_one_product($name, $category, $firstdate, $seconddate) {

		global $link;
		$sql = "SELECT product.product_name, (orders.product_amount) AS amount, orders.order_date, (product.product_price * orders.product_amount) AS price FROM orders, product WHERE product.id_product = orders.id_product AND product.product_name = '$name' AND product.product_category = '$category' AND orders.order_date BETWEEN '$firstdate' AND '$seconddate' ORDER BY orders.order_date DESC";

		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $products;
	}


	function get_all_price_and_amount($firstdate, $seconddate) {

		global $link;
		$sql = "SELECT SUM(orders.product_amount) AS amount_all, SUM(product.product_price) AS price_all FROM orders, product WHERE product.id_product = orders.id_product AND orders.order_date BETWEEN '$firstdate' AND '$seconddate'";

		$result = mysqli_query($link, $sql);
		$info = mysqli_fetch_assoc($result);

		return $info;
	}

	function get_all_price_and_amount_by_category($firstdate, $seconddate, $category) {

		global $link;
		$sql = "SELECT SUM(orders.product_amount) AS amount_all, SUM(product.product_price) AS price_all FROM orders, product WHERE product.id_product = orders.id_product AND product.product_category = '$category' AND orders.order_date BETWEEN '$firstdate' AND '$seconddate'";

		$result = mysqli_query($link, $sql);
		$info = mysqli_fetch_assoc($result);

		return $info;
	}

	function get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category) {

		global $link;
		$sql = "SELECT SUM(orders.product_amount) AS amount_all, SUM(product.product_price) AS price_all FROM orders, product WHERE product.id_product = orders.id_product AND product.product_name = '$name' AND product.product_category = '$category' AND orders.order_date BETWEEN '$firstdate' AND '$seconddate'";

		$result = mysqli_query($link, $sql);
		$info = mysqli_fetch_assoc($result);

		return $info;
	}


	function filter_show_products($first_price, $second_price, $provider, $category, $limit, $offset) {

		global $link;
		$sql = "SELECT * FROM product WHERE product_category ='$category' AND id_provider = '$provider' AND product_price BETWEEN '$first_price' AND '$second_price' LIMIT $limit OFFSET $offset";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
	}

	function filter_show_prosucts($first_price, $second_price, $limit, $offset, $category) {

		global $link;
		$sql = "SELECT * FROM product WHERE product_category ='$category' AND product_price BETWEEN '$first_price' AND '$second_price' LIMIT $limit OFFSET $offset";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
		
	}


	function change_product_price($productName, $check, $newPrice) {

		global $link;
		$sql = "UPDATE product SET product_price = '$newPrice' , advertising = '$check' WHERE product_name = '$productName'";
		$result = mysqli_query($link, $sql);
		return $result;
	}

	function get_new_products() {

		global $link;
		$sql = "SELECT * FROM product WHERE advertising ='1'";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
	}

	function get_discounts_products() {

		global $link;
		$sql = "SELECT * FROM product WHERE advertising ='2'";
		$result = mysqli_query($link, $sql);
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $products;
	}