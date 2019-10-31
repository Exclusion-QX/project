<?php

$number = $_POST['inCart__inp'];
$id = $_POST['inCart__btn'];

/*if ($inp == 1 && $btn == 1) {
	echo 'Количсето 1 продукт 1';
} elseif ($inp == 2 && $btn == 1) {
	echo 'Количество 2 продукт 1';
} elseif ($inp == 1 && $btn == 4) {
	echo 'Количество 1 продукт 4';
} else {
	echo 'Ne ponyal';
}*/

/*switch ($inp,) {
	case '1':
		echo ' col 1';
		break;
	case '2':
		echo 'col 2';
		break;


	default:
		echo 'ne ponyal';
}*/

	// $id = $product['id_product'];
		if (isset($_POST['inCart__inp']) && isset($_POST['inCart__btn']) ){
		
		require("functions.php");
		require("connect.php");

		// $id *= $id;
		// $number *= $number;

		add_to_cart($id, $number);
	}
 	