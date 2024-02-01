<?php $__env->startSection('title', 'Argo Create Disk'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('disk')); ?>" method="post" enctype="multipart/form-data">

    <!-- Solución de error por CSRF -->
    <!--<input type="hidden" name="_method" value="post">-->
    <!--<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">-->
    <?php echo csrf_field(); ?>

    <!-- Inputs del formulario -->

    <div class="mb-3">

        <label for="title" class="form-label">Disk title</label>

        <input type="text" class="form-control" id="title" name="title" required  value="<?php echo e(old('title')); ?>">

    </div>

    <div class="mb-3">

        <label for="idartist" class="form-label">Disk artist</label>

        <!--<input type="text" class="form-control" id="idartist" name="idartist" required value="<?php echo e(old('idartist')); ?>">-->
        <!--
        <select name="idartist" id="idartist" class="form-select">
            <option disabled value="" selected>Select the artist</option>
            <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value); ?>" <?php echo e($idartist == $value ? 'selected' : ''); ?>><?php echo e($label); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        -->
        <input type="hidden" name="idartist" value="<?php echo e($idartist); ?>">
        <h1><?php echo e($artist->name); ?></h1>
    </div>

    <div class="mb-3">

        <label for="year" class="form-label">Movie year</label>

        <input type="number" class="form-control" id="year" name="year" step="1" min="1" max="9999" value="<?php echo e(old('year')); ?>">

    </div>

    <div class="mb-3">

        <label for="cover" class="form-label">Disk cover</label>

        <input type="file" class="form-control" id="cover" name="file" value="<?php echo e(old('cover')); ?>">

    </div>
    
    <button type="submit" class="btn btn-success">Add</button>
    <a href="<?php echo e(url('disk')); ?>" class="btn btn-dark">Back</a>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/disk/create.blade.php ENDPATH**/ ?>