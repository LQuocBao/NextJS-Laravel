<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Trang Chủ')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success text-center" id="success-alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Giới thiệu</a>
                    <a class="text-body mr-3" href="">Liên hệ</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        @if (Auth::check())
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Chỉnh sửa hồ sơ</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                    xuất</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @else
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                data-toggle="dropdown">Tài khoản</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            {{-- Logo --}}
            <div class="col-lg-4">
                <a href="/" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">TECH</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">SPHERE</span>
                </a>
            </div>
            {{-- Search Bar --}}
            <div class="col-lg-4 col-6 text-left">
                <form action="/search">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search for products"
                            style="border-radius: 30px;">
                        <div class="input-group-append">
                            <button type="submit" class="btn" style="border-radius: 50%;">
                                <span class="input-group-text bg-transparent text-primary" style="border-radius: 50%;">
                                    <i class="fa fa-search"></i>
                                </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Chăm sóc khách hàng</p>
                <h5 class="m-0">078 554 8882</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Danh mục</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        @php
                            $count = 0;
                        @endphp
                        @if (isset($category) && is_iterable($category))
                            @foreach ($category as $item)
                                @if ($item)
                                    <a href="{{ is_array($item->slug) ? implode(', ', $item->slug) : $item->slug }}"
                                        class="nav-item nav-link">
                                        {{ is_array($item->name) ? implode(', ', $item->name) : $item->name }}
                                    </a>
                                    @php
                                        $count++;
                                    @endphp
                                    @if ($count >= 8)
                                        @break
                                    @endif
                                @endif
                            @endforeach
                        @else
                            <p class="text-muted">No categories available.</p>
                        @endif
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">TECH</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">SPHERE</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                        data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="/product" class="nav-item nav-link">Cửa Hàng</a>
                            <a href="/contact" class="nav-item nav-link">Giới thiệu</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="/cart" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span id="cart-count"
                                    class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">
                                    {{ session('cart') ? count(session('cart')) : 0 }}
                                </span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Tech Sphere</h5>
                <p class="mb-4">TechSphere được biết đến là 1 trong những nhãn hàng đi đầu về lĩnh vực công nghệ.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>56, Nguyễn Oanh, Gò Vấp,
                    TP.HCM
                </p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>lamquocbao26042005@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>078 554 8882</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Về TechSphere</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trang
                                chủ</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Giới
                                thiệu</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Liên
                                hệ</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Chính sách</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Chính
                                sách bảo hành</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Chính
                                sách giao hàng</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Chính
                                sách bảo mật</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Địa chỉ email của bạn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Theo dõi chúng tôi</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/quocbao2604"
                                target='_blank'><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square" href="https://www.instagram.com/q_bao2604/"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; All Rights Reserved. Designed by Quốc Bảo
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{ asset('img/payments.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Hide success message after 5 seconds -->
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 5000); // 5000ms = 5 seconds
        });
    </script>
</body>

</html>
