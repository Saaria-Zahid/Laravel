<!DOCTYPE html>
<html>

<head>

    @include('admin.css')

</head>

<body>

    {{-- haeder --}}
    @include('admin.header')


    @include('admin.sidebar')


    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="container ">
                    <form class="form-inline my-2 my-lg-0" action="{{ url('product_search') }}" method="get">
                        @csrf
                        <input class="form-control w-50 mr-sm-2" type="search" name="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>


                <div class="container mt-5">



                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Qty</th>
                                <th scope="col">E</th>
                                <th scope="col">D</th>


                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp

                            @foreach ($product as $product_data)
                                <tr>
                                    <th scope="row">{{ $counter++ }}</th>
                                    <td><img src="products/{{ $product_data->image }}" width="80px" height="80px"
                                            alt=""></td>
                                    <td>{{ $product_data->title }}</td>
                                    <td>{!! Str::limit($product_data->description, 40) !!}</td>
                                    <td>{{ $product_data->price }}</td>
                                    <td>{{ $product_data->category }}</td>
                                    <td>{{ $product_data->quantity }}</td>
                                    <td><a href="{{ url('edit_product', $product_data->id) }}"><i
                                                class="fa fa-edit text-success" aria-hidden="true"></i></a></td>
                                    <td><a href="{{ url('delete_product', $product_data->id) }}"><i
                                                class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>


                                   @endforeach

                        </tbody>
                    </table>

                    <div class="container d-flex justify-content-center mt-5">
                        {{ $product->onEachSide(1)->links() }}
                    </div>

                </div>




            </div>
        </div>
    </div>
    <!-- JavaScript files-->

    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
