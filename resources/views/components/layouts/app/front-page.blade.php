<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Cyclux" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/gif" sizes="18x18">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body>

    <div class="preloader"></div>

    <div id="main-wrapper">

        <!-- Main Content -->
        <div class="content">
            <!-- includes.navbar6 -->
{{--            @include('frontend.components.navbar')--}}
            <livewire:frontend.components.navbar />
            {{ $slot }}
            <!-- includes/Home/index/quickview.blade.php -->
            <livewire:frontend.components.quickview />

            <!-- includes/Home/index/log.blade.php -->
            <livewire:frontend.components.login />

            <!-- includes/Home/index/search.blade.php -->
            <livewire:frontend.components.search />

            <!-- includes/Home/index/wishlist.blade.php -->
            <livewire:frontend.components.wishlist />

            <!-- includes/Home/index/cart.blade.php -->
            <livewire:frontend.components.cart />

            <!-- includes.footer -->
            <livewire:frontend.components.footer />
        </div>

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

    </div>

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
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- This page plugins -->

    <script>
        function openWishlist() {
            document.getElementById("Wishlist").style.display = "block";
        }
        function closeWishlist() {
            document.getElementById("Wishlist").style.display = "none";
        }
    </script>

    <script>
        function openCart() {
            document.getElementById("Cart").style.display = "block";
        }
        function closeCart() {
            document.getElementById("Cart").style.display = "none";
        }
    </script>

    <script>
        function openSearch() {
            document.getElementById("Search").style.display = "block";
        }
        function closeSearch() {
            document.getElementById("Search").style.display = "none";
        }
    </script>

    <script>
        (function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let birthday = "Oct 30, 2025 00:00:00",
                countDown = new Date(birthday).getTime();

            const daysEl = document.getElementById("days");
            const hoursEl = document.getElementById("hours");
            const minutesEl = document.getElementById("minutes");
            const secondsEl = document.getElementById("seconds");

            if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

            const x = setInterval(function () {
                let now = new Date().getTime(),
                    distance = countDown - now;

                daysEl.innerText = Math.floor(distance / day);
                hoursEl.innerText = Math.floor((distance % day) / hour);
                minutesEl.innerText = Math.floor((distance % hour) / minute);
                secondsEl.innerText = Math.floor((distance % minute) / second);

                if (distance < 0) {
                    let headline = document.getElementById("headline"),
                        countdown = document.getElementById("countdown"),
                        content = document.getElementById("content");

                    if (headline) headline.innerText = "It's my birthday!";
                    if (countdown) countdown.style.display = "none";
                    if (content) content.style.display = "block";

                    clearInterval(x);
                }
            }, 1000);
        })();
    </script>

    @isset($scripts)
        {{ $scripts }}
    @endisset

</body>

</html>
