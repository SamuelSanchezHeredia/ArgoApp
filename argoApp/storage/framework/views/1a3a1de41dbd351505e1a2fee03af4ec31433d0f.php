<?php $__env->startSection('title', 'Argo Disk List'); ?>

<?php $__env->startSection('content'); ?>
<img src="<?php echo e(url('https://tfuecru2003.ieszaidinvergeles.es/DWES/laraveles/argoApp/public/disk/view/file/fotosubida.jpg')); ?>">

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">idartist</th>
          <th scope="col">year</th>
          <th scope="col">cover</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $disks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($disk->id); ?></td>
                <td><?php echo e($disk->title); ?></td>
                <td><?php echo e($disk->idartist); ?> <?php echo e($disk->artist->name); ?></td>
                <td><?php echo e($disk->year); ?></td>
                <td>
                    <?php if($disk->cover !=null): ?>
                      <img src="data:image/jpeg;base64, <?php echo e($disk->cover); ?>">
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <a class="btn-info btn" href="<?php echo e(url('disk/create')); ?>">Add (no sense anymore)</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/disk/index.blade.php ENDPATH**/ ?>