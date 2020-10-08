@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('admin/products.products')}}</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table table-striped table-bordered table-responsive">
                                            <thead class="">
                                            <tr>
                                                <th>{{__('admin/products.name')}}</th>
                                                <th>{{__('admin/products.short_description')}}</th>
                                                <th>{{__('admin/products.price')}}</th>
                                                <th>{{__('admin/products.price_discount')}}</th>
                                                <th>{{__('admin/products.photo')}}</th>
                                                <th>{{__('admin/general.settings')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($products)
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->short_description}}</td>
                                                        <td>{{$product->price}}</td>
                                                        <td>{{$product->price_discount}}</td>

                                                        <td> <img style="width: 100px; height: 100px;" src="{{asset('assets/img/product-img/'.$product->photo)}}"></td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.products.edit',$product->id)}}"
                                                                   class="btn btn-outline-primary mr-1 btn-sm"><i class="la la-edit"></i></a>
                                                                <a href="{{route('admin.products.delete',$product->id)}}"
                                                                   class="btn btn-outline-danger btn-sm"><i class="la la-trash"></i></a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">
                                            {{$products->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
