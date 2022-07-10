

@section('content')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img width="400" class="card-img-top mb-5 mb-md-0" src="{{ $product->image_url }}" alt="..." /></div>
                    <div class="col-md-6">                  
                            <h1 class="display-5 fw-bolder">{{ $product->title }}</h1>
                            <div class="fs-5 mb-5">
                                <span>Price : {{ $product->price }}</span>
                            </div>
                            <p class="lead">{{ $product->content }}</p>
                            <div class="d-flex">
                                <input class="form-control text-center me-2" id="inputQuantity" name="quantity" type="number"  min="1" value="1" style="max-width: 3rem" />
                                <button id="addToCart" class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    Add to cart
                                </button>
                            </div>
                    
                    </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ mix('/js/cart.js') }}"></script>
    <script>
        var productId = "{{ $product['id'] }}"
        initAddToCart(productId)
    </script>
@endsection