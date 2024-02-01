<?php $__env->startSection('title', 'Argo Artist Paginate List'); ?>

<?php $__env->startSection('content'); ?>
<div>
  <form>
    <select name="rowsPerPage" id="">
      <?php $__currentLoopData = $rpps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($index); ?>" <?php if($rpp == $index): ?> selected <?php endif; ?>><?php echo e($index); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button type="submit">view</button>
  </form>
</div>
<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($artist->id); ?></td>
                <td>
                  <?php echo e($artist->name); ?>

                </td>
                <td>
                  <a class="btn btn-primary" href="<?php echo e(url('artist/' . $artist->id)); ?>">show</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
</div>
<div>
  <?php echo e($pages); ?>

  <nav>
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="https://tfuecru2003.ieszaidinvergeles.es/DWES/laraveles/argoApp/public/paginateartist2?rowsPerPage=3&amp;page=2">2</a></li>
    </ul>
  </nav>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/paginateartist/index2.blade.php ENDPATH**/ ?>