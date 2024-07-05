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
            <div class="col-md-3"></div>
<div class="col-d-6  ">

    <form action="{{url('update_product',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Product Title</label>
            <input type="text" value="{{$product->title}}" class="form-control"  style="width: 400px; height:50px;" name="title" placeholder="Product Title"required>
        </div>

        <div class="form-group">
            <label >Description</label>
            <textarea name="description"   class="form-control" style="width: 400px; " required>{{$product->description}}</textarea>
        </div>

        <div class="form-group">
            <label >Price</label>
            <input type="text" value="{{$product->price}}" class="form-control"  style="width: 400px; height:50px;" name="price" placeholder="Product Price"required>
        </div>

        <div class="form-group">
            <label >Category</label>
            <select name="category" class="form-select form-control" style="width: 400px; height:50px;" aria-label="Default select example" required>
               <option selected>Select Category</option>
                  <option value="{{$product->category}}">{{$product->category}} - Current</option>
                  @foreach ($category as $category)
                  <option >{{$category->category_name}}</option>
              @endforeach
             </select>
     </div>



      <div class="form-group">
          <label >Quantity</label>
        <input type="number"  value="{{$product->quantity}}" class="form-control"  style="width: 400px; height:50px;" name="quantity" placeholder="Product Quantity" required>
   </div>

   <div class="form-group">
    <label for="formFile" class="form-label">Current Image</label>
    <div>
        <img src="/products/{{$product->image}}" width="100px"  alt="">
    </div>

</div>
<div class="form-group">
    <label for="formFile" class="form-label">New Image</label>
    <input class="form-control" type="file"  style="width: 400px; height:50px;" id="formFile" name="image" >
  </div>




                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

</div>
</div>
    </div>
    <!-- JavaScript files-->
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
