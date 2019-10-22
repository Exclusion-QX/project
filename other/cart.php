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
			$products = get_product();
			
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
	showCart(<?=$products?>);
	console.log(cart);
</script>

<?php 
	require("footer.php");
?>