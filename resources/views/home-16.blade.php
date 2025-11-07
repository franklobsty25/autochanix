<!-- resources/views/home-16.blade.php -->
@extends('layouts.main')

@section('title', 'Home-16 Page')

@section('content')

@include('includes.navbar7')

<!-- Hero Banner  Start  -->
<div class="home-slider margin-bottom-0">

	<!-- includes/Home/home-16/slide13.blade.php -->
	@include('includes.Home.home-16.slide13')

</div>
<!-- Hero Banner  End -->

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

			<!-- includes/Home/home-16/products11.blade.php -->
			@include('includes.Home.home-16.products11')

		</div>

		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="position-relative text-center">
					<a href="{{ url('/shops-style-1') }}" class="btn stretched-links borders">Explore More<i class="lni lni-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Product List -->

<!-- Tag Wrap Start -->
<section class="bg-cover" style="background:url({{ asset('assets/img/bg-3.jpg') }}) no-repeat;">
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

					<!-- includes/Home/home-16/deals3.blade.php -->
					@include('includes.Home.home-16.deals3')

				</div>
			</div>
		</div>

	</div>
</section>
<!-- Good Deals Start -->

<!-- Customer Features -->
<section class="px-0 py-3 br-top">
	<div class="container">
		<div class="row">

			<!-- includes/Home/index/features.blade.php -->
			@include('includes.Home.index.features2')

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

@include('includes.footer')

@endsection
