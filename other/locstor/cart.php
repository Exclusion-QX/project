<?php 
	// require("header.php");
	require("connect.php");
	require("functions.php");
?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<main>
	
	<div class="my-cart">
		<?php 
			// $products = get_product();

			// $query = "SELECT * FROM product WHERE id_product IN ($idsString)";
			
/*			
			foreach ($products as $product): 

				$num = 8;

				if($num = $product['id_product'])
				echo ($product['product_name']);
			
			
			endforeach;*/
		?>
	
	</div> 	

</main>

<script>
	checkCart();
	// showCart(<?=$products?>);
	var productsIds = Object.keys(cart);

	/*$.POST('cart.php', 'products':productsIds, function(data){
		console.log("success");
	});*/

	// var products = get_product_by_ids(productsIds);

	/*$.post("functions.php", productsIds, function (data) {
		console.log(data);
	});
*/
	// console.log(products);
	/*for (let key of productsIds){
	console.log(key);
}*/
</script>

<?php 
	$products = "<script>if (localStorage.getItem('cart') != null) 
	{JSON.parse(localStorage.getItem('cart'));}
	else {''}</script>";
	//$qwe = array_keys($products);
	echo ($products);
?>

<?php 
	require("footer.php");
?>