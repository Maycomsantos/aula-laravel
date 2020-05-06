<?php $__env->startSection('adminlte_css'); ?>
    <?php echo $__env->yieldPushContent('css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('classes_body',
    (config('adminlte.sidebar_mini', true) === true ?
        'sidebar-mini ' :
        (config('adminlte.sidebar_mini', true) == 'md' ?
         'sidebar-mini sidebar-mini-md ' : '')
    ) .
    (config('adminlte.layout_topnav') || View::getSection('layout_topnav') ? 'layout-top-nav ' : '') .
    (config('adminlte.layout_boxed') ? 'layout-boxed ' : '') .
    (!config('adminlte.layout_topnav') && !View::getSection('layout_topnav') ?
        (config('adminlte.layout_fixed_sidebar') ? 'layout-fixed ' : '') .
        (config('adminlte.layout_fixed_navbar') === true ?
            'layout-navbar-fixed ' :
            (isset(config('adminlte.layout_fixed_navbar')['xs']) ? (config('adminlte.layout_fixed_navbar')['xs'] == true ? 'layout-navbar-fixed ' : 'layout-navbar-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_navbar')['sm']) ? (config('adminlte.layout_fixed_navbar')['sm'] == true ? 'layout-sm-navbar-fixed ' : 'layout-sm-navbar-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_navbar')['md']) ? (config('adminlte.layout_fixed_navbar')['md'] == true ? 'layout-md-navbar-fixed ' : 'layout-md-navbar-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_navbar')['lg']) ? (config('adminlte.layout_fixed_navbar')['lg'] == true ? 'layout-lg-navbar-fixed ' : 'layout-lg-navbar-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_navbar')['xl']) ? (config('adminlte.layout_fixed_navbar')['xl'] == true ? 'layout-xl-navbar-fixed ' : 'layout-xl-navbar-not-fixed ') : '')
        ) .
        (config('adminlte.layout_fixed_footer') === true ?
            'layout-footer-fixed ' :
            (isset(config('adminlte.layout_fixed_footer')['xs']) ? (config('adminlte.layout_fixed_footer')['xs'] == true ? 'layout-footer-fixed ' : 'layout-footer-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_footer')['sm']) ? (config('adminlte.layout_fixed_footer')['sm'] == true ? 'layout-sm-footer-fixed ' : 'layout-sm-footer-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_footer')['md']) ? (config('adminlte.layout_fixed_footer')['md'] == true ? 'layout-md-footer-fixed ' : 'layout-md-footer-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_footer')['lg']) ? (config('adminlte.layout_fixed_footer')['lg'] == true ? 'layout-lg-footer-fixed ' : 'layout-lg-footer-not-fixed ') : '') .
            (isset(config('adminlte.layout_fixed_footer')['xl']) ? (config('adminlte.layout_fixed_footer')['xl'] == true ? 'layout-xl-footer-fixed ' : 'layout-xl-footer-not-fixed ') : '')
        )
        : ''
    ) .
    (config('adminlte.sidebar_collapse') || View::getSection('sidebar_collapse') ? 'sidebar-collapse ' : '') .
    (config('adminlte.right_sidebar') && config('adminlte.right_sidebar_push') ? 'control-sidebar-push ' : '') .
    config('adminlte.classes_body')
); ?>

<?php $__env->startSection('body_data',
(config('adminlte.sidebar_scrollbar_theme', 'os-theme-light') != 'os-theme-light' ? 'data-scrollbar-theme=' . config('adminlte.sidebar_scrollbar_theme')  : '') . ' ' . (config('adminlte.sidebar_scrollbar_auto_hide', 'l') != 'l' ? 'data-scrollbar-auto-hide=' . config('adminlte.sidebar_scrollbar_auto_hide')   : '')); ?>

<?php ( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') ); ?>
<?php ( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') ); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ( $logout_url = $logout_url ? route($logout_url) : '' ); ?>
    <?php ( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' ); ?>
<?php else: ?>
    <?php ( $logout_url = $logout_url ? url($logout_url) : '' ); ?>
    <?php ( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' ); ?>
<?php endif; ?>

<?php $__env->startSection('body'); ?>
    <div class="wrapper">
        <?php if(config('adminlte.layout_topnav') || View::getSection('layout_topnav')): ?>
        <nav class="main-header navbar <?php echo e(config('adminlte.classes_topnav_nav', 'navbar-expand-md')); ?> <?php echo e(config('adminlte.topnav_color', 'navbar-white navbar-light')); ?>">
            <div class="<?php echo e(config('adminlte.classes_topnav_container', 'container')); ?>">
                <?php if(config('adminlte.logo_img_xl')): ?>
                    <a href="<?php echo e($dashboard_url); ?>" class="navbar-brand logo-switch">
                        <img src="<?php echo e(asset(config('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png'))); ?>" alt="<?php echo e(config('adminlte.logo_img_alt', 'AdminLTE')); ?>" class="<?php echo e(config('adminlte.logo_img_class', 'brand-image-xl')); ?> logo-xs">
                        <img src="<?php echo e(asset(config('adminlte.logo_img_xl'))); ?>" alt="<?php echo e(config('adminlte.logo_img_alt', 'AdminLTE')); ?>" class="<?php echo e(config('adminlte.logo_img_xl_class', 'brand-image-xs')); ?> logo-xl">
                    </a>
                <?php else: ?>
                    <a href="<?php echo e($dashboard_url); ?>" class="navbar-brand <?php echo e(config('adminlte.classes_brand')); ?>">
                        <img src="<?php echo e(asset(config('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png'))); ?>" alt="<?php echo e(config('adminlte.logo_img_alt', 'AdminLTE')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light <?php echo e(config('adminlte.classes_brand_text')); ?>">
                            <?php echo config('adminlte.logo', '<b>Admin</b>LTE'); ?>

                        </span>
                    </a>
                <?php endif; ?>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                        <?php echo $__env->renderEach('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item'); ?>
                    </ul>
                </div>
            <?php else: ?>
            <nav class="main-header navbar <?php echo e(config('adminlte.classes_topnav_nav', 'navbar-expand-md')); ?> <?php echo e(config('adminlte.classes_topnav', 'navbar-white navbar-light')); ?>">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" <?php if(config('adminlte.sidebar_collapse_remember')): ?> data-enable-remember="true" <?php endif; ?> <?php if(!config('adminlte.sidebar_collapse_remember_no_transition')): ?> data-no-transition-after-reload="false" <?php endif; ?> <?php if(config('adminlte.sidebar_collapse_auto_size')): ?> data-auto-collapse-size="<?php echo e(config('adminlte.sidebar_collapse_auto_size')); ?>" <?php endif; ?>>
                            <i class="fas fa-bars"></i>
                            <span class="sr-only"><?php echo e(__('adminlte::adminlte.toggle_navigation')); ?></span>
                        </a>
                    </li>
                    <?php echo $__env->renderEach('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item'); ?>
                    <?php echo $__env->yieldContent('content_top_nav_left'); ?>
                </ul>
            <?php endif; ?>
                <ul class="navbar-nav ml-auto <?php if(config('adminlte.layout_topnav') || View::getSection('layout_topnav')): ?>order-1 order-md-3 navbar-no-expand <?php endif; ?>">
                    <?php echo $__env->yieldContent('content_top_nav_right'); ?>
                    <?php if(Auth::user()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            >
                                <i class="fa fa-fw fa-power-off"></i> <?php echo e(__('adminlte::adminlte.log_out')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e($logout_url); ?>" method="POST" style="display: none;">
                                <?php if(config('adminlte.logout_method')): ?>
                                    <?php echo e(method_field(config('adminlte.logout_method'))); ?>

                                <?php endif; ?>
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    <?php endif; ?>
                    <?php if(config('adminlte.right_sidebar')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-widget="control-sidebar" <?php if(!config('adminlte.right_sidebar_slide')): ?> data-controlsidebar-slide="false" <?php endif; ?> <?php if(config('adminlte.right_sidebar_scrollbar_theme', 'os-theme-light') != 'os-theme-light'): ?> data-scrollbar-theme="<?php echo e(config('adminlte.right_sidebar_scrollbar_theme')); ?>" <?php endif; ?> <?php if(config('adminlte.right_sidebar_scrollbar_auto_hide', 'l') != 'l'): ?> data-scrollbar-auto-hide="<?php echo e(config('adminlte.right_sidebar_scrollbar_auto_hide')); ?>" <?php endif; ?>>
                                <i class="<?php echo e(config('adminlte.right_sidebar_icon')); ?>"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php if(config('adminlte.layout_topnav') || View::getSection('layout_topnav')): ?>
                    </nav>
                <?php endif; ?>
            </nav>
        <?php if(!config('adminlte.layout_topnav') && !View::getSection('layout_topnav')): ?>
        <aside class="main-sidebar <?php echo e(config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4')); ?>">
            <?php if(config('adminlte.logo_img_xl')): ?>
                <a href="<?php echo e($dashboard_url); ?>" class="brand-link logo-switch">
                    <img src="<?php echo e(asset(config('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png'))); ?>" alt="<?php echo e(config('adminlte.logo_img_alt', 'AdminLTE')); ?>" class="<?php echo e(config('adminlte.logo_img_class', 'brand-image-xl')); ?> logo-xs">
                    <img src="<?php echo e(asset(config('adminlte.logo_img_xl'))); ?>" alt="<?php echo e(config('adminlte.logo_img_alt', 'AdminLTE')); ?>" class="<?php echo e(config('adminlte.logo_img_xl_class', 'brand-image-xs')); ?> logo-xl">
                </a>
            <?php else: ?>
                <a href="<?php echo e($dashboard_url); ?>" class="brand-link <?php echo e(config('adminlte.classes_brand')); ?>">
                    <img src="<?php echo e(asset(config('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png'))); ?>" alt="<?php echo e(config('adminlte.logo_img_alt', 'AdminLTE')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light <?php echo e(config('adminlte.classes_brand_text')); ?>">
                        <?php echo config('adminlte.logo', '<b>Admin</b>LTE'); ?>

                    </span>
                </a>
            <?php endif; ?>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column <?php echo e(config('adminlte.classes_sidebar_nav', '')); ?>" data-widget="treeview" role="menu" <?php if(config('adminlte.sidebar_nav_animation_speed') != 300): ?> data-animation-speed="<?php echo e(config('adminlte.sidebar_nav_animation_speed')); ?>" <?php endif; ?> <?php if(!config('adminlte.sidebar_nav_accordion')): ?> data-accordion="false" <?php endif; ?>>
                        <?php echo $__env->renderEach('adminlte::partials.menu-item', $adminlte->menu(), 'item'); ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <?php endif; ?>

        <div class="content-wrapper">
            <?php if(config('adminlte.layout_topnav') || View::getSection('layout_topnav')): ?>
            <div class="container">
            <?php endif; ?>

            <div class="content-header">
                <div class="<?php echo e(config('adminlte.classes_content_header', 'container-fluid')); ?>">
                    <?php echo $__env->yieldContent('content_header'); ?>
                </div>
            </div>

            <div class="content">
                <div class="<?php echo e(config('adminlte.classes_content', 'container-fluid')); ?>">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
            <?php if(config('adminlte.layout_topnav') || View::getSection('layout_topnav')): ?>
            </div>
            <?php endif; ?>
        </div>

        <?php if (! empty(trim($__env->yieldContent('footer')))): ?>
        <footer class="main-footer">

            <?php echo $__env->yieldContent('footer'); ?>
        </footer>
        <?php endif; ?>

        <?php if(config('adminlte.right_sidebar')): ?>
            <aside class="control-sidebar control-sidebar-<?php echo e(config('adminlte.right_sidebar_theme')); ?>">
                <?php echo $__env->yieldContent('right-sidebar'); ?>
            </aside>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <script src="<?php echo e(asset('vendor/adminlte/dist/js/adminlte.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Aula\vendor\jeroennoten\laravel-adminlte\src/../resources/views/page.blade.php ENDPATH**/ ?>