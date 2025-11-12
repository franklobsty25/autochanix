<x-slot:title>Shopping Cart</x-slot>
<div>
    <!-- Top Breadcrubms -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Support</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Breadcrubms -->

    <!-- Product Detail -->
    <section class="middle">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center d-block mb-5">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>

            <div class="cart-content-wrapper">

                @php
                    $cart = $cart ?? session('cart', []);
                    $subtotal = $subtotal ?? 0;
                @endphp

                @if(session('cart') && count(session('cart')) > 0)

                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-7 col-md-12">
                            @foreach(session('cart') as $item)
                                @php
                                    $subtotal += $item['price'] * $item['quantity'];
                                @endphp
                                <div class="cart-item-wrapper cart-item-{{ $item['id'] }}">
                                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">

                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <!-- Image -->
                                                    <a href="javascript:void(0);"><img src="{{ $item['image'] }}" alt="..." class="img-fluid"></a>
                                                </div>
                                                <div class="col d-flex align-items-center justify-content-between">
                                                    <div class="cart_single_caption ps-2">
                                                        <h4 class="product_title fs-md ft-medium mb-1 lh-1">{{ $item['title'] }}</h4>
                                                        <p class="mb-1 lh-1"><span class="text-dark">Size: {{ $item['size'] }}</span></p>
                                                        <p class="mb-3 lh-1"><span class="text-dark">Color: {{ $item['color'] }}</span></p>
                                                        <h4 class="fs-md ft-medium mb-3 lh-1 price" data-price="{{ $item['price'] }}">
                                                            ${{ number_format($item['price'] * $item['quantity'], 2) }}
                                                        </h4>
                                                        <select class="form-select quantity-select" data-id="{{ $item['id'] }}">
                                                            @for ($i = 1; $i <= 10; $i++)
                                                                <option value="{{ $i }}" {{ $item['quantity'] == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="fls_last">
                                                        <button class="close_cart_item gray" data-id="{{ $item['id'] }}">
                                                            <i class="ti-close"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach

                            <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                                <div class="col-12 col-md-7">
                                    <!-- Coupon -->
                                    <form class="mb-7 mb-md-0">
                                        <label class="fs-sm ft-medium text-dark">Coupon code:</label>
                                        <div class="row form-row">
                                            <div class="col">
                                                <input class="form-control" type="text" placeholder="Enter coupon code*">
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-dark" type="submit">Apply</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-md-auto mfliud">
                                    <button class="btn stretched-links borders">Update Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card mb-4 gray mfliud">
                                <div class="card-body">
                                    @php
                                        $tax = 10.10;
                                        $total = $subtotal + $tax;
                                    @endphp
                                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                        <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                            <span>Subtotal</span>
                                            <span class="ms-auto text-dark ft-medium" id="cart-subtotal">${{ number_format($subtotal, 2) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                            <span>Tax</span>
                                            <span class="ms-auto text-dark ft-medium" id="cart-tax">${{ number_format($tax, 2) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex text-dark fs-sm ft-regular">
                                            <span>Total</span>
                                            <span class="ms-auto text-dark ft-medium" id="cart-total">${{ number_format($total, 2) }}</span>
                                        </li>
                                        <li class="list-group-item fs-sm text-center">
                                            Shipping cost calculated at Checkout *
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <a class="btn btn-block btn-dark w-100 mb-3" href="{{ url('/checkout') }}">Proceed to Checkout</a>

                            <a class="btn-link text-dark ft-medium" href="{{ url('/') }}">
                                <i class="ti-back-left me-2"></i> Continue Shopping
                            </a>
                        </div>
                    </div>
                @else
                    <div class="d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 400px;">
                        <div>
                            <img src="{{ asset('assets/img/cart.png') }}" class="img-fluid" width="100" alt="" />
                        </div>
                        <h2 class="mt-2 mb-2 ft-bold">Your Cart is empty!</h2>
                        <p class="text-muted fs-6">Your Cart is empty please go to the shop page and Buy your favourite items.</p>
                        <div class="position-relative text-center">
                            <a href="{{ url('/shops-style-1') }}" class="btn stretched-links borders">Shop Now</a>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </section>
    <!-- Product Detail End -->

    <!-- Customer Features -->
    <section class="px-0 py-3 br-top">
        <div class="container">
            <div class="row">

                <!-- includes/blog-detail/features.blade.php -->
                @include('frontend.components.features')

            </div>
        </div>
    </section>
    <!-- Customer Features -->
</div>
