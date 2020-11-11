<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/fontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/fontend/css/responsive.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/fontend/css/font.css" type="text/css')}}"/>
    <link href="{{asset('public/fontend/css/font-awesome.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('public/fontend/css/morris.css')}}" type="text/css"/>
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{{'public/fontend/images/ico/favicon.ico'}}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{'public/fontend/images/ico/apple-touch-icon-144-precomposed.png'}}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{'public/fontend/images/ico/apple-touch-icon-114-precomposed.png'}}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{'public/fontend/images/ico/apple-touch-icon-72-precomposed.png'}}}">
    <link rel="apple-touch-icon-precomposed" href="{{{'public/fontend/images/ico/apple-touch-icon-57-precomposed.png'}}}">
	<link rel="stylesheet" href="{{asset('public/fontend/css/MapBox.css')}}">
	<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
						<link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
						<script src="https://ekmap.github.io/ekmap-client/dist/mapboxgl/ekmap-mapboxgl.js"></script>
						<script src="https://ekmap.github.io/ekmap-client/examples/js/common.js"></script>
						
</head><!--/head-->
<style>
    #divMap{
        width:100%;
        height:250px;
    }
      
        .marker {
            background-image: url('https://docs.mapbox.com/help/demos/custom-markers-gl-js/mapbox-icon.png');
            background-size: cover;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }
        
        .mapboxgl-popup {
            max-width: 200px;
        }
        
        .mapboxgl-popup-content {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }


		/*  */
		.dataTable {
            overflow: auto;
            height: calc(100vh - 20px);
            background-color: #f2efe9;
        }
        
        .filter-ctrl {
            position: inherit;
            top: 10px;
            margin-left: 42%;
            z-index: 1;
        }
        
        td {
            padding: 4px;
        }
        
        .filter-ctrl input[type='text'] {
            width: 100%;
            border: 0;
            background-color: #fff;
            margin: 0;
            padding: 10px;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            width: 250px;
        }
        
        .rounded-rect {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 50px -25px black;
        }
        
        .flex-center {
            position: absolute;
            display: flex;
            justify-content: center;
        }
        
        .flex-center.left {
            left: 10px;
        }
        
        .flex-center.right {
            right: 0px;
        }
        
        .sidebar-content {
            position: absolute;
            margin-top: 10px;
            width: 100%;
            height: 98%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 32px;
            color: gray;
        }
        
        .sidbear-toggle {
            position: absolute;
            width: 1.3em;
            height: 1.3em;
            overflow: visible;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .sidbear-toggle.left {
            right: -1.5em;
        }
        
        .sidbear-toggle.right {
            left: -1.5em;
        }
        
        .sidbear-toggle:hover {
            color: #0aa1cf;
            cursor: pointer;
        }
        
        .sidebar {
            transition: transform 1s;
            z-index: 1;
            width: 500px;
            height: 100%;
        }
        
        .left.collapsed {
            transform: translateX(-295px);
            left: -205px;
            ;
        }
        
        .right.collapsed {
            transform: translateX(295px);
        }
        
        .kt-portlet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-shadow: 0 0 13px 0 rgba(82, 63, 105, .05);
            box-shadow: 0 0 13px 0 rgba(82, 63, 105, .05);
            background-color: #fff;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        
        .kt-portlet .kt-portlet__body {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: -15px;
        }
        
        .kt-portlet .kt-portlet__body.kt-portlet__body--fit {
            padding: 0;
        }
        
        .textTitle {
            text-align: center;
            font-size: 20px;
            color: #646c9a;
            font-weight: 600;
            margin-bottom: 0px;
            margin-top: 40px;
        }
        
        .kt-widget19__text-appInfo {
            font-size: 13px;
            font-weight: 300;
            font-family: Poppins;
        }
        
        .btn-cont {
            width: 83%;
            color: #fff !important;
        }
        
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .65rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        }
        
        .btn-lg {
            padding: 1.15rem 1.65rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem;
            text-decoration: unset;
        }
        
        .kt-widget19__wrapper {
            background-color: #fff;
            border-radius: 4px;
            padding: 1rem;
        }
        
        .item-container {
            border: 1px solid #ebedf2;
            padding: 10px 15px;
        }
        
        .item-image {
            margin-right: .5rem;
            border-radius: 4px;
            cursor: pointer;
            -o-object-fit: cover;
            object-fit: cover;
            height: 100%;
            width: 12rem;
        }
        
        .item-name a {
            font-size: 2.1rem;
            font-weight: 400;
            color: #595d6e;
            text-decoration: unset;
        }
        
        .form-group {
            display: flex;
        }
        
        .col {
            width: 100%;
        }
        
        .img_select {
            padding-right: 10px;
        }
        
        .item-image-container {
            width: 40%;
        }
        
        .kt-widget19 {
            height: calc(100vh - 40px);
        }
        
        .scrollbar {
            overflow-y: auto;
        }
        
        #style-3::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }
        
        #style-3::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        }
        
        #style-3::-webkit-scrollbar-thumb {
            background-color: #9b9dad;
        }
        
        .col-form-label {
            font-size: 1.1rem;
            font-weight: 500;
            color: #595d6e;
        }
        
        .font-des {
            font-size: 13px;
            font-weight: 300;
            color: #646c9a;
            font-family: Poppins;
        }
      .slide1{
          width: 90%;
          height: 200px;
          margin:center;
      }
</style>

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{URL::to('public/fontend/images/logo1.png')}}"  /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    $shipping_id = Session::get('shipping_id');
                                    if($customer_id != NULL && $shipping_id == NULL){
                                ?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php
                                    }elseif($customer_id != NULL && $shipping_id != NULL){
                                ?>
								<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php
                                    }else{
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <?php
                                    }
                                ?>
                                
								<li><a href="{{URL::to('/show-cart')}}"></i> Giỏ hàng</a></li>
								<?php
                                    $customer_id =Session::get('customer_id');
                                    if($customer_id!=NULL){
                                ?>
                                <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a>
                                </li>
                                <?php
                                    }else{
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a>
                                </li>
                                <?php
                                    }
                                ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
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
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li><a href="{{URL::to('/show-cart')}}"></i> Giỏ hàng</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form action="{{URL::to('/tim-kiem')}}" method="POST">
						{{csrf_field()}}
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
							<button><i class="fa fa-search"></i></button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                            <li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<img src="{{URL::to('public/fontend/images/slide1.jpg')}}" class="slide1" alt="" />
							</div>
							<div class="item">
								<img src="{{URL::to('public/fontend/images/slide2.jpg')}}" class="slide1" alt="" />
							</div>
							<div class="item">
								<img src="{{URL::to('public/fontend/images/slide3.jpg')}}" class="slide1" alt="" />
                            </div>
                            <div class="item">
								<img src="{{URL::to('public/fontend/images/slide4.jpg')}}" class="slide1" alt="" />
							</div>
							<div class="item">
								<img src="{{URL::to('public/fontend/images/slide5.jpg')}}" class="slide1" alt="" />
							</div>
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
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    @foreach($category as $key =>$cate)
                        <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
                    @endforeach
						</div>
                        <!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu sản phẩm</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                @foreach($brand as $key =>$brand)
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> {{$brand->brand_name}}</a></li>
                                @endforeach
                                </ul>
							</div>
						</div><!--/brands_products-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div id="divMapId" style="width: 100%; height:400px">	
					<div id="left" class="sidebar flex-center left collapsed">
						<div class="sidebar-content rounded-rect flex-center">
							<div class="kt-portlet kt-widget19 scrollbar" id="style-3" style="margin-bottom: 0px;background-color: #f2f3f8;">
								<div class="kt-portlet__body kt-padding-0">
									<div class="kt-widget19__wrapper">
										<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides branding-image">
											<img alt="" style="width: 100%; height: 50%;display: block;" src="{{URL::to('public/fontend/images/logo1.png')}}" alt="#">
										</div>
										<div class="kt-widget19__content">
											<div class="kt-widget19__info">
												<p class="textTitle"> Chuỗi cửa hàng cung ứng của FPT </p>
											</div>
										</div><br>
										<line-clamp row="6" _nghost-lti-c12="">
											<div _ngcontent-lti-c12="" class="box" style="-webkit-line-clamp: initial; height: auto; visibility: visible;">
												<div class="kt-widget19__text-appInfo">
													<p>Trụ sở chính :Tòa nhà FPT, số 17 phố Duy Tân, phường Dịch Vọng Hậu, quận Cầu Giấy, thành phố Hà Nội</p>
												</div>
												<a _ngcontent-lti-c12="" class="btn-toggle" href="javascript:void(0)"><i
														_ngcontent-lti-c12="" class="flaticon2-up"></i></a>
											</div>
										</line-clamp>
									</div>
								</div>
								<div class="kt-portlet__body kt-padding-0 " id="listData">
									
								</div>
							</div>
							<div class="sidbear-toggle rounded-rect left" onclick="toggleSidebar('left')">
								&rarr;
							</div>
						</div>
            		</div>
				</div>
				</div>
			</div>
        </div>
        
		<div class="footer-widget">
			<div class="container">
				<div class="row">
                    <div class="col-md-3">
                    <div class="single-widget">
							<h2>Về chúng tôi</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Liên hệ </a></li>
                                <li><a href="#">tin tức</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Đăng nhập</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-md-3">
                    <div class="single-widget">
							<h2>Thông tin chung</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chính sách bảo hành</a></li>
								<li><a href="#">Chính sách đổi trả</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Hướng dẫn đặt hàng</a></li>
								<li><a href="#">Góp ý, khiếu nại</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-md-3">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<div class="row">
                                <div class="col-md-4" style="width: 28px;"><a href="#"><i class="fa fa-instagram"></i></a></div>
                                <div class="col-md-4" style="width: 28px;"><a href="https://www.facebook.com/H%E1%BA%A3i-Y%C3%AAn-Shop-105657694691240"><i class="fa fa-facebook-square"></i></a></div>
                                <div class="col-md-4"style="width: 28px;"><a href="#"><i class="fa fa-youtube-play"></i></a></div>
                            </div>
                            <div class="row">
                                <img src="{{URL::to('public/fontend/images/bct.png')}}" style="width: 200px;height: 100px;">
                            </div>
						</div>
					</div>
                    <div class="col-md-3">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div> 
					<!-- <div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div> -->
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p style="text-align:center;">Copyright © 2020 UTC STUDENTS. All rights reserved .</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/fontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/fontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/fontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/fontend/js/main.js')}}"></script>
    <script src="{{asset('public/fontend/js/MapBox.js')}}"></script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=install_email
        page_id="105657694691240">
      </div>
</body>
</html>
