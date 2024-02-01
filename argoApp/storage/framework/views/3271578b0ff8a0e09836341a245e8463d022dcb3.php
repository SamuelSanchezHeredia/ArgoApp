<?php $__env->startSection('title', 'Argo Movie Show'); ?>

<?php $__env->startSection('content'); ?>
    <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <tbody>
                <tr>
                      <td>#</td>
                      <td><?php echo e($movie->id); ?></td>
                </tr>
                <tr>
                      <td>Title</td>
                      <td><?php echo e($movie->title); ?></td>
                </tr><tr>
                      <td>Director</td>
                      <td><?php echo e($movie->director); ?></td>
                </tr>
                <tr>
                      <td>Year</td>
                      <td><?php echo e($movie->year); ?></td>
                </tr>
                <tr>
                      <td>Genre</td>
                      <td><?php echo e($movie->genre); ?></td>
                </tr>
                </tbody>
            </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/movie/show.blade.php ENDPATH**/ ?>