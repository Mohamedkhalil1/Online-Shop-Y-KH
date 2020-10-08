@extends('layouts.shop')
@section('title','LA BELLÉ')
@section('content')
    <!-- ****** Welcome Slides Area Start ****** -->
    <section class="welcome_area">
        <div class="welcome_slides owl-carousel">
            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(assets/img/bg-img/bg-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(assets/img/bg-img/bg-4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(assets/img/bg-img/bg-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women Fashion</h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Slides Area End ****** -->


    @foreach ($products as $product)
       <!-- ****** Quick View Modal Area Start ****** -->
        <div class="modal fade" id="quickview{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="{{asset('assets/img/product-img/'.$product->photo)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">{{$product->name}}</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="false"></i>
                                            </div>
                                            <h5 class="price">${{$product->price}} <span>${{$product->price}}</span></h5>
                                            <p>{{$product->description}}</p>
                                            <a href="{{route('product.details',$product->id)}}" target="_blank">View Full Product Details</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->  
    @endforeach
   

    <!-- ****** New Arrivals Area Start ****** -->
    <section class="new_arrivals_area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="karl-projects-menu mb-100">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*">ALL</button>
                @isset($categories) 
                    @foreach ($categories as $category)
                    <button class="btn" data-filter=".{{$category->name}}">{{$category->name}}</button>
                    @endforeach
                @endisset
            </div>
        </div>

        <div class="container">
            <div class="row karl-new-arrivals">
                @isset($products)
                    @foreach ($products as $product)
                         <!-- Single gallery Item Start -->
                        <div class="col-12 col-sm-6 col-md-4 single_gallery_item {{$product->category->name}} wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('assets/img/product-img/'.$product->photo)}}" alt="" >
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview{{$product->id}}"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">${{$product->price}}</h4>
                                <p>{{$product->name}}</p>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>
    <!-- ****** New Arrivals Area End ****** -->

    <!-- ****** Offer Area Start ****** -->
    <section class="offer_area height-700 section_padding_100 bg-img" style="background-image:url('assets/img/bg-img/bg-5.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-end justify-content-end">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                        <h2>{{$products->first()->name}}<span class="karl-level">Hot</span></h2>
                        <p>* Free shipping </p>
                        <div class="offer-product-price">
                            <h3><span class="regular-price">{{$products->first()->price}}</span> {{$products->first()->price}}</h3>
                        </div>
                        <a href="{{route('shop.show')}}" class="btn karl-btn mt-30">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Offer Area End ****** -->

    <!-- ****** Popular Brands Area Start ****** -->
    <section class="karl-testimonials-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="karl-testimonials-slides owl-carousel">

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{asset('assets/img/bg-img/tes-1.jpg')}}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{asset('assets/img/bg-img/tes-1.jpg')}}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{asset('assets/img/bg-img/tes-1.jpg')}}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ****** Popular Brands Area End ****** -->
   
    <!-- /.wrapper end -->
@stop