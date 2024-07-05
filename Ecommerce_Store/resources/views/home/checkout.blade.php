<!DOCTYPE html>
<html lang="en">

<head>
   @include('home.css')
</head>

<body>

    {{-- navbar start --}}

    @include('home.header')

    {{-- navbar end --}}

    {{-- body --}}

 <!-- Page Header Start -->
 <div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Checkout</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                <div class="row">

                    <form action="{{url('confirm_order')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="firstname">First Name</label>
                                <input class="form-control" id="firstname" name="firstname" type="text" value="{{Auth::user()->firstname}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lastname">Last Name</label>
                                <input class="form-control" id="lastname" type="text" name="lastname" value="{{Auth::user()->lastname}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" id="email" type="text" name="email" value="{{Auth::user()->email}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Mobile No</label>
                                <input class="form-control" id="phone" type="text" name="phone" value="{{Auth::user()->phone}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="address">Address Line 1</label>
                                <input class="form-control" id="address" type="text" name="address" value="{{Auth::user()->address}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="address2">Address Line 2 (optional)</label>
                                <input class="form-control" id="address2" type="text" name="address2">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="country">Country</label>
                                <select class="custom-select" id="country" name="country">
                                    <option selected>Pakistan</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="city">City</label>
                                <input class="form-control" id="city" type="text" placeholder="city" name="city">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="state">State</label>
                                <input class="form-control" id="state" type="text" placeholder="state" name="state">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="zip">ZIP Code</label>
                                <input class="form-control" id="zip" type="text" placeholder="123" name="zip">
                            </div>
                        </div>


                </div>
            </div>



{{-- Side --}}


        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Products</h5>





                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Total Price</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $card_item as $cart )
                                    @php
                                         $total_sub = $cart->product->price * $cart->quantity;
                                    @endphp
                                    <tr>
                                        <td class="align-middle">{{$cart->quantity}}</td>
                                        <td class="align-middle">{!! Str::limit($cart->product->title, 20) !!}</td>
                                        <td class="align-middle">{{$total_sub}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                              </table>

                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">$150</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">$160</h5>
                    </div>
                </div>
            </div>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Payment</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Direct Check</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <input type="submit" value="Place Order" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">
                 </div>
            </form>

            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->


    {{-- body --}}

    {{-- footer start --}}
    @include('home.footer')
    {{-- footer end --}}



</body>

</html>
