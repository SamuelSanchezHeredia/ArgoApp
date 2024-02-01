<?php $__env->startSection('title' ,'Argo Movie List'); ?>    

<?php $__env->startSection('content'); ?>

  <form action="<?php echo e(url('setting')); ?>" method="post">
      <?php echo method_field('put'); ?>
      <?php echo csrf_field(); ?>
      
      <div>
        Behaviour after inserting new movie
      </div>
      <input class="form-check-input" type="radio" id="showMovie" name="afterInsert" 
             value="show movies" <?php if(session('afterInsert', 'show movies') === 'show movies'): ?> checked <?php endif; ?>>
      <label class="form-check-label" for="showMovie">
        Show all movies list
      </label>
      <br>
      <input class="form-check-input" type="radio" id="createMovie" name="afterInsert"
            value="show create form"  <?php if(session('afterInsert', 'show movies') === 'show create form'): ?> checked <?php endif; ?>>
      <label class="form-check-label" for="createMovie">
        Show create new movie form
      </label>
      <br>
      <br>
      
      
      <!--
      <div>
        Behaviour after inserting new movie
      </div>
      <input class="form-check-input" type="radio" id="showMovie2" name="createMovie2" value="show movies" <?php echo e($checkedList); ?>>
      <label class="form-check-label" for="showMovie">
        Show all movies list
      </label>
      <br>
      <input class="form-check-input" type="radio" id="createMovie2" name="createMovie2" value="show create form" <?php echo e($checkedCreate); ?>>
      <label class="form-check-label" for="createMovie">
        Show create new movie form
      </label>
      <br>
      <br>
      -->
      
      
      <label for="editMovie">Behaviour after editing new movie</label>
        
      <select id="afterEdit" id="afterEdit" class="form-select" aria-label="Default select example">
        <?php $__currentLoopData = $afterEditOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($value); ?>" <?php echo e($selectedEditOption == $value ? 'selected' : ''); ?>><?php echo e($label); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      
      <br>
      
       <button type="submit" class="btn btn-dark">Save setting</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/setting/index.blade.php ENDPATH**/ ?>