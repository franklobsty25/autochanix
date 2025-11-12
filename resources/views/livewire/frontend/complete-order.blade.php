<x-slot:title>Complete Order</x-slot>
<div>
    <!-- Top Breadcrubms -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <livewire:frontend.components.nav currentPage="Complete Order" />
                </div>
            </div>
        </div>
    </div>
    <!-- Top Breadcrubms -->

    <!-- Product Detail -->
    <section class="middle">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-5 text-center">

                    <!-- Icon -->
                    <div class="p-4 d-inline-flex align-items-center justify-content-center circle bg-light-success text-success mx-auto mb-4"><i class="lni lni-heart-filled fs-lg"></i></div>
                    <!-- Heading -->
                    <h2 class="mb-2 ft-bold">Your Order is Completed!</h2>
                    <!-- Text -->
                    <p class="ft-regular fs-md mb-5">Your order <span class="text-body text-dark">#965471202</span> has been completed. Your order details are shown for your personal accont.</p>
                    <!-- Button -->
                    <a class="btn btn-dark" href="{{ url('/login') }}">Track Your Orders</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Product Detail End -->

    <!-- Customer Features -->
    <section class="px-0 py-3 br-top">
        <div class="container">
            <div class="row">

                <!-- includes/blog-detail/features.blade.php -->
                <livewire:frontend.components.features />

            </div>
        </div>
    </section>
    <!-- Customer Features -->
</div>
