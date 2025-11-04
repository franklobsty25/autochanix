<x-layouts.frontend :title="__('Shop')">
<!-- Shop Style 1 -->
<section class="bg-cover" style="background:url({{ asset('assets/img/banner-12.png') }}) no-repeat;">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="text-center py-5 mt-3 mb-3">
					<h1 class="ft-medium mb-3">Shop</h1>
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
					</ol>
				</nav>
			</div>

			<!-- includes/Shop/shop-style-1/filter.blade.php -->
			@include('includes.Shop.shop-style-1.filter')

		</div>

	</div>
</section>
<!-- Filter Wrap -->


<!-- All Product List -->
<section class="middle">
	<div class="container">

		<!-- row -->
		<div class="row align-items-center rows-products">

			<!-- includes/Home/index/product.blade.php -->
			@include('includes.Home.index.product')

			<!-- includes/Shop/shop-style-1/product6.blade.php -->
			{{-- @include('includes.Shop.shop-style-1.product6') --}}

		</div>
		<!-- row -->

		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 text-center">
				<a href="#" class="btn stretched-links borders m-auto"><i class="lni lni-reload me-2"></i>Load More</a>
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
</x-layouts.frontend>
