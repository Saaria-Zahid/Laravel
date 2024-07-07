<!DOCTYPE html>
<html lang="en">
<head>
  <?php if (isset($component)) { $__componentOriginal27fff640c6c8cdf753a7263783dc93ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal27fff640c6c8cdf753a7263783dc93ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal27fff640c6c8cdf753a7263783dc93ff)): ?>
<?php $attributes = $__attributesOriginal27fff640c6c8cdf753a7263783dc93ff; ?>
<?php unset($__attributesOriginal27fff640c6c8cdf753a7263783dc93ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27fff640c6c8cdf753a7263783dc93ff)): ?>
<?php $component = $__componentOriginal27fff640c6c8cdf753a7263783dc93ff; ?>
<?php unset($__componentOriginal27fff640c6c8cdf753a7263783dc93ff); ?>
<?php endif; ?>
</head>
<body>

<?php echo $__env->make('freelance.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1>Freelancer</h1>

<!-- Log out -->
<div class="list-inline-item logout">
  <form method="POST" action="<?php echo e(route('logout')); ?>">
    <?php echo csrf_field(); ?>
    <input type="submit" value="Logout" class="btn btn-primary">
  </form>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo e(url('update_details', $data->id)); ?>" method="post" class="row g-3" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="col-12">
            <label for="formFile" class="form-label">Profile Image</label>
            <input class="form-control" type="file" style="width: 400px; height:50px;" id="formFile" name="image">
            <?php if(isset($data->image) && !empty($data->image)): ?>
                <img src="<?php echo e(asset('profile_image/'.$data->image)); ?>" width="100" height="100">
            <?php endif; ?>
        </div>

        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="<?php echo e($data->name); ?>">
        </div>

        <div class="col-12">
          <label for="description" class="form-label">Description</label><br>
          <textarea name="description" id="description" cols="100" rows="4">Description Box</textarea>
        </div>

        
        <div class="accordion" id="accordionEducation">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducation" aria-expanded="true" aria-controls="collapseEducation">
                Education
              </button>
            </h2>
            <div id="collapseEducation" class="accordion-collapse collapse show" data-bs-parent="#accordionEducation">
              <div class="accordion-body">
                <?php if(isset($data->education) && !empty($data->education)): ?>
                  <?php $__currentLoopData = json_decode($data->education, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="edudiv">
                      <div class="row mt-3 mb-3">
                        <label>Education</label>
                        <div class="col-3">
                          <select id="edu_deg" name="edu_deg[]" class="form-select">
                            <option selected>Choose Degree</option>
                            <option value="Bsc" <?php echo e($edu['degree'] == 'Bsc' ? 'selected' : ''); ?>>Bsc</option>
                            <option value="Bcom" <?php echo e($edu['degree'] == 'Bcom' ? 'selected' : ''); ?>>Bcom</option>
                            <option value="Mbbs" <?php echo e($edu['degree'] == 'Mbbs' ? 'selected' : ''); ?>>Mbbs</option>
                            <option value="Ba" <?php echo e($edu['degree'] == 'Ba' ? 'selected' : ''); ?>>Ba</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <input type="text" name="edu_institute[]" value="<?php echo e($edu['institute']); ?>" class="form-control" placeholder="College/University">
                        </div>
                        <div class="col-3">
                          <select name="edu_year[]" class="form-select">
                            <option selected>Year</option>
                            <?php for($i = 2000; $i <= 2040; $i++): ?>
                              <option value="<?php echo e($i); ?>" <?php echo e($edu['year'] == $i ? 'selected' : ''); ?>><?php echo e($i); ?></option>
                            <?php endfor; ?>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-6">
                          <input type="text" name="edu_major[]" value="<?php echo e($edu['major']); ?>" class="form-control" placeholder="Major">
                        </div>
                        <div class="col-6">
                          <select id="edu_country" name="edu_country[]" class="form-select">
                            <option value="<?php echo e($edu['country']); ?>" selected><?php echo e($edu['country']); ?></option>
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
                          <button type="button" class="btn btn-danger" onclick="removeEducation(this)">Remove</button>
                        </div>

                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <div class="row mt-3">
                  <button type="button" id="addEdu" class="btn btn-primary">Add More Education</button>
                </div>

              </div>
            </div>
          </div>
        </div>
        

        
        <div class="accordion" id="accordionCertification">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCertification" aria-expanded="true" aria-controls="collapseCertification">
                Certification
              </button>
            </h2>
            <div id="collapseCertification" class="accordion-collapse collapse" data-bs-parent="#accordionCertification">
              <div class="accordion-body">
                <?php if(isset($data->certificate) && !empty($data->certificate)): ?>
                  <?php $__currentLoopData = json_decode($data->certificate, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="cerdiv">
                      <div class="row mt-3">
                        <div class="col-12">
                          <label for="" class="form-label">Certificates</label>
                        </div>
                        <div class="col-5">
                          <input type="text" name="certificate[]" value="<?php echo e($cert['certificate']); ?>" class="form-control" placeholder="Job Title">
                        </div>
                        <div class="col-4">
                          <input type="text" name="cer_from[]" value="<?php echo e($cert['from']); ?>" class="form-control" placeholder="Company">
                        </div>
                        <div class="col-3">
                          <select name="cer_year[]" class="form-select">
                            <option selected>Year Of Experience</option>
                            <?php for($i = 2000; $i <= 2030; $i++): ?>
                              <option value="<?php echo e($i); ?>" <?php echo e($cert['year'] == $i ? 'selected' : ''); ?>><?php echo e($i); ?></option>
                            <?php endfor; ?>
                          </select>
                          <button type="button" class="btn btn-danger" onclick="removeCertificate(this)">Remove</button>

                        </div>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <div class="row mt-3">
                  <button type="button" id="addCertificate" class="btn btn-primary">Add More Certification</button>
                </div>

              </div>
            </div>
          </div>
        </div>
        

        
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
                  <?php if(isset($data->language) && !empty($data->language)): ?>
                    <?php $__currentLoopData = json_decode($data->language, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="row mb-3 langdiv">
                        <div class="col-6">
                          <select name="language[]" class="form-select">
                            <option value="<?php echo e($lang['language']); ?>" selected><?php echo e($lang['language']); ?></option>
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
                          <select name="proficiency[]" class="form-select">
                            <option value="Basic" <?php echo e($lang['proficiency'] == 'Basic' ? 'selected' : ''); ?>>Basic</option>
                            <option value="Native/Bilingual" <?php echo e($lang['proficiency'] == 'Native/Bilingual' ? 'selected' : ''); ?>>Native/Bilingual</option>
                            <option value="Fluent" <?php echo e($lang['proficiency'] == 'Fluent' ? 'selected' : ''); ?>>Fluent</option>
                          </select>
                        </div>
                        <div class="col-2">
                          <button type="button" class="btn btn-danger" onclick="removeLanguage(this)">Remove</button>
                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>

                  <div class="row mb-3 langdiv" id="newLangDiv">
                    <div class="col-6">
                      <select name="language[]" class="form-select">
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
        

        
        <div class="row mt-3 mb-3" id="skillContainer">
          <?php if(isset($data->skills) && !empty($data->skills)): ?>
            <?php $__currentLoopData = json_decode($data->skills, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-6 mb-3">
                <div class="skilldiv">
                  <label for="skill<?php echo e($key+1); ?>" class="form-label">Skill</label>
                  <input name="skills[]" type="text" class="form-control" id="skill<?php echo e($key+1); ?>" value="<?php echo e($skill); ?>">
                  <button type="button" class="btn btn-danger" onclick="removeSkill(this)">Remove</button>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

          <div class="row mb-3">
            <div class="col-md-6">
              <button type="button" class="btn btn-secondary" id="addSkillBtn">Add More Skills</button>
            </div>
          </div>
        </div>
        

        <div class="col-12 mt-3 mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php echo $__env->make('freelance.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
</body>
</html>


<?php /**PATH S:\Saaria Zahid\Code\Laravel\FreelanceWeb\resources\views/freelance/edit_profile.blade.php ENDPATH**/ ?>