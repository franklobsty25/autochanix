<!-- resources/views/signup.blade.php -->
@extends('layouts.main')

@section('title', 'Signup Page')

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
						<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">SignUp</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Top Breadcrubms -->

<!-- Login Detail -->
<section class="middle">
	<div class="container">
		<div class="row align-items-start justify-content-center">
			
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
				<form class="border p-3 rounded">
					
					<div class="row g-3 mb-3">
						<div class="form-group col-md-6">
							<label class="mb-2">First Name *</label>
							<input type="text" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group col-md-6">
							<label class="mb-2">Last Name</label>
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
					</div>
					
					<div class="form-group mb-3">
						<label class="mb-2">Email *</label>
						<input type="text" class="form-control" placeholder="Username*">
					</div>
					
					<div class="row g-3 mb-3">
						<div class="form-group col-md-6">
							<label class="mb-2">Password *</label>
							<input type="password" class="form-control" placeholder="Password*">
						</div>
						
						<div class="form-group col-md-6">
							<label class="mb-2">Confirm Password *</label>
							<input type="password" class="form-control" placeholder="Confirm Password*">
						</div>
					</div>
					
					<div class="form-group mb-3">
						<p>By registering your details, you agree with our Terms & Conditions, and Privacy and Cookie Policy.</p>
					</div>
					
					<div class="form-group mb-3">
						<div class="d-flex align-items-center justify-content-between">
							<div class="flex-1">
								<input id="ddd" class="checkbox-custom" name="ddd" type="checkbox">
								<label for="ddd" class="checkbox-custom-label">Sign me up for the Newsletter!</label>
							</div>		
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Create An Account</button>
					</div>
                    <div class="text-center mt-3">
						<span class="text-slate-400 me-2">Already have an account ?</span> <a href="{{ url('/login') }}" class="text-slate-900 dark:text-white font-bold inline-block">Sign in</a>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</section>
<!-- Login End -->

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