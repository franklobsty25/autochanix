<x-slot:title>Details</x-slot>
<div>
    <!-- Top Breadcrubms -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <livewire:frontend.shop.components.nav :isDetails="true" />
                </div>
            </div>
        </div>
    </div>
    <!-- Top Breadcrubms -->

    <!-- Product Detail -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <div class="sp-loading"><img src="{{ asset('assets/img/product/7.jpg') }}" alt=""><br>LOADING IMAGES</div>
                    <div class="sp-wrap">
                        <a href="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/img/product/7.jpg') }}"><img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/img/product/7.jpg') }}" alt=""></a>

                        <!-- includes/Product/shops-single-v1/image.blade.php -->
                        {{-- @include('includes.Product.shops-single-v1.image') --}}

                    </div>
                </div>

                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="prd_details ps-xl-5">

                        <div class="prt_01 mb-2"><span class="text-success bg-light-success rounded px-2 py-1">Spare Parts</span></div>
                        <div class="prt_02 mb-3">
                            <h2 class="ft-bold mb-1">
                                @if(!empty($item['title']))
                                    {{ $item['title'] }}
                                @else
                                    Brake Pad Set
                                @endif
                            </h2>
                            <div class="text-left">
                                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="small">(412 Reviews)</span>
                                </div>
                                <div class="elis_rty"><span class="ft-medium text-muted line-through fs-md me-2">¢199</span><span class="ft-bold theme-cl fs-lg">¢
                                @if(!empty($item['price']))
                                            {{ $item['price'] }}
                                        @else
                                            110
                                        @endif
                            </span></div>
                            </div>
                        </div>

                        <div class="prt_03 mb-4">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        </div>

                        <div class="prt_04 mb-4">
                            <p class="d-flex align-items-center mb-1">Category:<strong class="fs-sm text-dark ft-medium ms-1">Spare Parts</strong></p>
                            <p class="d-flex align-items-center mb-0">SKU:<strong class="fs-sm text-dark ft-medium ms-1">KUMO42568</strong></p>
                        </div>

                        <div class="prt_05 mb-4">
                            <div class="form-row row g-3 mb-7">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <!-- Quantity -->
                                    <select class="mb-2 custom-select">
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <!-- Submit -->
                                    <button type="submit" class="btn btn-block custom-height bg-dark mb-2 w-100 snackbar-addcart">
                                        <i class="lni lni-shopping-basket me-2"></i>Add to Cart
                                    </button>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <!-- Wishlist -->
                                    <button class="btn custom-height btn-default btn-block mb-2 text-dark w-100 snackbar-wishlist" data-bs-toggle="button">
                                        <i class="lni lni-heart me-2"></i>Wishlist
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="prt_06">
                            <p class="mb-0 d-flex align-items-center">
                                <span class="me-4">Share:</span>
                                <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted me-2" href="#!">
                                    <i class="fab fa-twitter position-absolute"></i>
                                </a>
                                <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted me-2" href="#!">
                                    <i class="fab fa-facebook-f position-absolute"></i>
                                </a>
                                <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
                                    <i class="fab fa-pinterest-p position-absolute"></i>
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Detail End -->

    <!-- Product Description -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="description-tab" href="#description-tab" data-bs-toggle="tab" data-bs-target="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#information-tab" id="information-tab" data-bs-toggle="tab" role="tab" data-bs-target="#information" aria-controls="information" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#reviews-tab" id="reviews-tab" data-bs-toggle="tab" role="tab" data-bs-target="#reviews" aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Description Content -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="description_info">
                                <p class="p-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p class="p-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                            </div>
                        </div>

                        <!-- Additional Content -->
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="additionals">
                                <table class="table">
                                    <tbody>

                                    <!-- includes/Product/shops-single-v1/information.blade.php -->
                                    <livewire:frontend.shop.components.information />

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Reviews Content -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="reviews_info">

                                <!-- includes/Product/shops-single-v1/reviews.blade.php -->
                                <livewire:frontend.shop.components.reviews />

                            </div>

                            <livewire:frontend.shop.components.reviews-rating />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Description End -->


    <!-- Similar Products Start -->
    <section class="middle pt-0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Similar Products</h2>
                        <h3 class="ft-bold pt-3">Matching Products</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
{{--                    <div class="slide_items">--}}

                        <!-- includes/Home/home-5/deals.blade.php -->
                        <livewire:frontend.shop.components.matching-products />

{{--                    </div>--}}
                </div>
            </div>

        </div>
    </section>
    <!-- Similar Products Start -->

    <!-- Customer Features -->
    <section class="px-0 py-3 br-top">
        <div class="container">
            <div class="row">

                <!-- includes/Home/index/features.blade.php -->
                <livewire:frontend.components.features />

            </div>
        </div>
    </section>
</div>
