

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Usuarios registrados <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar</button></a></h2>

 <h6>
  <?php if($search): ?>
  <div class="alert alert-primary" role="alert">
  Resultados de búsqueda '<?php echo e($search); ?>' son:
</div>
    <?php endif; ?>
</h6>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo</th>
       <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
     
      <th scope="row"><?php echo e($users->id); ?></th>
      <td><?php echo e($users->name); ?></td>
      <td><?php echo e($users->email); ?></td>

      <td> 
        <form action="<?php echo e(route('usuarios.destroy', $users-> id)); ?>" method="POST">
          <a href="<?php echo e(route('usuarios.show', $users->id)); ?>"> <button type="button" class="btn btn-light">Ver</button></a>
        <!--referencia al metodo del controlador-->
        <a href="<?php echo e(route('usuarios.edit', $users->id)); ?>"> <button type="button" class="btn btn-primary">Editar</button></a>
       <!--formulario que lleva al metodo destroy-->
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
       <button type="submit" class="btn btn-danger">Eliminar</button>        
        </form>
           </td>
      
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Documents\GitHub\sdproject\resources\views/usuarios.blade.php ENDPATH**/ ?>