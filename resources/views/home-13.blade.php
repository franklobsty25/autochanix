<!-- resources/views/home-13.blade.php -->
@extends('layouts.main')

@section('title', 'Home-13 Page')

@section('content')

@include('includes.navbar5')
			
<!-- Hero Banner Start  -->
<div class="home-slider hide-navigation margin-bottom-0">

	<!-- includes/Home/home-12/slide10.blade.php -->
	@include('includes.Home.home-12.slide10')

</div>
<!-- Hero Banner End -->

<!-- Choose Category Start -->
<section class="middle pb-0">
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Recent Products</h2>
					<h3 class="ft-bold pt-3">Trending <span class="text-success">Products</span></h3>
				</div>
			</div>
		</div>
		
		<div class="row rows-products">
				
			<!-- includes/Home/home-12/trending2.blade.php -->
			@include('includes.Home.home-12.trending2')
			
			<!-- Single Item -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4 text-center">
				<button type="button" class="btn bg-dark">Explore More categories</button>
			</div>

		</div>
		
	</div>
</section>
<div class="clearfix"></div>
<!-- Choose Category End -->


<!-- Products Lists -->
<section class="space min">
	<div class="container">
	
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Popular Products</h2>
					<h3 class="ft-bold pt-3">Most Popular <span class="text-success">Products</span></h3>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				
				<ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
					
					<!-- includes/Home/home-12/nav2.blade.php -->
					@include('includes.Home.home-12.nav2')

				</ul>
				
				<div class="tab-content" id="myTabContent">
					
					<!-- All Content -->
					<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-12/products6.blade.php -->
								@include('includes.Home.home-12.products6')
								
							</div>
						</div>
					</div>
					
					<div class="tab-pane fade" id="mens" role="tabpanel" aria-labelledby="mens-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-12/products7.blade.php -->
								@include('includes.Home.home-12.products7')
								
							</div>
						</div>
					</div>
					
					<!-- Women Content -->
					<div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-12/products8.blade.php -->
								@include('includes.Home.home-12.products8')
								
							</div>
						</div>
					</div>
					
					<div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
						<div class="tab_product">
							<div class="row rows-products">
								
								<!-- includes/Home/home-12/products9.blade.php -->
								@include('includes.Home.home-12.products9')
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		
	</div>
</section>
<!-- Products List -->

<!-- Tag Wrap Start -->
<section class="bg-cover" style="background:url({{ asset('assets/img/middle-banner.jpg') }}) no-repeat;">
	<div class="ht-60"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<div class="tags_explore text-center">
					<h2 class="mb-0 text-white ft-bold">Best Deal of The Month</h2>
					<p class="text-light fs-lg mb-4">Explore Your Offers with Odex</p><p>
					<a href="#" class="btn btn-lg bg-white px-5 text-dark ft-medium">Explore Your Order</a>
				</p></div>
			</div>
		</div>
	</div>
	<div class="ht-60"></div>
</section>
<!-- Tag Wrap Start -->


<!-- Customer Review -->
<section class="middle">
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Testimonials</h2>
					<h3 class="ft-bold pt-3">Client <span class="text-success">Reviews</span></h3>
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

<!-- Customer Features -->
<section class="px-0 py-3 br-top">
	<div class="container">
		<div class="row">
			
			<!-- includes/Home/home-12/features3.blade.php -->
			@include('includes.Home.home-12.features3')
			
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

@include('includes.footer4')
			
@endsection