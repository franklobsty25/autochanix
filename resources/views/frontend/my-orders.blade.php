<!-- resources/views/my-orders.blade.php -->
@extends('layouts.main')

@section('title', 'My-Orders Page')

@section('content')

@include('includes.navbar2')
			
<!-- Top Breadcrubms -->
<div class="gray py-3">
	<div class="container">
		<div class="row">
			<div class="colxl-12 col-lg-12 col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">My Order</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Top Breadcrubms -->

<!-- Dashboard Detail -->
<section class="middle">
	<div class="container">
		<div class="row align-items-start justify-content-between">
		
			<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
				<div class="d-block border rounded">
					<div class="dashboard_author px-2 py-5">
						<div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
							<img src="{{ asset('assets/img/team-1.jpg') }}" class="img-fluid circle" width="100" alt="" />
						</div>
						<div class="dash_caption">
							<h4 class="fs-md ft-medium mb-0 lh-1">Adam Wishnoi</h4>
							<span class="text-muted smalls">Australia</span>
						</div>
					</div>
					
					<div class="dashboard_author">
						<h4 class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">Dashboard Navigation</h4>
						<ul class="dahs_navbar">
							<li><a href="{{ url('/my-orders') }}" class="active"><i class="lni lni-shopping-basket me-2"></i>My Order</a></li>
							<li><a href="{{ url('/wishlist') }}"><i class="lni lni-heart me-2"></i>Wishlist</a></li>
							<li><a href="{{ url('/profile-info') }}"><i class="lni lni-user me-2"></i>Profile Info</a></li>
							<li><a href="{{ url('/addresses') }}"><i class="lni lni-map-marker me-2"></i>Addresses</a></li>
							<li><a href="{{ url('/payment-method') }}"><i class="lni lni-mastercard me-2"></i>Payment Method</a></li>
							<li><a href="{{ url('/login') }}"><i class="lni lni-power-switch me-2"></i>Log Out</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="col-12 col-md-12 col-lg-8 col-xl-8 text-center">
			
				<!-- Single Order List -->
				<div class="ord_list_wrap border mb-4 mfliud">
					<div class="ord_list_head gray d-flex align-items-center justify-content-between px-3 py-3">
						<div class="olh_flex">
							<p class="m-0 p-0"><span class="text-muted">Order Number</span></p>
							<h6 class="mb-0 ft-medium">#1250004123</h6>
						</div>	
						<div class="olh_flex">
							<a href="javascript:void(0);" class="btn btn-sm btn-dark">Track Order</a>
						</div>	
					</div>
					<div class="ord_list_body text-left">

						<!-- includes/Shop/Account-Dashboard/my-orders/order.blade.php -->
						@include('includes.Shop.Account-Dashboard.my-orders.order')
						
					</div>
					<div class="ord_list_footer d-flex align-items-center justify-content-between br-top px-3 text-start">
						<div class="col-xl-3 col-lg-3 col-md-4 olf_flex text-left px-0 py-2 br-right"><a href="javascript:void(0);" class="ft-medium fs-sm"><i class="ti-close me-2"></i>Cancel Order</a></div>
						<div class="col-xl-9 col-lg-9 col-md-8 pe-0 ps-2 py-2 olf_flex d-flex align-items-center justify-content-between">
							<div class="olf_flex_inner hide_mob"><p class="m-0 p-0"><span class="text-muted medium">Paid using debit card ending with 6472</span></p></div>
							<div class="olf_inner_right"><h5 class="mb-0 fs-sm ft-bold">Total: $400</h5></div>
						</div>
					</div>
				</div>
				<!-- End Order List -->
				
				<!-- Single Order List -->
				<div class="ord_list_wrap border mb-4">
					<div class="ord_list_head gray d-flex align-items-center justify-content-between px-3 py-3">
						<div class="olh_flex">
							<p class="m-0 p-0"><span class="text-muted">Order Number</span></p>
							<h6 class="mb-0 ft-medium">#1250004122</h6>
						</div>		
					</div>
					<div class="ord_list_body text-left">

						<!-- includes/Shop/Account-Dashboard/my-orders/order2.blade.php -->
						@include('includes.Shop.Account-Dashboard.my-orders.order2')
						
					</div>
					<div class="ord_list_footer d-flex align-items-center justify-content-between br-top px-3">
						<div class="col-xl-12 col-lg-12 col-md-12 ps-0 py-2 olf_flex d-flex align-items-center justify-content-between">
							<div class="olf_flex_inner"><p class="m-0 p-0"><span class="text-muted medium text-left">Paid using debit card ending with 6472</span></p></div>
							<div class="olf_inner_right"><h5 class="mb-0 fs-sm ft-bold">Total: $500</h5></div>
						</div>
					</div>
				</div>
				<!-- End Order List -->
				
			</div>
			
		</div>
	</div>
</section>
<!-- Dashboard Detail End -->

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