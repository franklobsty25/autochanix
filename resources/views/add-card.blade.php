<!-- resources/views/add-card.blade.php -->
@extends('layouts.main')

@section('title', 'Add-Card Page')

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
						<li class="breadcrumb-item active" aria-current="page">Add Payment Method</li>
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
				<div class="d-block border rounded mfliud-bot">
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
							<li><a href="{{ url('/my-orders') }}"><i class="lni lni-shopping-basket me-2"></i>My Order</a></li>
							<li><a href="{{ url('/wishlist') }}"><i class="lni lni-heart me-2"></i>Wishlist</a></li>
							<li><a href="{{ url('/profile-info') }}"><i class="lni lni-user me-2"></i>Profile Info</a></li>
							<li><a href="{{ url('/addresses') }}"><i class="lni lni-map-marker me-2"></i>Addresses</a></li>
							<li><a href="{{ url('/payment-method') }}" class="active"><i class="lni lni-mastercard me-2"></i>Payment Method</a></li>
							<li><a href="{{ url('/login') }}"><i class="lni lni-power-switch me-2"></i>Log Out</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="col-12 col-md-12 col-lg-8 col-xl-8">

				<!-- row -->
				<form method="POST" action="{{ url('/add-card') }}" class="row g-3">
				
					@csrf
					@if ($editId)
						<input type="hidden" name="edit_id" value="{{ $editId }}">
					@endif

					<div class="col-12 col-lg-12 col-xl-12 col-md-12 mb-3">
						<h4 class="ft-medium fs-lg">Add Debit / Credit Card</h4>
					</div>
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="form-group">
							<label class="text-dark mb-2">Card Holder Name *</label>
							<input type="text" name="card_holder" class="form-control" placeholder="Calvin English" value="{{ old('card_holder', $editCard['card_holder'] ?? '') }}">
						</div>
					</div>
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="form-group">
							<label class="text-dark mb-2">Card Number *</label>
							<input type="number" name="card_number" class="form-control" placeholder="5426 4586 5485 4759" value="{{ old('card_number', $editCard['card_number'] ?? '') }}">
						</div>
					</div>									
				
					<div class="col-lg-5 col-md-5 col-sm-6">
						<div class="form-group">
							<label class="text-dark mb-2">Expire Month *</label>
							<select name="expire_month" class="custom-select">
								@foreach ([
									'January','February','March','April','May','June',
									'July','August','September','October','November','December'
								] as $month)
									<option value="{{ $month }}" {{ old('expire_month', $editCard['expire_month'] ?? '') === $month ? 'selected' : '' }}>{{ $month }}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="col-lg-5 col-md-5 col-sm-6">
						<div class="form-group">
							<label class="text-dark mb-2">Expire Year *</label>
							<select name="expire_year" class="custom-select">
								@for ($y = 2025; $y <= 2030; $y++)
									<option value="{{ $y }}" {{ old('expire_year', $editCard['expire_year'] ?? '') == $y ? 'selected' : '' }}>{{ $y }}</option>
								@endfor
							</select>
						</div>
					</div>
					
					<div class="col-lg-2 col-md-2 col-sm-12">
						<div class="form-group">
							<label class="text-dark mb-2">CVC *</label>
							<input type="text" name="cvc" class="form-control" placeholder="CVV*" value="{{ old('cvc', $editCard['cvc'] ?? '') }}">
						</div>
					</div>										
					
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<input id="ak-2" class="checkbox-custom" name="ak-2" type="checkbox">
							<label for="ak-2" class="checkbox-custom-label">By Continuing, you ar'e agree to conditions</label>
						</div>
					</div>

					@if ($errors->any())
						<div class="col-12 text-danger">
							{{ $errors->first() }}
						</div>
					@endif
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="form-group text-center">
							<button type="submit" class="btn btn-dark full-width">
								{{ $editId ? 'Update Card' : 'Add & Save Card' }}
							</button>
						</div>
					</div>				
					
				</form>
				<!-- row -->
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