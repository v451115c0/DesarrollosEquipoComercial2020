<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/component-datepicker.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 23:31:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/css/magnific-popup.css')}}" type="text/css" />

	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="{{asset('Reports/css/components/datepicker.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/css/components/timepicker.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Reports/css/components/daterangepicker.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('Reports/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" type="text/css" href="https://services.nikken.com.mx/fpro/plugins/table/datatable/datatables.css">
		<link rel="stylesheet" type="text/css" href="https://services.nikken.com.mx/fpro/plugins/table/datatable/custom_dt_zero_config.css">
		<link rel="stylesheet" type="text/css" href="https://services.nikken.com.mx/fpro/plugins/table/datatable/custom_dt_html5.css">
	<!-- Document Title
	============================================= -->
	<title>NIKKEN &amp; INC. | Reportes</title>
	
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="{{asset('Reports/img/logonikken.png')}}"><img src="{{asset('Reports/img/logonikken.png')}}" alt="Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="{{asset('Reports/img/logonikken.png')}}"><img src="{{asset('Reports/img/logonikken.png')}}" alt="Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<!--div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Blue Round-Neck Tshirt with a Button</a>
													<span class="top-cart-item-price d-block">$19.99</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Light Blue Denim Dress</a>
													<span class="top-cart-item-price d-block">$24.99</span>
												</div>
												<div class="top-cart-item-quantity">x 3</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$114.95</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
							</div--><!-- #top-cart end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<!--nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>Home</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="intro.html#section-niche"><div>Niche Demos</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="intro.html#section-onepage"><div>One-Page Demos</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-corporate.html"><div>Home - Corporate</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-corporate.html"><div>Corporate - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-2.html"><div>Corporate - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-3.html"><div>Corporate - Layout 3</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-4.html"><div>Corporate - Layout 4</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-portfolio.html"><div>Home - Portfolio</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio.html"><div>Portfolio - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-blog.html"><div>Home - Blog</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-blog.html"><div>Blog - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-2.html"><div>Blog - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-3.html"><div>Blog - Layout 3</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-shop.html"><div>Home - Shop</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-shop.html"><div>Shop - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-shop-2.html"><div>Shop - Layout 2</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-magazine.html"><div>Home - Magazine</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-magazine.html"><div>Magazine - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-magazine-2.html"><div>Magazine - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-magazine-3.html"><div>Magazine - Layout 3</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="landing.html"><div>Home - Landing Page</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="landing.html"><div>Landing Page - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-2.html"><div>Landing Page - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-3.html"><div>Landing Page - Layout 3</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-4.html"><div>Landing Page - Layout 4</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-5.html"><div>Landing Page - Layout 5</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-image.html"><div>Full Screen - Image</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-video.html"><div>Full Screen - Video</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-onepage.html"><div>Home - One Page</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-onepage.html"><div>One Page - Default</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-onepage-2.html"><div>One Page - Submenu</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-onepage-3.html"><div>One Page - Dots Style</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#"><div>Extras</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="index-wedding.html"><div>Wedding</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-restaurant.html"><div>Restaurant</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-events.html"><div>Events</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="index-parallax.html"><div>Parallax</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-app-showcase.html"><div>App Showcase</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-boxed.html"><div>Boxed Layout</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#"><div>Features</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="icon-stack"></i>Sliders</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="slider-revolution.html"><div>Revolution Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="rs-demos.html"><div>Premium Templates</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution.html"><div>Full Screen</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-fullwidth.html"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-canvas.html"><div>Canvas Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas.html"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-fade.html"><div>Fade Transition</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-video-event.html"><div>Custom Video Event</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-3.html"><div>3 Columns</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-4.html"><div>4 Columns</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-5.html"><div>5 Columns</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-flex.html"><div>Flex Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-flex.html"><div>Default Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-flex-thumbs.html"><div>with Thumbs</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-owl.html"><div>Owl Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-full.html"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl.html"><div>Boxed Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-videos.html"><div>Video Slider</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-parallax.html"><div>Static Media</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="static-parallax.html"><div>Static - Parallax</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-image.html"><div>Static - Image</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-html5-video.html"><div>Static - HTML5 Video</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-embed-video.html"><div>Static - Embedded Video</div></a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="icon-umbrella"></i>Headers</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="header-light.html"><div>Light Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-dark.html"><div>Dark Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-transparent.html"><div>Transparent</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-semi-transparent.html"><div>Semi Transparent</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent.html"><div>Light Version</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent-dark.html"><div>Dark Version</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-left.html"><div>Left Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-left.html"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open.html"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open-push.html"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-right.html"><div>Right Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-right.html"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open.html"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open-push.html"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-floating.html"><div>Floating Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-sticky.html"><div>Static Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="responsive-sticky.html"><div>Responsive Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="logo-changer.html"><div>Alternate Logos</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="header-light.html"><div>Default Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-2.html"><div>Alternate Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-3.html"><div>Pill Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-4.html"><div>Border Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-5.html"><div>Large Icon Menu</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="split-menu.html"><div>Split Layout</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="menu-6.html"><div>Scaling Border</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-subtitle.html"><div>Sub-Title Menu</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-7.html"><div>Extended Menu 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-8.html"><div>Extended Menu 2</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-9.html"><div>Extended Menu 3</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-10.html"><div>Overlay Menu</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="mega-menu.html"><div><i class="icon-line-columns"></i>Mega Menu</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="mega-menu.html"><div>Widgetized</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-full.html"><div>Full-Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-tab.html"><div>Tabbed</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-side-tab.html"><div>Side-Tabs (onClick)</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="forms.html"><div><i class="icon-wpforms"></i>Forms</div></a>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Links</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Flickr Photostream</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Dribbble Shots</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Subscribers</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Posts List</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Twitter Feed</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Tabbed Widgets</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Carousel</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Social Icons</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Testimonials</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Quick Contact</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Tags Cloud</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Video Embeds</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Raw HTML</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col-5">
														<li class="menu-item">
															<a class="menu-link" href="page.html"><div>Left Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-right.html"><div>Right Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-center.html"><div>Center Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-dark.html"><div>Dark Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-pattern.html"><div>BG Pattern</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col-7">
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax.html"><div>Parallax - Default</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax-header.html"><div>Parallax - Transparent</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-video.html"><div>HTML5 Video</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-nobg.html"><div>No Background</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-mini.html"><div>Mini Version</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-overlay.html"><div>Left Overlay</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-push.html"><div>Left Push</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-right-overlay.html"><div>Right Overlay</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel.html"><div>Right Push</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-light.html"><div>Light Background</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="modal-onload.html"><div>Default Layout</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-iframe.html"><div>Video iFrame</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-subscribe.html"><div>Subscription Form</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-common-height.html"><div>Common Height</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-cookie.html"><div>Cookies Enabled</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="sticky-footer.html"><div>Sticky</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="#footer" data-scrollto="#footer"><div>Layout 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-2.html#footer"><div>Layout 2</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-3.html#footer"><div>Layout 3</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-4.html#footer"><div>Layout 4</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-5.html#footer"><div>Layout 5</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-6.html#footer"><div>Layout 6</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-7.html#footer"><div>Layout 7</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Pages</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Introductory</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="about.html"><div>About Us</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="about.html"><div>Main Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="about-2.html"><div>Alternate Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="about-me.html"><div>About Me</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="team.html"><div>Team Members</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="gdpr.html"><div>GDPR Compliance</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="gdpr.html"><div>Default</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="gdpr-small.html"><div>Small</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="jobs.html"><div>Careers</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="profile.html"><div>User Profile</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Utility &amp; Specials</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="services.html"><div><i class="icon-star-of-life"></i>Services Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="services.html"><div>Layout 1</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="services-2.html"><div>Layout 2</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="services-3.html"><div>Layout 3</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#"><div><i class="icon-calendar3"></i>Events</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="events-list.html"><div>Events List</div></a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="events-list.html"><div>Right Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-left-sidebar.html"><div>Left Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-both-sidebar.html"><div>Both Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-fullwidth.html"><div>Full Width</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-parallax.html"><div>Parallax List</div></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="event-single.html"><div>Single Event</div></a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-right-sidebar.html"><div>Right Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-left-sidebar.html"><div>Left Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-both-sidebar.html"><div>Both Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single.html"><div>Full Width</div></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="event-single-full-width-image.html"><div>Single Event - Full</div></a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-image.html"><div>Parallax Image</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-map.html"><div>Google Map</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-slider.html"><div>Slider Gallery</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-video.html"><div>HTML5 Video</div></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="events-calendar.html"><div>Full Width Calendar</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="contact.html"><div><i class="icon-envelope"></i>Contact Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="contact.html">Main Layout</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-2.html">Grid Layout</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-3.html">Right Sidebar</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-4.html">Both Sidebars</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-5.html">Modal Form</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-6.html">Form Overlay</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-7.html">Form Overlay Mini</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="faqs.html"><div><i class="icon-question-circle"></i>FAQs Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="faqs.html"><div>Layout 1</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-2.html"><div>Layout 2</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-3.html"><div>Layout 3</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-4.html"><div>Layout 4</div></a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Layouts &amp; PageNavs</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="full-width.html"><div>Full Width</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="full-width.html"><div>Default Width</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="full-width-wide.html"><div>Wide Width</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#"><div>Sidebars</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="right-sidebar.html"><div>Right Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="left-sidebar.html"><div>Left Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-sidebar.html"><div>Both Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-right-sidebar.html"><div>Both Right Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-left-sidebar.html"><div>Both Left Sidebar</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="page-submenu.html"><div>Page Submenu</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="side-navigation.html"><div>Side Navigation</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Miscellaneous</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="login-register.html"><div>Login/Register</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="login-register.html"><div>Default Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-register-2.html"><div>Tabbed Login</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-register-3.html"><div>Login Accordion</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-1.html"><div>Dark BG Login</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-2.html"><div>Image BG Login</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="coming-soon.html"><div>Coming Soon</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon.html"><div>Default Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon-2.html"><div>Parallax Image</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon-3.html"><div>HTML5 Video</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="404.html"><div>404 Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="404.html"><div>Default Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="404-2.html"><div>Parallax Image</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="404-3.html"><div>HTML5 Video</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#"><div>Extras</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="blank-page.html"><div>Blank Page</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="maintenance.html"><div>Maintenance Page</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="sitemap.html"><div>Sitemap</div></a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Portfolio</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Grids</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-1.html"><div>1 Column</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2.html"><div>2 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-5.html"><div>5 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-6.html"><div>6 Columns</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Masonry</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2-masonry.html"><div>2 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3-masonry.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-masonry.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-5-masonry.html"><div>5 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-6-masonry.html"><div>6 Columns</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Loading Styles</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio.html"><div>jQuery Filter</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-jpagination.html"><div>jQuery Pagination</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-ajax.html"><div>AJAX In Page</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-filter-styles.html"><div>Filter Styles</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Single Project</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-extended.html"><div>Extended Item</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Layouts</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-nomargin.html"><div>Default</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-parallax.html"><div>Parallax</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Blog</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Default</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-both-sidebar.html"><div>Both Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-full-width.html"><div>Full Width</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Timeline</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline.html"><div>Full Width</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Masonry</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-3.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-2.html"><div>2 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-full.html"><div>100% Width</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Grid</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-grid.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-grid-3.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-grid-2.html"><div>2 Columns</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Small Thumbs</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-full-width.html"><div>Full Width</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-alt.html"><div>Alternate Layout</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Item Splitting</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-grid.html"><div>Pagination</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry.html"><div>Infinite Scroll</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Single</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-single.html"><div>Default Layout</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-full.html"><div>Full Width</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-small.html"><div>Small Image</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Comments Module</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-small.html#comments"><div>Disqus Comments</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="shop.html"><div>Shop</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="shop.html"><div>4 Columns</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-3.html"><div>3 Columns</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-3.html"><div>Full Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-2.html"><div>2 Columns</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-1.html"><div>1 Columns</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-1.html"><div>Full Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-category-parallax.html"><div>Categories - Parallax</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-combination-filter.html"><div>Combination Filter</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-single.html"><div>Single Product</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-single.html"><div>Full Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-color.html"><div>Color Options</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-sticky.html"><div>Sticky Aside</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-list.html"><div>Feature List</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="cart.html"><div>Cart</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="checkout.html"><div>Checkout</div></a>
										</li>
									</ul>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Shortcodes</div></a>
									<div class="mega-menu-content">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="animations.html"><div><i class="icon-magic"></i>Animations</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="clients.html"><div><i class="icon-apple"></i>Clients</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="counters.html"><div><i class="icon-time"></i>Counters</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="read-more.html"><div><i class="icon-ellipsis-h"></i>Read More</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="gradients.html"><div><i class="icon-tint"></i>Gradients</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="item-overlays.html"><div><i class="icon-line-marquee-plus"></i>Item Overlays</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="form-elements.html"><div><i class="icon-edit"></i>Form Elements</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="lists-cards.html"><div><i class="icon-th-list"></i>Lists &amp; Cards</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="shape-dividers.html"><div><i class="icon-shapes"></i>Shape Dividers</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="hover-animations.html"><div><i class="icon-hand-pointer"></i>Hover Animations</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="tables.html"><div><i class="icon-table"></i>Tables</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="lazy-loading.html"><div><i class="icon-line-loader"></i>Lazy Loading</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="flip-cards.html"><div><i class="icon-refresh"></i>Flip Cards</div></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>

						</nav--><!-- #primary-menu end -->

						<form class="top-search-form" action="http://themes.semicolonweb.com/html/canvas/search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<div class="row">
					<div class="col-md-7">
						<h1>Reportes De Ventas</h1>
				<span>NIKKEN INC.</span>
				
					</div>
					<div class="col-md-5">
						<img src="{{asset('Reports/img/venta.png')}}" width="100px" height="80px" >
						<!--img class="img-fluid" src="{{asset('Reports/img/rv.jpg')}}" width="90" height="50"-->
					</div>
				</div>
				
				<!--ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Shortcodes</a></li>
					<li class="breadcrumb-item active" aria-current="page">Date &amp; Time Pickers</li>
				</ol-->
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<form action="/ventas" method="get" class="mb-0">
						@csrf
						<div class="bottommargin-sm">
							<div class="row">
								
								<div class="col-lg-6 bottommargin-md">
									<label for="">Seleccionar Periodo</label>
									<select id="periodo" class="form-control text-left" onchange="SetCalendar();">
    <option value="{{ Date('Ym') }}" disable selected>{{ __('Elige tu opción') }}</option>
    @php
        $añoAct = date('o');
        $añoAct = $añoAct;
        for($i=date('o'); $i>=$añoAct; $i--){
            for ($e=12; $e>=1; $e--){
                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                $mes=$meses[$e - 1];
                if ($e == date('m')){
                    if($i == date("Y")){
                        if($e <= date("n")){
                            if($e < 10){
                                if(Date('d') > 1){
                                    echo '
                                        <option value="'.$i.'0'.$e.'" >'.$mes.' '.$i.'</option>
                                    ';
                                }
                            }
                            else{
                                if(Date('d') > 15){
                                    echo '
                                        <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                    '; 
                                }
                                else{
                                    echo '
                                        <option value="'.$i.$e.'" >'.$mes.' '.$i.'</option>
                                    '; 
                                }
                            }
                        }
                        else{}
                    }
                    else{
                        if($e < 10){
                            echo '
                                <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                            ';
                        }
                        else{
                            echo '
                                <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                            '; 
                        }
                    }
                }
                else{
                    if($i == date("Y")){
                        if($e <= date("n")){
                            if($e < 10){
                                echo '
                                    <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                                ';
                            }
                            else{
                                echo '
                                    <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                                '; 
                            }
                        }
                    }
                    else{
                        if($e < 10){
                            echo '
                                <option value="'.$i.'0'.$e.'">'.$mes.' '.$i.'</option>
                            ';
                        }
                        else{
                            echo '
                                <option value="'.$i.$e.'">'.$mes.' '.$i.'</option>
                            '; 
                        }
                    }
                }
            }
        }
    @endphp
</select>
									

								</div>
								<div class="col-md-6 bottommargin-sm">

									<label for="dates">Seleccionar fechas</label>
									<input type="text" class="form-control daterange1"  name="dates" id="dates">
									<!--input type="text" class="form-control text-left component-datepicker multidate" placeholder="MM-DD-YYYY"-->
									<br>
									<center>
									<button type="button" id="ejecutar" onclick="VerifyDate();" class="btn btn-info">Ejecutar Reporte</button>
									</center>
								</div>
								
								
								
							</div>
							<div class="row">
								
								<div class="col-md-12 bottommargin-sm" id="result">
									<table class="table table-bordered table-hover" id="prueba">
										<thead>
											
											<tr>
												<th scope="col">Venta<br><center><img src="{{asset('Reports/img/venta.png')}}" width="20px"></center></th>
												<th scope="col">LAT<br><img src="{{asset('Reports/img/latam.png')}}" width="20px"></th>
												<th scope="col">MEX<br><img src="{{asset('Reports/img/mexico.png')}}" width="20px"></th>
												<th scope="col">COL<br><img src="{{asset('Reports/img/colombia.png')}}" width="20px"></th>
												<th scope="col">PER<br><img src="{{asset('Reports/img/peru.png')}}" width="20px"></th>
												<th scope="col">CHL<br><img src="{{asset('Reports/img/chile.png')}}" width="20px"></th>
												<th scope="col">ECU<br><img src="{{asset('Reports/img/ecuador.png')}}" width="20px"></th>
												<th scope="col">CA<br><img src="{{asset('Reports/img/ca.png')}}" width="20px"></th>
												<th scope="col">CRI<br><img src="{{asset('Reports/img/costarica.png')}}" width="20px"></th>
												<th scope="col">PAN<br><img src="{{asset('Reports/img/panama.png')}}" width="20px"></th>
												<th scope="col">GTM<br><img src="{{asset('Reports/img/guatemala.png')}}" width="20px"></th>
												<th scope="col">SLV<br><img src="{{asset('Reports/img/salvador.png')}}" width="20px"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												
											</tr>
											
										</tbody>
									</table>

								</div>
								
							</div>
						</div>
					</form>
					

					<div class="line"></div>

					

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				
				

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2021 All Rights Reserved by NIKKEN Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-right">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> nikkeninc@nikken.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> Nikken inc
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('Reports/js/jquery.js')}}"></script>
	<script src="{{asset('Reports/js/plugins.min.js')}}"></script>

	<!-- Date & Time Picker JS -->
	<script src="{{asset('Reports/js/components/moment.js')}}"></script>
	<script src="{{asset('Reports/js/components/timepicker.js')}}"></script>
	<script src="{{asset('Reports/js/components/datepicker.js')}}"></script>

	<!-- Include Date Range Picker -->
	<script src="{{asset('Reports/js/components/daterangepicker.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('Reports/js/functions.js')}}"></script>
	<script src="{{asset('Reports/js/custom.js')}}"></script>

	<script>
		$(function() {
			$('.component-datepicker.default').datepicker({
				autoclose: true,
				startDate: "today",
			});

			$('.component-datepicker.today').datepicker({
				autoclose: true,
				startDate: "today",
				todayHighlight: true
			});

			$('.component-datepicker.past-enabled').datepicker({
				autoclose: true,
			});

			$('.component-datepicker.format').datepicker({
				autoclose: true,
				format: "dd-mm-yyyy",
			});

			$('.component-datepicker.autoclose').datepicker();

			$('.component-datepicker.disabled-week').datepicker({
				autoclose: true,
				daysOfWeekDisabled: "0"
			});

			$('.component-datepicker.highlighted-week').datepicker({
				autoclose: true,
				daysOfWeekHighlighted: "0"
			});

			$('.component-datepicker.mnth').datepicker({
				autoclose: true,
				minViewMode: 1,
				format: "mm/yy"
			});

			$('.component-datepicker.multidate').datepicker({
				multidate: true,
				multidateSeparator: " , "
			});

			$('.component-datepicker.input-daterange').datepicker({
				autoclose: true
			});

			$('.component-datepicker.inline-calendar').datepicker();

			$('.datetimepicker').datetimepicker({
				showClose: true
			});

			$('.datetimepicker1').datetimepicker({
				format: 'LT',
				showClose: true
			});

			$('.datetimepicker2').datetimepicker({
				inline: true,
				sideBySide: true
			});

			$('.datetimepicker3,.datetimepicker4').datetimepicker();

			// .daterange1
			$(".daterange1").daterangepicker({
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light",
				
				//minDate: 1,
  				//maxDate: '+1m',
  				//numberOfMonths: 0,
				//singleMonth: true,

				//endDate: new Date('2021-02-28')
				startDate: new Date('2021-02-01'),
				//minDate: 0
			});

			// .daterange2
			$(".daterange2").daterangepicker({
				"opens": "center",
				timePicker: true,
				timePickerIncrement: 30,
				locale: {
					format: 'MM/DD/YYYY h:mm A'
				},
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			// .daterange3
			$(".daterange3").daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			},
			function(start, end, label) {
				var years = moment().diff(start, 'years');
				alert("You are " + years + " years old.");
			});

			// reportrange
			function cb(start, end) {
				$(".reportrange span").html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
			cb(moment().subtract(29, 'days'), moment());

			$(".reportrange").daterangepicker({
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light",
				ranges: {
				   'Today': [moment(), moment()],
				   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				   'This Month': [moment().startOf('month'), moment().endOf('month')],
				   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				}
			}, cb);

			// .daterange4
			$(".daterange4").daterangepicker({
				autoUpdateInput: false,
				locale: {
					cancelLabel: 'Clear'
				},
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			$(".daterange4").on('apply.daterangepicker', function(ev, picker) {
				$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
			});

			$(".daterange4").on('cancel.daterangepicker', function(ev, picker) {
				$(this).val('');
			});

		});
		/*
		$('#ejecutar').on('click',{
				inline: true,
				sideBySide: true
			});*/

		
	
	</script>
	<script src="https://services.nikken.com.mx/fpro/plugins/table/datatable/datatables.js"></script>
	<script src="https://services.nikken.com.mx/fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
	<script src="https://services.nikken.com.mx/fpro/plugins/table/datatable/button-ext/jszip.min.js"></script>
	<script src="https://services.nikken.com.mx/fpro/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
	<script src="https://services.nikken.com.mx/fpro/plugins/table/datatable/button-ext/buttons.print.min.js"></script>



</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/component-datepicker.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 23:31:48 GMT -->
</html>