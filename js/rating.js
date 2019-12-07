var servResponse = document.querySelector('#responseRating');

// Добавление товара в корзину

document.forms.sendRatingForm.onsubmit = function(e){
	e.preventDefault();

	var id_purchaser = document.forms.sendRatingForm.set_rating__btn.value;
	id_purchaser = encodeURIComponent(id_purchaser);
	var rating = document.forms.sendRatingForm.rating__inp.value;
	rating = encodeURIComponent(rating);
	var id_product = document.forms.sendRatingForm.idproduct__inp.value;
	id_product = encodeURIComponent(id_product);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			// servResponse.textContent = xhr.responseText;
			// $('#responseComment').html('<span>' + login + '</span><p>' + 
				// text +'</p><div class="comment-date">' + time +'</p></div>');
			alert("Рейтинг отправлен");

		}
	}

	xhr.send('id_purchaser=' + id_purchaser + '&' + 'rating=' + 
		rating + '&' + 'id_product=' + id_product);
};

