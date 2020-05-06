<?php ( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') ); ?>
<?php ( $profile_url = View::getSection('profile_url') ?? config('adminlte.profile_url', 'logout') ); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ( $profile_url = $profile_url ? route($profile_url) : '' ); ?>
    <?php ( $logout_url = $logout_url ? route($logout_url) : '' ); ?>
<?php else: ?>
    <?php ( $profile_url = $profile_url ? url($profile_url) : '' ); ?>
    <?php ( $logout_url = $logout_url ? url($logout_url) : '' ); ?>
<?php endif; ?>

<li class="nav-item dropdown user-menu">

    
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <?php if(config('adminlte.usermenu_image')): ?>
            <img src="<?php echo e(Auth::user()->adminlte_image()); ?>"
                 class="user-image img-circle elevation-2"
                 alt="<?php echo e(Auth::user()->name); ?>">
        <?php endif; ?>
        <span <?php if(config('adminlte.usermenu_image')): ?> class="d-none d-md-inline" <?php endif; ?>>
            <?php echo e(Auth::user()->name); ?>

        </span>
    </a>

    
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        
        <?php if(!View::hasSection('usermenu_header') && config('adminlte.usermenu_header')): ?>
            <li class="user-header <?php echo e(config('adminlte.usermenu_header_class', 'bg-primary')); ?>

                <?php if(!config('adminlte.usermenu_image')): ?> h-auto <?php endif; ?>">
                <?php if(config('adminlte.usermenu_image')): ?>
                    <img src="<?php echo e(Auth::user()->adminlte_image()); ?>"
                         class="img-circle elevation-2"
                         alt="<?php echo e(Auth::user()->name); ?>">
                <?php endif; ?>
                <p class="<?php if(!config('adminlte.usermenu_image')): ?> mt-0 <?php endif; ?>">
                    <?php echo e(Auth::user()->name); ?>

                    <?php if(config('adminlte.usermenu_desc')): ?>
                        <small><?php echo e(Auth::user()->adminlte_desc()); ?></small>
                    <?php endif; ?>
                </p>
            </li>
        <?php else: ?>
            <?php echo $__env->yieldContent('usermenu_header'); ?>
        <?php endif; ?>

        
        <?php echo $__env->renderEach('adminlte::partials.menuitems.menu-item-top-nav-user', $adminlte->menu(), 'item'); ?>

        
        <?php if (! empty(trim($__env->yieldContent('usermenu_body')))): ?>
            <li class="user-body">
                <?php echo $__env->yieldContent('usermenu_body'); ?>
            </li>
        <?php endif; ?>

        
        <li class="user-footer">
            <?php if($profile_url): ?>
                <a href="<?php echo e($profile_url); ?>" class="btn btn-default btn-flat">
                    <i class="fa fa-fw fa-user"></i>
                    <?php echo e(__('adminlte::menu.profile')); ?>

                </a>
            <?php endif; ?>
            <a class="btn btn-default btn-flat float-right <?php if(!$profile_url): ?> btn-block <?php endif; ?>"
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i>
                <?php echo e(__('adminlte::adminlte.log_out')); ?>

            </a>
            <form id="logout-form" action="<?php echo e($logout_url); ?>" method="POST" style="display: none;">
                <?php if(config('adminlte.logout_method')): ?>
                    <?php echo e(method_field(config('adminlte.logout_method'))); ?>

                <?php endif; ?>
                <?php echo e(csrf_field()); ?>

            </form>
        </li>

    </ul>

</li>
<?php /**PATH C:\xampp\htdocs\Aula\resources\views/vendor/adminlte/partials/navbar/dropdown-user-menu.blade.php ENDPATH**/ ?>