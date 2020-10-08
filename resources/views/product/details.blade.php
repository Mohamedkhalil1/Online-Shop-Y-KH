@extends('layouts.shop')
@section('title','LA BELLÉ |ITEM')
@section('content')


<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
<div class="breadcumb_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- btn -->
                <a href="{{route('shop.show')}}" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Category</a>
            </div>
        </div>
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
<section class="single_product_details_area section_padding_0_100">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{asset('assets/img/product-img/product-9.jpg')}}">
                                <img class="d-block w-100" src="{{asset('assets/img/product-img/'.$product->photo)}}" alt="product image">
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="single_product_desc">

                    <h4 class="title"><a href="#">{{$product->nae}}</a></h4>

                    <h4 class="price">$ {{$product->price}}</h4>

                    <p class="available">Available: <span class="text-muted">In Stock</span></p>

                    <div class="single_product_ratings mb-15">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>

                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h6 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                                </h6>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

@isset($related_products)   
    @foreach ($related_products as $item)
        <!-- ****** Quick View Modal Area Start ****** -->
        <div class="modal fade" id="quickview{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
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
                                            <img src="{{asset('assets/img/product-img/'.$item->photo)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">{{$item->name}}</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">${{$item->price}} <span>${{$item->price}}</span></h5>
                                            <p>{{$item->description}}</p>
                                            <a href="{{route('product.details',$item->id)}}">View Full Product Details</a>
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
@endisset

<section class="you_may_like_area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="you_make_like_slider owl-carousel">
                    @isset($related_products)
                        @foreach ($related_products as $item)
                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{asset('assets/img/product-img/'.$item->photo)}}" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview{{$item->id}}"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">${{$item->price}}</h4>
                                    <p>{{$item->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
        </div>
    </div>
</section>


@stop