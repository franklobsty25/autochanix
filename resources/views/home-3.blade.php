<!-- resources/views/home-3.blade.php -->
@extends('layouts.main')

@section('title', 'Home-3 Page')

@section('content')

@include('includes.navbar2')

<!-- Hero Banner Start  -->
<div class="home-slider margin-bottom-0">

	<!-- includes/Home/home-3/slide2.blade.php -->
	@include('includes.Home.home-3.slide2')

</div>
<!-- Hero Banner End -->

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

		<div class="row align-items-center justify-content-center">

			<!-- includes/Home/home-3/categories2.blade.php -->
			@include('includes.Home.home-3.categories2')

		</div>

	</div>
</section>
<!-- All Category  -->

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

								<!-- includes/Home/home-3/products.blade.php -->
								@include('includes.Home.home-3.products')

							</div>
						</div>
					</div>

					<div class="tab-pane fade show active" id="mens" role="tabpanel" aria-labelledby="mens-tab">
						<div class="tab_product">
							<div class="row rows-products">

								<!-- includes/Home/home-3/products2.blade.php -->
								@include('includes.Home.home-3.products2')

							</div>
						</div>
					</div>

					<!-- Women Content -->
					<div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
						<div class="tab_product">
							<div class="row rows-products">

								<!-- includes/Home/home-3/products3.blade.php -->
								@include('includes.Home.home-3.products3')

							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
						<div class="tab_product">
							<div class="row rows-products">

								<!-- includes/Home/home-3/products4.blade.php -->
								@include('includes.Home.home-3.products4')

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

	</div>
</section>
<!-- Products List -->

<!-- Product List -->
<section class="middle gray">
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
					<a href="{{ url('/shops-style-1') }}" class="btn stretched-links borders">Explore More<i class="lni lni-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Product List -->

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

<!-- includes/Home/index/popup-overlay.blade.php -->
@include('includes.Home.index.popup-overlay')

@include('includes.footer')

@endsection
