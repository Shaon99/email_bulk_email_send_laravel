

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__($pageTitle)); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.home')); ?>"><?php echo e(__('Dashboard')); ?></a>
                </div>
                <div class="breadcrumb-item"><?php echo e(__($pageTitle)); ?></div>
            </div>
        </div>

        <div class="section-body ">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card p-3">
                        <div class="form-group">
                            <a href="<?php echo e(route('admin.DownloadCSV')); ?>" class="btn btn-primary float-right"><?php echo e(__('Download Sample CSV File')); ?>

                            </a>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.sendBulkEmail')); ?>" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate="" id="form">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <label for=""><?php echo e(__('Email Address (csv file*)')); ?></label>
                                    <input type="file" class="form-control" name="csv_file" required="">
                                    <div class="invalid-feedback">
                                        <?php echo e(__('email (csv) can not be empty')); ?>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for=""><?php echo e(__('Subject')); ?></label>
                                    <input type="text" class="form-control" placeholder="enter a subject" name="subject"
                                        required="">
                                    <div class="invalid-feedback">
                                        <?php echo e(__('subject can not be empty')); ?>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for=""><?php echo e(__('Attach a file')); ?></label>
                                    <input type="file" class="form-control" name="attachment">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(__('Message')); ?></label>
                                    <textarea name="message" class="form-control summernote" required=""></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo e(__('Message can not be empty')); ?>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" id="progress-btn"><?php echo e(__('Send Email')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>
    $(function() {
            'use strict'
            $('.summernote').summernote();
        })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dhakaClub\core\resources\views/backend/email/sendcsvemail.blade.php ENDPATH**/ ?>