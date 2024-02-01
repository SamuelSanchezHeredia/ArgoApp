<?php $__env->startSection('title', 'Argo Movie List'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('modal.deleteMovie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Director</th>
          <th scope="col">Year</th>
          <th scope="col">Genre</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($movie->id); ?></td>
                <td><?php echo e($movie->title); ?></td>
                <td><?php echo e($movie->director); ?></td>
                <td><?php echo e($movie->year); ?></td>
                <td><?php echo e($movie->genre); ?></td>
                <td>
                    <a class="btn-primary btn" href="<?php echo e(url('movie/' . $movie->id)); ?>">link to show</a>
                    <a class="btn-danger btn" href="<?php echo e(url('movie/' . $movie->id . '/edit')); ?>">link to edit</a>
                    <form data-movie="<?php echo e($movie->title); ?>" class="formDelete" action="<?php echo e(url('movie/' . $movie->id)); ?>" method="post" style="display: inline-block">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('delete'); ?>
                      <button type="submit" class="btn btn-warning">link to delete</button>
                    </form>
                    <a data-url="<?php echo e(url('movie/' . $movie->id)); ?>" class="btn-secondary btn hrefDelete" href="">link to delete v2</a>
                    <button data-url="<?php echo e(url('movie/' . $movie->id)); ?>" data-title="<?php echo e($movie->title); ?>" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteMovieModal">
                      link to delete v3
                    </button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <a class="btn-info btn" href="<?php echo e(url('movie/create')); ?>">link to create</a>
    <form id="formDeleteV2" action="<?php echo e(url('movie/16')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <?php echo method_field('delete'); ?>
    </form>
</div>

<script>
  //solucion 1
  const forms = document.querySelectorAll(".formDelete");
  forms.forEach(function(form) {
      form.onsubmit = (event) => {
        return confirm('Seguro que quieres borrar ' + event.target.dataset.movie + '?');
      };
  });
  //solucion 2
  const ahrefs = document.querySelectorAll(".hrefDelete");
  const formDelete = document.getElementById('formDeleteV2');
  ahrefs.forEach(function(ahref) {
      ahref.onclick = (event) => {
        event.preventDefault();
        if(confirm('¿Seguro?')) {
          let url = event.target.dataset.url;
          formDelete.action = url;
          formDelete.submit();
        }
        //return confirm('Seguro que quieres borrar ' + event.target.dataset.movie + '?');
      };
  });
  //solucion 3
  const deleteMovieModal = document.getElementById('deleteMovieModal');
  const movieTitle = document.getElementById('movieTitle');
  const formDeleteV3 = document.getElementById('formDeleteV3');
  deleteMovieModal.addEventListener('show.bs.modal', event => {
      movieTitle.innerHTML = event.relatedTarget.dataset.title;
      formDeleteV3.action = event.relatedTarget.dataset.url;
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/movie/index.blade.php ENDPATH**/ ?>