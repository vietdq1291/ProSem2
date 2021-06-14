@extends('layouts.page')

@section('content')
<div class="our_furniture_section layout_padding">
    <div class="container">
        <h1 class="about_taital">Our <span style="background-color: #fee421; color: #fff; padding: 0px 5px;">Funitures</span></h1>
        <p class="market_text">page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution o</p>
    </div>
</div>
@if($images != null)

@endif
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                             @foreach($images as $img)
                            <div class="col-lg-4 col-sm-6" >
                            
                                <div class="product-item">
  							

   	                             <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="product/{{$img->im_images}}.png" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                         
                                        <ul>

                                            <li class="quick-view"><a onclick="AddCart({{$img->id}})" href="#">+ Add Cart</a></li>

                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$img->pr_name}}</div>
                                        <a href="#">
                                            <h5>{{$img->pr_name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            {{number_format($img->pr_price)}} $
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                                  @endforeach
                                  
                            
                        
                    </div>
                    </div>
                </div>
            </div>
        
    </section>
    <!-- Product Shop Section End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>


@stop
