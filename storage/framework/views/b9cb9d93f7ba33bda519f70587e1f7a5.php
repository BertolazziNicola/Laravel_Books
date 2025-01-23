

<?php $__env->startSection('page-title'); ?>
Create author
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<section class="row">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-md-4">
        <?php if(isset($author)): ?>
            <form action="<?php echo e(route('authors.update', $author->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
        <?php else: ?>
            <form action="<?php echo e(route('authors.store')); ?>" method="POST">
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
                        placeholder="Enter author's name" name="name" value="<?php echo e($author->name ?? ''); ?>">

                    
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

                <!-- Birthday (optional) -->
                <div class="mb-3">
                    <label class="form-label d-flex justify-content-between align-items-center" for="birthday">
                        <span>Birthday</span>
                        <small class="text-muted">(optional)</small>
                    </label>
                    <input type="date" class="form-control <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="birthday"
                        max="<?php echo e(\Carbon\Carbon::today()->format('Y-m-d')); ?>"
                        value="<?php echo e(isset($author) && isset($author->birthday) ? \Carbon\Carbon::parse($author->birthday)->format('Y-m-d') : ''); ?>">

                    
                    <?php $__errorArgs = ['birthday'];
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
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/author/create.blade.php ENDPATH**/ ?>