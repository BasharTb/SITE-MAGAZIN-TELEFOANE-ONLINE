<!DOCTYPE html>
<html lang="en">
<?php require 'config.php';?>

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


	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Login</h2>
						
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST"  method="post" action='login2.php'>
							<p><div class="form-title">
								<h2>Nume:</h2><input type="text" placeholder="Name" name="name" id="name">
                             </p>

								<!--E-mail:<input type="email" placeholder="Email" name="email" id="email">-->
							</p>
							<p>
								<h2>Parola:</h2><input type="password" placeholder="Parola" name="parola" id="parola">
</div>
                            <button type="submit" class="cart-btn btn-lg" value="Login">Logheaza-te</button>
                            <a href="register.php" class="cart-btn btn-lg" value="Login">Nu am cont</button></a>
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