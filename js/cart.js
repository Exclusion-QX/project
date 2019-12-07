// // Удаление товара из корзины
// var servResponse = document.querySelector('#response');

// document.forms.cartDelProdForm.onsubmit = function(e){
// 	e.preventDefault();

// 	var idCart = document.forms.cartDelProdForm.deleteProduct__inp.value;
// 	idCart = encodeURIComponent(idCart);

// 	var xhr = new XMLHttpRequest();

// 	xhr.open('POST', 'form.php');

// 	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// 	xhr.onreadystatechange = function(){
// 		if(xhr.readyState === 4 && xhr.status === 200){
// 			document.getElementById('productBlock').hidden = true;
// 			servResponse.textContent = xhr.responseText;
// 		}
// 	}

// 	xhr.send('idCart__btn=' + idCart);
// };
    


// document.forms.cartDelProdFormx.onsubmit = function(e){
// 	e.preventDefault();

// 	var idCart = document.forms.cartDelProdFormx.deleteProduct__btn.value;
// 	idCart = encodeURIComponent(idCart);

// 	var xhr = new XMLHttpRequest();

// 	xhr.open('POST', 'form.php');

// 	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// 	xhr.onreadystatechange = function(){
// 		if(xhr.readyState === 4 && xhr.status === 200){
// 			document.getElementById('productBlock2').hidden = true;
// 			servResponse.textContent = xhr.responseText;
// 		}
// 	}

// 	xhr.send('idCart__btn=' + idCart);
// };
   

document.forms.cartDelAllProdForm.onsubmit = function(e){
	e.preventDefault();

	var btn = document.forms.cartDelAllProdForm.deleteAllProduct__btn.value;
	btn = encodeURIComponent(btn);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			document.getElementById('productsAllBlock').hidden = true;
			servResponse.textContent = xhr.responseText;
		}
	}

	xhr.send('deleteAllProduct__btn=' + btn);
};

function delete_product(id){
	var element = document.getElementById(id);
	element.parentNode.removeChild(element);

	var idCart = id;
	idCart = encodeURIComponent(idCart);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			servResponse.textContent = xhr.responseText;
		}
	}

	xhr.send('idCart__btn=' + idCart);
}





