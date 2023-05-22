<!DOCTYPE html>
<html lang="en">

<?php @include 'config.php';
if(isset($_POST["submit"])){
	$nume=$_POST["nume"];
	$email=$_POST["email"];
	$adresa=$_POST["adresa"];
	$telefon=$_POST["telefon"];

	$query="INSERT INTO checkout VALUES ('','$nume','','$adresa','$telefon')";
	mysqli_query($conn,$query);
	echo"<script>alert('Mesaj trimis cu succes!')</script>";
}

?>
<?php include 'header.php';?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Noi si performante</p>
						<h1>Check Out</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Detalii personale
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="" method="post">
						        		<p><input type="text" placeholder="Name" name="nume"></p>
						        		<p><input type="email" placeholder="Email" name="email"></p>
						        		<p><input type="text" placeholder="Address" name="adresa" ></p>
						        		<p><input type="tel" placeholder="Phone" name="telefon"></p>
						        		<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Spune ceva" name="text"></textarea></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Adresa de livrare
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">
						        	<p></p>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card 
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<p>Detaliile cardului tau aici.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Comanda ta</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Telefon</td>
									<td>Total</td>
								</tr>
								<tr>
									<td>iPhone 11</td>
									<td>2813 RON</td>
								</tr>
								<tr>
									<td>Samsung Galaxy S23</td>
									<td>5200 RON</td>
								</tr>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td>8013 RON</td>
								</tr>
								<tr>
									<td>Transport</td>
									<td>gratuit</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>8013 RON</td>
								</tr>
							</tbody>
						</table>
						<button type="submit"> <a class="boxed-btn">Comanda acum</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	
	<?php include 'footer.php';?>


</body>
</html>