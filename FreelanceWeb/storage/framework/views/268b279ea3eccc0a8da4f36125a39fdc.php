<script>
//   sample
// let languageCount = 1;
//   $('#add').click(function() {
//     languageCount++;
//     $('#div').append(
//       `
//         `
//     );
//   });
//   sample


  // for skills
  let skillCount = 1;
  $('#addSkillBtn').click(function() {
    skillCount++;
    $('#skillContainer').append(
      `<div class="col-md-6 mb-3">
          <div class="skilldiv">
              <label for="skill${skillCount}" class="form-label">Skill</label>
              <input name="skills[]" type="text" class="form-control" id="skill${skillCount}"  >
          </div>
      </div>`
    );
  });

  // for language
  let languageCount = 1;
  $('#addLanguage').click(function() {
    languageCount++;
    $('#langdiv').append(
      ` <div class="row mb-3 langdiv">
            <div class="col-6">
                <select name="language[]" class="form-select"  >
                  <option value="" selected>Language</option>
                  <?php if (isset($component)) { $__componentOriginal7697d30c23687ad226913263d0bfe8f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7697d30c23687ad226913263d0bfe8f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.languages','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('languages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7697d30c23687ad226913263d0bfe8f5)): ?>
<?php $attributes = $__attributesOriginal7697d30c23687ad226913263d0bfe8f5; ?>
<?php unset($__attributesOriginal7697d30c23687ad226913263d0bfe8f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7697d30c23687ad226913263d0bfe8f5)): ?>
<?php $component = $__componentOriginal7697d30c23687ad226913263d0bfe8f5; ?>
<?php unset($__componentOriginal7697d30c23687ad226913263d0bfe8f5); ?>
<?php endif; ?>
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
        `
    );
  });

// for education
let EduCount = 1;
  $('#addEdu').click(function() {
    EduCount++;
    $('#edudiv').append(
      `
        <div class="row mb-3 mt-3">
               <div class="col-12">
            <label for="" class="form-label">New Eduction</label>
          </div>
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
              <?php for($i = 2000; $i <= 2040; $i++): ?>
                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
              <?php endfor; ?>
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
              <?php if (isset($component)) { $__componentOriginalbb52b69ca694981febb14d9ea78946ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb52b69ca694981febb14d9ea78946ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.countries','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('countries'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb52b69ca694981febb14d9ea78946ae)): ?>
<?php $attributes = $__attributesOriginalbb52b69ca694981febb14d9ea78946ae; ?>
<?php unset($__attributesOriginalbb52b69ca694981febb14d9ea78946ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb52b69ca694981febb14d9ea78946ae)): ?>
<?php $component = $__componentOriginalbb52b69ca694981febb14d9ea78946ae; ?>
<?php unset($__componentOriginalbb52b69ca694981febb14d9ea78946ae); ?>
<?php endif; ?>
            </select>
          </div>
        </div>
      `
    );
  });

  // for certification
  let certificateCount = 1;
  $('#addCertifcate').click(function() {
    certificateCount++;
    $('#cerdiv').append(
      `
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
              <?php for($i = 2000; $i <= 2030; $i++): ?>
                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
              <?php endfor; ?>
            </select>
          </div>
        </div>
      `
    );
  });


  //edit page
  function removeSkill(element) {
        $(element).parent().parent().remove();
    }

    function removeLanguage(element) {
        $(element).parent().parent().remove();
    }

    function removeEducation(element) {
        $(element).parent().parent().parent().remove();
    }

    function removeCertificate(element) {
        $(element).parent().parent().parent().remove();
    }

</script>
<?php /**PATH S:\Saaria Zahid\Code\Laravel\FreelanceWeb\resources\views/freelance/js.blade.php ENDPATH**/ ?>