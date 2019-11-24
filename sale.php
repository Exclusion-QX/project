<?php
session_start();

require("connect.php");
require("functions.php");

if (!($_SESSION['group'] === 'admin')){
	header("HTTP/1.0 404 Not Found");
	exit;
}

require ("header.html");

include("sale-controller.php");

?>

<body>
	<main>
		<div class="container"  style="padding-top: 130px; min-height: 600px;">
			
			<form method="POST">
				<div class="row">
				<div class="col-md-4 offset-2">
					<div class="form-group">
					    <label>Название товара</label>
					    <input type="text" class="form-control" placeholder="Введите название товара" name="name">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					    <label>Категория</label>
						<select class="form-control" id="FormControlSelect" name="category" required>
							<option>Все</option>
							<option>Процессор</option>
							<option>Видеокарта</option>
							<option>Материнская плата</option>
							<option>Оперативная память</option>
							<option>Блок питания</option>
							<option>Жёсткий диск</option>
							<option>Охлаждение</option>
							<option>Корпус</option>
							<option>SSD накопитель</option>								     
						</select>
					</div> 
				</div>			
				</div>
				<div class="row">
				<div class="col-md-1 offset-2">
					<label class="my-1 mr-2 ">Период</label>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <input type="text" class="form-control form-control-sm mt-1" placeholder="C" name="firstdate">
					    <small id="passwordHelpInline" class="text-muted">YYYY-mm-dd</small>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <input type="text" class="form-control form-control-sm mt-1" placeholder="По" name="seconddate">
					    <small id="passwordHelpInline" class="text-muted">YYYY-mm-dd</small>
					</div>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-sm btn-primary" name="show__btn">Показать</button>
				</div>
				</div>
			</form>
			
			<div class="row">
			<div class="col-md-10 offset-1">
			<table class="table">
				<tbody>
				<tr class="table-success">
					<th>Общее количество</th>
					<th><?=$info['amount_all']?></th>
					<th>Общий доход</th>
					<th><?=$info['price_all'] ?></th>
				</tr>
				<tr class="text-white bg-dark">
					<th><b>Название</b></th>
					<th><b>Количество</b></th>
					<th><b>Доход</b></th>
					<th><b>Дата</b></th>
				</tr>
				<? foreach ($products as $product):
				?>
					
						<tr>
							<th><b><?=$product['product_name']?></b></th>
							<th><?=$product['amount']?></th>
							<th><?=$product['price']?></th>
							<th><?=$product['order_date']?></th>				  		
						</tr>

					
				<? endforeach; ?>
				</tbody>
			</table>
			</div>
			</div>

		</div>
	</main>
</body>

<? require("footer.php"); ?>