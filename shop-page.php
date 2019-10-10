 
<?php
require("header.html");
require("connect.php");
require("functions.php");
?>


 
 	<main class="mt-5 pt-4">
 		<div class="container dark-grey-text mt-5">
 			<div class="row wow fadeIn">
 				<div class="col-md-6 mb-4" style="max-width: 400px;">
 					<img src="https://shop.by/images/intel_core_i9_9900k_1.jpg" alt="macbook" class="img-fluid">
 				</div>
 				<div class="col-md-5 mb-14">
 					<div class="p-4">
 						<!-- <div class="mb-3">
 							<a href="">
 								<span class="badge purple mr-1">Категория 2</span>
 							</a>
 							<a href="">
 								<span class="badge blue mr-1">Новинка</span>
 							</a>
 							<a href="">
 								<span class="badge red mr-1">Лидер продаж</span>
 							</a>
 						</div> -->


 						<p class="lead">
 							<span class="mr-1">
 								<del>200$</del>
 							</span>
 							<span class="mr-1">
 								100$
 							</span>
 						</p>
 						<p class="lead font-weight-bold">Описание</p>
 						<p><?php print_r(get_idproduct($link)); ?> </p>

 						<form action="" class="d-flex justify-content-left">
 							<input type="number" value="1" aria-label="Search" style="width: 100px;" class="form-control">
 							<button type="submit" class="btn btn-primary btn-md my-0 p">
 								Добавить в корзину <i class="fa fa-shopping-cart ml-1"></i>
 							</button>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</main> 	

<?php
require ("footer.html");
?>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>


</html>
