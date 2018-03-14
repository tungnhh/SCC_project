<!DOCTYPE html>
<html>
<head>
	<!--  App Title  -->
	<title>Demo</title>
	<!--  App Description  -->
	
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/ajaxchimp.js"></script>
	<script type="text/javascript" src="js/scrollTo.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<script type="text/javascript" src="js/nicescroll.js"></script>
	<!--<script type="text/javascript" src="js/main.js"></script>-->
	<script>
		$(function() {
	$.scrollify({
		section:".about"
	});

	$(".scroll,.scroll-btn").click(function(e) {
		e.preventDefault();

		$.scrollify.next();
	});

	
});
	});

	</script>
</head>
<body>
	
	<!--  Header Section  -->
	<header>
		<div class="container">
			<div class="logo-name">
				<a href="index.html"><h1 style="margin: 20px;">SSC</h1></a>
			</div>

			
			<nav class="pull-left">
				<ul class="list-unstyled">
					<li><a href="#about">About</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="signup.html">Sign up</a></li>
				</ul>
			</nav>

			<div class="social pull-right">
				<ul class="list-unstyled">
					<li class="animated wow fadeInRight" data-wow-delay=".2s"><a href="#"><img src="images/facebook.png" alt="" title="https://www.facebook.com/CTTeamGroup"></a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".1s"><a href="#"><img src="images/twitter.png" alt="" title=""></a></li>
					<li class="animated wow fadeInRight" data-wow-delay="0s"><a href="#"><img src="images/google.png" alt="" title=""></a></li>
				</ul>
			</div>
			<span class="burger_icon">menu</span>
		</div>
	</header>
	<!--  End Header Section  -->






	<!--  Hero Section  -->
	<section class="hero" id="hero">
		<div class="container">
			<div class="caption">
				<h1 class="text-uppercase  animated wow fadeInLeft">Hãy tương tác</h1>
				<p class="text-lowercase  animated wow fadeInLeft"> Đau đầu về việc copy bài của học viên, hãy đến với chúng tôi.</p>

				<a href="#" class="app_store_btn text-uppercase animated wow fadeInLeft">
					<i class="appbar.social.facebook.variant"></i>
					<span> Hãy tương tác</span>
				</a>
			</div>			
		</div>
	</section>
	<!--  End Hero Section  -->






	






	<!--  About Section  -->
	<section class="about" id="about" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center animated wow fadeInLeft">
					<div class="iphone">
						<img src="images/iphone.png" alt="" titl="">
					</div>
				</div>
				<div class="col-md-6 animated wow fadeInRight">
					<div class="features_list">
						<h1 class="text-uppercase">Chi tiết về team.</h1>
						<p>Chúng tôi thành lập muốn giúp đỡ các giáo viên dạy lập trình. </p>
						<ul class="list-unstyled">
							<li class="camera_icon">
								<span>Phát hiện ra sự giống nhau.</span>
							</li>
							<li class="video_icon">
								<span>Giúp đỡ mọi giáo viên.</span>
							</li>
							<li class="eye_icon">
								<span>Đánh giá tốt nhất.</span>
							</li>
							<li class="pic_icon">
								<span>Báo cáo rõ ràng.</span>
							</li>
							<li class="loc_icon">
								<span>Hoạt động  mọi lúc mọi nơi.</span>
							</li>
						</ul>
					</div>					
				</div>
			</div>
		</div>

		<div class="about_video show_video">
			<a href="" class="close_video"></a>
		</div>
	</section>
	<!--  End About Section  -->






	<!--  App Features Section  -->
	<section class="app_features" id="app_features" >
		<div class="container">
			
			<div class="row text-center">
<div class="row"> <h1 class="text-uppercase">Làm việc chuyên nghiệp</h1> </div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">

					<img src="images/f_icon1.png" alt="" title="">
					<h1 class="text-uppercase"> Lưu trữ </h1>
					<p class="text-lowercase">Dễ dàng xem lại các báo cáo</p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
					<img src="images/f_icon2.png" alt="" title="">
					<h1 class="text-uppercase"> Phân tích </h1>
					<p class="text-lowercase"> phân tích dữ liệu và đưa ra báo cáo. </p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
					<img src="images/f_icon3.png" alt="" title="">
					<h1 class="text-uppercase"> 24/7 </h1>
					<p class="text-lowercase">Đảm bảo trả kết quả và hỗ trợ kịp thời</p>
				</div>
				

		</div>
	</section>
	<!--  And App Features Section  -->

	<!--  Email Subscription Section  -->
	<section class="sub_box">
		<p class="cta_text animated wow fadeInDown"> Liên hệ với chúng tôi</p>
		<form action="#" metohd="post" class="animated wow fadeIn" data-wow-duration="2s" id="submit_form">
			<input type="email" id="mc-email" placeholder="Enter your email"/>
			<button type="submit" id="mc_submit">
				<i class="icon"></i>
			</button>
		</form>
		<div class="message" id="error_msg"> Vui lòng nhập chính xác email.</div>
		<div class="message" id="success_msg">Thank You For Your Subscription.</div>
	</section>
	<!--  End Email Subscription Section  -->



</body>
</html>