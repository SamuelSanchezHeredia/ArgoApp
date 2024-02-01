<?php $__env->startSection('title', 'Argo Artist List'); ?>

<?php $__env->startSection('content'); ?>

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($artist->id); ?></td>
                <td><?php echo e($artist->name); ?></td>
                <td>
                    <?php $__currentLoopData = $artist->disks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($disk->title); ?>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                  <a class="btn btn-primary" href="<?php echo e(url('artist/' . $artist->id)); ?>">Show</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/artist/index.blade.php ENDPATH**/ ?>