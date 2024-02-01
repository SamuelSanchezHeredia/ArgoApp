<?php $__env->startSection('title', 'Argo Artist Show'); ?>

<?php $__env->startSection('content'); ?>
    <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <tbody>
                <tr>
                      <td>#</td>
                      <td><?php echo e($artist->id); ?></td>
                </tr>
                <tr>
                      <td>Name</td>
                      <td><?php echo e($artist->name); ?></td>
                </tr>
                <?php $__currentLoopData = $artist->disks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>Disk</td>
                        <td><?php echo e($disk->title); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>Add disk</td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(url('disk/create?idartist=' . $artist->id)); ?>">Add</a>
                    </td>
                </tr>
                <tr>
                    <td>Add disk</td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(url('disk/create/' . $artist->id)); ?>">Add</a>
                    </td>
                </tr>
                </tbody>
            </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/artist/show.blade.php ENDPATH**/ ?>