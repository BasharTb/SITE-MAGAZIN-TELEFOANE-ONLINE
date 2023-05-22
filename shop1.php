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
							<a href="13.php"><img src="assets/img/iph13.jpg" alt=""></a>
						</div>
						<h3>iPhone 13</h3>
						<p class="product-price"><span>Pret</span> 4120 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="s22.php"><img src="assets/img/s22plus.jpg" alt=""></a>
						</div>
						<h3>Samsung Galaxy S22</h3>
						<p class="product-price"><span>Pret</span> 4109 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="p30.php"><img src="assets/img/p30.jpg" alt=""></a>
						</div>
						<h3>Huawei P30 </h3>
						<p class="product-price"><span>Pret</span> 2030 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="s21plus.php"><img src="assets/img/zfold3.jpg" alt=""></a>
						</div>
						<h3>Samsung Galaxy S21 Plus</h3>
						<p class="product-price"><span>Pret</span> 4220 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="mate.php"><img src="assets/img/mate.jpg" alt=""></a>
						</div>
						<h3>Huawei Mate Pro</h3>
						<p class="product-price"><span>Pret</span> 4335 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="13mini.php"><img src="assets/img/iph13mini.jpg" alt=""></a>
						</div>
						<h3>iPhone 13 Mini</h3>
						<p class="product-price"><span>Pret</span> 3187 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="shop1.php">Prev</a></li>
							<li><a class="active" >1</a></li>
							<li><a href="shop.php">2</a></li>
							<li><a href="shop2.php">3</a></li>
							<li><a href="shop.php">Next</a></li>
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