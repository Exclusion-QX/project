var servResponse = document.querySelector('#responseComment');

// Добавление товара в корзину

document.forms.sendCommentForm.onsubmit = function(e){
	e.preventDefault();

	var commentArea = document.forms.sendCommentForm.comment__area.value;
	var text = commentArea;
	commentArea = encodeURIComponent(commentArea);
	var commentInp = document.forms.sendCommentForm.comment__inp.value;
	var login = commentInp;
	commentInp = encodeURIComponent(commentInp);
	var idProductInp = document.forms.sendCommentForm.idproduct__inp.value;
	idProductInp = encodeURIComponent(idProductInp);
	var commentBtn = document.forms.sendCommentForm.comment__btn.value;
	commentBtn = encodeURIComponent(commentBtn);
	var timeInp = document.forms.sendCommentForm.timeNow__inp.value;
	var time = timeInp;
	timeInp = encodeURIComponent(timeInp);

	var xhr = new XMLHttpRequest();

	xhr.open('POST', 'form.php');

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			// servResponse.textContent = xhr.responseText;
			$('#responseComment').html('<span>' + login + '</span><p>' + 
				text +'</p><div class="comment-date">' + time +'</p></div>');


		}
	}

	xhr.send('comment__inp=' + commentInp + '&' + 'comment__btn=' + 
		commentBtn + '&' + 'comment__area=' + commentArea + '&' + 'idproduct__inp=' + idProductInp + '&' + 'timeNow__inp=' + timeInp);
};

