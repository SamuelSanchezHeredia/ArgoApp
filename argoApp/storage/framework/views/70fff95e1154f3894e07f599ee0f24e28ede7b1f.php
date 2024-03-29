<?php $__env->startSection('title', 'Argo Movie Edit'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('movie/' . $movie->id)); ?>" method="post">

    <!-- Solución de error por CSRF -->
    <!--<input type="hidden" name="_method" value="put">-->
    <?php echo method_field('put'); ?>
    <!--<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">-->
    <?php echo csrf_field(); ?>

    <!-- Inputs del formulario -->

    <div class="mb-3">

        <label for="title" class="form-label">Movie title</label>

        <input type="text" class="form-control" id="title" name="title" maxlength="60" required  value="<?php echo e(old('title', $movie->title)); ?>">

    </div>

    <div class="mb-3">

        <label for="director" class="form-label">Movie director</label>

        <input type="text" class="form-control" id="director" name="director" maxlength="110" required value="<?php echo e(old('director', $movie->director)); ?>">

    </div>

    <div class="mb-3">

        <label for="year" class="form-label">Movie year</label>

        <input type="number" class="form-control" id="year" name="year" step="1" min="1" max="9999" required value="<?php echo e(old('year', $movie->year)); ?>">

    </div>

    <div class="mb-3">

        <label for="genre" class="form-label">Movie genre</label>

        <input type="text" class="form-control" id="genre" name="genre" maxlength="50" value="<?php echo e(old('genre', $movie->genre)); ?>">

    </div>

    <input type="submit" class="btn btn-dark" value="Edit">

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/movie/edit.blade.php ENDPATH**/ ?>