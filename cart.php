var cart = {}; // корзина

<?php
		require('connect.php');

			$query = "SELECT id_product FROM product ";
			$result = mysqli_query($connection, $query);
    /*$('.goods-out').html(out);
    $('.add-to-cart').on('click', addToCart); */

    echo result;
?>


function addToCart() {
    //добавляем товар в корзину
    var id = $(this).attr('data-id');
    // console.log(id);
    if (cart[id]==undefined) {
        cart[id] = 1; //если в корзине нет товара - делаем равным 1
    }
    else {
        cart[id]++; //если такой товар есть - увеличиваю на единицу
    }
    showMiniCart();
}

function showMiniCart() {
    //показываю мини корзину
    var out="";
    for (var key in cart) {
        out += key +' --- '+ cart[key]+'<br>';
    }
    $('.mini-cart').html(out);
}

$(document).ready(function () {
    init();

});