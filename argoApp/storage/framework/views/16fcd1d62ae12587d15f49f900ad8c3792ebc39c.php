<?php $__env->startSection('title' ,'Argo Movie List'); ?>    

<?php $__env->startSection('content'); ?>

    <!--Crear los 3 select-->
    <select name="pais" id="pais" class="form-select">
        <option hidden selected value="&nbsp;">Selecciona el pais</option>
        <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($value); ?>" <?php echo e($pais == $value ? 'selected' : ''); ?>><?php echo e($label); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <br>
    <select name="provincia" id="provincia" class="form-select">
        <option disabled value="" <?php echo e($provincia == '' ? 'selected' : ''); ?>>Selecciona la provincia</option>
        <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($value); ?>" <?php echo e($provincia == $value ? 'selected' : ''); ?>><?php echo e($label); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <br>
    <select name="country" id="country" class="form-select">
        <option disabled value="" <?php echo e($selectedCountry == '' ? 'selected' : ''); ?>>Select the country</option>
        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($country->code); ?>" <?php echo e($selectedCountry == $country->code ? 'selected' : ''); ?>><?php echo e($country->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DWES/laraveles/argoApp/resources/views/setting/showSelect.blade.php ENDPATH**/ ?>