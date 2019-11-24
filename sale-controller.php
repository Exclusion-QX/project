<?php
$timeNow = date('Y-m-d', time());

if (isset($_POST['show__btn'])) {
	$name = $_POST['name'];
	$category = $_POST['category'];
	$firstdate = $_POST['firstdate'];
	$seconddate =  $_POST['seconddate'];

	//Условие ввода даты
	if (!($name == "")) {
		if(!($firstdate) == ""){
			if (!($seconddate) == "") {
				$products = show_statistics_one_product($name, $category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_one_product($name, $category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category);
			}			
		} else {
			$firstdate = '1753-01-01';
			if (!($seconddate) == "") {
				$products = show_statistics_one_product($name, $category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_one_product($name, $category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category);
			}
		}
		
	} else {
		
		if ($category === "Все"){

			if(!($firstdate) == ""){
			if (!($seconddate) == "") {
				$products = show_statistics_all($firstdate, $seconddate);
				$info = get_all_price_and_amount($firstdate, $seconddate);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_all($firstdate, $seconddate);
				$info = get_all_price_and_amount($firstdate, $seconddate);
				}				
			} else {
				$firstdate = '1753-01-01';
				if (!($seconddate) == "") {
					$products = show_statistics_all($firstdate, $seconddate);
					$info = get_all_price_and_amount($firstdate, $seconddate);
				} else {
					$seconddate = $timeNow;
					$products = show_statistics_all($firstdate, $seconddate);
					$info = get_all_price_and_amount($firstdate, $seconddate);
				}
			}

		} else {

			if(!($firstdate) == ""){
			if (!($seconddate) == "") {
				$products = show_statistics_by_category($category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_by_category($category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
				}				
			} else {
				$firstdate = '1753-01-01';
				if (!($seconddate) == "") {
					$products = show_statistics_by_category($category, $firstdate, $seconddate);
					$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
				} else {
					$seconddate = $timeNow;
					$products = show_statistics_by_category($category, $firstdate, $seconddate);
					$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
				}
			}
		}
	}
}

if(!isset($_POST['show__btn'])) {
	$products = show_statistics_all('1753-01-01', $timeNow);
	$info = get_all_price_and_amount('1753-01-01', $timeNow);
}