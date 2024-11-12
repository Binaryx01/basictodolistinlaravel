<?php $__env->startSection('content'); ?>
    <h1>Create Todo</h1>
    <form action="<?php echo e(route('todos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Save</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binary/Desktop/htmlcss/what i do here/todoapp0/resources/views/todos/create.blade.php ENDPATH**/ ?>