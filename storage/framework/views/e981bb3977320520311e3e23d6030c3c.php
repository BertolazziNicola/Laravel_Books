<tr>
    <td class="align-middle"><?php echo e($author->id); ?></td>
    <td class="align-middle"><?php echo e($author->name); ?></td>
    <?php if(isset($author->birthday)): ?>
        <td class="align-middle"><?php echo e($author->birthday->translatedFormat('d F Y')); ?></td>
    <?php else: ?>
        <td class="align-middle">No data</td>
    <?php endif; ?>
    <td class="text-end">
        <div class="btn-group" role="group">
            <a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
            <form action="<?php echo e(route("authors.destroy", $author->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="confirm('Are you sure? You are deleting an author')"
                    class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
            </form>
        </div>
    </td>
</tr><?php /**PATH E:\Anno - IIII\Labo_Laravel\Progetti\v3_Books\resources\views/partials/index-author.blade.php ENDPATH**/ ?>