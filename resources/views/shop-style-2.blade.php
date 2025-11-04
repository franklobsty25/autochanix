<!-- resources/views/shop-style-2.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-Style-2 Page')

@section('content')

@include('includes.navbar')
			
<!-- Shop Style 1 -->
<section class="bg-cover" style="background:url({{ asset('assets/img/bg.jpg') }}) no-repeat;">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="text-center py-5 mt-3 mb-3">
					<h1 class="ft-medium mb-3">Shop</h1>
					<ul class="shop_categories_list m-0 p-0">
						<li><a href="#">Men</a></li>
						<li><a href="#">Speakers</a></li>
						<li><a href="#">Women</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Shop Style 1 -->


<!-- Filter Wrap Style 1 -->
<section class="py-2 br-bottom br-top">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Shop</a></li>
						<li class="breadcrumb-item active" aria-current="page">Women's</li>
					</ol>
				</nav>
			</div>
			
			<!-- includes/Shop/shop-style-1/filter.blade.php -->
			@include('includes.Shop.shop-style-1.filter')

		</div>
		
		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="collapse" id="filterBox">
					<div class="card py-3 b-0">
						<div class="row">
							
							<!-- includes/Shop/shop-style-1/choose.blade.php -->
							@include('includes.Shop.shop-style-1.choose')
							
							<!-- includes/Shop/shop-style-1/size.blade.php -->
							@include('includes.Shop.shop-style-1.size')
							
							<!-- includes/Shop/shop-style-1/colors.blade.php -->
							@include('includes.Shop.shop-style-1.colors')
							
							<!-- includes/Shop/shop-style-1/price.blade.php -->
							@include('includes.Shop.shop-style-1.price')
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- Filter Wrap -->


<!-- All Product List -->
<section class="middle">
	<div class="container">
	
		<div class="row align-items-center rows-products">
			
			<!-- includes/Home/home-2/product3.blade.php -->
			@include('includes.Home.home-2.product3')

			<!-- includes/Shop/shop-style-2/product7.blade.php -->
			@include('includes.Shop.shop-style-2.product7')
			
		</div>
		
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 text-center">
				<a href="" class="btn stretched-links borders m-auto"><i class="lni lni-reload me-2"></i>Load More</a>
			</div>
		</div>
		
	</div>
</section>
<!-- All Product List -->

<!-- Customer Features -->
<section class="px-0 py-3 br-top">
	<div class="container">
		<div class="row">
			
			<!-- includes/Home/index/features2.blade.php -->
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