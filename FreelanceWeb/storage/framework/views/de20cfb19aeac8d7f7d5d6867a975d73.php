<h1>index</h1>
<!-- Log out               -->
<div class="list-inline-item logout">
    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>

        <input type="submit" value="Logout" class="btn btn-primary">
    </form>
  </div>
<?php /**PATH S:\Saaria Zahid\Code\Laravel\FreelanceWeb\resources\views/home/index.blade.php ENDPATH**/ ?>