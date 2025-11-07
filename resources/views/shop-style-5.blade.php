<!-- resources/views/shops-style-5.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-Style-5 Page')

@section('content')

@include('includes.navbar2')

<!-- Shop Style 1 -->
<section class="bg-cover" style="background:url({{ asset('assets/img/banner-2.png') }}) no-repeat;">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="text-left py-5 mt-3 mb-3">
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
<section class="py-3 br-bottom br-top">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Shop</a></li>
						<li class="breadcrumb-item active" aria-current="page">Women's</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- Filter Wrap -->

<!-- All Product List -->
<section class="middle">
	<div class="container">
		<div class="row">

			<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 p-xl-0">
				<div class="search-sidebar sm-sidebar border">
					<div class="search-sidebar-body">

						<!-- Single Option -->
						<div class="single_search_boxed">
							<div class="widget-boxed-header px-3">
								<h4 class="mt-3">Categories</h4>
							</div>
							<div class="widget-boxed-body">
								<div class="side-list no-border">
									<div class="filter-card" id="shop-categories">

										<!-- includes/Shop/shops-style-5/shops-categories.blade.php -->
										@include('includes.Shop.shop-style-5.shop-categories')

									</div>
								</div>
							</div>
						</div>

						<!-- includes/Shop/shops-style-5/option.blade.php -->
						@include('includes.Shop.shop-style-5.option')

					</div>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="border mb-3 mfliud">
							<div class="row align-items-center py-2 m-0">
								<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
									<h6 class="mb-0">315 Items Found</h6>
								</div>

								<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
									<div class="filter_wraps d-flex align-items-center justify-content-end m-start">
										<div class="single_fitres me-2 br-right">
											<select class="custom-select simple">
												<option value="1" selected="">Default Sorting</option>
												<option value="2">Sort by price: Low price</option>
												<option value="3">Sort by price: Hight price</option>
												<option value="4">Sort by rating</option>
												<option value="5">Sort by trending</option>
											</select>
										</div>
										<div class="single_fitres">
											<a href="{{ url('/shops-style-5') }}" class="simple-button active me-1"><i class="ti-layout-grid2"></i></a>
											<a href="{{ url('/shops-list-sidebar') }}" class="simple-button"><i class="ti-view-list"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row align-items-center rows-products">

					<!-- includes/Shop/shops-style-5/product10.blade.php -->
					@include('includes.Shop.shop-style-5.product10')

				</div>
				<!-- row -->

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center">
						<a href="" class="btn stretched-links borders m-auto"><i class="lni lni-reload me-2"></i>Load More</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- All Product List -->

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
