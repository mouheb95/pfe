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
            <div class="container ct-u-padding-top-30">
                <!-- *** Shop Locator *** -->
                <div class="ct-map">
                    <div class="firstStyle"></div>
                </div>
                <!-- *** Address Boxes *** -->
                <div class="ct-address-box__container">
                    <div class="col-md-4">
                        <div class="ct-address-box">
                            <h3 class="ct-address-box__header">Our<b>Address</b></h3>
                            <ul class="ct-address-box__list">
                                <li><a href="https://www.google.pl/maps" target="_blank"><i class="fa fa-map-marker"></i><span>4252 Brown Bear Drive Riverside, Ca 92501</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ct-address-box">
                            <h3 class="ct-address-box__header">Our<b>Phone</b></h3>
                            <ul class="ct-address-box__list">
                                <li><a href="tel:9516834114"><i class="fa fa-phone"></i><span>951-683-4114</span></a>
                                </li>
                                <li><a href="tel:9516834121"><i class="fa fa-fax"></i><span>951-683-4121</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ct-address-box">
                            <h3 class="ct-address-box__header">Our<b>Email</b></h3>
                            <ul class="ct-address-box__list">
                                <li><a href="cdn-cgi/l/email-protection.html#1675797862777562567b6f757978707362627f3875797b"><i class="fa fa-envelope"></i><span><span class="__cf_email__" data-cfemail="f89b97968c999b8cb895819b97969e9d8c8c91d69b9795">[email&#160;protected]</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** Get In Touch *** -->
            <section class="container">
                <div class="row">
                    <div class="ct-form-section ct-form-section--type2">
                        <h2 class="h4 ct-form-section__title text-left">Get In Touch</h2>
                        <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="ct-js-validate ct-form-section__form"><span class="ct-form-section__header">We promise to get back to you within 48h.</span>
                            <div class="row">
                                <?php echo e(csrf_field()); ?>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="email" id="email" name="email" required="required" class="form-control" />
                                        <label for="email" class="sr-only">Email</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="nom" id="nom" name="nom" required="required" class="form-control" />
                                        <label for="nom" class="sr-only">Nom</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="titre" id="titre" name="titre" required="required" class="form-control" />
                                        <label for="titre" class="sr-only">Titre</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <textarea placeholder="Message" id="message" rows="7" required="required" name="message" class="form-control"></textarea>
                                        <label for="message" class="sr-only">Message</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-motive">Send
                                    </button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </section>
        </main>
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>