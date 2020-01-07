<?php
$title = "Checkout";
$addCSS = "../CSS/check_out_3.css";
include_once "../Components/head.php";
include_once "../Components/navbar.php";
// include_once "../Components/header.php";
?>
<div class="checkout-jumbo">
	<div class="jumbotron text-center mt-5">
	<h1 class="display-3 font-weight-bold">Thank You!</h1>
	<p class="lead"><strong>Please check your email</strong> for your receipt!</p>
	<hr>
	<button class="btn btn-outline-danger m-3" onclick="location.href='shop.php'" type="button">Continue shopping</button>
	</div>

	<div class="container h-50">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center font-weight-bold mb-3">YOUR FUTURE STARTS NOW!</h2>
				<img src="../img/hand-1571851.jpg" alt="">
			</div>
		</div>
	</div>
</div>
	
<?php
include_once "../Components/footer.php";
?>