<!-- resources/views/home-10.blade.php -->
@extends('layouts.main')

@section('title', 'Home-10 Page')

@section('content')

@include('includes.navbar3')

<!-- Hero Banner  Start  -->
<div class="home-slider hide-navigation margin-bottom-0">

	<!-- includes/Home/home-10/slide8.blade.php -->
	@include('includes.Home.home-10.slide8')

</div>
<!-- Hero Banner  End -->

<!-- Category Style 1 -->
<section class="p-0">
	<div class="container-fluid">
		<div class="row g-0">

			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
				<!-- row -->
				<div class="row no-gutters">

					<!-- includes/Home/home-10/style.blade.php -->
					@include('includes.Home.home-10.style')

				</div>

			</div>

			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="single_cats">
					<a href="#" class="cards card-overflow card-scale lg_height">
						<div class="bg-image" style="background:url({{ asset('assets/img/c-1.png') }})no-repeat;"></div>
						<div class="ct_body">
							<div class="ct_body_caption left">
								<h2 class="m-0 ft-bold lh-1 fs-md text-upper">Sofa Sets</h2>
								<span>610 Items</span>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
				<!-- row -->
				<div class="row no-gutters">

					<!-- includes/Home/home-10/style2.blade.php -->
					@include('includes.Home.home-10.style2')

				</div>
				<!-- /row -->

			</div>

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
		<div class="row align-items-center">

			<!-- includes/Home/home-10/trendy.blade.php -->
			@include('includes.Home.home-10.trendy')

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

<!-- Deals of The Day -->
<section class="bg-cover" style="background:url({{ asset('assets/img/bg-2.jpg') }}) no-repeat;" data-overlay="1">
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

				<!-- includes/Home/home-10/insta2.blade.php -->
				@include('includes.Home.home-10.insta2')

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
