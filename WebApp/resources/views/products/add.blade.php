<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce WebApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <x-header/>
</form>

    <div class="container pt-5 mt-5 ">
        
        <div class="row justify-content-center">
            <h1>Add New Product</h1>
            <div class="col-md-6">
                <div class="card mt-3 p-3">
                  
                 

                    <form method="post" action="/prostore" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <label class="form-label">Product Name</label>
                            <input type="text"  placeholder="enter product name" name="name" class="form-control" value="{{old('name')}}">
                               @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif                            
                        </div> 
                        
                        <div class="form-group mt-3">
                            <label class="form-label">Description</label>
                            <textarea  name="description" class="form-control"  placeholder="enter description max 1200 charactors">{{old('description')}}</textarea >
                                @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            @endif   
                            </div>

                            <div class="form-group mt-3">
                            <label class="form-label">Product Name</label>
                            <input type="number"  min="1" placeholder="enter product Price" name="price" class="form-control" value="{{old('price')}}">
                               @if($errors->has('price'))
                                    <span class="text-danger">{{$errors->first('price')}}</span>
                                @endif                            
                        </div> 
                        
                        
                        <div class="form-group mt-3">
                            <label  class="form-label">Image</label>
                            <input  type="file" name="image" class="form-control form-control-sm" >
                            @if($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span >
                        @endif   
                        </div>
                            
                         <button type="submit" class="btn btn-small btn-dark p-2 mt-3 ">Add Product Now</button>

                    
                       
                    </div>
          </div>

    </div>
    </div>
    
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>