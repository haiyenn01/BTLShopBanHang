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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{{'public/fontend/images/ico/favicon.ico'}}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{'public/fontend/images/ico/apple-touch-icon-144-precomposed.png'}}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{'public/fontend/images/ico/apple-touch-icon-114-precomposed.png'}}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{'public/fontend/images/ico/apple-touch-icon-72-precomposed.png'}}}">
    <link rel="apple-touch-icon-precomposed" href="{{{'public/fontend/images/ico/apple-touch-icon-57-precomposed.png'}}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/MapBox.css')}}">
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
</style>

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{{'public/fontend/images/logo.png'}}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
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
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản phẩm</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li ><a href="#">Tin Tức</a>
                                </li>
								<li><a href="404.html">Giỏ hàng</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
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
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{{'public/fontend/images/girl1.jpg'}}}" class="girl img-responsive" alt="" />
									<img src="{{{'public/fontend/images//pricing.png'}}}"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{{'public/fontend/images/girl2.jpg'}}}" class="girl img-responsive" alt="" />
									<img src="{{{'public/fontend/images/pricing.png'}}}"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{{'public/fontend/images/girl3.jpg'}}}" class="girl img-responsive" alt="" />
									<img src="{{{'public/fontend/images/pricing.png'}}}" class="pricing" alt="" />
								</div>
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
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
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
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-6">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{{'public/fontend/images/iframe1.png'}}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div><div class="col-sm-6">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{{'public/fontend/images/iframe1.png'}}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
                       <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
                        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css"/>
                        <div id="divMap">
                        </div>
                       <script>
                     mapboxgl.accessToken = 'pk.eyJ1IjoidXRjMTEzIiwiYSI6ImNrY2ZuZmdpZzBocnEycmsybjM0NHpkbTMifQ.9k2AZ1oRegNpkidYZfJ65w';

                          var geojson = {
                            'type': 'FeatureCollection',
                            'features': [
                              {
                                'type': 'Feature',
                                'geometry': {
                                  'type': 'Point',
                                  'coordinates': [105.8057662, 21.0183118]
                                },
                                'properties': {
                                  'title': 'Eshop',
                                  'description': '99 Nguyễn Chí Thanh, Đống Đa, Hà Nội'
                                }
                              },
                              {
                                'type': 'Feature',
                                'geometry': {
                                  'type': 'Point',
                                  'coordinates': [108.1977789, 16.0539503]
                                },
                                'properties': {
                                  'title': 'Eshop',
                                  'description': '20 Lý Thường Kiệt, Quận Hải Châu, TP Đà Nẵng'
                                }
                              },
                              {
                                'type': 'Feature',
                                'geometry': {
                                  'type': 'Point',
                                  'coordinates': [106.6898035, 10.773996]
                                },
                                'properties': {
                                  'title': 'Eshop',
                                  'description': '55B Nguyễn Thị Minh Khai, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh, Việt Nam'
                                }
                              }
                            ]
                          };

                          
                       var map = new mapboxgl.Map({
                                container: 'divMap',
                                style: 'mapbox://styles/mapbox/streets-v11',
                                center: [105.908203, 21.04349121680354],
                                zoom: 3
                            });
                            map.addControl(new mapboxgl.FullscreenControl());
                          /*  map.addControl(new MapboxDirections({
                                                accessToken: mapboxgl.accessToken
                                            }), 'top-left'); */ 
                          geojson.features.forEach(function (marker) {
                            var el = document.createElement('div');
                            el.className = 'marker';

                            new mapboxgl.Marker(el)
                              .setLngLat(marker.geometry.coordinates)
                              .setPopup(
                                new mapboxgl.Popup({ offset: 25 })
                                  .setHTML(
                                    '<h3 style="color:red">' +
                                      marker.properties.title +
                                      '</h3><p style="fontsize:14px">' +
                                      marker.properties.description +
                                      '</p>'
                                  )
                              )
                              .addTo(map);
                          });
                        </script>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
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
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
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
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js">
    </script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
        type="text/css" />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js">
    </script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css"
        type="text/css" />
    <script>
    <script src="{{asset('public/fontend/js/MapBox.js')}}"></script>
</body>
</html>
