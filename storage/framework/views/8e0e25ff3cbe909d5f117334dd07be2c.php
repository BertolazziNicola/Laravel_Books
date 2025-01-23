<tr>
    <td class="align-middle"><?php echo e($category->id); ?></td>
    <td class="align-middle"><?php echo e($category->name); ?></td>
    <td class="text-end">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
            <form action="<?php echo e(route("categories.destroy", $category->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="confirm('Are you sure? You are deleting a category')"
                    class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
            </form>
        </div>
    </td>
</tr><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/partials/index-category.blade.php ENDPATH**/ ?>