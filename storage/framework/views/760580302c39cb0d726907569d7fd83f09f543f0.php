<?php if(config('adminlte.layout_topnav') or (isset($item['topnav']) && $item['topnav'])): ?>
  <?php if(isset($item['search']) && $item['search']): ?>
      <form action="<?php echo e($item['href']); ?>" method="<?php echo e($item['method']); ?>" class="form-inline ml-2 mr-2">
        <div class="input-group">
          <input class="form-control form-control-navbar" type="search" name="<?php echo e($item['input_name']); ?>" placeholder="<?php echo e($item['text']); ?>" aria-label="<?php echo e($item['aria-label'] ?? $item['text']); ?>">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
  <?php elseif(is_array($item)): ?>
      <li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-item <?php echo e($item['top_nav_class']); ?>">
          <a class="nav-link <?php if(isset($item['submenu'])): ?>dropdown-item dropdown-toggle <?php endif; ?>" href="<?php echo e($item['href']); ?>"
             <?php if(isset($item['submenu'])): ?> data-toggle="dropdown" <?php endif; ?>
             <?php if(isset($item['target'])): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?>
          >
              <i class="<?php echo e($item['icon'] ?? 'far fa-fw fa-circle'); ?> <?php echo e(isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''); ?>"></i>
  			<?php echo e($item['text']); ?>


              <?php if(isset($item['label'])): ?>
                  <span class="badge badge-<?php echo e($item['label_color'] ?? 'primary'); ?>"><?php echo e($item['label']); ?></span>
              <?php endif; ?>
          </a>
          <?php if(isset($item['submenu'])): ?>
              <ul class="dropdown-menu border-0 shadow">
                  <?php echo $__env->renderEach('adminlte::partials.menu-item-sub-top-nav', $item['submenu'], 'item'); ?>
              </ul>
          <?php endif; ?>
      </li>
  <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Aula\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/menu-item-top-nav.blade.php ENDPATH**/ ?>