<!-- resources/views/layouts/no-header.blade.php -->

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Shreethemes" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>waves</title>
        <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/gif" sizes="18x18">

        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    </head>

    <body>

       <div class="preloader"></div>

        <div id="main-wrapper">

            <!-- Main Content -->
            <div class="content">
                @yield('content')
            </div>

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

        </div>
		<!-- End Wrapper -->

		<!-- All Jquery -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
		<script src="{{ asset('assets/js/slick.js') }}"></script>
		<script src="https://unpkg.com/wicg-inert@3.1.1/dist/inert.min.js"></script>
		<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
		<script src="{{ asset('assets/js/lightbox.js') }}"></script>
		<script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
		<script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
		<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>
		<script src="{{ asset('assets/js/popup.js') }}"></script>
		<script src="{{ asset('assets/js/contact.js') }}"></script>
		<script src="{{ asset('assets/js/move_to_cart.js') }}"></script>

		<!-- This page plugins -->
	</body>
</html>
