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



            <h1 class="text-white">Add Category</h1>
    <div class="container mt-5">

        <form action="{{url('add_category')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label >Category Name</label>
                    <input type="text" class="form-control"  style="width: 400px; height:50px;" name="category" placeholder="Product Title"required>
                </div>

                <div class="form-group">
                    <label for="formFile" class="form-label">Caegory Image</label>
                    <input class="form-control" type="file"  style="width: 400px; height:50px;" id="formFile" name="image"required>
                  </div>

                  <input type="submit" class="btn btn-large btn-primary rounded-0 pt-2 pb-2 ps-1 pe-1 mb-2" value="Add Category">




        </form>






    </div>
        </div>

        <div class="container mt-5">



            <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                <tbody>

                    @php
                        $counter=1;
                    @endphp

                    @foreach ($category as $category_show )

                    <tr>
                    <th scope="row">{{$counter++}}</th>
                    <td>{{$category_show->category_name}}</td>
                    <td><img src="categories/{{$category_show->category_thumbnail}}" alt="" style="width: 100px; height:100px; object-fit:cover;"></td>
                    <td><a href="{{url('edit_category', $category_show->id)}}"><i class="fa fa-edit text-success" aria-hidden="true" ></i></a></td>
                    <td><a href="{{url('delete_category', $category_show->id)}}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                  </tr>
                    @endforeach

                </tbody>
              </table>

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
