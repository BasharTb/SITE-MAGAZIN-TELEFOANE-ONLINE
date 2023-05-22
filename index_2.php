<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>BMT STORE
	</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<?php include 'header.php';?>

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Te-ai abonat cu succes,<?php echo $_POST['mail'];?></p>
							<h1></h1>
							<div class="hero-btns">
								<a href="shop.php" class="boxed-btn">Telefoane</a>
								<a href="contact.php" class="bordered-btn">Contact</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Transport gratuit</h3>
							<p>Pentru comenzi peste 1500 RON</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Suport</h3>
							<p>Chat online indiferent de ora</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Nu esti multumit?</h3>
							<p>Primesti banii inapoi in 3 zile!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Produsele</span> noastre</h3>
						<p>Va oferim o gama larga si variata de telefoane pentru toate buzunarele</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/iph14.jpg" alt=""></a>
						</div>
						<h3>iPhone 14 Pro</h3>
						<p class="product-price"><span>Pret</span> 4500 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/s23.jpg" alt=""></a>
						</div>
						<h3>Samsung Galaxy S23</h3>
						<p class="product-price"><span>Pret</span> 4200 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/oneplus10.jpg" alt=""></a>
						</div>
						<h3>One Plus 10 Pro</h3>
						<p class="product-price"><span>Pret</span> 3589 RON </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> reducere
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/zflip.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Reducerea</span> lunii</h3>
                    <h4>Samsung Galaxy ZFlip </h4>
                    <div class="text">Comanda acum cel mai performant telefon din gama Samsung la un pret foarte mic. Profita chiar acum de oferta!</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2023/5/30"><div class="counter-column"><div class="inner"><span class="count">20</span>Zile</div></div> <div class="counter-column"><div class="inner"><span class="count">16</span>Ore</div></div>  <div class="counter-column"><div class="inner"><span class="count">44</span>Min</div></div>  <div class="counter-column"><div class="inner"><span class="count">23</span>Sec</div></div></div></div>
                	<a href="cart.php" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Adauga in cos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/userr.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Sara Popescu<span>Studenta</span></h3>
								<p class="testimonial-body">
									" Am primit un telefon de calitate la un pret foarte mic, recomand cu drag "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/user2.jpeg" alt="">
							</div>
							<div class="client-meta">
								<h3>Daniel Nae <span>Afacerist</span></h3>
								<p class="testimonial-body">
									" Cand depinzi de telefon, ai nevoie de performanta de top. Recomand BMT Store daca vrei sa alegi cea mai buna varianta de smartphone pentru tine "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/user3.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Iosif Alunel <span>Influencer</span></h3>
								<p class="testimonial-body">
									" Meseria mea presupune sa imi folosesc telefonul foarte des, iar BMT Store nu m-a dezamagit niciodata.  "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">In top din 2019</p>
						<h2>We are <span class="orange-text">BMT STORE</span></h2>
						<p>BMT STORE este alaturi de clientii sai de 4 ani, de cand a inaugurat pe piata din Romania un nou concept: o retea de magazine de mare suprafata, care sa ofere cea mai variata gama de produse,
							 sa reflecte pasiunea pentru tehnologie si dorinta de a pune la dispozitia clientilor cele mai noi device-uri.</p>
						<p> Printr-o selectie relevanta de branduri, alaturi de servicii de calitate, BMT STORE aduce tehnologia mai aproape de consumatori, facand-o mai accesibila devenind o parte fireasca a vietii acestora.</p>
						<a href="about.php" class="boxed-btn mt-4">Afla mai mult</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>Reducerile de vara<br> sunt aici cu un mare <span class="orange-text">discount...</span></h3>
            <div class="sale-percent"><span>Reducere <br> pana la </span>50% <span></span></div>
            <a href="shop.php" class="cart-btn btn-lg">Cumpara acum</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Stiri</span> noi</h3>
						<p>Afla ultimele noutati despre tehnologie cu un singur click!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.php"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.php">Ce joburi vor fi cel mai afectate de ChatGPT: vezi dacă ești pe listă</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 Martie, 2023</span>
							</p>
							<p class="excerpt">Pe 30 noiembrie 2022, OpenAI a inaugurat o nouă eră a inteligenței artificiale (AI) prin introducerea ChatGPT în întreaga lume.</p>
							<a href="single-news.php" class="read-more-btn">Citeste mai mult <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<div class="latest-news-bg news-bg-2"></div>
					   
						<div class="news-text-box">
							<h3><a href="single-news.php">Microsoft joacă murdar: cum pune „bețe în roate” Chrome, pe Windows</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 2 Mai, 2023</span>
							</p>
							<p class="excerpt">Cel mai recent update de Windows pare să fi blocat funcția potrivit căreia Chrome putea fi configurat ușor, printr-un singur click direct în browser.</p>
							<a href="single-news.php" class="read-more-btn">Citeste mai mult <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="single-news.php"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.php">Paginile oficiale de pe Facebook, o înșelătorie: ce au făcut hackerii</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 6 Mai, 2023</span>
							</p>
							<p class="excerpt">Bifa albastră de pe Facebook nu este o garanție. Hackerii atacă paginile oficiale.</p>
							<a href="single-news.php" class="read-more-btn">Citeste mai mult <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.php" class="boxed-btn">Mai multe stiri</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->


<?php include 'footer.php';?>

</body>
</php>