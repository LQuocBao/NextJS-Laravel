@extends('user.template.user')
@section('content')
    <!-- Navbar Start -->
    <style>
        .product-item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .product-img {
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product-img img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
        }

        .product-item .text-center {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-item .text-center a {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 768px) {
            .product-img {
                height: 200px;
            }
        }

        @media (max-width: 576px) {
            .product-img {
                height: 150px;
            }
        }
    </style>


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 600px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('img/laptop.jpg') }} "
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Laptop
                                        Gaming</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Rất nhiều laptop gaming đang
                                        chờ bạn lựa chọn</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="/product/laptop" style="border-radius: 15px;">Xem thêm ngay tại đây</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 600px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('img/man-hinh.jpg') }}"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Màn hình
                                    </h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Có đầy đủ các loại màn hình
                                        ở đây, từ màn hình máy tính văn phòng cho đến màn hình gaming</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="/product/man-hinh" style="border-radius: 15px;">Xem thêm ngay tại đây</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 600px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('img/vga.jpg') }}"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">VGA</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Có đầy đủ tất cả VGA của
                                        NVIDIA và AMD</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="/product/vga" style="border-radius: 15px;">Xem thêm ngay tại đây</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Chất Lượng Sản Phẩm</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn Phí Vận Chuyển</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hoàn Trả Trong 14 Ngày</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ Trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Danh
                Mục</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach ($category as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="/product/{{ $item->slug }}">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="{{ asset('img/' . $item->image) }}" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>{{ $item->name }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Sản Phẩm
                Mới</span></h2>
        <div class="row px-xl-5">
            @foreach ($productnew as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100"
                                src="{{ asset('img/' . (is_array($item->image) ? implode(', ', $item->image) : $item->image)) }}"
                                alt="">
                            <div class="product-action">
                                <button class="btn btn-outline-dark btn-square add-to-cart" data-id="{{ $item->id }}"
                                    data-name="{{ is_array($item->name) ? implode(', ', $item->name) : $item->name }}"
                                    data-price="{{ $item->price }}"
                                    data-image="{{ asset('img/' . (is_array($item->image) ? implode(', ', $item->image) : $item->image)) }}">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                                <a class="btn btn-outline-dark btn-square"
                                    href="/product/detail/{{ is_array($item->slug) ? implode(', ', $item->slug) : $item->slug }}">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate"
                                href="/product/detail/{{ is_array($item->slug) ? implode(', ', $item->slug) : $item->slug }}">
                                {{ is_array($item->name) ? implode(', ', $item->name) : $item->name }}
                            </a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>{{ number_format($item->price) }} đ</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Products End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Sản Phẩm
                Hot</span></h2>
        <div class="row px-xl-5">
            @foreach ($producthot as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/' . $item->image) }}" alt="">
                            <div class="product-action">
                                <button class="btn btn-outline-dark btn-square add-to-cart" data-id="{{ $item->id }}"
                                    data-name="{{ $item->name }}" data-price="{{ $item->price }}"
                                    data-image="{{ asset('img/' . $item->image) }}">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate"
                                href="/product/detail/{{ $item->slug }}">{{ $item->name }}</a>
                            @if ($item->sale_price != null)
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{ number_format($item->sale_price) }} đ</h5>
                                    <h6 class="text-muted ml-2"><del>{{ number_format($item->price) }} đ</del></h6>
                                </div>
                            @else
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{ number_format($item->price) }} đ</h5>
                                </div>
                            @endif
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Products End -->

    <script src="{{ asset('js/cart.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hàm lưu sản phẩm vào localStorage
            function addToCart(product) {
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                const existingProduct = cart.find(item => item.id === product.id);

                if (existingProduct) {
                    existingProduct.quantity += 1;
                } else {
                    cart.push({
                        ...product,
                        quantity: 1
                    });
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                alert('Product added to cart!');
                updateCartCount();
            }

            // Hàm cập nhật số lượng hiển thị trên biểu tượng giỏ hàng
            function updateCartCount() {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.innerText = cart.length;
                }
            }

            // Gắn sự kiện click cho nút "Add to Cart"
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const product = {
                        id: this.getAttribute('data-id'),
                        name: this.getAttribute('data-name'),
                        price: parseFloat(this.getAttribute('data-price')),
                        image: this.getAttribute('data-image')
                    };
                    addToCart(product);
                });
            });

            // Cập nhật số lượng giỏ hàng khi tải trang
            updateCartCount();
        });
    </script>
@endsection
