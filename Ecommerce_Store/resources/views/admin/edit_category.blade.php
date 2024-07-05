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



            <h1 class="text-white">Edit Category {{$data->category_name}}</h1>
    <div class="d-flex justify-content-center mt-5 ">

        <form action="{{url('update_category',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>

                <div class="form-group">
                    <label >Category Name</label>
                    <input type="text" class="form-control" value="{{$data->category_name}}" style="width: 400px; height:50px;" name="category" placeholder="Product Title"required>
                </div>


                <div class="form-group">
                    <label class="form-label">Current Image</label>
                    <img src="/categories/{{$data->category_thumbnail}}" alt="" width="400px">
                  </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Add New Image</label>
                    <input class="form-control" type="file"  style="width: 400px; height:50px;" id="formFile" name="image"required>
                  </div>


                <input type="submit" class="btn btn-large btn-secondary rounded-0 pt-2 pb-2 ps-1 pe-1 mb-2" value="Update Category">

            </div>
        </form>






    </div>
        </div>



    </div>
        </div>



</div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('bootstrapcss/js/bootstrap.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
