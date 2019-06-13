<?php 
	include_once('shop_admin/database.php');
	include_once('shop_admin/function_category.php'); 
	include_once('shop_admin/function_product.php'); 
	include_once('shop_admin/function_user.php');
	$categories = get_categories();
	$products = get_product();
	$products2 = get_product2();
	$products3 = get_product3();
	$products4 = get_product4();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Fashion Club</title>
	<link rel="stylesheet" href="css/style.css" >
	<script src="js/detail-shop.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class=" logo_home">
				<a href="home.html">
					<img src="image/logo.png" alt=" error image " />
					<h1>
						FASHION <span>CLUB</span>
					</h1>
				</a>
			</div>
			<div class="logo_phone">
					<span class="material-icons" style="font-size: 17px">phone</span>
					+18045403380
			</div>
		</div>
	</div>
	<div class="header_menu" >
		<div class="container">
			<div class="menu"> 			
				<ul>
					<li class="menu-li"><a href="home.php">Home</a></li>
					<li class="menu-li"><a href="">Clothing <i class="fa fa-caret-down"></i></a>
						<ul class="submenu">
							<li>
								<div class="sub-submenu">
									<ul>
										<li><i class="fa fa-angle-right"></i> Women's Clothing</li>
										<li><i class="fa fa-angle-right"></i> Men's Clothing</li>
										<li><i class="fa fa-angle-right"></i> Kid's Wear</li>
										<li><i class="fa fa-angle-right"></i> Party Wear</li>
									</ul>
								</div>
								<div class="sub-submenu2">
									<ul>
										<li><i class="fa fa-angle-right"></i> Casual</li>
										<li><i class="fa fa-angle-right"></i> Night Wear</li>
										<li><i class="fa fa-angle-right"></i> Formals</li>
										<li><i class="fa fa-angle-right"></i> Inner Wear</li>
									</ul>
								</div>
								<div class="sub-img">
									<img src="image/menu1.jpg" alt="">
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-li"><a href="">Personcare <i class="fa fa-caret-down"></i> </a>
						<ul class="submenu">
							<li>
								<div class="sub-submenu">
									<ul>
										<li><i class="fa fa-angle-right"></i> Jewellery</li>
										<li><i class="fa fa-angle-right"></i> Watches</li>
										<li><i class="fa fa-angle-right"></i> Cosmetics</li>
										<li><i class="fa fa-angle-right"></i> DEO & Perfumes</li>
									</ul>
								</div>
								<div class="sub-submenu2">
									<ul>
										<li><i class="fa fa-angle-right"></i> Hair Care</li>
										<li><i class="fa fa-angle-right"></i> Shoes</li>
										<li><i class="fa fa-angle-right"></i> Handbags</li>
										<li><i class="fa fa-angle-right"></i> Skin Care</li>
									</ul>
								</div>
								<div class="sub-img">
									<img src="image/menu2.jpg" alt="">
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-li"><a href="#">About</a></li>
					<li class="menu-li"><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="search" >
				<form action="#" method="POST">
					<input type="text" placeholder="Search for a product">
					<button type="submit" >
						<i class="material-icons" style="font-size: 17px; color: white ; "  >search</i>
					</button>
				</form>
			</div>
			<div class="logo_cart">
				<button type="submit" >
					<i class="material-icons" style="font-size:35px">shopping_cart</i>
				</button>
			</div>
		</div>
	</div>
	<div class="banner-area banner-res-large ptb-35">
		<div class="container1">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="single-banner">
						<div class="banner-img">
							<a href="#"><img src="image/1.png" alt="banner" /></a>
						</div>
						<div class="banner-text">
							<h4>Free shipping item</h4>
							<p>For all orders over $500</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="single-banner">
						<div class="banner-img">
							<a href="#"><img src="image/2.png" alt="banner" /></a>
						</div>
						<div class="banner-text">
							<h4>Money back guarantee</h4>
							<p>100% money back guarante</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
					<div class="single-banner">
						<div class="banner-img">
							<a href="#"><img src="image/3.png" alt="banner" /></a>
						</div>
						<div class="banner-text">
							<h4>Cash on delivery</h4>
							<p>Lorem ipsum dolor consecte</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="single-banner mrg-none-xs">
						<div class="banner-img">
							<a href="#"><img src="image/4.png" alt="banner" /></a>
						</div>
						<div class="banner-text">
							<h4>Help & Support</h4>
							<p>Call us : +18045403380</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="banner" >
		<div class="container">
			<h2>
				WELCOME TO 
			</h2>
			<h3><SPAN> FASHION </SPAN> CLUB</h3>
			<p>Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique.</p>
			<a href="#"> Read more </a>
		</div>
	</div>
	<div class="sale">
		<div class="container2">
			<div class="ao" >
				<h2>SALE <br>
					upto <span style="font-weight:bold ; font-size: 60px;" >75%</span>
				</h2>
			</div>
			<div class="giay">
				<h2>SALE <br>
					upto <span style="font-weight:bold ; font-size: 35px;" >55%</span>
				</h2>
			</div>
			<div class="dong-ho">
				<h2>SALE <br>
					upto <span style="font-weight:bold ; font-size: 35px;" >50%</span>
				</h2>
			</div>
			<div class="giay-chuyen">
				<h2>SALE <br>
					upto <span style="font-weight:bold ; font-size: 35px;" >65%</span>
				</h2>
			</div>
			<div class="tui">
				<h2>SALE <br>
					upto <span style="font-weight:bold ; font-size: 35px;" >60%</span>
				</h2>
			</div>
		</div>
	</div>
	<div class="detail-shop" >
			<h2 style="margin-top: 20px;text-align: center;">TOP PRODUCT</h2>
			<div class="btn-danhsach">
					<button onclick="swapContent('operation1')">MEN'S</button>
					<button onclick="swapContent('operation2')">WOMEN</button>
					<button onclick="swapContent('operation3')">HANDBAGS</button>
					<button onclick="swapContent('operation4')">COSMETIC</button>
			</div>
			<!-- main resite -->
			<div id="main_place">
					<div id="operation1">
							<div class="container0">
							<?php foreach ($products as $key => $value): ?>
									<div class="abc">
											<div class="khoi">
													<div class="anh"> 
															<a href="inf-product.php"><img src="shop_admin/img/product/<?php echo $value['image'] ?>"></a> 
															<h2> <i class="fa fa-shopping-cart"></i> Add to cart</h2>
													</div>
													<div class="a">
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star gray-star"></i>
															<i class="fa fa-star gray-star"></i>
													</div>
											</div>
											<div class="ten">
													<p><?php echo $value['productname'] ?></p> 
													<p style="margin-top: 10px;font-weight: 700;"><?php echo $value['price']; ?></p>                   
											</div>
									</div>
									<?php endforeach; ?>
							</div>
					</div>
			</div>
			<!-- change -->
			<div id="complete" style="display:none;">
					<div id="operation1">
							<div class="container0">
							<?php foreach ($products as $key => $value): ?>
									<div class="abc">
											<div class="khoi">
													<div class="anh"> 
															<a href="inf-product.html"><img src="shop_admin/img/product/<?php echo $value['image'] ?>"></a> 
															<h2> <i class="fa fa-shopping-cart"></i> Add to cart</h2>
													</div>
													<div class="a">
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star gray-star"></i>
															<i class="fa fa-star gray-star"></i>
													</div>
											</div>
											<div class="ten">
													<p><?php echo $value['productname'] ?></p> 
													<p style="margin-top: 10px;font-weight: 700;"><?php echo $value['price']; ?></p>                   
											</div>
									</div>
									<?php endforeach; ?>
							</div>
					</div>
					<div id="operation2">
							<div class="container0">
							<?php foreach ($products2 as $key => $value): ?>
									<div class="abc">
											<div class="khoi">
													<div class="anh"> 
															<a href="inf-product.php"> <img src="shop_admin/img/product/<?php echo $value['image']; ?>"> </a> 
															<h2> <i class="fa fa-shopping-cart"></i> Add to cart</h2>
													</div>
													<div class="a">
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star gray-star"></i>
															<i class="fa fa-star gray-star"></i>
													</div>
											</div>
											<div class="ten">
													<p><?php echo $value['productname'] ?></p> 
													<p style="margin-top: 10px;font-weight: 700;"><?php echo $value['price']; ?></p>                   
											</div>
									</div>
									<?php endforeach; ?> 
							</div>
					</div>

					<div id="operation3">
							 <div class="container0">
							 <?php foreach ($products3 as $key => $value): ?>
									<div class="abc">
											<div class="khoi">
													<div class="anh"> 
															<a href="inf-product.php"> <img src="shop_admin/img/product/<?php echo $value['image']; ?>"> </a> 
															<h2> <i class="fa fa-shopping-cart"></i> Add to cart</h2>
													</div>
													<div class="a">
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star gray-star"></i>
															<i class="fa fa-star gray-star"></i>
													</div>
											</div>
											<div class="ten">
													<p><?php echo $value['productname']; ?></p> 
													<p style="margin-top: 10px;font-weight: 700;"><?php echo $value['price']; ?></p>                   
											</div>
									</div>
								<?php endforeach; ?>   
							</div>
					</div>
					<div id="operation4">
							<div class="container0">
							 	<?php foreach ($products4 as $key => $value): ?>
									<div class="abc">
											<div class="khoi">
													<div class="anh"> 
															<a href="inf-product.php"><img src="shop_admin/img/product/<?php echo $value['image']; ?>"> </a>
															<h2> <i class="fa fa-shopping-cart"></i> Add to cart</h2>
													</div>
													<div class="a">
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star yellow-star"></i>
															<i class="fa fa-star gray-star"></i>
															<i class="fa fa-star gray-star"></i>
													</div>
											</div>
											<div class="ten">
													<p><?php echo $value['productname']; ?></p> 
													<p style="margin-top: 10px;font-weight: 700;"><?php echo $value['price']; ?></p>                   
											</div>
									</div>
									<?php endforeach; ?>  
							</div>
					</div>
			</div>
	</div>
	<div class="service">
		<div class="container3" >
			<div class="inf-service" >
				<h3>OUR SERVICE</h3>
				<div class="infor" >
					<div class="icon">
						<i class="material-icons">account_circle</i>
					</div>
					<div class="letter">
						<h4>24/7 Online free support</h4>
						<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
					</div>
				</div>
				<div class="infor" >
					<div class="icon">
						<i class="material-icons">directions_bus</i>
					</div>
					<div class="letter">
						<h4>Free shipping</h4>
						<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
					</div>
				</div>
				<div class="infor" >
					<div class="icon">
						<i class="material-icons">money</i>
					</div>
					<div class="letter">
						<h4>100% Money back</h4>
						<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
					</div>
				</div>
			</div>
<!-- khach hang  -->
			<div class="customer">
				<div class="customer-box">
					<div class="slideshow-container">
						<div class="mySlides fade">
							<img src="image/andrew.png" style="margin-top:5px;">
							<p class="text">Nam elementum magna id nibh pretium suscipit varius tortor. Phasellus in lorem sed massa consectetur fermentum. Praesent pellentesque sapien euismod.<br>
							<span style="font-weight:bold">#Andrew</span>
							</p>
						</div>
						
						<div class="mySlides fade">
							<img src="image/lucy.png" style="margin-top:5px;" >
							<p class="text">Morbi semper, risus dignissim sagittis iaculis, diam est ornare neque, accumsan risus tortor at est. Vivamus auctor quis lacus sed interdum celerisque.<br>
							<span style="font-weight:bold">#Lucy</span>
							</p>
						</div>
						
						<div class="mySlides fade">
							<img src="image/martina.png" style="margin-top:5px;">
							<p class="text">Fusce non cursus quam, in hendrerit sem. Nam nunc dui, venenatis vitae porta sed, sagittis id nisl. Pellentesque celerisque eget ullamcorper vehicula.<br>
							<span style="font-weight:bold">#Martina</span>
							</p>
						</div>
					</div>
					<div style="text-align:center; margin-top: 130px;margin-left: 25px;">
						<span class="dot" onclick="currentSlide(0)"></span> 
						<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(2)"></span> 
					</div>  						
				</div>
			</div>
		</div>
	</div>
	<div class="wraper">
		<h1 style="font-size: 45px; font-weight: 100;">TOP BRAND</h1>
        <div class="anhnho">
            <ul>
                <li style="background-image: url(image/allen.png);"></li>
                <li style="background-image: url(image/levi.png); padding-bottom: 22px;"></li>
                <li style="background-image: url(image/ler.png);"></li>
                <li style="background-image: url(image/park.jpg); padding-bottom: 10px;"></li>
                <li style="background-image: url(image/pepe.png); padding-bottom: 10px;"></li>
            </ul>
      	</div>
	</div>
		<div class="new">
			<div class="container4">
				<div class="chu">
					<h2>Newsletter</h2>
					<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
				</div>
				<div class="subcribe">
					<form action="#" method="POST">
						<input type="email" placeholder="Email" >
						<button type="submit">Subcribe</button>
					</form>
				</div>
			</div>
		</div>
		<div class="contact">
			<div class="container5">
				<div class="address">
					<a href="home.html">
						<img src="image/logo.png" alt=" error image " />
						<h1>
							FASHION <span>CLUB</span>
						</h1>
					</a>
					<ul>
						<li>1234k Avenue, 4th block,<br><br>New York City.</li>
						<li><br><a href="#">info@example.com</a></li>
					</ul>
					<div class="cont-logo">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="inf-lienhe">
					<h1>Information</h1>
					<ul>
						<li><br><a href="#">Contact us</a></li>
						<li><br><a href="#">Web Icons</a></li>
						<li><br><a href="#">Typhography</a></li>
						<li><br><a href="#">FAQ's</a></li>
					</ul>
				</div>
				<div class="inf-shop">
					<h1>Shop</h1>
					<ul>
						<li><br><a href="#">Jewellery</a></li>
						<li><br><a href="#">Cosmetics</a></li>
						<li><br><a href="#">Shoes</a></li>
						<li><br><a href="#">Deos</a></li>
					</ul>
				</div>
				<div class="inf-taikhoan">
					<h1>Account</h1>
					<ul>
						<li><br><a href="dangnhap.php">Login</a></li>
						<li><br><a href="dangky.php">Register</a></li>
						<li><br><a href="#">Recommended</a></li>
						<li><br><a href="#">Payments</a></li>
					</ul>
				</div>
			</div>
			<p style="text-align:center">&copy; 2016 Fashion Club . All rights reserved | Design by <a href="#">W3layouts</a>.</p>
		</div>
</body>
<script>
	//hieu ung chuyen silide tai khach hang
	//khai báo biến slideIndex đại diện cho slide hiện tại
	var slideIndex;
	// KHai bào hàm hiển thị slide
	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
		   slides[i].style.display = "none";  
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		} 
		slides[slideIndex].style.display = "block";  
		dots[slideIndex].className += " active";
		//chuyển đến slide tiếp theo
		slideIndex++;
		//nếu đang ở slide cuối cùng thì chuyển về slide đầu
		if (slideIndex > slides.length - 1) {
		  slideIndex = 0
		}    
		//tự động chuyển đổi slide sau 5s
		setTimeout(showSlides, 5000);
	}
	//mặc định hiển thị slide đầu tiên 
	showSlides(slideIndex = 0);
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}
</script>
</html>
