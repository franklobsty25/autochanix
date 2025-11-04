<!-- resources/views/home-14.blade.php -->
@extends('layouts.main')

@section('title', 'Home-14 Page')

@section('content')

@include('includes.navbar6')
			
<!-- Hero Banner  Start  -->
<div class="home-slider margin-bottom-0">

	<!-- includes/Home/home-14/slide11.blade.php -->
	@include('includes.Home.home-14.slide11')

</div>
<!-- Hero Banner  End -->

<!-- Customer Features -->
<section class="p-0">
	<div class="container">
		<div class="row">

			<!-- includes/Home/home-14/features4.blade.php -->
			@include('includes.Home.home-14.features4')
			
		</div>
	</div>
</section>
<!-- Customer Features -->

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
		
		<div class="row align-items-center rows-products">			
			
			<!-- includes/Home/home-14/products10.blade.php -->
			@include('includes.Home.home-14.products10')
			
		</div>
		
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

<!-- Tag Wrap Start -->
<section class="bg-cover" style="background:url({{ asset('assets/img/e-middle-banner.png') }}) no-repeat;">
	<div class="ht-60"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<div class="tags_explore text-center">
					<h2 class="mb-0 text-white ft-bold">Big Sale Up To 70% Off</h2>
					<p class="text-light fs-lg mb-4">Exclussive Offers For Limited Time</p><p>
					<a href="#" class="btn btn-lg bg-white px-5 text-dark ft-medium">Explore Your Order</a>
				</p></div>
			</div>
		</div>
	</div>
	<div class="ht-60"></div>
</section>
<!-- Tag Wrap Start -->

<!-- All Category  -->
<section class="middle">
	<div class="container">
	
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Popular Categories</h2>
					<h3 class="ft-bold pt-3">Trending Categories</h3>
				</div>
			</div>
		</div>
		
		<div class="row align-items-center justify-content-center g-xl-5 g-4">
			
			<!-- includes/Home/home-14/categories3.blade.php -->
			@include('includes.Home.home-14.categories3')

		</div>
		
	</div>
</section>
<!-- All Category  -->

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

<!-- Top Seller Start -->
<section class="space min">
	<div class="container">
		
		<div class="row">
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
				<div class="top-seller-title"><h4 class="ft-medium">Top Seller</h4></div>
				<div class="ftr-content">
				
					<!-- includes/Home/home-14/seller.blade.php -->
					@include('includes.Home.home-14.seller')
					
				</div>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
				<div class="ftr-title"><h4 class="ft-medium">Featured Products</h4></div>
				<div class="ftr-content">
					
					<!-- includes/Home/home-14/featured.blade.php -->
					@include('includes.Home.home-14.featured')

				</div>
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
				<div class="ftr-title"><h4 class="ft-medium">Recent Products</h4></div>
				<div class="ftr-content">
					
					<!-- includes/Home/home-14/recent.blade.php -->
					@include('includes.Home.home-14.recent')

				</div>
			</div>
			
		</div>
		
	</div>
</section>
<!-- Top Seller Start -->

<!-- Brand Start -->
<section class="py-3 br-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="smart-brand">
					
					<!-- includes/Home/home-14/brand.blade.php -->
					@include('includes.Home.home-14.brand')
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Brand Start -->

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

@include('includes.footer')
			
@endsection