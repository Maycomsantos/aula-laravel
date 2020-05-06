<?php $__env->startSection('adminlte_css'); ?>
    <?php echo $__env->yieldPushContent('css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('classes_body', 'register-page'); ?>

<?php ( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') ); ?>
<?php ( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') ); ?>
<?php ( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') ); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ( $login_url = $login_url ? route($login_url) : '' ); ?>
    <?php ( $register_url = $register_url ? route($register_url) : '' ); ?>
    <?php ( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' ); ?>
<?php else: ?>
    <?php ( $login_url = $login_url ? url($login_url) : '' ); ?>
    <?php ( $register_url = $register_url ? url($register_url) : '' ); ?>
    <?php ( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' ); ?>
<?php endif; ?>

<?php $__env->startSection('body'); ?>
    <div class="register-box">
        <div class="register-logo">
            <a href="<?php echo e($dashboard_url); ?>"><?php echo config('adminlte.logo', '<b>Admin</b>LTE'); ?></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg"><?php echo e(__('adminlte::adminlte.register_message')); ?></p>
                <form action="<?php echo e($register_url); ?>" method="post">
                    <?php echo e(csrf_field()); ?>


                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('name')); ?>"
                               placeholder="<?php echo e(__('adminlte::adminlte.full_name')); ?>" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                        <?php if($errors->has('name')): ?>
                            <div class="invalid-feedback">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('email')); ?>"
                               placeholder="<?php echo e(__('adminlte::adminlte.email')); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <?php if($errors->has('email')): ?>
                            <div class="invalid-feedback">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>"
                               placeholder="<?php echo e(__('adminlte::adminlte.password')); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <?php if($errors->has('password')): ?>
                            <div class="invalid-feedback">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control <?php echo e($errors->has('password_confirmation') ? 'is-invalid' : ''); ?>"
                               placeholder="<?php echo e(__('adminlte::adminlte.retype_password')); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <?php if($errors->has('password_confirmation')): ?>
                            <div class="invalid-feedback">
                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        <?php echo e(__('adminlte::adminlte.register')); ?>

                    </button>
                </form>
                <p class="mt-2 mb-1">
                    <a href="<?php echo e($login_url); ?>">
                        <?php echo e(__('adminlte::adminlte.i_already_have_a_membership')); ?>

                    </a>
                </p>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.register-box -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <script src="<?php echo e(asset('vendor/adminlte/dist/js/adminlte.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Aula\resources\views/vendor/adminlte/register.blade.php ENDPATH**/ ?>