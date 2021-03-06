<?php

use Illuminate\Support\Facades\Session;

$id = Session::get('id');
$ten = Session::get('ten');
$hinh = Session::get('hinh');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | DECOS</title>
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/bootstrap.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/font-awesome.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/prettyPhoto.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/price-range.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/animate.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/main.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/responsive.css')}}">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="/khach_hang/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/khach_hang/images/ico/apple-touch-icon-144-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/khach_hang/images/ico/apple-touch-icon-114-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/khach_hang/images/ico/apple-touch-icon-72-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" href="/khach_hang/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> 0902252846</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> mynameisminh191998@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/decosoriginal"><i class="fa fa-facebook"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang_chu')}}"><img src="{{asset('khach_hang/images/home/logo2.jpg')}}" width="150" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if ($ten == null) { ?>
									<li><a href="{{URL::to('hien_thi_gio_hang')}}"><i class="fa fa-shopping-cart"></i> Gi??? H??ng</a></li>
									<li><a href="{{ URL::to('/dang_nhap') }}"><i class="fa fa-lock"></i> ????ng Nh???p / ????ng K??</a></li>
								<?php } else { ?>
									<li><a><i class="fa fa-user"></i> Xin Ch??o {{$ten}}</a></li>
									<li><a href="{{URL::to('/')}}"><i class="fa fa-user"></i> T??i Kho???n</a></li>
									<li><a href="{{URL::to('hien_thi_gio_hang')}}"><i class="fa fa-shopping-cart"></i> Gi??? H??ng</a></li>
									<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
									<!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
									<li><a href="{{URL::to('/dang_xuat')}}"><i class="fa fa-lock"></i> ????ng Xu???t</a></li>
									<li><img alt="" src="{{URL::to('uploads/nguoi_dung/'.$hinh)}}" width="40" style="border-radius: 15px;"></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang_chu')}}" class="active">Trang Ch???</a></li>
								<li class="dropdown"><a href="#">S???n Ph???m<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="{{URL::to('/tat_ca_san_pham')}}">T???t C??? S???n Ph???m</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="{{URL::to('/tat_ca_tin_tuc')}}">Tin T???c</i></a></li>
								<!-- <li><a href="404.html">Gi??? H??ng</a></li> -->
								<!-- <li><a href="contact-us.html">Li??n H???</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->

	<section id="slider">
		<!--slider-->
		<div class="container">
			<div class="row">
				<div>
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							@foreach($liet_ke_slide as $slide => $gia_tri)
							<li data-target="#slider-carousel" data-slide-to="{{$gia_tri->ID_SLIDE}}"></li>
							@endforeach
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-9">
									<img src="{{asset('uploads/slide/z3513568049831_8b113a298ba7804e93a61b8ee14e7672.jpg')}}" class="girl img-responsive" alt="" 
									style="border-style: outset; border-color: black; border-width: 10px"/>
								</div>
								<div class="col-sm-3">
									<h1><span>DECOS</span></h1>
									<h2 style="color: #32A966;">Th????ng Hi???u Th???i Trang N??? Cao C???p Do Ng?????i Vi???t S??ng L???p.</h2>
									<p>DECOS l?? m???t th????ng hi???u th???i trang thi???t k??? ???????c c?? tr??? s??? t???i S??i G??n ra ?????i v??o n??m 2018
										v???i mong mu???n t???o ra nh???ng s???n ph???m ch???t l?????ng cao, c?? kh??? n??ng mang ?????n cho c??c t??n ????? th???i trang
										m???t di???n m???o m???i v???i tinh th???n Delicate Choices Of Shopaholic.</p>
									<!-- <button type="button" class="btn btn-default get">S??? H???u Ngay</button> -->
								</div>
							</div>

							@foreach($liet_ke_slide as $slide => $gia_tri)
							<div class="item">
								<div class="col-sm-9">
									<img src="{{asset('uploads/slide/'.$gia_tri->HINH_ANH)}}" class="girl img-responsive" alt=""
									style="border-style: outset; border-color: black; border-width: 10px" />
								</div>
								<div class="col-sm-3">
									<h1><span>DECOS</span></h1>
									<h2 style="color: #32A966;">Th????ng Hi???u Th???i Trang N??? Cao C???p Do Ng?????i Vi???t S??ng L???p.</h2>
									<p>DECOS l?? m???t th????ng hi???u th???i trang thi???t k??? ???????c c?? tr??? s??? t???i S??i G??n ra ?????i v??o n??m 2018
										v???i mong mu???n t???o ra nh???ng s???n ph???m ch???t l?????ng cao, c?? kh??? n??ng mang ?????n cho c??c t??n ????? th???i trang
										m???t di???n m???o m???i v???i tinh th???n Delicate Choices Of Shopaholic.</p>
									<!-- <button type="button" class="btn btn-default get">S??? H???u Ngay</button> -->
								</div>
							</div>
							@endforeach
						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				@yield('noi_dung')
			</div>
		</div>
	</section>

	<footer id="footer">
		<!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="companyinfo">
							<h2><span>Decos</span></h2>
							<p>???N??ng l???c con ng?????i l?? v?? h???n.
								?????ng bao gi??? ngh?? b???n b??? gi???i h???n b???i b???t c??? ??i???u g??.
								T??i tin khi con ng?????i bi???t n??? l???c,
								kh??ng ng???ng h???c h???i v?? t??ch lu??? kinh nghi???m l???n chuy??n m??n,
								b???n s??? t???o ra k??? t??ch???.</p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="address">
							<img src="{{asset('khach_hang/images/home/map.png')}}" alt="" />
							<p>DECOS HCM: 83 Dong Khoi St, District 1
								<br>DECOS HN: 23 Pho Hue St, Hoan Kiem District
								<br>DECOS ??N: 88 Nguyen Van Linh St, Hai Chau District
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>D???ch V???</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T?? V???n</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>B??? S??u T???p</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Fall Winter 2022</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Ch??nh S??ch</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">?????i Tr???</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>V??? Ch??ng T??i</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Th??ng Tin C??ng Ty</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>??u ????i</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="?????a ch??? email c???a b???n" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>????? nh???n nh???ng tin t???c v?? ??u ????i m???i nh???t c???a ch??ng t??i.</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">B???n quy???n ?? 2022 DECOS Inc. Ch??a ????ng k?? b???n quy???n</p>
					<p class="pull-right">Thi???t k??? b???i nh??m 2 Decos Store.</p>
				</div>
			</div>
		</div>

	</footer>
	<!--/Footer-->

	<script src="{{asset('khach_hang/js/jquery.js')}}"></script>
	<script src="{{asset('khach_hang/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('khach_hang/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('khach_hang/js/price-range.js')}}"></script>
	<script src="{{asset('khach_hang/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('khach_hang/js/main.js')}}"></script>
</body>

</html>