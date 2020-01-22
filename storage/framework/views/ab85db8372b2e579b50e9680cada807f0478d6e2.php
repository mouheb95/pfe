<?php $__env->startSection('container'); ?>
 <header data-parallax="50" class="ct-page-header ct-page-header--small">
    <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
        <path d="M0,100 L 100,100 100,0 Z"></path>
    </svg>
    <div class="ct-page-header__inner">
        <div class="container">
            <h1 class="h1 ct-page-header__title">welcome <b><?php echo e(Auth::user()->name); ?></b></h1>
        </div>
    </div>
</header>
<!-- *** Main *** -->
<main class="ct-blog ct-blog--single">
    <div class="container">
    	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">Parent</th>
      <th scope="col">avatar</th>
      <th scope="col">date de naissance</th>

    </tr>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $eleves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eleve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo e($eleve->nom); ?></td>
      <td><?php echo e($eleve->prenom); ?></td>
      <td><?php echo e($eleve->tuteur->user->name); ?></td>
      <td><?php echo e($eleve->avatar); ?></td>
      <td><?php echo e($eleve->date_naissance); ?></td>
      
     
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

    </div>
</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>