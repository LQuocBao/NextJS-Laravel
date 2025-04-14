@extends('user.template.user')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Tổng Cộng</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle" id="cart-items">
                        <!-- Nội dung giỏ hàng sẽ được thêm bằng JavaScript -->
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Cart Summary</span>
                </h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6 id="subtotal">$0</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium" id="shipping">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5 id="total">$0</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartItemsContainer = document.getElementById('cart-items');
            const subtotalElement = document.getElementById('subtotal');
            const shippingElement = document.getElementById('shipping');
            const totalElement = document.getElementById('total');

            // Lấy dữ liệu từ localStorage
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<tr><td colspan="5">Giỏ hàng bạn đang trống</td></tr>';
                subtotalElement.innerText = '0 đ';
                totalElement.innerText = '10,000 đ'; // Chỉ có phí shipping
            } else {
                let subtotal = 0;

                cart.forEach(item => {
                    const total = item.price * item.quantity;
                    subtotal += total;

                    const row = `
                        <tr>
                            <td class="align-middle">
                                <img src="${item.image}" alt="${item.name}" style="width: 50px;">
                                ${item.name}
                            </td>
                            <td class="align-middle">${item.price.toLocaleString()} đ</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" data-id="${item.id}">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="${item.quantity}">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus" data-id="${item.id}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">${total.toLocaleString()} đ</td>
                            <td class="align-middle">
                                <button class="btn btn-sm btn-danger btn-remove" data-id="${item.id}">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    `;
                    cartItemsContainer.innerHTML += row;
                });

                subtotalElement.innerText = `${subtotal.toLocaleString()} đ`;
                totalElement.innerText = `${(subtotal + 10000).toLocaleString()} đ`; // Thêm phí shipping
            }

            // Xử lý sự kiện tăng/giảm số lượng và xóa sản phẩm
            document.addEventListener('click', function(event) {
                const target = event.target;
                const cart = JSON.parse(localStorage.getItem('cart')) || [];

                if (target.classList.contains('btn-remove')) {
                    const productId = target.getAttribute('data-id');
                    const updatedCart = cart.filter(item => item.id !== productId);
                    localStorage.setItem('cart', JSON.stringify(updatedCart));
                    location.reload();
                }

                if (target.classList.contains('btn-plus')) {
                    const productId = target.getAttribute('data-id');
                    const product = cart.find(item => item.id === productId);
                    if (product) product.quantity += 1;
                    localStorage.setItem('cart', JSON.stringify(cart));
                    location.reload();
                }

                if (target.classList.contains('btn-minus')) {
                    const productId = target.getAttribute('data-id');
                    const product = cart.find(item => item.id === productId);
                    if (product && product.quantity > 1) product.quantity -= 1;
                    localStorage.setItem('cart', JSON.stringify(cart));
                    location.reload();
                }
            });
        });
    </script>
@endsection
