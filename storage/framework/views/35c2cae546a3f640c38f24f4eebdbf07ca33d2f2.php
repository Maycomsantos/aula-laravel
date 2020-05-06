<?php if((!isset($item['topnav']) || (isset($item['topnav']) && !$item['topnav'])) && (!isset($item['topnav_right']) || (isset($item['topnav_right']) && !$item['topnav_right'])) && (!isset($item['topnav_user']) || (isset($item['topnav_user']) && !$item['topnav_user']))): ?>
    <?php if(is_string($item)): ?>
        <li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header"><?php echo e($item); ?></li>
    <?php elseif(isset($item['header'])): ?>
        <li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header"><?php echo e($item['header']); ?></li>
    <?php elseif(isset($item['search']) && $item['search']): ?>
        <li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?>>
            <form action="<?php echo e($item['href']); ?>" method="<?php echo e($item['method']); ?>" class="form-inline">
              <div class="input-group">
                <input class="form-control form-control-sidebar" type="search" name="<?php echo e($item['input_name']); ?>" placeholder="<?php echo e($item['text']); ?>" aria-label="<?php echo e($item['aria-label'] ?? $item['text']); ?>">
                <div class="input-group-append">
                  <button class="btn btn-sidebar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
        </li>
    <?php else: ?>
        <li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-item <?php if(isset($item['submenu'])): ?><?php echo e($item['submenu_class']); ?><?php endif; ?>">
            <a class="nav-link <?php echo e($item['class']); ?> <?php if(isset($item['shift'])): ?> <?php echo e($item['shift']); ?> <?php endif; ?>" href="<?php echo e($item['href']); ?>"
               <?php if(isset($item['target'])): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?>
               <?php echo $item['data-compiled'] ?? ''; ?>

            >
                <i class="<?php echo e($item['icon'] ?? 'far fa-fw fa-circle'); ?> <?php echo e(isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''); ?>"></i>
                <p>
                    <?php echo e($item['text']); ?>


                    <?php if(isset($item['submenu'])): ?>
                        <i class="fas fa-angle-left right"></i>
                    <?php endif; ?>
                    <?php if(isset($item['label'])): ?>
                        <span class="badge badge-<?php echo e($item['label_color'] ?? 'primary'); ?> right"><?php echo e($item['label']); ?></span>
                    <?php endif; ?>
                </p>
            </a>
            <?php if(isset($item['submenu'])): ?>
                <ul class="nav nav-treeview">
                    <?php echo $__env->renderEach('adminlte::partials.menuitems.menu-item', $item['submenu'], 'item'); ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Aula\resources\views/vendor/adminlte/partials/menuitems/menu-item.blade.php ENDPATH**/ ?>