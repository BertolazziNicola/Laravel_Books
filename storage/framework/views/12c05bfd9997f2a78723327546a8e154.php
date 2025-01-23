<article class="card border-0">
    <div class="card-body">
        <h3 class="card-title"><?php echo e($book->title); ?></h3>
        <?php if(isset($book->author)): ?>
            <div>by <?php echo e($book->author->name); ?></div>
        <?php endif; ?>
        <?php if(isset($book->category)): ?>
            <div class="mt-2"><span class="badge text-bg-secondary"><?php echo e($book->category->name); ?></span>
            </div>
        <?php endif; ?>
        <div class="btn-group mt-3 d-flex justify-content-center" role="group">
            <a href="<?php echo e(route('books.show', $book->id)); ?>" class="btn btn-light"><i class="bi bi-eye"></i></a>
            <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-light"><i class="bi bi-pencil"></i></a>
            <form action="<?php echo e(route("books.destroy", $book->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button typer="submit" onclick="confirm('Are you sure? You are deleting a book')"
                    class="btn btn-light"><i class="bi bi-trash3"></i>
                </button>
            </form>
        </div>
    </div>
</article><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/partials/index-book.blade.php ENDPATH**/ ?>