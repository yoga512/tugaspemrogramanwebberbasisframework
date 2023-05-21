<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
        rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    {{-- <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <h4>TOKOKU</h4>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ $cartCount }}</span></a>
                </li>
            </ul>
            <div class="header__cart__price">item: <span>Rp{{ $cartTotal }}</span></div>
        </div>
        <div class="humberger__menu__widget">
            @guest
                <div class="header__top__right__language">
                    <div class="header__top__right__auth">
                        <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                    </div>
                </div>
                <div class="header__top__right__auth" style="margin-left: 20px">
                    <a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a>
                </div>
            @else
                <div class="header__top__right__language">
                    <div class="header__top__right__auth">
                        <a href=""><i class="fa fa-user"></i> {{ auth()->user()->username }}</a>
                    </div>
                    <span class="arrow_carrot-down"></span>
                    <ul>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="header__top__right__auth" style="margin-left: 20px">
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                            class="fa fa-user"></i> Logout</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf

                    </form>
                </div>
            @endguest
        </div>

        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="{{ route('shop.index') }}">Shop</a></li>
                <li>
                    <a href="#">Categories</a>
                    <ul class="header__menu__dropdown">
                        @foreach ($menu_categories as $menu_category)
                            <li><a
                                    href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> tokoku@email.com</li>
                <li>Gratis Ongkir Untuk Pemesanan Rp. 250,000</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End --> --}}

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container flex justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        @guest

                            <div class="header__top__right">
                                <div class="header__top__right__language header__top__right__auth">
                                    <a class="d-inline btn btn-primary" href="{{ route('login') }}"><i
                                            class="fa fa-user"></i> Login
                                        Admin</a>
                                </div>
                                <div class="header__top__right__language header__top__right__auth">
                                    <a class="d-inline btn btn-outline-primary" href="#"><i class="fa fa-user"></i>
                                        Register</a>
                                </div>
                            </div>
                        @else
                            <div class="header__top__right">
                                <div class="header__top__right__language header__top__right__auth">
                                    <a class="d-inline" href="#"><i class="fa fa-user"></i>
                                        {{ auth()->user()->username }}</a>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="#">Profil</a></li>
                                    </ul>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="#"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i
                                            class="fa fa-user"></i> Logout</a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <h3>TOKOKU</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="{{ route('shop.index') }}">Shop</a></li>
                            <li>
                                <a href="#">Categories</a>
                                <ul class="header__menu__dropdown">
                                    @foreach ($menu_categories as $menu_category)
                                        <li><a
                                                href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                            </li>
                            <li>
                                <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-bag"></i>
                                    <span>{{ $cartCount }}</span></a>
                            </li>
                        </ul>
                        <div class="header__cart__price">item: <span>${{ $cartTotal }}</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div> --}}
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    {{-- <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?" />
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+62</h5>
                                <span>support 24 jam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End --> --}}

    @yield('content')

    <!-- Footer Section Begin -->
    {{-- <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <h3>TOKOKU</h3>
                        </div>
                        <ul>
                            <li>Alamat: Jalan Udayana, singaraja</li>
                            <li>Telepon: +62 878-8895-2132</li>
                            <li>Email: tokoku@email.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Links</h6>
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Tentang Toko Kami</a></li>
                            <li><a href="#">Belanja Aman</a></li>
                            <li><a href="#">Info Pengiriman</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Layanan</a></li>
                            <li><a href="#">Proyek</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">Inovasi</a></li>
                            <li><a href="#">Testimoni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </p>
                        </div>
                        <div class="footer__copyright__payment">
                            <img src="img/payment-item.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
