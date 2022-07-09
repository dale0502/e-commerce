@extends('layouts.app')

@section('content')
    <div class="text-center mt-4">
        <h2 class="fw-bolder">商品列表</h2>
    </div>
    <section>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->   
                            <img class="card-img-top" width="450" height="350" src="{{ $product->image_url  }}" alt="..." />                     
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->title }}</h5>
                                    <!-- Product price-->
                                    <span>價格: {{ $product->price }}</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('show', $product['id']) }}">See More</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
