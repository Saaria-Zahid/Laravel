<!DOCTYPE html>
<html lang="en">
<head>

    <title>Fiverr Profile</title>
      <x-css/>
    <style>
        .card-img-top {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
{{-- Comments --}}
{{-- <div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>
   </div> --}}
<body>

    <div class="container">
        <div class="row mt-5">

            {{-- Sidebar --}}
        <div class="col-md-3">



            @foreach ($data as $profile)
            @if ($profile->user_id != Auth::user()->id)
        @else


            <div class="row">
                <div class="col-md-12">


            <div class="card">
                <div class="card-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <img src="profile_image/{{$profile->image}}" alt="Profile Picture" class="rounded-circle" width="100" height="100">
                        </div>
                        {{-- <div class="d-flex align-items-center">
                            <span class="badge badge-success">• Online</span>
                        </div> --}}
                    </div>
                    <div class=" text-center">
                    <h3 class="card-title mt-3 ">{{$profile->name}} {{--<span class="badge badge-pink">NEW</span>--}}</h3>
                    <p class="card-text "><span>@</span>{{$profile->user->name}}</p>
                    <p class="card-text ">Web Development Expert: Powering Your Success!</p>
                    <div class="d-grid gap-2">

                        <button class="btn btn-outline-secondary text btn-block" type="button">Preview Your Profile</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>

            {{-- Side Bar section 2 --}}

       <div class="row mt-3">
        <div class="col-md-12 mt-">
            <div class="card">
                <div class="card-body">

                        <div class="row">
                          <div class="col-md-6">
                            <i class="bi bi-geo-alt-fill"></i> From
                          </div>
                          <div class="col-md-6 text-end">
                            Pakistan
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <i class="bi bi-person-fill"></i> Member since
                          </div>
                          <div class="col-md-6 text-end">
                            {{$profile->created_at}}                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <i class="bi bi-airplane-fill"></i> Last Delivery
                          </div>
                          <div class="col-md-6 text-end">
                            1 year
                          </div>
                        </div>
                      </div>
                </div>

        </div>
       </div>

           {{-- Side Bar section 3 --}}

       <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Intro video <i class="fas fa-question-circle"></i></h4>
                    <p class="card-text">Stand out with a short introduction video.</p>
                    <button class="btn btn-success" type="button">Get started</button>
                </div>
            </div>
        </div>
       </div>

        {{-- Side Bar section 4 --}}

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="">Description</h4>
            <p class="card-text">{{$profile->description}}</p>

                    </div>
                </div>
            </div>
           </div>


           <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="">Languages</h4>
                        <ul class="list-group">
                            @foreach($languages as $lang)
                            <li>{{ $lang['language'] }}  -  {{ $lang['proficiency'] }}</li>
                        @endforeach

                        </ul>
                    </div>
                </div>
            </div>
           </div>


           <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="">Skills</h4>
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            @foreach($skills as $skill)
                            <button class="btn btn-secondary">{{$skill}}</button>

                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
           </div>

           <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="">Education</h4>
                        @foreach ($education as $edu )
                        <p>{{$edu['degree']}} - {{$edu['major'] }}<br>{{$edu['institute']}} {{$edu['country'] }} {{$edu['year'] }}</p>

                        @endforeach
                    </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="">Certificates</h4>
                            @foreach ($certificate as $cert )
                            <p>{{$cert['certificate']}}<br/> <span>{{$cert['from']}} {{$cert['year']}}</span></p>

                            @endforeach
                            <a href="{{url('edit_profile',$profile->id)}}" class="btn btn-outline-secondary">Add More</a>
                        </div>
                        </div>
                    </div>
                </div>

           </div>


         {{-- Sidebar end --}}
         @endif

            @endforeach

            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://dummyimage.com/640x360/000/fff&text=WordPress+Landing+Page" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">I will build responsive wordpress landing page</h5>
                                <p class="card-text">...</p>
                                <h6 class="card-subtitle mb-2 text-muted">STARTING AT $110</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://dummyimage.com/640x360/000/fff&text=WordPress+Ecommerce+Website" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">I will build responsive wordpress ecommerce</h5>
                                <p class="card-text">...</p>
                                <h6 class="card-subtitle mb-2 text-muted">STARTING AT $80</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://dummyimage.com/640x360/000/fff&text=Amazon+Products" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">I will do amazon product research for amazon fba</h5>
                                <p class="card-text">...</p>
                                <h6 class="card-subtitle mb-2 text-muted">STARTING AT $65</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://dummyimage.com/640x360/000/fff&text=Amazon+Product+Research" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">I will research best selling product for amazon fba</h5>
                                <p class="card-text">...</p>
                                <h6 class="card-subtitle mb-2 text-muted">STARTING AT $65</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://dummyimage.com/640x360/000/fff&text=WordPress+Website+in+5+Hrs" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">I will design responsive wordpress website in 5</h5>
                                <p class="card-text">...</p>
                                <h6 class="card-subtitle mb-2 text-muted">STARTING AT $90</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://dummyimage.com/640x360/000/fff&text=Website+Development" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">I will develop a topnotch business website</h5>
                                <p class="card-text">...</p>
                                <h6 class="card-subtitle mb-2 text-muted">STARTING AT $200</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <x-footer/>

</body>
</html>
