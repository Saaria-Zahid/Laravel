<!-- Products Start -->
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">

                        <a href="{{url('product_detail',$product->id)}}" class="text-decoration-none"> <img class="img-fluid w-100"  src="products/{{$product->image}}" alt="" style="height: 300px; object-fit:cover;" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{$product->title}}</h6>
                            <div class="d-flex justify-content-center">
                                {{-- <h6>$123.00</h6><h6 class="text-muted ml-2"><del>pkr{{$product->price}}</del></h6> --}}
                                <h6>pkr{{$product->price}}</h6>
                            </div>
                        </div>
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{url('product_detail',$product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="{{url('add_cart',$product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            @endforeach


                          </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
