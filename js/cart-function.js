/*var cart = {}; //моя корзина

$('document').ready(function(){
    init();
    loadCart();
});*/

/*function loadGoods() {
    //загружаю товары на страницу
    $.getJSON('goods.json', function (data) {
        //console.log(data);
        var out = '';
        for (var key in data){
            out+='<div class="single-goods">';
            out+='<h3>'+data[key]['name']+'</h3>';
            out+='<p>Цена: '+data[key]['cost']+'</p>';
            out+='<img src="'+data[key].image+'">';
            out+='<button class="add-to-cart" data-art="'+key+'">Купить</button>';
            out+='</div>';
        }
        $('#goods').html(out);
        $('button.add-to-cart').on('click', addToCart);
    });
}*/

/*function addToCart() {

    // var articul = $(this).attr('data-art');

    //добавляем товар в корзину
   var id = $(this).attr('data-id');
    if (cart[id]!=undefined) {
        cart[id]++;
    }
    else {
        cart[id] = 1;
    }
    
    //console.log(cart);
    showMiniCart();
    saveCart();
}

function saveCart() {
    //сохраняем корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}



function showMiniCart(){
    //показываю содержимое корзины
    var out ='';
    for (var key in cart){
        out += key + ' --- '+cart[key]+'<br>';
    }
    $('.mini-cart').html(out);
}

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}*/