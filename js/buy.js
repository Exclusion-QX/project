var servResponse = document.querySelector('#response');

document.forms.buyProductForm.onsubmit = function(e){
	e.preventDefault();

	var id = document.forms.buyProductForm.idpurchaser__inp.value;
	id = encodeURIComponent(id);
	var time = document.forms.buyProductForm.timeNow__inp.value;
	time = encodeURIComponent(time);
	var idProduct = document.forms.buyProductForm.buy__btn.value;
	idProduct = encodeURIComponent(idProduct);
	var number = document.forms.inCartForm.inCart__inp.value;
	number = encodeURIComponent(number);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			// servResponse.textContent = xhr.responseText;
			$('#response').html("Куплено");
		}
	}

	xhr.send('idpurchaser_inp=' + id + '&' + 'timeNow_inp=' + time + '&' + 'buy_btn=' + idProduct + '&' + 'inCart_inp=' + number);
};

function buy_product_from_cart(id, id_product, id_purchaser, time, number) {
	var element = document.getElementById(id);
	element.parentNode.removeChild(element);

	var idPurchaser = id_purchaser;
	idPurchaser = encodeURIComponent(idPurchaser);
	var idProduct = id_product;
	idProduct = encodeURIComponent(idProduct);
	var time = time;
	time = encodeURIComponent(time);
	var number = number;
	number = encodeURIComponent(number);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			alert("Куплено");
		}
	}

	xhr.send('idpurchaser__inp=' + idPurchaser + '&' + 'timeNow__inp=' + time + '&' + 'buy__btn=' + 
		idProduct + '&' + 'inCart__inp=' + number + '&' + 'idCartBuy=' + id);
}

/*function buy_product(id_product, id_purchaser, time) {

	var idPurchaser = id_purchaser;
	idPurchaser = encodeURIComponent(idPurchaser);
	var idProduct = id_product;
	idProduct = encodeURIComponent(idProduct);
	var time = time;
	time = encodeURIComponent(time);
	var number = document.forms.inCartForm.inCart__inp.value;
	number = encodeURIComponent(number);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			// servResponse.textContent = xhr.responseText;
			// $('#response').html("Куплено");
			alert("Куплено");
		}
	}

	xhr.send('idpur=' + idPurchaser + '&' + 'timeN=' + time + '&' + 'buy=' + 
		idProduct + '&' + 'num=' + number);
}*/