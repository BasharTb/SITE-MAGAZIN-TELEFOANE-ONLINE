<html>

<?php include 'header.php';?>

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
                    <?php $name = $_POST['name'];
     $email =$_POST['email'];
     $parola = $_POST['parola'];

     // Database connection
	$conn = new mysqli('localhost','root','','date');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into logg(name, email, parola) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $parola);
		$execval = $stmt->execute();
		echo $execval;
		
		$stmt->close();
		$conn->close();
	}
  
?>
         <h1>Inregistrare facuta cu succes!</h>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

<?php $name = $_POST['name'];
     $email =$_POST['email'];
     $parola = $_POST['parola'];

     // Database connection
	$conn = new mysqli('localhost','root','','date');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into logg(name, email, parola) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $parola);
		$execval = $stmt->execute();
		echo $execval;
		echo "Inregistrare facuta cu succes!";
		$stmt->close();
		$conn->close();
	}
  
?>

<?php include 'footer.php';?>
</html>