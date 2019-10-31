<footer class="page-footer text-center font-small mt-4 wow fadeIn">
		<div class="pt-4">
			<a href="#" role="button" class="btn btn-outline-white">Shop <i class="fa fa-graduation-cap ml-2"></i></a>

			<a href="#" role="button" class="btn btn-outline-white">Internet <i class="fa fa-graduation-cap ml-2"></i></a>
		</div>

		<hr class="my-4">

		<div class="pb-4">
			<a href="#">
				<i class="fab fa-facebook-f mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-twitter mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-youtube mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-google-plus mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-dribbble mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-pinterest mr-3"></i>
			</a>
			<a href="#">
				<i class="fab fa-github mr-3"></i>
			</a>
		</div>

		<div class="footer-copyright py-3">
			Net shop
		</div>
</footer>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script>
  	$(document).ready(function() {
  		$(".add-to-cart").click(function() {
  			var id = $(this).attr("data-id");
  			$.post("shop-page.php"+id, {}, function(data) {
  				$("#cart-count").html(data);
  			});
  			return false;
  		});
  	});
  </script>

</body>
</html>

