<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">

        @foreach ($category as $category )

        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="/categories/{{$category->category_thumbnail}}"  alt="" style="width: 100%; height:250px; object-fit:cover;">
                </a>
                <h5 class="font-weight-semi-bold m-0">{{$category->category_name}}</h5>
            </div>
        </div>
        @endforeach

    </div>
</div>
