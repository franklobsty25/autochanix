<!-- Wishlist -->
<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;position:fixed;z-index:99999" id="Wishlist">
    <div class="rightMenu-scroll">
        <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
            <h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
            <button onclick="closeWishlist()" class="close_sidebar"><i class="ti-close"></i></button>
        </div>
        <div class="right-ch-sideBar" id="wishlist-content">
            
            @php
                $subtotal = 0;
            @endphp
            <div class="wishlist_select_items py-2">

            @if(session('wishlist') && count(session('wishlist')) > 0)
                @foreach(session('wishlist') as $item)
                    @php
                        $subtotal += $item['price'] * $item['quantity'];
                    @endphp
                    <!-- Single Item -->
                    <div class="wishlist-item-wrapper wishlist-item-{{ $item['id'] }} d-flex align-items-center justify-content-between br-bottom px-3 py-3" data-id="{{ $item['id'] }}">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="#"><img src="{{ $item['image'] }}" width="60" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="cart_single_caption ps-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">{{ $item['title'] }}</h4>
                                <p class="mb-1"><span class="text-dark ft-medium small">{{ $item['size'] }}</span>, <span class="text-dark small">{{ $item['color'] }}</span></p>
                                <p class="mb-1">
                                    <span class="font-medium text-gray-800 bg-gray-200">Qty: {{ $item['quantity'] }}</span>
                                </p>
                                <h4 class="fs-md ft-medium mb-0 lh-1 price" data-price="{{ $item['price'] }}">${{ number_format($item['price'] * $item['quantity'], 2) }}</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                            <button class="close_wishlist_item gray" data-id="{{ $item['id'] }}">
                                <i class="ti-close"></i>
                            </button>
                            <button class="add_wishlist_item gray">
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                
                @endforeach
            @else
                <p class="px-3 py-3">Your wishlist is empty.</p>
            @endif
            </div>
            
            <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                <h6 class="mb-0">Subtotal</h6>
                <h3 class="mb-0 ft-medium wishlist-subtotal" id="wishlist-subtotal">${{ number_format($subtotal, 2) }}</h3>
            </div>
            
            <div class="cart_action px-3 py-3">
                <div class="form-group">
                    <button onclick="window.location.href='{{ url('/wishlist') }}'" class="btn d-block full-width btn-dark">Edit or View</button>
                </div>
            </div>
            
        </div>
    </div>
</div>