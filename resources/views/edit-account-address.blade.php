<!-- resources/views/edit-account-address.blade.php -->
@extends('layouts.main')

@section('title', 'Edit-Account-Address Page')

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
						<li class="breadcrumb-item active" aria-current="page">Add New Address</li>
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
							<li><a href="{{ url('/addresses') }}" class="active"><i class="lni lni-map-marker me-2"></i>Addresses</a></li>
							<li><a href="{{ url('/payment-method') }}"><i class="lni lni-mastercard me-2"></i>Payment Method</a></li>
							<li><a href="{{ url('/login') }}"><i class="lni lni-power-switch me-2"></i>Log Out</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="col-12 col-md-12 col-lg-8 col-xl-8">
				
				<!-- row -->
				<form method="POST" action="{{ $edit_index !== null ? route('addresses.update', $edit_index) : route('addresses.store') }}">
					@csrf
					@if($edit_index !== null)
						@method('PUT')
					@endif
				
					<input type="hidden" name="edit_index" value="{{ $edit_index !== null ? $edit_index : '' }}">

					<div class="row">
						<div class="col-12 col-lg-12 col-xl-12 col-md-12 mb-3">
							<h4 class="ft-medium fs-lg">{{ $edit_index !== null ? 'Edit Address' : 'Add New Address' }}</h4>
						</div>
					</div>
					
					<div class="row g-3 mb-2">
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">First Name *</label>
								<input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name', $address['first_name']) }}">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">Last Name *</label>
								<input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name', $address['last_name']) }}">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">Email *</label>
								<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email', $address['email']) }}">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">Company</label>
								<input type="text" class="form-control" name="company" placeholder="Company Name (optional)" value="{{ old('company', $address['company']) }}">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">Address 1 *</label>
								<input type="text" class="form-control" name="address1" placeholder="Address 1" value="{{ old('address1', $address['address1']) }}">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">Address 2</label>
								<input type="text" class="form-control" name="address2" placeholder="Address 2" value="{{ old('address2', $address['address2']) }}">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">Country *</label>
								<select class="custom-select" name="country">
									@foreach (['India', 'United State', 'United Kingdom', 'China', 'France'] as $country)
										<option value="{{ $country }}" {{ $address['country'] == $country ? 'selected' : '' }}>
											{{ $country }}
										</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">City / Town *</label>
								<input type="text" class="form-control" name="city" placeholder="City / Town" value="{{ old('city', $address['city']) }}">
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">ZIP / Postcode *</label>
								<input type="text" class="form-control" name="zip" placeholder="Zip / Postcode" value="{{ old('zip', $address['zip']) }}">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label class="text-dark mb-2">Mobile Number *</label>
								<input type="text" class="form-control" name="phone" placeholder="Mobile Number" value="{{ old('phone', $address['phone']) }}">
							</div>
						</div>
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<input type="hidden" name="delivery" value="0">
								<input id="delivery" class="checkbox-custom" name="delivery" type="checkbox" value="1" {{ old('delivery', $address['delivery']) ? 'checked' : '' }}>
								<label for="delivery" class="checkbox-custom-label">Set Default delivery address</label>
							</div>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="form-group text-center">
								<button type="submit" name="submit_address" class="btn btn-dark full-width">{{ $edit_index !== null ? 'Update' : 'Save' }} Address</button>
							</div>
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