<?php
require ("header.php");
require ("connect.php");
require ("functions.php");
?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js">
</script>

<?php 
	$arr = get_profit();
?>
<?	$jan = 0;
	$feb = 0;
	$mar = 0;
	$apr = 0;
	$may = 0;
	$jun = 0;
	$jul = 0;
	$aug = 0;
	$sep = 0;
	$oct = 0;
	$nov = 0;
	$dec = 0;
	foreach ($arr as $key): 

		if ($key['order_date'] > "2018-12-31" && $key['order_date'] < "2019-02-01") {
			$jan = $jan + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-01-31" && $key['order_date'] < "2019-03-01") {
			$feb = $feb + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-02-29" && $key['order_date'] < "2019-04-01") {
			$mar = $mar + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-03-31" && $key['order_date'] < "2019-05-01") {
			$apr = $apr + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-04-30" && $key['order_date'] < "2019-06-01") {
			$may = $may + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-05-31" && $key['order_date'] < "2019-07-01") {
			$jun = $jun + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-06-30" && $key['order_date'] < "2019-08-01") {
			$jul = $jul + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-07-31" && $key['order_date'] < "2019-09-01") {
			$aug = $aug + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-08-30" && $key['order_date'] < "2019-10-01") {
			$sep = $sep + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-09-31" && $key['order_date'] < "2019-11-01") {
			$oct = $oct + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-10-30" && $key['order_date'] < "2019-12-01") {
			$nov = $nov + $key['profit'];
			?>
		<?}

		if ($key['order_date'] > "2019-11-31" && $key['order_date'] < "2020-01-01") {
			$dec = $dec + $key['profit'];
			?>
		<?} ?>


		
	<? endforeach;?>
<div
  class='hidden'
  data-jan='<?=$jan?>'
  data-feb='<?=$feb?>'
  data-mar='<?=$mar?>'
  data-apr='<?=$apr?>'
  data-may='<?=$may?>'
  data-jun='<?=$jun?>'
  data-jul='<?=$jul?>'
  data-aug='<?=$aug?>'
  data-sep='<?=$sep?>'
  data-oct='<?=$oct?>'
  data-nov='<?=$nov?>'
  data-dec='<?=$dec?>'
></div>
<div class="container" style="padding-top: 100px;">
<div class="row">
	<div class="card mb-4">
		<div class="card-body">
			<div class="list-group list-group-flush">
				<a href="#" class="list-group-item list-group-item-action waves-effect">
					Sales
					<span class="badge badge-danger badge-pill pull-right">23%</span>
					<i class="fa fa-arrow-up ml-1"></i>
				</a>
			</div>
		</div>
	</div>
</div><!-- /.row -->

<div class="row wow fadeIn">
	<div class="col-lg-7 col-md-12 mb-4">
		<div class="card">
			<div class="card-header">Прибыль</div>
			<div class="cart-body">
				<canvas id="lineChart"></canvas>
			</div>
		</div>
	</div>
</div>

</div><!-- /.container -->

<script>
	var jan = $('div.hidden').data('jan');
	var feb = $('div.hidden').data('feb');
	var mar = $('div.hidden').data('mar');
	var apr = $('div.hidden').data('apr');
	var may = $('div.hidden').data('may');
	var jun = $('div.hidden').data('jun');
	var jul = $('div.hidden').data('jul');
	var aug = $('div.hidden').data('aug');
	var sep = $('div.hidden').data('sep');
	var oct = $('div.hidden').data('oct');
	var nov = $('div.hidden').data('nov');
	var dec = $('div.hidden').data('dec');
	var ctxL = document.getElementById('lineChart').getContext('2d');
	var myLineChart = new Chart(ctxL, {
		type: 'line',
		data: {
			labels: ["Январь","Февраль","Март","Апрель","Май","Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
			datasets: [
			{
				label: "2019",
				fillColor: "black",
				backgroundColor: "rgba(83, 214, 42, 0.3)",
				borderColor: "rgba(0, 0, 0, 0.1)",
				borderJoinStyle: 'miter',
				strokeColor: "red",
				pointColor: "green",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "yellow",
				data: [jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec]
			},
			{
				label: "2018",
				fillColor: "blue",
				backgroundColor: "rgba(255, 13, 0, 0.3)",
				strokeColor: "red",
				pointColor: "green",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "yellow",
				data: [43,78,32,66,23,44,12]
			},
			]
		}
	})

</script>

 <p><?=$jan?></p>
 <p><?=$oct?></p>
 <p><?=$nov?></p>
 <p><?=$dec?></p>

</body>
<?php require ("footer.php");?>