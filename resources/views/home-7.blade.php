<!-- resources/views/home-7.blade.php -->
@extends('layouts.main')

@section('title', 'Home-7 Page')

@section('content')

@include('includes.navbar')
			
<!-- Hero Banner Start  -->
<div class="home-slider hide-navigation margin-bottom-0">

	<!-- includes/Home/home-7/slide5.blade.php -->
	@include('includes.Home.home-7.slide5')

</div>
<!-- Hero Banner End -->

<!-- Category Style  -->
<section class="middle">
	<div class="container-fluid">
		<div class="row g-0">
			
			<div class="col-xl-7 col-lg-6 col-md-6 col-sm-12">
				<div class="single_cats">
					<a href="#" class="cards card-overflow card-scale lg_height">
						<div class="bg-image" style="background:url({{ asset('assets/img/b-1.png') }})no-repeat;"></div>
						<div class="ct_body">
							<div class="ct_body_caption left">	
								<h2 class="m-0 ft-bold lh-1 fs-md text-upper">Women's Wear</h2>
								<span>3268 Items</span>
							</div>
							<div class="ct_footer left">
								<span class="btn stretched-links borders">Browse Items <i class="lni lni-arrow-right"></i></span>
							</div>
						</div>
					</a>
				</div>
			</div>
			
			<div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">

				<!-- includes/Home/home-7/category6.blade.php -->
				@include('includes.Home.home-7.category6')
				
			</div>
		</div>
	</div>
</section>
<!-- Category Style 1 -->

<!-- Product List -->
<section class="middle pt-0">
	<div class="container">
	
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Trendy Products</h2>
					<h3 class="ft-bold pt-3">Our Trending Products</h3>
				</div>
			</div>
		</div>
		
		<!-- row -->
		<div class="row align-items-center rows-products">
		
			<!-- includes/Home/index/product.blade.php -->
			@include('includes.Home.index.product')
			
		</div>
		<!-- row -->
		
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="position-relative text-center">
					<a href="{{ url('/shop-style-1') }}" class="btn stretched-links borders">Explore More<i class="lni lni-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- Product List -->

<!-- Deals of The Day -->
<section class="bg-cover" style="background:url({{ asset('assets/img/bg.jpg') }}) no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				
				<div class="deals_wrap text-center">
					<h4 class="ft-medium">Get up to -40% Off</h4>
					<h2 class="ft-bold">Only Summer Collections</h2>
					<div id="countdown" class="mt-5">
						<ul>
							<li><span id="days"></span>days</li>
							<li><span id="hours"></span>Hours</li>
							<li><span id="minutes"></span>Minutes</li>
							<li><span id="seconds"></span>Seconds</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- Deals of The Day -->

<!-- Good Deals Start -->
<section class="space">
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Good Deals</h2>
					<h3 class="ft-bold pt-3">Deals of The Day</h3>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="slide_items">
					
					<!-- includes/Home/home-5/deals.blade.php -->
					@include('includes.Home.home-5.deals')
					
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- Good Deals Start -->

<!-- Instagram Start -->
<section class="p-0">
	<div class="container-fluid p-0 overflow-hidden">
		
		<div class="row no-gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Instagram Gallery</h2>
					<span class="fs-lg ft-bold theme-cl pt-3">@mahak_71</span>
					<h3 class="ft-bold lh-1">From Instagram</h3>
				</div>
			</div>
		</div>
		
		<div class="row no-gutters">
			<div class="insta-slider"> 
			
				<!-- includes/Home/index/insta.blade.php -->
				@include('includes.Home.index.insta')
				
			</div>
		</div>
		
	</div>
</section>
<!-- Instagram Start -->

<!-- Customer Features -->
<section class="px-0 py-3 br-top">
	<div class="container">
		<div class="row">
			
			<!-- includes/blog-detail/features.blade.php -->
			@include('includes.blog-detail.features')
			
		</div>
	</div>
</section>
<!-- Customer Features -->

<!-- includes/Home/index/quickview.blade.php -->
@include('includes.Home.index.quickview')

<!-- includes/Home/index/log.blade.php -->
@include('includes.Home.index.log')

<!-- includes/Home/index/search.blade.php -->
@include('includes.Home.index.search')

<!-- includes/Home/index/wishlist.blade.php -->
@include('includes.Home.index.wishlist')

<!-- includes/Home/index/cart.blade.php -->
@include('includes.Home.index.cart')

<!-- includes/Home/index/popup-overlay.blade.php -->
@include('includes.Home.index.popup-overlay')

@include('includes.footer3')
			
@endsection