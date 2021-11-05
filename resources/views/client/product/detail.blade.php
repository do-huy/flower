@extends('client.master')
@section('css')
  <!-- custom css product-detail-client  -->
  <link rel="stylesheet" href="{{ asset('client/css/product/detail.css') }}">
@endsection

@section('content')
    <!-- include  carousel -->
    @include('client.layouts.carousel')
    <!-- end include  carousel -->

    <section class="product-detail"> 
        <h1 class="heading"> chi tiết <span>sản phẩm</span> </h1>
        <div class="container-box">
            <div class = "card-wrapper">
                <div class = "card">
                    <!-- card left -->
                    <div class = "product-imgs">
                    <div class = "img-display">
                        <div class = "img-showcase">
                        <img src = "../test/product/shoe_1.jpg" alt = "shoe image">
                        <img src = "../test/product/shoe_2.jpg" alt = "shoe image">
                        <img src = "../test/product/shoe_3.jpg" alt = "shoe image">
                        <img src = "../test/product/shoe_4.jpg" alt = "shoe image">
                        </div>
                    </div>
                    <div class = "img-select">
                        <div class = "img-item">
                        <a href = "#" data-id = "1">
                            <img src = "../test/product/shoe_1.jpg" alt = "shoe image">
                        </a>
                        </div>
                        <div class = "img-item">
                        <a href = "#" data-id = "2">
                            <img src = "../test/product/shoe_2.jpg" alt = "shoe image">
                        </a>
                        </div>
                        <div class = "img-item">
                        <a href = "#" data-id = "3">
                            <img src = "../test/product/shoe_3.jpg" alt = "shoe image">
                        </a>
                        </div>
                        <div class = "img-item">
                        <a href = "#" data-id = "4">
                            <img src = "../test/product/shoe_4.jpg" alt = "shoe image">
                        </a>
                        </div>
                    </div>
                    </div>
                    <!-- card right -->
                    <div class = "product-content">
                    <h2 class = "product-title">Giỏ thức ăn tổng hợp</h2>
                    <!-- <a href = "#" class = "product-link">visit nike store</a> -->
                    <div class = "product-rating">
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star-half-alt"></i>
                        <span>4.7(21)</span>
                    </div>

                    <div class = "product-price">
                        <p class = "last-price">Old Price: <span>$257.00</span></p>
                        <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
                    </div>

                    <div class = "product-detail">
                        <h2>about this item: </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
                        <ul>
                        <li>Color: <span>Black</span></li>
                        <li>Available: <span>in stock</span></li>
                        <li>Category: <span>Shoes</span></li>
                        <li>Shipping Area: <span>All over the world</span></li>
                        <li>Shipping Fee: <span>Free</span></li>
                        </ul>
                    </div>

                    <div class = "purchase-info">
                        <input type = "number" min = "0" value = "1">
                        <button type = "button" class = "btn">
                        Mua ngay <i class = "fas fa-shopping-cart"></i>
                        </button>
                        <button type = "button" class = "btn">Yêu thích <i class="fas fa-heart"></i></button>
                    </div>

                    <div class = "social-links">
                        <p>Share At: </p>
                        <a href = "#">
                        <i class = "fab fa-facebook-f"></i>
                        </a>
                        <a href = "#">
                        <i class = "fab fa-twitter"></i>
                        </a>
                        <a href = "#">
                        <i class = "fab fa-instagram"></i>
                        </a>
                        <a href = "#">
                        <i class = "fab fa-whatsapp"></i>
                        </a>
                        <a href = "#">
                        <i class = "fab fa-pinterest"></i>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script src="{{ asset('client/js/product/detail.js') }}"></script>
@endsection