<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <div>
                <a href="<?php echo e(route('admin.home')); ?>">
                    <?php if(@$general->logo): ?>
                    <img class="img-fluid mr-2 rounded-circle" src="<?php echo e(getFile('logo',@$general->logo)); ?>" alt="img" width="50%">
                    <?php else: ?>
                    <img class="img-fluid" src="<?php echo e(getFile('default', @$general->default_image)); ?>" alt="img"
                        width="15%">
                    <?php endif; ?>
                </a>
            </div>
            <a class="text-white" href="<?php echo e(route('admin.home')); ?>"><?php echo e(@$general->sitename); ?>

            </a>
        </div>

        <ul class="sidebar-menu">

            <li class="nav-item dropdown <?php echo e(menuActive('admin.home')); ?>">
                <a href="<?php echo e(route('admin.home')); ?>" class="nav-link "><i class="fas fa-fire"></i><span><?php echo e(__('Dashboard')); ?></span></a>
            </li>

            <li class="menu-header"><?php echo e(__('Email Settings')); ?></li>
            <li class="nav-item dropdown <?php echo e(@$navEmailManagerActiveClass); ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i>
                    <span><?php echo e(__('Email Manager')); ?></span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(@$subNavEmailConfigActiveClass); ?>">
                        <a class="nav-link" href="<?php echo e(route('admin.email.config')); ?>"><?php echo e(__('Email Configure')); ?></a>
                    </li>
                    <li class="<?php echo e(@$subNavEmailTemplatesActiveClass); ?>">
                        <a class="nav-link" href="<?php echo e(route('admin.email.templates')); ?>"><?php echo e(__('Email Templates')); ?></a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown <?php echo e(@$subscriberActiveClass); ?>">
                <a href="<?php echo e(route('admin.sendEmail')); ?>" class="nav-link "><i class="fas fa-users"></i><span><?php echo e(__('Send
                        Email')); ?></span></a>
            </li>

            <li class="nav-item dropdown <?php echo e(@$bulkActiveClass); ?>">
                <a href="<?php echo e(route('admin.bulkEmail')); ?>" class="nav-link "><i class="fas fa-users"></i><span><?php echo e(__('Send
                        Bulk Email')); ?></span></a>
            </li>


            <li class="menu-header"><?php echo e(__('System Settings')); ?></li>

            <li class="nav-item dropdown <?php echo e(@$navGeneralSettingsActiveClass); ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span><?php echo e(__('General Settings')); ?></span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(@$subNavGeneralSettingsActiveClass); ?>">
                        <a class="nav-link" href="<?php echo e(route('admin.general.setting')); ?>"><?php echo e(__('General Settings')); ?></a>
                    </li>

                    <li>
                        <a class="nav-link" href="<?php echo e(route('admin.general.cacheclear')); ?>"><?php echo e(__('Cache Clear')); ?></a>
                    </li>
                </ul>
            </li>

        </ul>

    </aside>
</div><?php /**PATH C:\xampp\htdocs\dhakaClub\core\resources\views/backend/layout/sidebar.blade.php ENDPATH**/ ?>