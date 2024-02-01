<div class="modal" id="deleteMovieModal" tabindex="-1"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete movie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure that you want to delete the movie <span id="movieTitle"></span>?</p>
      </div>
        <form id="formDeleteV3" action="<?php echo e(url('/')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" form="formDeleteV3" class="btn btn-primary">Delete movie</button>
      </div>
    </div>
  </div>
</div><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/modal/deleteMovie.blade.php ENDPATH**/ ?>