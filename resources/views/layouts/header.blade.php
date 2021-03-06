<div class="site-header header-2 mb--20 d-none d-lg-block">
    <div class="header-middle pt--10 pb--10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="index.html" class="site-brand">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-5">
                    <div class="header-search-block">
                        <input type="text" placeholder="Tìm sách Pickup Book ngay!">
                        <button>Tìm kiếm</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-navigation flex-lg-right">
                        <div class="cart-widget">
                            {{-- <div class="login-block">
                                <a href="#" class="font-weight-bold">Đăng nhập</a> <br>
                                <span>hoặc</span><a href="#">Đăng ký</a>
                            </div> --}}
                            {{-- <div class="cart-block">
                                <div class="cart-total">
                                    <span class="text-number">
                                        1
                                    </span>
                                    <span class="text-item">
                                        Giỏ sách
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="cart-dropdown-block">
                                    <div class="single-cart-block">
                                        <div class="cart-product">
                                            <a href="#" class="image">
                                                <img src="{{ asset('img/products/cart-product-1.jpg') }}" alt="">
                            </a>
                            <div class="content">
                                <h3 class="title"><a href="#">Kodak PIXPRO
                                        Astro Zoom AZ421 16 MP</a>
                                </h3>
                                <p class="price"><span class="qty">1 ×</span> £87.34</p>
                                <button class="cross-btn"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class=" single-cart-block ">
                        <div class="btn-block">
                            <a href="cart.html" class="btn">View Cart <i class="fas fa-chevron-right"></i></a>
                            <a href="checkout.html" class="btn btn--primary">Check Out <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <!-- @include('menu.htm') --> --}}
    </div>
</div>
</div>
</div>
</div>
<div class="header-bottom bg-primary">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-lg-3">
                    <nav class="category-nav white-nav">
                        <div>
                            <a href="#" class="category-trigger"><i class="fa fa-bars"></i>Browse
                                categories</a>
                            <ul class="category-menu">
                                <li class="cat-item has-children">
                                    <a href="#">Arts & Photography</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Bags & Cases</a></li>
                                        <li><a href="#">Binoculars & Scopes</a></li>
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">Film Photography</a></li>
                                        <li><a href="#">Lighting & Studio</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                    <ul class="sub-menu">
                                        <li class="single-block">
                                            <h3 class="title">WHEEL SIMULATORS</h3>
                                            <ul>
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="single-block">
                                            <h3 class="title">WHEEL SIMULATORS</h3>
                                            <ul>
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="single-block">
                                            <h3 class="title">WHEEL SIMULATORS</h3>
                                            <ul>
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="single-block">
                                            <h3 class="title">WHEEL SIMULATORS</h3>
                                            <ul>
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="cat-item has-children"><a href="#">Business & Money</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Brake Tools</a></li>
                                        <li><a href="#">Driveshafts</a></li>
                                        <li><a href="#">Emergency Brake</a></li>
                                        <li><a href="#">Spools</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item has-children"><a href="#">Calendars</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Brake Tools</a></li>
                                        <li><a href="#">Driveshafts</a></li>
                                        <li><a href="#">Emergency Brake</a></li>
                                        <li><a href="#">Spools</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item has-children"><a href="#">Children's Books</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Brake Tools</a></li>
                                        <li><a href="#">Driveshafts</a></li>
                                        <li><a href="#">Emergency Brake</a></li>
                                        <li><a href="#">Spools</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item has-children"><a href="#">Comics</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Brake Tools</a></li>
                                        <li><a href="#">Driveshafts</a></li>
                                        <li><a href="#">Emergency Brake</a></li>
                                        <li><a href="#">Spools</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Brake Tools</a></li>
                                        <li><a href="#">Driveshafts</a></li>
                                        <li><a href="#">Emergency Brake</a></li>
                                        <li><a href="#">Spools</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item "><a href="#">Accessories</a></li>
                                <li class="cat-item "><a href="#">Education</a></li>
                                <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                        Categories</a></li>
                            </ul>
                        </div>
                    </nav>
                </div> --}}
            <div class="col-lg-6">
                <div class="header-phone color-white">
                    <div class="icon">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <div class="text">
                        <p>Hỗ trợ miễn phí 24/7</p>
                        <p class="font-weight-bold number">0945391533</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-navigation flex-lg-right">
                    <ul class="main-menu menu-right main-menu--white li-last-0">
                        <li class="menu-item">
                            <a href="#">Trang chủ</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Sách mượn</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Về chúng tôi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
