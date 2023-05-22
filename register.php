<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Bine ai venit!</p>
						<h1>Logheaza-te</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
    <?php if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"]; 
}
?>

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Inregistreaza=te</h2>
						
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="post" action='connect.php'>
							<p><div class="form-title">
								<h2>Name:</h2><input type="text" placeholder="Name" name="name" id="name">
                             </p>

								<h2>E-mail:</h2><input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<h2>Parola:</h2><input type="password" placeholder="Parola" name="parola" id="parola">
</div>
                        <button type="submit" class="cart-btn btn-lg" value="Login">Inregistreaza-te</button>
                            <a href="login.php" class="cart-btn btn-lg" value="Nu am cont">Am deja cont</button></a>
						</form>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<!-- end contact form -->

	


	<?php include 'footer.php';?>

	
</body>
</html>