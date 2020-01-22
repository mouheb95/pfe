<?php $__env->startSection('container'); ?>

 <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Our <b>Blog</b></h1>
                </div>
            </div>
        </header>

                        <div class="ct-isotope-container">
                            <div class="ct-isotope-filtering">
                                <button class="btn btn-gray-o is-active" data-filter="*">Show All
                                </button>
                                <button class="btn btn-gray-o" data-filter=".1">Groupe A
                                </button>
                                <button class="btn btn-gray-o" data-filter=".2">Groupe B
                                </button>
                                <button class="btn btn-gray-o" data-filter=".3">Groupe C
                                </button> 
                                <button class="btn btn-gray-o" data-filter=".4">Groupe D
                                </button>                                  
                            </div>
                        <div class="ct-isotope-gallery ct-isotope-gallery--lg-4 ct-isotope-gallery--md-3 ct-isotope-gallery--sm-2 ct-isotope-gallery--xs-1" style="position: relative; height: 1480px;">
                            <?php $__currentLoopData = $eleves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eleve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <figure class="ct-isotope-item ct-isotope-item--with-content isotope-grid-sizer <?php echo e($eleve->groupe->designation); ?>" style="position: absolute; left: 0%; top: 0px;">
                                <div class="ct-isotope-item__media">
                                    <img src="<?php echo e(URL::asset('images/demo-content/team-01.jpg')); ?>" alt="Astra Fear">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header"><a href="#"><?php echo e($eleve->nom); ?> <?php echo e($eleve->prenom); ?> </a></h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
                                            <ul class="ct-socials list-inline list-unstyled">
                                                <li class="ct-socials__item ct-socials__item--facebook"><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="ct-socials__item ct-socials__item--twitter"><a href="https://twitter.com/createitpl"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="ct-socials__item ct-socials__item--flickr"><a href="#"><i class="fa fa-flickr"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                            </figure>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                            
                        </div>
                    </div>


            <a href="<?php echo e(route('eleve.create')); ?>" class="link">Ajouter un eleve</a>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>