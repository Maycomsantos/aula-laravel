<?php if((isset($item['topnav_right']) && $item['topnav_right'])): ?>
  <?php echo $__env->make('adminlte::partials.menuitems.menu-item-top-nav', $item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Aula\resources\views/vendor/adminlte/partials/menuitems/menu-item-top-nav-right.blade.php ENDPATH**/ ?>