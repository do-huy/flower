@extends('client.master')

@section('css')
    <!-- custom css product-client  -->
    <link rel="stylesheet" href="{{ asset('client/css/product/product.css') }}">
@endsection

@section('content')

    <!-- include  carousel -->
    @include('client.layouts.carousel')
    <!-- end include  carousel -->
    <section class="product-client" id="categories">

        <h1 class="heading"> product <span>categories</span> </h1>

        <div class="box-container">

            <div class="any-product">
                <a href="{{ route('product.detail.client') }}">
                    <div class="box">
                        <img src="../test/image/cat-1.png" alt="">
                        <h3>vegitables</h3>
                        <p>upto 45% off</p>
                        <a href="#" class="btn">Đặt hàng</a>
                    </div>
                </a>
            </div>
      
            <div class="any-product">
                <a href="{{ route('product.detail.client') }}">
                    <div class="box">
                        <img src="../test/image/cat-2.png" alt="">
                        <h3>fresh fruits</h3>
                        <p>upto 45% off</p>
                        <a href="#" class="btn">Đặt hàng</a>
                    </div>
                </a>
            </div>
      
            <div class="any-product">
                <a href="{{ route('product.detail.client') }}">
                    <div class="box">
                        <img src="../test/image/cat-3.png" alt="">
                        <h3>dairy products</h3>
                        <p>upto 45% off</p>
                        <a href="#" class="btn">Đặt hàng</a>
                    </div>
                </a>
            </div>

            <div class="any-product">
                <a href="{{ route('product.detail.client') }}">
                    <div class="box">
                        <img src="../test/image/cat-4.png" alt="">
                        <h3>fresh meat</h3>
                        <p>upto 45% off</p>
                        <a href="#" class="btn">Đặt hàng</a>
                    </div>
                </a>
            </div>

        </div>

    </section>
@endsection