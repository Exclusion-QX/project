<?php
$timeNow = date('Y-m-d', time());
$limit = 5;
$offset = 0;
$top_rating_proc = get_top_rating_all("Процессор", $limit, $offset);
$top_rating_video = get_top_rating_all("Видеокарта", $limit, $offset);
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
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
				// $top_sale = get_top_sale($name, $category, $firstdate, $seconddate, $limit, $offset);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_one_product($name, $category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category);
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
			}			
		} else {
			$firstdate = '1753-01-01';
			if (!($seconddate) == "") {
				$products = show_statistics_one_product($name, $category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category);
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_one_product($name, $category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_name($name, $firstdate, $seconddate, $category);
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
			}
		}
		
	} else {
		
		if ($category === "Все"){

			if(!($firstdate) == ""){
			if (!($seconddate) == "") {
				$products = show_statistics_all($firstdate, $seconddate);
				$info = get_all_price_and_amount($firstdate, $seconddate);
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_all($firstdate, $seconddate);
				$info = get_all_price_and_amount($firstdate, $seconddate);
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
				}				
			} else {
				$firstdate = '1753-01-01';
				if (!($seconddate) == "") {
					$products = show_statistics_all($firstdate, $seconddate);
					$info = get_all_price_and_amount($firstdate, $seconddate);
					$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
					$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
				} else {
					$seconddate = $timeNow;
					$products = show_statistics_all($firstdate, $seconddate);
					$info = get_all_price_and_amount($firstdate, $seconddate);
					$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
					$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
				}
			}

		} else {

			if(!($firstdate) == ""){
			if (!($seconddate) == "") {
				$products = show_statistics_by_category($category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
			} else {
				$seconddate = $timeNow;
				$products = show_statistics_by_category($category, $firstdate, $seconddate);
				$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
				$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
				$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
				}				
			} else {
				$firstdate = '1753-01-01';
				if (!($seconddate) == "") {
					$products = show_statistics_by_category($category, $firstdate, $seconddate);
					$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
					$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
					$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
				} else {
					$seconddate = $timeNow;
					$products = show_statistics_by_category($category, $firstdate, $seconddate);
					$info = get_all_price_and_amount_by_category($firstdate, $seconddate, $category);
					$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
					$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);
				}
			}
		}
	}
}

if(!isset($_POST['show__btn'])) {
	$products = show_statistics_all('1753-01-01', $timeNow);
	$info = get_all_price_and_amount('1753-01-01', $timeNow);
	$firstdate = '1753-01-01';
	$seconddate = $timeNow; 
	$top_processors = get_top_sale_all("Процессор", $firstdate, $seconddate, $limit, $offset);
	$top_videocards = get_top_sale_all("Видеокарта", $firstdate, $seconddate, $limit, $offset);

}

//Отображение графика
$arr = get_profit();

	$jan = 0;	$janp = 0;	$janv = 0;	
	$feb = 0;	$febp = 0;	$febv = 0;
	$mar = 0;	$marp = 0;	$marv = 0;
	$apr = 0;	$aprp = 0;	$aprv = 0;
	$may = 0;	$mayp = 0;	$mayv = 0;
	$jun = 0;	$junp = 0;	$junv = 0;
	$jul = 0;	$julp = 0;	$julv = 0;
	$aug = 0;	$augp = 0;	$augv = 0;
	$sep = 0;	$sepp = 0;	$sepv = 0;
	$oct = 0;	$octp = 0;	$octv = 0;
	$nov = 0;	$novp = 0;	$novv = 0;
	$dec = 0;	$decp = 0;	$decv = 0;

	foreach ($arr as $key): 

		if ($key['order_date'] > "2018-12-31" && $key['order_date'] < "2019-02-01") {
			$jan = $jan + $key['profit'];
			
		
			if ($key['product_category'] == "Процессор") {
				$janp = $janp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$janv = $janv + $key['profit'];
			}
	}

		if ($key['order_date'] > "2019-01-31" && $key['order_date'] < "2019-03-01") {
			$feb = $feb + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$febp = $febp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$febv = $febv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-02-29" && $key['order_date'] < "2019-04-01") {
			$mar = $mar + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$marp = $marp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$marv = $marv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-03-31" && $key['order_date'] < "2019-05-01") {
			$apr = $apr + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$aprp = $aprp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$aprv = $aprv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-04-30" && $key['order_date'] < "2019-06-01") {
			$may = $may + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$mayp = $mayp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$mayv = $mayv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-05-31" && $key['order_date'] < "2019-07-01") {
			$jun = $jun + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$junp = $junp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$junv = $junv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-06-30" && $key['order_date'] < "2019-08-01") {
			$jul = $jul + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$julp = $julp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$julv = $julv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-07-31" && $key['order_date'] < "2019-09-01") {
			$aug = $aug + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$augp = $augp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$augv = $augv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-08-30" && $key['order_date'] < "2019-10-01") {
			$sep = $sep + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$sepp = $sepp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$sepv = $sepv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-09-31" && $key['order_date'] < "2019-11-01") {
			$oct = $oct + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$octp = $octp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$octv = $octv + $key['profit'];
			}
		}

		if ($key['order_date'] > "2019-10-30" && $key['order_date'] < "2019-12-01") {
			$nov = $nov + $key['profit'];
			
		
			if ($key['product_category'] == "Процессор") {
				$novp = $novp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$novv = $novv + $key['profit'];
			}
	}

		if ($key['order_date'] > "2019-11-31" && $key['order_date'] < "2020-01-01") {
			$dec = $dec + $key['profit'];
			
			if ($key['product_category'] == "Процессор") {
				$decp = $decp + $key['profit'];
			} else if ($key['product_category'] == "Видеокарта") {
				$decv = $decv + $key['profit'];
			}
		} ?>


		
	<? endforeach;?>
