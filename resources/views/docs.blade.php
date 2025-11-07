<!-- resources/views/docs.blade.php -->
@extends('layouts.main')

@section('title', 'Docs Page')

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
						<li class="breadcrumb-item"><a href="#">Help</a></li>
						<li class="breadcrumb-item active" aria-current="page">Docs</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Top Breadcrubms -->

<!-- Docs Detail -->
<section class="middle">
	<div class="container">
		<div class="row align-items-start justify-content-between">

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
				<div class="nav flex-column nav-pills border rounded style-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">

					<!-- includes/Docs/nav-link.blade.php -->
					@include('includes.Docs.nav-link')

				</div>
			</div>

			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
				<div class="tab-content" id="v-pills-tabContent">
					<!-- alert -->
					<div class="tab-pane fade show active" id="v-alert" role="tabpanel" aria-labelledby="v-alert-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/alert.blade.php -->
								@include('includes.Docs.alert')

							</div>

						</div>
					</div>

					<!-- avaters -->
					<div class="tab-pane fade" id="v-avaters" role="tabpanel" aria-labelledby="v-avaters-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/avatar.blade.php -->
								@include('includes.Docs.avatar')

							</div>

						</div>
					</div>

					<!-- badges -->
					<div class="tab-pane fade" id="v-badges" role="tabpanel" aria-labelledby="v-badges-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="badge_wpr mb-4">
									<h4>Badges</h4>

									<!-- includes/Docs/badges.blade.php -->
									@include('includes.Docs.badges')

								</div>

								<div class="badge_wpr">
									<h4>Link Badges</h4>

									<!-- includes/Docs/link-badges.blade.php -->
									@include('includes.Docs.link-badges')

								</div>
							</div>

						</div>
					</div>

					<!-- breadcrumb -->
					<div class="tab-pane fade" id="v-breadcrumb" role="tabpanel" aria-labelledby="v-breadcrumb-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/breadcrumb.blade.php -->
								@include('includes.Docs.breadcrumb')

							</div>

						</div>
					</div>

					<!-- buttons -->
					<div class="tab-pane fade" id="v-buttons" role="tabpanel" aria-labelledby="v-buttons-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="badge_wpr mb-4">
									<h4>Buttons</h4>

									<!-- includes/Docs/buttons.blade.php -->
									@include('includes.Docs.buttons')

								</div>

								<div class="badge_wpr mb-4">
									<h4>Outline Buttons</h4>

									<!-- includes/Docs/outline-buttons.blade.php -->
									@include('includes.Docs.outline-buttons')

								</div>

								<div class="badge_wpr mb-4">
									<h4>Simple Buttons</h4>
									<a href="{{ url('/shops-style-1') }}" class="btn stretched-link borders">Explore More<i class="lni lni-arrow-right ms-2"></i></a>
									<a href="{{ url('/shops-style-1') }}" class="btn btn-white stretched-link hover-black">Explore More<i class="lni lni-arrow-right ms-2"></i></a>
								</div>

							</div>

						</div>
					</div>

					<!-- form -->
					<div class="tab-pane fade" id="v-form" role="tabpanel" aria-labelledby="v-form-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/form.blade.php -->
								@include('includes.Docs.form')

							</div>

						</div>
					</div>

					<!-- list -->
					<div class="tab-pane fade" id="v-lists" role="tabpanel" aria-labelledby="v-lists-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/list.blade.php -->
								@include('includes.Docs.list')

							</div>

						</div>
					</div>

					<!-- tab -->
					<div class="tab-pane fade" id="v-tabss" role="tabpanel" aria-labelledby="v-tabss-tab">
						<div class="row">

							<!-- includes/Docs/tab.blade.php -->
							@include('includes.Docs.tab')

						</div>
					</div>

					<!-- accordion -->
					<div class="tab-pane fade" id="v-accordions" role="tabpanel" aria-labelledby="v-accordions-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div id="accordion" class="accordion">

									<!-- includes/Docs/accordion.blade.php -->
									@include('includes.Docs.accordion')

								</div>
							</div>

						</div>
					</div>

					<!-- pagination -->
					<div class="tab-pane fade" id="v-pagination" role="tabpanel" aria-labelledby="v-pagination-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<nav aria-label="Page navigation example">

									<!-- includes/Docs/pagination.blade.php -->
									@include('includes.Docs.pagination')

								</nav>
							</div>

						</div>
					</div>

					<!-- typography -->
					<div class="tab-pane fade" id="v-typography" role="tabpanel" aria-labelledby="v-typography-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/typography.blade.php -->
								@include('includes.Docs.typography')

							</div>

						</div>
					</div>

					<!-- progressbar -->
					<div class="tab-pane fade" id="v-progressbar" role="tabpanel" aria-labelledby="v-progressbar-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/progressbar.blade.php -->
								@include('includes.Docs.progressbar')

							</div>

						</div>
					</div>

					<!-- utility -->
					<div class="tab-pane fade" id="v-utility" role="tabpanel" aria-labelledby="v-utility-tab">
						<div class="row">

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

								<!-- includes/Docs/utility.blade.php -->
								@include('includes.Docs.utility')

							</div>

						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>
<!-- Docs End -->

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
