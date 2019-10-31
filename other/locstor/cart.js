var cart = {}; //корзина

function showCart(products) {
        /*var things = {};
        var out = '';
        things = products;*/
        // console.log(things);
        /*for (var key in cart) {
            
          out += cart[key]*goods[key].cost;
        */

        }

        // $('#my-cart').html(out);
    

function checkCart() {
    //проверяю наличие корзины в localStorage;
    if (localStorage.getItem('cart') != null) {
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}


