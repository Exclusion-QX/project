var servResponse = document.querySelector('#response');

document.forms.inCartForm.onsubmit = function(e){
	e.preventDefault();

	var productInput = document.forms.inCartForm.inCart__inp.value;
	productInput = encodeURIComponent(productInput);
	var productBtn = document.forms.inCartForm.inCart__btn.value;
	productBtn = encodeURIComponent(productBtn);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200 && productInput > 0){
			servResponse.textContent = xhr.responseText;
		}
	}

	xhr.send('inCart__inp=' + productInput + '&' + 'inCart__btn=' + productBtn);
};