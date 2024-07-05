<!DOCTYPE html>
<html lang="en">
<head>
  <x-css/>
</head>
<body>

@include('freelance.header')
<h1>Freelancer</h1>

<!-- Log out -->
<div class="list-inline-item logout">
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <input type="submit" value="Logout" class="btn btn-primary">
  </form>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="{{ url('update_details', $data->id) }}" method="post" class="row g-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="formFile" class="form-label">Profile Image</label>
            <input class="form-control" type="file" style="width: 400px; height:50px;" id="formFile" name="image">
            @if(isset($data->image) && !empty($data->image))
                <img src="{{ asset('profile_image/'.$data->image) }}" width="100" height="100">
            @endif
        </div>

        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
        </div>

        <div class="col-12">
          <label for="description" class="form-label">Description</label><br>
          <textarea name="description" id="description" cols="100" rows="4">Description Box</textarea>
        </div>

        {{-- Education --}}
        <div class="accordion" id="accordionEducation">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducation" aria-expanded="true" aria-controls="collapseEducation">
                Education
              </button>
            </h2>
            <div id="collapseEducation" class="accordion-collapse collapse show" data-bs-parent="#accordionEducation">
              <div class="accordion-body">
                @if (isset($data->education) && !empty($data->education))
                  @foreach (json_decode($data->education, true) as $edu)
                    <div id="edudiv">
                      <div class="row mt-3 mb-3">
                        <label>Education</label>
                        <div class="col-3">
                          <select id="edu_deg" name="edu_deg[]" class="form-select">
                            <option selected>Choose Degree</option>
                            <option value="Bsc" {{ $edu['degree'] == 'Bsc' ? 'selected' : '' }}>Bsc</option>
                            <option value="Bcom" {{ $edu['degree'] == 'Bcom' ? 'selected' : '' }}>Bcom</option>
                            <option value="Mbbs" {{ $edu['degree'] == 'Mbbs' ? 'selected' : '' }}>Mbbs</option>
                            <option value="Ba" {{ $edu['degree'] == 'Ba' ? 'selected' : '' }}>Ba</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <input type="text" name="edu_institute[]" value="{{ $edu['institute'] }}" class="form-control" placeholder="College/University">
                        </div>
                        <div class="col-3">
                          <select name="edu_year[]" class="form-select">
                            <option selected>Year</option>
                            @for ($i = 2000; $i <= 2040; $i++)
                              <option value="{{ $i }}" {{ $edu['year'] == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-6">
                          <input type="text" name="edu_major[]" value="{{ $edu['major'] }}" class="form-control" placeholder="Major">
                        </div>
                        <div class="col-6">
                          <select id="edu_country" name="edu_country[]" class="form-select">
                            <option value="{{$edu['country']}}" selected>{{$edu['country']}}</option>
                            <x-countries/>
                          </select>
                          <button type="button" class="btn btn-danger" onclick="removeEducation(this)">Remove</button>
                        </div>

                      </div>
                    </div>
                  @endforeach
                @endif

                <div class="row mt-3">
                  <button type="button" id="addEdu" class="btn btn-primary">Add More Education</button>
                </div>

              </div>
            </div>
          </div>
        </div>
        {{-- Education End --}}

        {{-- Certification --}}
        <div class="accordion" id="accordionCertification">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCertification" aria-expanded="true" aria-controls="collapseCertification">
                Certification
              </button>
            </h2>
            <div id="collapseCertification" class="accordion-collapse collapse" data-bs-parent="#accordionCertification">
              <div class="accordion-body">
                @if (isset($data->certificate) && !empty($data->certificate))
                  @foreach (json_decode($data->certificate, true) as $key => $cert)
                    <div id="cerdiv">
                      <div class="row mt-3">
                        <div class="col-12">
                          <label for="" class="form-label">Certificates</label>
                        </div>
                        <div class="col-5">
                          <input type="text" name="certificate[]" value="{{ $cert['certificate'] }}" class="form-control" placeholder="Job Title">
                        </div>
                        <div class="col-4">
                          <input type="text" name="cer_from[]" value="{{ $cert['from'] }}" class="form-control" placeholder="Company">
                        </div>
                        <div class="col-3">
                          <select name="cer_year[]" class="form-select">
                            <option selected>Year Of Experience</option>
                            @for ($i = 2000; $i <= 2030; $i++)
                              <option value="{{ $i }}" {{ $cert['year'] == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                          </select>
                          <button type="button" class="btn btn-danger" onclick="removeCertificate(this)">Remove</button>

                        </div>
                      </div>
                    </div>
                  @endforeach
                @endif

                <div class="row mt-3">
                  <button type="button" id="addCertificate" class="btn btn-primary">Add More Certification</button>
                </div>

              </div>
            </div>
          </div>
        </div>
        {{-- Certification End --}}

        {{-- Language --}}
        <div class="accordion" id="accordionLanguage">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLanguage" aria-expanded="true" aria-controls="collapseLanguage">
                Language
              </button>
            </h2>
            <div id="collapseLanguage" class="accordion-collapse collapse" data-bs-parent="#accordionLanguage">
              <div class="accordion-body">
                <label for="edu_deg" class="form-label">Language</label>
                <div id="langdiv">
                  @if(isset($data->language) && !empty($data->language))
                    @foreach(json_decode($data->language, true) as $key => $lang)
                      <div class="row mb-3 langdiv">
                        <div class="col-6">
                          <select name="language[]" class="form-select">
                            <option value="{{$lang['language']}}" selected>{{$lang['language']}}</option>
                            <x-languages/>
                          </select>
                        </div>
                        <div class="col-4">
                          <select name="proficiency[]" class="form-select">
                            <option value="Basic" {{ $lang['proficiency'] == 'Basic' ? 'selected' : '' }}>Basic</option>
                            <option value="Native/Bilingual" {{ $lang['proficiency'] == 'Native/Bilingual' ? 'selected' : '' }}>Native/Bilingual</option>
                            <option value="Fluent" {{ $lang['proficiency'] == 'Fluent' ? 'selected' : '' }}>Fluent</option>
                          </select>
                        </div>
                        <div class="col-2">
                          <button type="button" class="btn btn-danger" onclick="removeLanguage(this)">Remove</button>
                        </div>
                      </div>
                    @endforeach
                  @endif

                  <div class="row mb-3 langdiv" id="newLangDiv">
                    <div class="col-6">
                      <select name="language[]" class="form-select">
                        <option value="" selected>Language</option>
                        <x-languages/>
                      </select>
                    </div>
                    <div class="col-4">
                      <select name="proficiency[]" class="form-select">
                        <option value="Basic" selected>Basic</option>
                        <option value="Native/Bilingual">Native/Bilingual</option>
                        <option value="Fluent">Fluent</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <button type="button" id="addLanguage" class="btn btn-primary">Add More Language</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- Language End --}}

        {{-- Skills --}}
        <div class="row mt-3 mb-3" id="skillContainer">
          @if(isset($data->skills) && !empty($data->skills))
            @foreach(json_decode($data->skills, true) as $key => $skill)
              <div class="col-md-6 mb-3">
                <div class="skilldiv">
                  <label for="skill{{ $key+1 }}" class="form-label">Skill</label>
                  <input name="skills[]" type="text" class="form-control" id="skill{{ $key+1 }}" value="{{ $skill }}">
                  <button type="button" class="btn btn-danger" onclick="removeSkill(this)">Remove</button>
                </div>
              </div>
            @endforeach
          @endif

          <div class="row mb-3">
            <div class="col-md-6">
              <button type="button" class="btn btn-secondary" id="addSkillBtn">Add More Skills</button>
            </div>
          </div>
        </div>
        {{-- Skills End --}}

        <div class="col-12 mt-3 mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@include('freelance.js')
<x-footer/>
</body>
</html>


