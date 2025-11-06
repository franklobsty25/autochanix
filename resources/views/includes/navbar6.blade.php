
<div class="headd-sty">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
                    <div class="headd-sty-left d-flex align-items-center">
                        <div class="headd-sty-01">
                            <a class="nav-brand py-0" href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="" />
                            </a>
                        </div>
                        <div class="headd-sty-02 ms-3">
                            <form class="bg-white rounded-md border-bold">
                                <div class="input-group">
                                    <div class="input-group-prepend border-end z-1 hd-small">
                                        <div class="form-group mb-0 position-relative">
                                            <select class="custom-select b-0">
                                                <option value="1">Choose Categories</option>
                                                <option value="2">Information Technology</option>
                                                <option value="3">Cloud Computing</option>
                                                <option value="4">Engineering Services</option>
                                                <option value="5">Healthcare/Pharma</option>
                                                <option value="6">Telecom/ Internet</option>
                                                <option value="7">Finance/Insurance</option>
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

                        <li><a href="{{ url('/shop') }}" class="sub-menu-item">Shop</a></li>

                        <li class="relative parent-parent-menu-item">
                            <a href="javascript:void(0);" class="home-link">Diagnostics</a>
{{--                            <ul class="nav-dropdown nav-submenu">--}}
{{--                                <li><a href="{{ url('/blog') }}" class="sub-menu-item">Vehicle health check info</a></li>--}}
{{--                                <li><a href="{{ url('/blog-detail') }}" class="sub-menu-item">Fault code library</a></li>--}}
{{--                            </ul>--}}
                        </li>

                        <li class="relative parent-parent-menu-item">
                            <a href="javascript:void(0);" class="home-link">Support</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="{{ url('/about-us') }}" class="sub-menu-item">About Us</a></li>
                                <li><a href="{{ url('/contact') }}" class="sub-menu-item">Contact</a></li>
                                <li><a href="{{ url('/privacy') }}" class="sub-menu-item">Privacy Policy</a></li>
                                <li><a href="{{ url('/faq') }}" class="sub-menu-item">FAQs</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ url('/docs') }}" class="sub-menu-item">About Us</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>

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
