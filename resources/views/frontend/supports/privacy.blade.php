<!-- resources/views/privacy.blade.php -->
@extends('layouts.main')

@section('title', 'Privacy Page')

@section('content')

@include('includes.navbar6')

<!-- Top Breadcrubms -->
<div class="gray py-3">
	<div class="container">
		<div class="row">
			<div class="colxl-12 col-lg-12 col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Support</a></li>
						<li class="breadcrumb-item active" aria-current="page">Privacy</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Top Breadcrubms -->

<!-- About Us Detail -->
<section class="middle">
	<div class="container">
		<div class="row align-items-center justify-content-between">

			<div class="col-xl-11 col-lg-12 col-md-6 col-sm-12">
				<div class="abt_caption">
					<h2 class="ft-medium mb-4">Privacy & Policy</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<p class="mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- About Us End -->

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

@include('includes.footer')

@endsection
