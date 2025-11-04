<!-- resources/views/home-4.blade.php -->
@extends('layouts.main')

@section('title', 'Home-4 Page')

@section('content')

@include('includes.navbar4')
			
<!-- Hero Banner Start  -->
<div class="home-slider hide-navigation margin-bottom-0">

	<!-- includes/Home/home-4/slide3.blade.php -->
	@include('includes.Home.home-4.slide3')

</div>
<!-- Hero Banner End -->

<!-- Category Style  -->
<section class="p-0">
	<div class="container">
		<div class="row overlio">

			<!-- includes/Home/home-4/category4.blade.php -->
			@include('includes.Home.home-4.category4')
			
		</div>
	</div>
</section>
<!-- Category Style 1 -->

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
<section class="bg-cover" style="background:url({{ asset('assets/img/banner-c.jpg') }}) no-repeat;" data-overlay="5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
				
				<div class="deals_wrap text-center">
					<h4 class="ft-medium text-light">Get up to -40% Off</h4>
					<h2 class="ft-bold text-light">Only Summer Collections</h2>
					<p class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
					<div class="mt-5">
						<a href="#" class="btn btn-white stretched-links">Start Shopping <i class="lni lni-arrow-right"></i></a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- Deals of The Day -->

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

@include('includes.footer')
			
@endsection