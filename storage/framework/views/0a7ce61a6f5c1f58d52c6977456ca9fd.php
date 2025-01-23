<div class="col-md-12 my-4">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary">Books</a>
        <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-secondary">Authors</a>
        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary">Categories</a>
    </div>
    <?php
        $url_links = explode('/', parse_url(url()->current(), PHP_URL_PATH));
    ?>
    <?php if(count($url_links) > 1): ?>
        <?php if($url_links[1] == 'books'): ?>
            
            <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add a
                book</a>
        <?php elseif($url_links[1] == 'categories'): ?>
            
            <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add a
                category</a>
        <?php elseif($url_links[1] == 'authors'): ?>
            
            <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add an
                author</a>
        <?php endif; ?>
        <?php if(!isset($url_links[2])): ?>
            <h2 class="mt-5 mb-4">My <?php echo e($url_links[1]); ?></h2>
        <?php elseif($url_links[2] == 'create'): ?>
            <h2 class="mt-5 mb-4">Create <?php echo e($url_links[1]); ?></h2>
        <?php elseif(isset($url_links[3])): ?>
            <h2 class="mt-5 mb-4">Edit <?php echo e($url_links[1]); ?></h2>
        <?php else: ?>
            <h2 class="mt-5 mb-4">Show <?php echo e($url_links[1]); ?></h2>
        <?php endif; ?>
    <?php endif; ?>
</div><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/partials/navbar.blade.php ENDPATH**/ ?>