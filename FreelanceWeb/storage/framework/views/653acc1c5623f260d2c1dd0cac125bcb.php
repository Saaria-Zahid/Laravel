<!DOCTYPE html>
<html lang="en">
<head>

    <title>Fiverr Profile</title>
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
    <style>
        .card-img-top {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>


<body>

    <div class="container">
        <div class="row mt-5">

            
        <div class="col-md-3">



            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($profile->user_id != Auth::user()->id): ?>
        <?php else: ?>


            <div class="row">
                <div class="col-md-12">


            <div class="card">
                <div class="card-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <img src="profile_image/<?php echo e($profile->image); ?>" alt="Profile Picture" class="rounded-circle" width="100" height="100">
                        </div>
                        
                    </div>
                    <div class=" text-center">
                    <h3 class="card-title mt-3 "><?php echo e($profile->name); ?> </h3>
                    <p class="card-text "><span>@</span><?php echo e($profile->user->name); ?></p>
                    <p class="card-text ">Web Development Expert: Powering Your Success!</p>
                    <div class="d-grid gap-2">

                        <button class="btn btn-outline-secondary text btn-block" type="button">Preview Your Profile</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>

            

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
                            <?php echo e($profile->created_at); ?>                          </div>
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

        

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="">Description</h4>
            <p class="card-text"><?php echo e($profile->description); ?></p>

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
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($lang['language']); ?>  -  <?php echo e($lang['proficiency']); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="btn btn-secondary"><?php echo e($skill); ?></button>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                        <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($edu['degree']); ?> - <?php echo e($edu['major']); ?><br><?php echo e($edu['institute']); ?> <?php echo e($edu['country']); ?> <?php echo e($edu['year']); ?></p>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="">Certificates</h4>
                            <?php $__currentLoopData = $certificate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo e($cert['certificate']); ?><br/> <span><?php echo e($cert['from']); ?> <?php echo e($cert['year']); ?></span></p>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(url('edit_profile',$profile->id)); ?>" class="btn btn-outline-secondary">Add More</a>
                        </div>
                        </div>
                    </div>
                </div>

           </div>


         
         <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php /**PATH S:\Saaria Zahid\Code\Laravel\FreelanceWeb\resources\views/freelance/profile.blade.php ENDPATH**/ ?>