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
							<a href="single-product.php"><img src="assets/img/iph14.jpg" alt=""></a>
						</div>
						<h3>iPhone 14 Pro</h3>
						<p class="product-price"><span>Pret</span> 6500 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="s23.php"><img src="assets/img/s23.jpg" alt=""></a>
						</div>
						<h3>Samsung Galaxy S23</h3>
						<p class="product-price"><span>Pret</span> 5200 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="p50.php"><img src="assets/img/huaweip50.jpg" alt=""></a>
						</div>
						<h3>Huawei P50 Pro </h3>
						<p class="product-price"><span>Pret</span> 3135 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="zfold3.php"><img src="assets/img/zfold3.jpg" alt=""></a>
						</div>
						<h3>Samsung Galaxy ZFold 3</h3>
						<p class="product-price"><span>Pret</span> 5315 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="nova10.php"><img src="assets/img/nova10.jpg" alt=""></a>
						</div>
						<h3>Huawei Nova 10 Pro</h3>
						<p class="product-price"><span>Pret</span> 2185 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="12pro.php"><img src="assets/img/iph12.jpg" alt=""></a>
						</div>
						<h3>iPhone 12 Pro</h3>
						<p class="product-price"><span>Pret</span> 4125 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="shop1.php">Prev</a></li>
							<li><a href="shop1.php">1</a></li>
							<li><a class="active">2</a></li>
							<li><a href="shop2.php">3</a></li>
							<li><a href="shop2.php">Next</a></li>
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