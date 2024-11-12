<?php $__env->startSection('content'); ?>
    <h1>Edit Todo</h1>
    <form action="<?php echo e(route('todos.update', $todo)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> <!-- This is important to indicate we're updating the resource -->

        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo e(old('title', $todo->title)); ?>" required>

        <label for="description">Description:</label>
        <textarea name="description" required><?php echo e(old('description', $todo->description)); ?></textarea>

        <button type="submit">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binary/Desktop/htmlcss/what i do here/todoapp0/resources/views/todos/edit.blade.php ENDPATH**/ ?>