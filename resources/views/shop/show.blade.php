@extends('layouts.shop')
@section('content')
@section('title','LA BELLÉ |SHOP')
@isset($products)
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
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">${{$product->price}} <span>${{$product->price}}</span></h5>
                                            <p>{{$product->description}}</p>
                                            <a href="{{route('product.details',$product->id)}}">View Full Product Details</a>
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
<section class="shop_grid_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">
                   
                    <div class="widget catagory mb-50">
                        <!--  Side Nav  -->
                        <div class="nav-side-menu">
                            <h6 class="mb-0">Catagories</h6>
                            <div class="menu-list">
                                <ul id="menu-content2" class="menu-content collapse out">
                                    <li data-toggle="collapse"class="collapsed active" data-target="#women2">
                                        <a href="{{route('shop.show')}}">ALL</a>
                                    </li>
                                   @isset($categories)
                                       @foreach ($categories as $category)
                                             <!-- Single Item -->
                                            <li data-toggle="collapse"class="collapsed active" data-target="#women2">
                                                <a href="{{route('category.show',$category->name)}}">{{$category->name}}</a>
                                            </li>
                                       @endforeach
                                   @endisset                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        @isset($products)
                            @foreach ($products as $product)
                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{asset('assets/img/product-img/'.$product->photo)}}" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview{{$product->id}}"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">${{$product->price}}</h4>
                                        <a href="{{route('product.details',1)}}"><p>{{$product->name}}</p></a>
                                        <p class="text-muted mt-1">{{$product->category->name}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                </div>

                <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm">
                           @isset($products)
                            {{$products->links()}}
                           @endisset
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>


@stop