

<?php $__env->startSection('page-title'); ?>
Create category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<section class="row">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-md-4">
        <?php if(isset($category)): ?>
            <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
        <?php else: ?>
            <form action="<?php echo e(route('categories.store')); ?>" method="POST">
        <?php endif; ?>
                <?php echo csrf_field(); ?>
                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        placeholder="Enter category name" name="name" value="<?php echo e($category->name ?? ''); ?>">

                    
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/category/create.blade.php ENDPATH**/ ?>