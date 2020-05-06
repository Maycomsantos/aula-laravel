<?php $__currentLoopData = config('adminlte.plugins'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plugin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($plugin['active'] || View::getSection('plugins.' . $plugin['name'])): ?>
        <?php $__currentLoopData = $plugin['files']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($file['type'] == $type): ?>
                <?php if($type == 'css'): ?>
                    <?php if($file['asset']): ?>
                        <link rel="stylesheet" href="<?php echo e(asset($file['location'])); ?>">
                    <?php else: ?>
                        <link rel="stylesheet" href="<?php echo e($file['location']); ?>">
                    <?php endif; ?>
                <?php elseif($type == 'js'): ?>
                    <?php if($file['asset']): ?>
                        <script src="<?php echo e(asset($file['location'])); ?>"></script>
                    <?php else: ?>
                        <script src="<?php echo e($file['location']); ?>"></script>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\Aula\vendor\jeroennoten\laravel-adminlte\src/../resources/views/plugins.blade.php ENDPATH**/ ?>