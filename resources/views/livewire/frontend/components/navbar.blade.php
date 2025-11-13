<div>
    <div class="headd-sty">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
                        <div class="headd-sty-left d-flex align-items-center">
                            <div class="headd-sty-01">
                                <a class="nav-brand py-0" href="{{ route('home') }}" wire:navigate>
                                    <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="" />
                                </a>
                            </div>
                            <div class="headd-sty-02 ms-3">
                                <form class="bg-white rounded-md border-bold">
                                    <div class="input-group">
                                        <div class="input-group-prepend border-end z-1 hd-small">
                                            <div class="form-group mb-0 position-relative">
                                                <select class="custom-select b-0">
                                                    <option>Choose Category</option>
                                                    <option value="2">Air Filter</option>
                                                    <option value="6">Battery</option>
                                                    <option value="3">Brakes</option>
                                                    <option value="5">Car Suspension</option>
                                                    <option value="4">Engine</option>
                                                    <option value="7">Ignition</option>
                                                    <option value="7">Suspension</option>
                                                    <option value="7">Transmission</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control custom-height b-0" placeholder="Search for products..." />
                                        <div class="input-group-append">
                                            <div class="input-group-text border-0 p-0"><button class="btn bg-white text-danger custom-height rounded px-3" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="headd-sty-last">
                            <ul class="nav-menu nav-menu-social align-to-right align-items-center d-flex">
                                <li>
                                    <div class="call d-flex align-items-center text-left">
                                        <i class="lni lni-phone fs-xl"></i>
                                        <span class="text-muted small ms-3">Call Us Now:<strong class="d-block text-dark fs-md">0(800) 123-456</strong></span>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="openWishlist()">
                                        <i class="far fa-heart fs-lg"></i>
                                        <span class="wishlist-count dn-counter bg-success">
                                        {{ count(session('wishlist', [])) }}
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="openCart()">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <i class="fas fa-shopping-basket fs-lg"></i>
                                            <span class="cart-count dn-counter theme-bg">
                                            {{ count(session('cart', [])) }}
                                        </span>
                                            <div class="text-left ms-1">
                                                <div class="text-muted small lh-1">Total</div>
                                                <div class="primary-text cart-subtotal"><span class="fs-md ft-medium"><span class="prc-currency">$</span>0.00</span></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#login">
                                        <i class="lni lni-user fs-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile_nav">
                            <ul class="d-flex">
                                <li>
                                    <a href="javascript:void(0);" onclick="openSearch()">
                                        <i class="lni lni-search-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#login">
                                        <i class="lni lni-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="openWishlist()">
                                        <i class="lni lni-heart"></i>
                                        <span class="wishlist-count dn-counter">
                                        {{ count(session('wishlist', [])) }}
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="openCart()">
                                        <i class="lni lni-shopping-basket"></i>
                                        <span class="cart-count dn-counter">
                                        {{ count(session('cart', [])) }}
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Navigation -->
    <div class="header header-dark head-style-2">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <div class="nav-toggle" style="position:fixed; top: 35px; left: 10px;"></div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu">

                            <li><a href="{{ url('/') }}" class="sub-menu-item">Home</a></li>

                            <li><a href="{{ route('shop') }}" class="sub-menu-item" wire:navigate>Shop</a></li>

                            {{--                        <li class="relative parent-parent-menu-item">--}}
                            {{--                            <a href="javascript:void(0);" class="home-link">Diagnostics</a>--}}
                            {{--                            <ul class="nav-dropdown nav-submenu">--}}
                            {{--                                <li><a href="{{ url('/blog') }}" class="sub-menu-item">Vehicle health check info</a></li>--}}
                            {{--                                <li><a href="{{ url('/blog-detail') }}" class="sub-menu-item">Fault code library</a></li>--}}
                            {{--                            </ul>--}}
                            {{--                        </li>--}}

                            <li class="relative parent-parent-menu-item">
                                <a href="javascript:void(0);" class="home-link">Support</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ route('about-us') }}" class="sub-menu-item" wire:navigate>About Us</a></li>
                                    <li><a href="{{ route('contact') }}" class="sub-menu-item" wire:navigate>Contact</a></li>
                                    <li><a href="{{ route('privacy-policy') }}" class="sub-menu-item" wire:navigate>Privacy Policy</a></li>
                                    <li><a href="{{ route('faq') }}" class="sub-menu-item" wire:navigate>FAQs</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
</div>
<x-slot:scripts>
    <script>
        const currentPath = window.location.pathname.replace(/\/$/, '');

        const subMenuItems = document.querySelectorAll('.sub-menu-item');
        subMenuItems.forEach((item) => {
            const itemPath = new URL(item.href).pathname.replace(/\/$/, '');

            if (itemPath === currentPath) {
                item.classList.add('active');

                // Highlight all parent menus recursively
                let parentMenu = item.closest('.parent-menu-item');
                while (parentMenu && !parentMenu.classList.contains('processed')) {
                    const parentLink = parentMenu.querySelector('a');
                    if (parentLink) {
                        parentLink.classList.add('active');
                    }
                    parentMenu.classList.add('processed');
                    parentMenu = parentMenu.closest('.parent-parent-menu-item');
                }

                // Highlight the top-level parent menu
                const topLevelMenu = item.closest('.parent-parent-menu-item');
                if (topLevelMenu) {
                    const topLevelLink = topLevelMenu.querySelector('.home-link');
                    if (topLevelLink) {
                        topLevelLink.classList.add('active');
                    }
                }
            }
        });
    </script>
</x-slot>
