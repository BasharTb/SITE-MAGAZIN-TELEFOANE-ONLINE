<!DOCTYPE php>
<php lang="en">
<?php include 'header.php';?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Noi si performante</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Toate</li>
                            <li data-filter=".strawberry">iPhone</li>
                            <li data-filter=".berry">Samsung</li>
                            <li data-filter=".lemon">Huawei</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="11.php"><img src="assets/img/11.jpg" alt=""></a>
						</div>
						<h3>iPhone 11</h3>
						<p class="product-price"><span>Pret</span> 2813 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="s233.php"><img src="assets/img/s233.jpg" alt=""></a>
						</div>
						<h3>Samsung Galaxy S23 Plus</h3>
						<p class="product-price"><span>Pret</span> 3692 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="x8.php"><img src="assets/img/x8.jpg" alt=""></a>
						</div>
						<h3>Huawei X8a </h3>
						<p class="product-price"><span>Pret</span> 1085 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="s20.php"><img src="assets/img/s20.jpg" alt=""></a>
						</div>
						<h3>Samsung Galaxy S20 Ultra</h3>
						<p class="product-price"><span>Pret</span> 3341 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="honor.php"><img src="assets/img/honor.jpg" alt=""></a>
						</div>
						<h3>Huawei Honor Magic</h3>
						<p class="product-price"><span>Pret</span> 1895 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="xr.php"><img src="assets/img/xs.jpg" alt=""></a>
						</div>
						<h3>iPhone XR</h3>
						<p class="product-price"><span>Pret</span> 2502 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="shop.php">Prev</a></li>
							<li><a href="shop1.php" >1</a></li>
							<li><a href="shop.php">2</a></li>
							<li><a class="active" >3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->

	

	<?php include 'footer.php';?>


</body>
</php>