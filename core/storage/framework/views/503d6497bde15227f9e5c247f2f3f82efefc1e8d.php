
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container">
            <div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
            </div>

            <form action="<?php echo e(route('admin.password.reset')); ?>" method="POST" id="form" class="login">
                <?php echo csrf_field(); ?>
                <h3><?php echo e(__('Send reset code')); ?></h3>

                <div class="form-group mt-5">
                    <label for="username"><?php echo e(__('Email')); ?></label>
                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('Email')); ?>">

                </div>

                <div class="forget mt-2"><a href="<?php echo e(route('admin.login')); ?>">
                        <i class="fas fa-lock mr-1"></i><?php echo e(__('Login Here')); ?>?
                    </a></div>

                <div class="text-center mt-3 d-none " id="spin">
                    <div class="spinner-border  text-spin"></div>
                </div>

                <div class="mb-0 mt-4">
                    <button class="btn-login" type="submit" id="login-btn"><?php echo e(__('Send Reset Code')); ?></button>
                </div>
            </form>


        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        'use strict'
        const spin = document.getElementById("spin");
        const loginBtn = document.getElementById("login-btn");

        loginBtn.addEventListener("click", function() {
            spin.classList.remove("d-none");

            document.getElementById("form").submit();


        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dhakaClub\core\resources\views/backend/auth/email.blade.php ENDPATH**/ ?>