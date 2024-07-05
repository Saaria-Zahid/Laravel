<!DOCTYPE html>
<html lang="en">
<head>
  <x-css/>
</head>
<body>

@include('freelance.header')
<h1>Freelancer</h1>

<!-- Logout -->
<div class="list-inline-item logout">
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <input type="submit" value="Logout" class="btn btn-primary">
  </form>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="{{ url('add_details') }}" method="post" class="row g-3" enctype="multipart/form-data">
        @csrf



        <div class="col-12">
          <label for="formFile" class="form-label">Profile Image</label>
          <input class="form-control" type="file" style="width: 400px; height:50px;" id="formFile" name="image"  >
        </div>

        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder=""  >
        </div>

        <div class="col-12">
          <label for="description" class="form-label">Description</label><br>
          <textarea name="description" id="description" cols="100" rows="4"  >Description Box</textarea>
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
              <div id="edudiv">
                <div class="row mb-3">
                  <div class="col-3">
                    <select id="edu_deg" name="edu_deg[]" class="form-select"  >
                      <option selected>Choose Degree</option>
                      <option value="Bsc">Bsc</option>
                      <option value="Bcom">Bcom</option>
                      <option value="Mbbs">Mbbs</option>
                      <option value="Ba">Ba</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <input type="text" name="edu_institute[]" class="form-control" placeholder="College/University"  >
                  </div>
                  <div class="col-3">
                    <select name="edu_year[]" class="form-select"  >
                      <option selected>Year</option>
                      @for ($i = 2000; $i <= 2040; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <input type="text" name="edu_major[]" class="form-control" placeholder="Major"  >
                  </div>
                  <div class="col-6">
                    <select id="edu_country" name="edu_country[]" class="form-select"  >
                      <option value="" selected>Choose - Country</option>
                      <x-countries/>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <button type="button" id="addEdu" class="btn btn-primary">Add More Education</button>
              </div>

            </div>
          </div>
        </div>
      </div>
        {{-- Education --}}

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
                  <div id="cerdiv">
                    <div class="row mt-3">
                      <div class="col-12">
                        <label for="" class="form-label">Certificates</label>
                      </div>
                      <div class="col-5">
                        <input type="text" name="certificate[]" class="form-control" placeholder="Job Title"  >
                      </div>
                      <div class="col-4">
                        <input type="text" name="cer_from[]" class="form-control" placeholder="Company"  >
                      </div>
                      <div class="col-3">
                        <select name="cer_year[]" class="form-select"  >
                          <option selected>Year Of Experience</option>
                          @for ($i = 2000; $i <= 2030; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                          @endfor
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <button type="button" id="addCertifcate" class="btn btn-primary">Add More Certification</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        {{-- Certification --}}
        `
  {{-- language --}}

  <div class="accordion" id="accordionEducation">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducation" aria-expanded="true" aria-controls="collapseEducation">
            Language
        </button>
      </h2>
      <div id="collapseEducation" class="accordion-collapse collapse" data-bs-parent="#accordionEducation">
        <div class="accordion-body">
          <label for="edu_deg" class="form-label">Language</label>

          <div id="langdiv">
            <div class="row mb-3 langdiv">

              <div class="col-6">
                  <select name="language[]" class="form-select"  >
                    <option value="" selected>Language</option>
                    <x-languages/>
                  </select>
                </div>
                <div class="col-4">
                  <select name="proficiency[]" class="form-select"  >
                      <option value="Baic" selected>Basic</option>
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

  {{-- language end --}}

        {{-- Skills --}}
         <div class="row mt-3 mb-3" id="skillContainer">
          <div class="col-md-6 mb-3">
            <div class="skilldiv">
              <label for="skill1" class="form-label">Skill</label>
              <input name="skills[]" type="text" class="form-control" id="skill1"  >
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <button type="button" class="btn btn-secondary" id="addSkillBtn">Add More Skills</button>
          </div>
        </div>
        {{-- Skills --}}

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
