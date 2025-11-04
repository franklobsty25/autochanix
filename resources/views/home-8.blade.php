<!-- resources/views/home-8.blade.php -->
@extends('layouts.main')

@section('title', 'Home-8 Page')

@section('content')

@include('includes.navbar3')
			
<!-- Hero Banner Start -->
<div class="home-slider margin-bottom-0">

	<!-- includes/Home/home-8/slide6.blade.php -->
	@include('includes.Home.home-8.slide6')

</div>
<!-- Hero Banner End -->

<!-- Product List -->
<section class="middle">
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
		
			<!-- includes/Home/home-3/trending.blade.php -->
			@include('includes.Home.home-3.trending')
			
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

<!-- Customer Review -->
<section class="gray">
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

<!-- Blog Start -->
<section class="space min">
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Latest News</h2>
					<h3 class="ft-bold pt-3">New Updates</h3>
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<!-- includes/Home/index/blog.blade.php -->
			@include('includes.Home.index.blog')
			
		</div>
		
	</div>
</section>
<!-- Blog Start -->

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

@include('includes.footer2')
			
@endsection