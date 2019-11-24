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
			servResponse.textContent = xhr.responseText;
			$('#response').html("Куплено");
		}
	}

	xhr.send('idpurchaser__inp=' + id + '&' + 'timeNow__inp=' + time + '&' + 'buy__btn=' + idProduct + '&' + 'inCart__inp=' + number);
};