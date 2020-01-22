<?php $__env->startSection('container'); ?>

        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Contact <b>Us</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
             <div class="container">
                <div class="ct-comment-form">
                    <h4 class="ct-comment-form__title">redondance n'est pas autorise</h4>                   
                    <div class="row ct-u-padding-top-15">
                        <form action="<?php echo e(route('enseignant.store')); ?> " method="POST">
                            <?php echo e(csrf_field()); ?>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="grade" id="grade" name="grade" required="required" class="form-control" />
                                <label for="grade" class="sr-only">Grade</label>
                            </div>                                                     
                        </div>
                    </div>  
                        <div class="form-group">                 
                            <input type="submit" class="btn btn-motive" value="Confirmer">
                        </div>
                    </form>
                    <br>
                    <form action="<?php echo e(route('enseignantMatier.store')); ?> " method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="enseignant_id">  
                                    <?php $__currentLoopData = $matiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                  
                                    <option value="<?php echo e($matier->id); ?>"><?php echo e($matier->designation); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="matier_id">
                                    <?php $__currentLoopData = $enseignants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enseignant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                    
                                    <option value="<?php echo e($enseignant->id); ?>"><?php echo e($enseignant->slug); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">                 
                            <input type="submit" class="btn btn-motive" value="Confirmer">
                        </div>                    
                    </form>
                </div>
            </div>

        </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>