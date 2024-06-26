<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD WebApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <x-header/>


    <div class="container pt-5 mt-5">
        <h1>Products</h1>

        <div class="row">
           @foreach ($products as $product)
               
           <div class="col-md-3 p-2 mt-2">
               <div class="card" style="width: 100%;">
                <img src="products/{{$product->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">${{$product->price}}</h4>

                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="{{ url('products/' . $product->id . '/edit')}}" class="btn btn-dark btn-small">Edit Product</a> 
                        
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        
    </div>
    
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>