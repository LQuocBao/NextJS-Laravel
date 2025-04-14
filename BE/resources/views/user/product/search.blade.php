@extends('user.template.user')
@section('content')
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            @if ($product->isEmpty())
                <p>No products found.</p>
            @else
                @foreach ($product as $item)
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
            @endif
        </div>
    </div>
@endsection
