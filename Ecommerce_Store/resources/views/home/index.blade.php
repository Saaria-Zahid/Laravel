<!DOCTYPE html>
<html lang="en">

<head>
   @include('home.css')
</head>

<body>

    {{-- navbar start --}}

    @include('home.header')

    {{-- navbar end --}}

    <!-- Featured Start -->
    @include('home.featured')
    <!-- Featured End -->


    <!-- Categories Start -->
    @include('home.categories')
    <!-- Categories End -->







    {{-- product start --}}
    @include('home.products')
    {{-- product end --}}



    {{-- footer start --}}
    @include('home.footer')
    {{-- footer end --}}



</body>

</html>
