<?php $__env->startSection('page-title'); ?>
    Books list
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <section class="row">
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <section class="row">
        <div class="col-md-12">
            <div class="list-book">
                <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php echo $__env->make('partials.index-book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <article class="card border-0">
                        <div class="card-body">
                            <h3 class="card-title">No books available</h3>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/book/index.blade.php ENDPATH**/ ?>