
<?php
$languages = [
    'en' => 'English',
    'es' => 'Spanish',
    'fr' => 'French',
    'de' => 'German',
    'it' => 'Italian',
    'pt' => 'Portuguese',
    'ru' => 'Russian',
    'zh' => 'Chinese',
    'ja' => 'Japanese',
    'ko' => 'Korean',
    'ar' => 'Arabic',
    'hi' => 'Hindi',
    'bn' => 'Bengali',
    'pa' => 'Punjabi',
    'jv' => 'Javanese',
    'vi' => 'Vietnamese',
    'mr' => 'Marathi',
    'ta' => 'Tamil',
    'tr' => 'Turkish',
    'fa' => 'Persian',
    'ur' => 'Urdu',
    // Add more languages as needed
];
?>


    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option >  <?php echo e($name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    
    
<?php /**PATH S:\Saaria Zahid\Code\Laravel\FreelanceWeb\resources\views/components/languages.blade.php ENDPATH**/ ?>