<!-- resources/views/home-9.blade.php -->
@extends('layouts.main')

@section('title', 'Home-9 Page')

@section('content')

@include('includes.navbar3')
			
<!-- Hero Banner Start  -->
<div class="home-slider margin-bottom-0">

	<!-- includes/Home/home-9/slide7.blade.php -->
	@include('includes.Home.home-9.slide7')

</div>
<!-- Hero Banner  End -->

<!-- Category Style -->
<section class="middle">
	<div class="container">
		<div class="row g-0">

			<!-- includes/Home/home-9/category7.blade.php -->
			@include('includes.Home.home-9.category7')
			
		</div>
	</div>
</section>
<!-- Category Style -->

<!-- Products Lists -->
<section class="space min pt-0">
	<div class="container">
		
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				
				<ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
						
					<!-- includes/Home/home-2/nav.blade.php -->
					@include('includes.Home.home-2.nav')

				</ul>
				
				<div class="tab-content" id="myTabContent">
					
					<!-- All Content -->
					<div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-2/product2.blade.php -->
								@include('includes.Home.home-2.product2')
								
							</div>
						</div>
					</div>
					
					<div class="tab-pane fade show active" id="mens" role="tabpanel" aria-labelledby="mens-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-2/product3.blade.php -->
								@include('includes.Home.home-2.product3')
								
							</div>
						</div>
					</div>
					
					<!-- Women Content -->
					<div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-2/product4.blade.php -->
								@include('includes.Home.home-2.product4')
								
							</div>
						</div>
					</div>
					
					<div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-2/product5.blade.php -->
								@include('includes.Home.home-2.product5')
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		
	</div>
</section>
<!-- Products List -->

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

<!-- Customer Review -->
<section>
	<div class="container">
	
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Testimonials</h2>
					<h3 class="ft-bold pt-3">Client Reviews</h3>
				</div>
			</div>
		</div>
		
		<div class="row justify-content-center">
			<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
				<div class="reviews-slide px-3">
					
					<!-- includes/Home/index/review.blade.php -->
					@include('includes.Home.index.review')
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Customer Review -->

<!-- Instagram Start -->
<section class="p-0">
	<div class="container-fluid p-0 overflow-hidden">
		
		<div class="row no-gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<span class="fs-md ft-bold theme-cl">@mahak_71</span>
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