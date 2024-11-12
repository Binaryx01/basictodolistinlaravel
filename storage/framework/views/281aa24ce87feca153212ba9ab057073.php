<?php $__env->startSection('content'); ?>
    <h1>Todo List</h1>
    <a href="<?php echo e(route('todos.create')); ?>">Create New Todo</a>
    <ul>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($todo->title); ?>

                <a href="<?php echo e(route('todos.edit', $todo)); ?>">Edit</a>
                <form action="<?php echo e(route('todos.destroy', $todo)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/binary/Desktop/htmlcss/what i do here/todoapp0/resources/views/todos/index.blade.php ENDPATH**/ ?>