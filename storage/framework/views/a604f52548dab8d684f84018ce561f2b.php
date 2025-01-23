<?php $__env->startSection('page-title'); ?>
Book detail
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<section class="row mb-5">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<article class="detail-book row py-3 px-1 rounded-4">
    <div class="col-md-4">
        <figure>
            <?php if(isset($book->cover)): ?>
                <img src="<?php echo e(asset('storage/' . $book->cover)); ?>" class="rounded" alt="Book cover">
            <?php else: ?>
                <img src="<?php echo e(asset('assets/no-cover.webp')); ?>" class="rounded" alt="Book cover">
            <?php endif; ?>
        </figure>
    </div>
    <div class="col-md-4">
        <h2 class="mb-3"><?php echo e($book->title); ?></h2>
        <?php if(isset($book->description)): ?>
            <div>
                <p><?php echo e($book->description); ?></p>
            </div>
        <?php endif; ?>
        <div class="border-top mt-2 pt-3">
            <?php if(isset($book->author->name)): ?>
                <span class="badge text-bg-secondary">by <?php echo e($book->author->name); ?></span>
            <?php endif; ?>
            <?php if(isset($book->category->name)): ?>
                <span class="badge text-bg-secondary"><?php echo e($book->category->name); ?></span>
            <?php endif; ?>
            <?php if(isset($book->pages)): ?>
                <span class="badge text-bg-secondary"><?php echo e($book->pages); ?> pages</span>
            <?php endif; ?>
        </div>
    </div>
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/book/details.blade.php ENDPATH**/ ?>