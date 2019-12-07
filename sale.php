<?php
session_start();

require("connect.php");
require("functions.php");

if (!($_COOKIE['group'] === 'admin')){
	header("HTTP/1.0 404 Not Found");
	exit;
}

require ("header.php");

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
				<div class="row" style="padding-bottom: 20px;">
				<div class="col-md-1 offset-2">
					<label class="my-1 mr-2 ">Период</label>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <input type="text" class="form-control form-control-sm mt-1" placeholder="C" name="firstdate" value="<?php echo @$firstdate?>">
					    <small id="passwordHelpInline" class="text-muted">YYYY-mm-dd</small>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <input type="text" class="form-control form-control-sm mt-1" placeholder="По" name="seconddate" value="<?php echo @$seconddate?>">
					    <small id="passwordHelpInline" class="text-muted">YYYY-mm-dd</small>
					</div>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-sm btn-primary" name="show__btn">Показать</button>
				</div>
				<div class="col-md-2">
					
				
				<div class="list-group" id="list-tab" role="tablist">
				      <a class="list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Общая информация</a>
				
				      <a class="list-group-item-action" id="list-change-profile-list" data-toggle="list" href="#list-change-profile" role="tab" aria-controls="change-profile">Самые продаваемые</a>
								
				      <a class="list-group-item-action" id="list-story-list" data-toggle="list" href="#list-story" role="tab" aria-controls="story">Лучший рейтинг</a>

				      <a class="list-group-item-action" id="list-graphic-list" data-toggle="list" href="#list-graphic" role="tab" aria-controls="graphic">График</a>    
				</div>
				</div>
				</div>
			</form>
			
			<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
				<div class="row">
				<div class="col-md-10 offset-1">
				<table class="table">
					<tbody>
					<tr class="table-success">
						<th>Общий доход:</th>
						<th><?=$info['price_all'] ?></th>
						<th>Прибыль:</th>
						<th><?=$info['whiteprice']?></th>				
					</tr>
					<tr class="table-success">				
						<th>Общее количество:</th>
						<th><?=$info['amount_all']?></th>
						<th></th>
						<th></th>
					</tr>
					<tr class="text-white bg-dark">
						<th><b>Название</b></th>
						<th><b>Количество</b></th>
						<th><b>Прибыль</b></th>
						<th><b>Дата</b></th>
					</tr>
					<? foreach ($products as $product):
					?>
						
							<tr>
								<th><b><?=$product['product_name']?></b></th>
								<th><?=$product['amount']?></th>
								<th><?=$product['whiteprice']?></th>
								<th><?=$product['order_date']?></th>				  		
							</tr>
						
					<? endforeach; ?>
					</tbody>
				</table>
				</div>
				</div>
			</div>

			<div class="tab-pane fade" id="list-change-profile" role="tabpanel" aria-labelledby="list-change-profile-list">
				
				<div class="row">
					<div class="col-md-5">
						<table class="table">
							<tbody>
							<tr class="text-white bg-dark">
								<th><b>Процессор</b></th>
								<th><b>Количество</b></th>
							</tr>
							<? foreach ($top_processors as $top):
							?>					
								<tr>
									<th><b><?=$top['product_name']?></b></th>
									<th><?=$top['amount']?></th>				  		
								</tr>	
							<? endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="col-md-5 offset-1">
						<table class="table">
							<tbody>
							<tr class="text-white bg-dark">
								<th><b>Видеокарта</b></th>
								<th><b>Количество</b></th>
							</tr>
							<? foreach ($top_videocards as $top):
							?>					
								<tr>
									<th><b><?=$top['product_name']?></b></th>
									<th><?=$top['amount']?></th>				  		
								</tr>	
							<? endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="tab-pane fade" id="list-story" role="tabpanel" aria-labelledby="list-story-list">
				<div class="row">
					<div class="col-md-5">
						<table class="table">
							<tbody>
							<tr class="text-white bg-warning">
								<th><b>Процессор</b></th>
								<th><b>Количество</b></th>
							</tr>
							<? foreach ($top_rating_proc as $top):
							?>					
								<tr>
									<th><b><?=$top['product_name']?></b></th>
									<th><?=$top['rating']?></th>				  		
								</tr>	
							<? endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="col-md-5 offset-1">
						<table class="table">
							<tbody>
							<tr class="text-white bg-warning">
								<th><b>Видеокарта</b></th>
								<th><b>Количество</b></th>
							</tr>
							<? foreach ($top_rating_video as $top):
							?>					
								<tr>
									<th><b><?=$top['product_name']?></b></th>
									<th><?=$top['rating']?></th>				  		
								</tr>	
							<? endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>


			</div>

			<div class="tab-pane fade" id="list-graphic" role="tabpanel" aria-labelledby="list-graphic-list">
				<div class="row wow fadeIn">
					<div class="col-lg-7 col-md-12 mb-4">
						<div class="card">
							<div class="card-header">Прибыль со всех товаров</div>
							<div class="cart-body">
								<canvas id="lineChart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="row wow fadeIn">
					<div class="col-lg-7 col-md-12 mb-4">
						<div class="card">
							<div class="card-header">Прибыль с кадого товара</div>
							<div class="cart-body">
								<canvas id="lineChart2"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div
		  class='hidden'
		  data-jan='<?=$jan?>'	data-janp='<?=$janp?>'	data-janv='<?=$janv?>'
		  data-feb='<?=$feb?>'	data-febp='<?=$febp?>'	data-febv='<?=$febv?>'
		  data-mar='<?=$mar?>'	data-marp='<?=$marp?>'	data-marv='<?=$marv?>'
		  data-apr='<?=$apr?>'	data-aprp='<?=$aprp?>'	data-aprv='<?=$aprv?>'
		  data-may='<?=$may?>' 	data-mayp='<?=$mayp?>'	data-mayv='<?=$mayv?>'
		  data-jun='<?=$jun?>'	data-junp='<?=$junp?>'	data-junv='<?=$junv?>'
		  data-jul='<?=$jul?>'	data-julp='<?=$julp?>'	data-julv='<?=$julv?>'
		  data-aug='<?=$aug?>'	data-augp='<?=$augp?>'	data-augv='<?=$augv?>'
		  data-sep='<?=$sep?>'	data-sepp='<?=$sepp?>'	data-sepv='<?=$sepv?>'
		  data-oct='<?=$oct?>'	data-octp='<?=$octp?>' 	data-octv='<?=$octv?>'
		  data-nov='<?=$nov?>'	data-novp='<?=$novp?>'	data-novv='<?=$novv?>'
		  data-dec='<?=$dec?>'	data-decp='<?=$decp?>'	data-decv='<?=$decv?>'

		></div>
	</main>
</body>
<script src="js/sale.js"></script>
<? require("footer.php"); ?>