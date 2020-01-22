<?php $__env->startSection('container'); ?>
<?php 
    use App\Actualite;

    $actualites = Actualite::all();    
 ?>
        <header data-parallax="30" class="ct-page-header ct-page-header--big">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1>Parties &amp; Events With   <b>Personalized Fun!</b></h1>
                            <p>We set up, organize, and supervise all of the festivities with fun, engaging, and age appropriate games &amp; activities. Mom &amp; Dad never have to worry about boredom or safety!</p><a href="packages.html" class="btn btn-default-o">See Parties</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
            <!-- *** Main Slider *** -->
            <section class="container">
                <div class="ct-slick ct-js-slick ct-slick--main ct-slick--arrows1">
                    <?php $__currentLoopData = $actualites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actualite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div data-background="<?php echo e(URL::asset('images/demo-content/event-birthday3.jpg')); ?>" class="item">
                        <div class="ct-slick__footer">
                            <div class="inner">
                                <h3><?php echo e($actualite->sujet); ?></h3>
                                <div role="separator" class="divider"></div><span><?php echo e($actualite->contenu); ?></span>
                            </div>
                            <div class="inner"><a href="<?php echo e(route('actualite.show',$actualite->id)); ?>" class="btn btn-default-o">Voir Actualite</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
            <section class="container">
                <h2 class="ct-section-header">>Top Kids   <b>Result</b></h2>
                <div class="row">
                    <div data-items="1" data-items-sm="2" data-items-lg="3" data-items-xl="4" class="ct-slick ct-js-slick ct-slick--arrows2">
                        <div class="item">
                            <a href="packages.html" class="ct-image-box">
                                <div class="ct-image-box__media">
                                    <div class="inner">
                                        <img src="images/demo-content/image-01.jpg" alt="Indoor Parties" />
                                    </div>
                                    <div class="ct-image-box__hover">
                                        <div class="ct-image-box__inner"><span class="btn btn-default-o">See All</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="ct-image-box__title"><span class="ct-image-box__colored">18 </span><span>Indoor Parties</span></h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="packages.html" class="ct-image-box">
                                <div class="ct-image-box__media">
                                    <div class="inner">
                                        <img src="images/demo-content/image-02.jpg" alt="Outdoor Parties" />
                                    </div>
                                    <div class="ct-image-box__hover">
                                        <div class="ct-image-box__inner"><span class="btn btn-default-o">See All</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="ct-image-box__title"><span class="ct-image-box__colored">23 </span><span>Outdoor Parties</span></h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="packages.html" class="ct-image-box">
                                <div class="ct-image-box__media">
                                    <div class="inner">
                                        <img src="images/demo-content/image-03.jpg" alt="Birthday Cupcakes" />
                                    </div>
                                    <div class="ct-image-box__hover">
                                        <div class="ct-image-box__inner"><span class="btn btn-default-o">See All</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="ct-image-box__title"><span class="ct-image-box__colored">39 </span><span>Birthday Cupcakes</span></h3>
                            </a>
                        </div>
                        <div class="item">
                            <a href="packages.html" class="ct-image-box">
                                <div class="ct-image-box__media">
                                    <div class="inner">
                                        <img src="images/demo-content/image-04.jpg" alt="Party Decorations" />
                                    </div>
                                    <div class="ct-image-box__hover">
                                        <div class="ct-image-box__inner"><span class="btn btn-default-o">See All</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="ct-image-box__title"><span class="ct-image-box__colored">27 </span><span>Party Decorations</span></h3>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- *** Choose a Theme *** -->
            <section class="container">
                <h2 class="ct-section-header">Choose a   <b>Theme</b></h2>
                <div data-filter-for="#slick-themes" class="ct-shop-filters">
                    <div class="form-group">
                        <select id="sex" data-placeholder="Boy or Girl?" required="required" name="field[]" class="ct-select">
                            <option disabled="disabled" selected="selected" hidden="hidden" value="">Boy or Girl?</option>
                            <option value="Boy">Boy</option>
                            <option value="Girl">Girl</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="age" data-placeholder="Age" required="required" name="field[]" class="ct-select">
                            <option disabled="disabled" selected="selected" hidden="hidden" value="">Age</option>
                            <option value="1 year old">1 year old</option>
                            <option value="2  years old">2 years old</option>
                            <option value="3 years old">3 years old</option>
                            <option value="4 years old">4 years old</option>
                            <option value="5 years old">5 years old</option>
                            <option value="6 years old">6 years old</option>
                            <option value="7 years old">7 years old</option>
                            <option value="8 years old">8 years old</option>
                            <option value="9 years old">9 years old</option>
                            <option value="10 years old">10 years old</option>
                            <option value="11 years old">11 years old</option>
                            <option value="12 years old">12 years old</option>
                            <option value="13 years old">13 years old</option>
                            <option value="14 years old">14 years old</option>
                            <option value="15 years old">15 years old</option>
                            <option value="16 years old">16 years old</option>
                        </select>
                    </div>
                    <button class="btn btn-motive">Clear Filters
                    </button>
                </div>
                <div class="row">
                    <div id="slick-themes" data-items="1" data-items-sm="2" data-items-lg="3" data-items-xl="4" class="ct-slick ct-js-slick ct-slick--arrows3 text-center">
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-1.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-01.jpg" alt="Balloons and Bubbles" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Balloons and Bubbles</span></h3>
                                        <div class="ct-party-box__price"> <span>$289</span>
                                        </div>
                                        <p>Hire a ballon artist to craft your guest's favorite animals.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-2.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-02.jpg" alt="Coloring Party" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Coloring Party</span></h3>
                                        <div class="ct-party-box__price"> <span class="ct-party-box__price-old">$359</span><span>$309</span>
                                        </div>
                                        <p>Festive balloons &amp; a bright runner dress up the work space.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-3.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-03.jpg" alt="Indian Costume Party" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Indian Costume Party</span></h3>
                                        <div class="ct-party-box__price"> <span class="ct-party-box__price-old">$249</span><span>$229</span>
                                        </div>
                                        <p>Deck the room with cool balloons, dress your party-goers as indians.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-4.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-04.jpg" alt="Party With Clown" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Party With Clown</span></h3>
                                        <div class="ct-party-box__price"> <span>$379</span>
                                        </div>
                                        <p>Let guests feast on a fruit- and veggie- filled menu.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-1.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-01.jpg" alt="Balloons and Bubbles" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Balloons and Bubbles</span></h3>
                                        <div class="ct-party-box__price"> <span>$289</span>
                                        </div>
                                        <p>Hire a ballon artist to craft your guest's favorite animals.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-2.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-02.jpg" alt="Coloring Party" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Coloring Party</span></h3>
                                        <div class="ct-party-box__price"> <span class="ct-party-box__price-old">$359</span><span>$309</span>
                                        </div>
                                        <p>Festive balloons &amp; a bright runner dress up the work space.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-3.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-03.jpg" alt="Indian Costume Party" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Indian Costume Party</span></h3>
                                        <div class="ct-party-box__price"> <span class="ct-party-box__price-old">$249</span><span>$229</span>
                                        </div>
                                        <p>Deck the room with cool balloons, dress your party-goers as indians.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="ct-party-box">
                                <div class="ct-party-box__inner">
                                    <div class="ct-party-box__media"><a href="party-4.html" class="btn btn-accent mfp-ajax">Quick View</a>
                                        <img src="images/demo-content/party-04.jpg" alt="Party With Clown" />
                                    </div>
                                    <div class="ct-party-box__content">
                                        <h3 class="ct-party-box__header"><span>Party With Clown</span></h3>
                                        <div class="ct-party-box__price"> <span>$379</span>
                                        </div>
                                        <p>Let guests feast on a fruit- and veggie- filled menu.</p><a href="book-party.html" class="btn btn-motive">Choose This</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- *** Parties Include *** -->
            <section class="container text-center">
                <h2 class="ct-section-header">Parties   <b>Include</b></h2>
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="37px" height="36px" viewbox="0 0 37 36" class="ct-icon ct-icon--puzzle">
                                            <path d="M 31.25 12.31C 33.12 12.15 34.91 10.04 35.81 8.7 37.28 6.52 37.55 3.73 35.7 1.71 34.07-0.06 31.69-0.69 29.79 0.96 28.06 2.48 27.49 5.01 26.54 7.05 24.79 4.81 21.16-0.2 17.71 1.37 17.19 1.61 15.02 3.04 13.59 4.33 13.49 4.2 13.37 4.08 13.27 3.95 13.15 3.79 12.87 3.94 13 4.11 13.11 4.26 13.23 4.4 13.35 4.56 12.56 5.31 12.08 5.99 12.4 6.32 12.43 6.35 12.45 6.38 12.48 6.41 12.5 6.43 12.53 6.44 12.55 6.45 12.42 6.48 12.29 6.51 12.17 6.55 11.61 6.74 11.51 7.64 12.17 7.77 13.84 8.12 15.07 8.18 16.31 9.5 17.41 10.69 17.71 12.52 17.04 13.97 16.13 15.96 13.82 16.52 11.87 15.88 10.91 15.57 10.1 14.85 9.56 14.02 9.16 13.41 9.32 12.73 8.8 12.23 8.74 12.16 8.64 12.15 8.55 12.19 8.35 12 8.04 11.92 7.78 12.09 6.55 12.85 5.45 13.89 4.32 14.79 3.2 15.68 2.12 16.69 1.36 17.9 1.29 18.01 1.28 18.11 1.3 18.21 1.03 18.35 0.89 18.75 1.14 19.01 2.36 20.26 3.55 21.54 4.77 22.79 5.54 23.58 6.27 24.44 7.14 25.1 6.81 26.35 5.81 26.56 4.42 26.89 3.27 27.16 2.24 27.53 1.31 28.27-0.5 29.71-0.32 32.67 1.17 34.21 4.47 37.63 10.63 34.93 12.45 31.2 13.25 32.02 14.17 32.73 15.05 33.45 16.03 34.26 17.06 35.52 18.26 35.97 18.46 36.05 18.69 35.97 18.85 35.82 19.8 35.85 21.06 34.65 21.63 34.19 23.02 33.06 24.38 31.73 25.3 30.19 25.38 30.06 25.4 29.91 25.39 29.76 25.44 29.6 25.41 29.4 25.23 29.3 24.84 29.05 24.51 28.66 24.11 28.39 23.69 28.11 23.31 27.81 22.93 27.47 22.34 26.94 21.9 26.3 21.69 25.53 21.36 24.37 21.95 23.21 22.78 22.42 23.6 21.64 24.82 21.21 25.94 21.45 26.6 21.6 27.11 22.01 27.54 22.51 28.13 23.18 28.15 24.3 28.82 24.85 29.2 25.16 29.7 25.04 29.87 24.57 29.93 24.42 29.94 24.25 29.94 24.07 32.28 22.5 34.43 20.3 36.17 18.17 36.43 17.86 36.53 17.36 36.17 17.06 34.41 15.58 32.62 14.16 31.25 12.31ZM 33.25 1.74C 34.71 2.44 35.36 3.55 35.43 4.79 34.91 4.28 34.3 3.82 33.77 3.36 33.09 2.77 32.42 2.17 31.75 1.57 32.2 1.44 32.7 1.47 33.25 1.74ZM 31.12 1.86C 31.82 2.55 32.52 3.22 33.23 3.9 33.91 4.55 34.56 5.35 35.34 5.9 35.28 6.18 35.2 6.46 35.1 6.74 34.27 6.21 33.52 5.3 32.89 4.71 32.1 3.96 31.27 3.16 30.35 2.54 30.59 2.26 30.85 2.03 31.12 1.86ZM 29.99 3C 31.09 3.85 32.02 4.94 32.98 5.93 33.41 6.38 34.03 7.17 34.72 7.57 34.72 7.57 34.72 7.57 34.72 7.57 34.56 7.86 34.39 8.12 34.21 8.36 33.51 7.47 32.55 6.75 31.73 5.98 30.95 5.26 30.22 4.49 29.54 3.68 29.69 3.44 29.83 3.22 29.99 3ZM 29.21 4.27C 29.74 4.96 30.31 5.62 30.91 6.25 31.78 7.17 32.67 8.22 33.7 8.96 33.41 9.26 33.11 9.53 32.77 9.76 32.16 9.28 31.53 8.81 30.96 8.28 30.12 7.51 29.27 6.74 28.35 6.07 28.61 5.49 28.9 4.86 29.21 4.27ZM 27.39 7.98C 27.61 7.63 27.85 7.16 28.1 6.62 29.01 7.37 29.83 8.22 30.67 9.05 31.05 9.43 31.46 9.89 31.91 10.29 31.54 10.49 31.13 10.67 30.71 10.84 29.92 10.2 29.05 9.63 28.25 9.01 27.87 8.72 27.48 8.45 27.08 8.21 27.19 8.18 27.3 8.11 27.39 7.98ZM 13.46 6.38C 13.76 6.19 14.05 5.98 14.33 5.76 14.69 6.17 15.05 6.56 15.43 6.94 14.8 6.62 14.12 6.42 13.46 6.38ZM 7.98 13.8C 8.24 14.6 9 15.47 9.72 16.11 9.13 15.61 8.56 15.1 8.02 14.57 7.79 14.35 7.47 14.68 7.67 14.91 9.37 16.79 11.3 18.42 13.23 20.07 15.36 21.9 17.34 23.91 19.47 25.72 19.86 26.05 20.32 25.57 20.02 25.18 17.29 21.76 13.36 19.18 9.94 16.3 10.31 16.61 10.66 16.85 10.9 16.98 12.59 17.89 14.5 17.79 16.07 16.94 16.9 18.03 17.81 19.04 18.86 19.93 19.57 20.54 20.45 21.28 21.39 21.63 21.13 21.91 20.9 22.21 20.72 22.53 19.64 21.41 18.12 20.49 16.91 19.55 16.06 18.87 15.08 17.91 13.97 17.73 13.81 17.71 13.68 17.92 13.85 18.01 15 18.58 16.04 19.64 17.01 20.47 18.06 21.35 19.14 22.6 20.38 23.25 20.11 24 20.01 24.82 20.13 25.64 20.26 26.51 20.76 27.3 21.33 27.97 19.5 26.29 17.15 24.88 15.39 23.59 11.88 21 8.88 18.57 6.35 15.1 6.92 14.7 7.49 14.28 7.98 13.8ZM 2.08 18.48C 2.08 18.47 2.09 18.47 2.09 18.46 2.17 18.39 2.24 18.33 2.32 18.26 2.67 18.68 3.02 19.1 3.38 19.53 2.96 19.16 2.53 18.8 2.08 18.48ZM 1.6 30.77C 1.63 30.59 1.68 30.42 1.75 30.26 2.35 31.03 3.01 31.74 3.71 32.43 4.24 32.96 4.76 33.57 5.31 34.12 3.28 34.14 1.2 33.13 1.6 30.77ZM 6.22 34.04C 5.75 33.45 5.09 32.95 4.55 32.47 3.64 31.65 2.76 30.8 2.01 29.83 2.1 29.72 2.2 29.61 2.32 29.51 3.58 30.37 4.61 31.48 5.67 32.57 6.03 32.94 6.48 33.46 6.98 33.89 6.73 33.95 6.48 34.01 6.22 34.04ZM 8.09 33.51C 7.26 32.87 6.42 32.27 5.64 31.54 4.75 30.7 3.8 29.79 2.68 29.23 3.13 28.93 3.68 28.7 4.25 28.5 5.05 29.51 5.89 30.48 6.81 31.38 7.35 31.9 8.2 32.79 9.04 33 8.74 33.2 8.42 33.37 8.09 33.51ZM 9.63 32.57C 9.63 32.57 9.63 32.57 9.63 32.57 9.33 32.28 8.92 32.13 8.57 31.92 8.02 31.58 7.53 31.14 7.05 30.72 6.22 29.98 5.47 29.16 4.73 28.34 5.29 28.16 5.85 27.98 6.36 27.78 6.92 28.87 7.75 29.85 8.62 30.71 9.01 31.11 9.71 31.87 10.37 31.81 10.15 32.09 9.91 32.35 9.63 32.57ZM 10.75 31.31C 10.67 31.21 10.54 31.13 10.4 31.16 10.37 31.16 9.93 30.81 9.85 30.76 9.44 30.48 9.07 30.14 8.72 29.8 8.02 29.14 7.35 28.4 6.85 27.57 7.19 27.4 7.5 27.21 7.73 26.97 8.39 27.67 8.99 28.42 9.63 29.13 10.03 29.59 10.53 30.26 11.14 30.56 11.02 30.82 10.89 31.07 10.75 31.31ZM 19.48 34.14C 19.23 34.33 18.94 34.48 18.69 34.67 18.06 33.84 16.99 33.24 16.18 32.67 15.04 31.86 13.94 31.02 12.82 30.2 12.89 29.48 11.86 29.18 11.47 29.75 10.26 28.76 9.22 27.58 8.05 26.54 8.23 26.21 8.3 25.82 8.22 25.33 8.31 25.24 8.37 25.13 8.4 25.01 11.8 28.43 15.53 31.56 19.62 34.03 19.57 34.07 19.52 34.11 19.48 34.14ZM 22.76 29.18C 23.14 29.44 23.5 29.58 23.86 29.7 23.74 29.88 23.62 30.09 23.49 30.28 23.45 30.33 23.41 30.37 23.37 30.42 23.01 29.79 22.55 29.2 22.02 28.63 22.25 28.83 22.5 29.01 22.76 29.18ZM 22.77 31.13C 22.48 31.45 22.18 31.75 21.88 32.04 21.87 32.03 21.86 32.01 21.85 32 20.35 30.33 18.1 29.11 16.35 27.67 14.81 26.41 13.3 25.11 11.83 23.75 9.5 21.6 7.23 18.6 4.48 16.98 4.36 16.91 4.22 17.04 4.29 17.16 5.92 19.85 9.02 22.13 11.26 24.32 12.69 25.71 14.19 27.01 15.7 28.32 17.27 29.67 19.28 31.92 21.36 32.54 20.97 32.91 20.57 33.26 20.16 33.6 13.96 28.69 8.14 23.62 2.66 17.93 3.56 17.12 4.53 16.4 5.52 15.68 5.69 15.57 5.85 15.45 6.02 15.33 6.67 18.13 10.16 20.55 12.16 22.18 15.74 25.13 19.24 28.17 22.77 31.13ZM 22.02 21.07C 21.19 20.43 20.11 20.02 19.27 19.41 18.21 18.64 17.28 17.71 16.44 16.72 16.94 16.4 17.38 16.01 17.77 15.55 18.74 16.57 19.75 17.55 20.78 18.51 21.39 19.09 22.23 20 23.1 20.4 22.71 20.59 22.35 20.81 22.02 21.07ZM 24.01 20.04C 24 20.02 23.98 20 23.96 19.98 23.14 19.13 21.94 18.53 21.03 17.75 20.02 16.9 19.1 15.97 18.13 15.08 18.47 14.56 18.68 13.99 18.79 13.4 20.47 15.08 22.25 16.65 24.03 18.22 24.64 18.76 25.25 19.32 25.87 19.88 25.24 19.8 24.62 19.86 24.01 20.04ZM 30.21 22.06C 28.55 20.41 26.48 19.05 24.65 17.6 22.66 16.03 20.76 14.37 18.88 12.68 18.93 11.59 18.65 10.48 18.14 9.49 18.11 9.44 18.07 9.4 18.05 9.35 19.83 10.88 21.67 12.34 23.37 14.02 25.08 15.7 26.93 17.26 28.59 19 29.23 19.68 29.86 20.6 30.69 21.06 30.82 21.14 30.95 21.14 31.06 21.1 30.77 21.41 30.48 21.73 30.21 22.06ZM 31.36 20.79C 31.41 20.64 31.39 20.47 31.26 20.33 29.09 18.28 27.07 16.1 24.85 14.09 21.58 11.12 17.68 8.74 14.64 5.53 15.29 5.01 15.92 4.46 16.57 3.94 17.89 6.94 20.78 9.17 23.27 11.2 26.49 13.84 29.36 16.68 32.41 19.47 32.48 19.53 32.54 19.55 32.61 19.57 32.19 19.97 31.77 20.38 31.36 20.79ZM 33.09 19.1C 33.09 19.06 33.08 19.02 33.05 18.98 31.41 15.97 28.11 13.79 25.43 11.73 23.93 10.58 22.43 9.43 20.98 8.21 20.28 7.62 19.63 6.98 18.98 6.34 18.79 6.15 16.37 3.62 17.88 4.32 17.91 4.34 17.95 4.28 17.91 4.26 17.08 3.86 17.32 3.96 16.79 3.77 17.22 3.44 17.65 3.12 18.12 2.85 20.4 1.55 23.56 5.63 25.1 7.63 25.07 7.73 25.11 7.85 25.24 7.89 25.27 7.9 25.3 7.91 25.32 7.92 25.41 8.03 25.48 8.13 25.55 8.22 25.79 8.52 26.1 8.53 26.35 8.39 27.06 8.8 27.7 9.31 28.33 9.85 28.88 10.32 29.43 10.87 30.05 11.27 29.96 11.41 29.92 11.58 29.94 11.74 29.57 11.92 29.33 12.34 29.63 12.79 29.78 13.01 29.94 13.22 30.1 13.44 29.05 12.54 27.97 11.68 26.93 10.82 23.91 8.32 21.16 5.77 18.57 2.84 18.41 2.66 18.14 2.89 18.24 3.09 19.69 5.92 22.45 8.09 24.81 10.16 27.89 12.86 30.84 15.59 33.72 18.49 33.52 18.69 33.31 18.9 33.09 19.1Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Personalized Games</h3>
                                <p class="ct-icon-box__content">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Vestibulum eti rhoncus posti uere augue eu.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="36px" height="43px" viewbox="0 0 36 43" class="ct-icon ct-icon--timer">
                                            <path d="M 36 24.86C 36 29.7 34.13 34.26 30.73 37.68 27.33 41.11 22.81 43 18 43 13.19 43 8.67 41.11 5.27 37.68 1.87 34.26-0 29.7-0 24.86-0 20.01 1.87 15.46 5.27 12.03 8.51 8.77 12.77 6.9 17.33 6.73 17.33 6.73 17.33 6.65 17.33 6.65 15.81 6.34 14.67 4.98 14.67 3.36 14.67 1.51 16.16 0 18 0 19.84 0 21.33 1.51 21.33 3.36 21.33 4.98 20.19 6.34 18.67 6.65 18.67 6.65 18.67 6.73 18.67 6.73 21.44 6.83 24.1 7.56 26.49 8.86 26.49 8.86 27.69 6.76 27.69 6.76 27.69 6.76 26.37 5.99 26.37 5.99 26.05 5.81 25.94 5.4 26.13 5.08 26.31 4.76 26.72 4.65 27.04 4.83 27.04 4.83 30.86 7.06 30.86 7.06 31.18 7.24 31.29 7.65 31.1 7.97 30.98 8.19 30.76 8.31 30.53 8.31 30.41 8.31 30.3 8.28 30.19 8.22 30.19 8.22 28.85 7.44 28.85 7.44 28.85 7.44 27.65 9.54 27.65 9.54 28.75 10.24 29.78 11.08 30.73 12.03 34.13 15.46 36 20.01 36 24.86ZM 20 3.36C 20 2.25 19.1 1.35 18 1.35 16.9 1.35 16 2.25 16 3.36 16 4.24 16.56 4.98 17.33 5.26 17.33 5.26 17.33 3.36 17.33 3.36 17.33 2.99 17.63 2.69 18 2.69 18.37 2.69 18.67 2.99 18.67 3.36 18.67 3.36 18.67 5.26 18.67 5.26 19.44 4.98 20 4.24 20 3.36ZM 18 8.06C 8.81 8.06 1.33 15.6 1.33 24.86 1.33 34.12 8.81 41.65 18 41.65 27.19 41.65 34.67 34.12 34.67 24.86 34.67 15.6 27.19 8.06 18 8.06ZM 33.33 24.86C 33.33 33.38 26.46 40.31 18 40.31 9.54 40.31 2.67 33.38 2.67 24.86 2.67 16.34 9.54 9.41 18 9.41 20.84 9.41 23.62 10.2 26.03 11.69 26.34 11.89 26.44 12.3 26.25 12.62 26.05 12.93 25.64 13.03 25.33 12.84 23.13 11.47 20.6 10.75 18 10.75 10.28 10.75 4 17.08 4 24.86 4 32.64 10.28 38.97 18 38.97 25.72 38.97 32 32.64 32 24.86 32 22.24 31.29 19.69 29.93 17.47 29.74 17.15 29.83 16.74 30.15 16.55 30.46 16.35 30.87 16.45 31.07 16.77 32.55 19.19 33.33 21.99 33.33 24.86ZM 27.35 16.25C 28 16.97 28.56 17.75 29.04 18.6 29.07 18.64 29.09 18.68 29.11 18.73 29.61 19.64 30 20.63 30.27 21.67 30.28 21.7 30.28 21.72 30.29 21.75 30.54 22.75 30.67 23.79 30.67 24.86 30.67 28.27 29.35 31.47 26.96 33.88 26.83 34.02 26.66 34.08 26.49 34.08 26.32 34.08 26.14 34.02 26.01 33.88 26.01 33.88 17.53 25.33 17.53 25.33 17.4 25.21 17.33 25.04 17.33 24.86 17.33 24.86 17.33 21.5 17.33 21.5 17.33 21.5 17.33 21.5 17.33 21.5 17.33 21.5 17.33 17.47 17.33 17.47 17.33 17.47 17.33 17.47 17.33 17.47 17.33 17.47 17.33 12.77 17.33 12.77 17.33 12.4 17.63 12.09 18 12.09 19.46 12.09 20.86 12.34 22.16 12.8 22.19 12.81 22.23 12.82 22.26 12.84 24.17 13.53 25.88 14.67 27.24 16.14 27.26 16.15 27.27 16.16 27.28 16.18 27.31 16.2 27.33 16.23 27.35 16.25ZM 26.47 32.45C 27.75 31.01 28.62 29.29 29.04 27.44 29.04 27.44 25.28 31.24 25.28 31.24 25.28 31.24 26.47 32.45 26.47 32.45ZM 24.33 30.29C 24.33 30.29 29.33 25.26 29.33 25.26 29.33 25.13 29.33 24.99 29.33 24.86 29.33 24.31 29.3 23.77 29.22 23.24 29.22 23.24 23.28 29.23 23.28 29.23 23.28 29.23 24.33 30.29 24.33 30.29ZM 22.33 28.28C 22.33 28.28 28.89 21.67 28.89 21.67 28.73 21.14 28.54 20.62 28.31 20.12 28.31 20.12 21.28 27.21 21.28 27.21 21.28 27.21 22.33 28.28 22.33 28.28ZM 18.67 13.46C 18.67 13.46 18.67 15.85 18.67 15.85 18.67 15.85 20.73 13.77 20.73 13.77 20.06 13.61 19.37 13.5 18.67 13.46ZM 22.15 14.23C 22.15 14.23 18.67 17.75 18.67 17.75 18.67 17.75 18.67 19.88 18.67 19.88 18.67 19.88 23.58 14.92 23.58 14.92 23.13 14.66 22.65 14.43 22.15 14.23ZM 24.73 15.67C 24.73 15.67 18.67 21.78 18.67 21.78 18.67 21.78 18.67 23.91 18.67 23.91 18.67 23.91 25.87 16.65 25.87 16.65 25.51 16.3 25.13 15.97 24.73 15.67ZM 26.78 17.64C 26.78 17.64 19.28 25.19 19.28 25.19 19.28 25.19 20.33 26.26 20.33 26.26 20.33 26.26 27.66 18.88 27.66 18.88 27.39 18.45 27.09 18.03 26.78 17.64ZM 28.93 15.68C 28.75 15.68 28.57 15.6 28.44 15.45 28.09 15.06 27.72 14.69 27.33 14.34 27.06 14.1 27.04 13.67 27.28 13.39 27.53 13.12 27.95 13.09 28.22 13.34 28.65 13.72 29.05 14.13 29.43 14.56 29.68 14.83 29.65 15.26 29.38 15.51 29.25 15.62 29.09 15.68 28.93 15.68Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Crazy Relay Races</h3>
                                <p class="ct-icon-box__content">Phasellus cursus, nulla sit amet prei tium iegestaus, nisii diam ultiricies mauris cresciam nunc.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-xs visible-sm"></div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="42px" height="35px" viewbox="0 0 42 35" class="ct-icon ct-icon--heart">
                                            <path d="M 18.73 35C 18.67 35 18.62 34.99 18.57 34.98 18.39 34.95 18.24 34.83 18.14 34.68 16.99 32.89 20.87 30.09 29.98 24.14 32.42 22.54 35.4 20.6 37.44 19.07 35.37 20.37 32.59 22.19 30 23.88 18.5 31.41 16 32.9 15.14 32.72 14.96 32.68 14.75 32.54 14.65 32.39 14.45 32.08 14.54 31.66 14.86 31.46 25.77 24.49 36.98 16.48 39.92 13.14 35.29 15.88 21.74 24.24 12.32 30.09 12.16 30.19 11.98 30.22 11.79 30.18 11.61 30.14 11.46 30.03 11.36 29.88 11.2 29.63 11.05 29.22 11.19 28.64 11.36 27.94 11.99 27.06 12.99 26.06 11.93 26.73 10.89 27.37 9.9 27.99 9.74 28.09 9.56 28.12 9.38 28.08 9.19 28.04 9.04 27.94 8.94 27.78 8.82 27.59 8.69 27.26 8.81 26.81 8.93 26.32 9.41 25.66 10.17 24.89 8.02 26.17 7.7 26.22 7.41 26.17 7.22 26.13 7.05 26.01 6.95 25.85 5.09 22.94 14.37 16.23 31.02 5.61 32.72 4.53 34.36 3.48 35.4 2.79 32.38 3.65 24.15 8.88 15.2 15.24 13.15 16.75 10.87 18.43 8.32 20.29 7.49 20.89 6.72 21.45 6.15 21.87 5.81 22.12 5.48 22.38 5.14 22.63 4.99 22.75 4.79 22.79 4.6 22.76 4.41 22.73 4.24 22.62 4.13 22.45 3.95 22.17 3.86 22.04 4.32 21.6 4.32 21.6 4.3 21.56 4.3 21.56 5.35 20.76 9.49 17.63 14.5 14.07 19.33 10.49 24.99 6.22 28.31 3.42 25.14 5.35 20.46 8.27 16.39 10.81 2.84 19.26 2.83 19.26 2.38 19.15 2.2 19.11 2.04 19 1.94 18.85 1.24 17.76 2.6 16.29 13.53 8.01 14.74 7.09 16.02 6.12 17.07 5.3 14.35 6.9 10.18 9.9 7.56 11.77 2.44 15.45 1.71 15.89 1.13 15.79 0.94 15.75 0.74 15.62 0.64 15.46-0.04 14.41 1.34 13.34 8.03 8.84 8.63 8.44 9.28 8 9.94 7.55 1.64 12.82 1.05 13 0.58 12.9 0.4 12.86 0.22 12.74 0.12 12.58-0.19 12.1-0.28 11.96 5.24 7 3.12 8.3 1.47 9.14 0.89 9.04 0.7 9 0.45 8.84 0.35 8.68 0.13 8.34-0.33 7.62 3.37 3.69 3.37 3.69 3.59 2.58 3.59 2.58 3.59 2.58 3.45 3.25 3.45 3.25 3.45 3.25 3.07 2.68 3.07 2.68 3.11 2.66 3.2 2.59 3.33 2.48 5.71 0.63 6.37 0.35 6.9 0.44 7.1 0.47 7.35 0.64 7.46 0.8 7.63 1.07 7.59 1.42 7.36 1.64 5.32 3.58 3.12 5.91 2.13 7.25 4.24 6.13 8.76 3.14 12.82 0.27 13.12 0.06 13.53 0.12 13.76 0.4 13.99 0.67 13.96 1.08 13.69 1.32 11.17 3.55 7.77 6.59 5.16 8.95 7.65 7.41 10.61 5.51 12.65 4.21 17.07 1.38 17.06 1.39 17.4 1.46 17.58 1.5 17.74 1.61 17.84 1.77 18.16 2.26 18.04 2.82 17.32 3.63 18.48 3.03 19.28 2.79 19.8 2.88 20.1 2.94 20.35 3.1 20.5 3.34 20.95 4.04 20.98 4.08 14.38 9.08 11.85 10.99 8.26 13.72 5.83 15.77 8.47 14.15 12.19 11.82 15.65 9.67 31.35-0.13 31.43-0.1 31.89-0.01 32.07 0.03 32.23 0.14 32.33 0.29 32.64 0.78 32.93 1.23 29.37 4.29 32.71 2.38 35.43 1.19 36.66 1.4 37.21 1.5 37.49 1.78 37.64 2.01 38.09 2.72 38.09 2.72 31.79 6.74 25.99 10.44 9.14 21.17 8.1 24.52 10.2 23.37 16.42 19.4 21.99 15.84 37.55 5.91 39.42 4.87 40.11 5.02 40.29 5.05 40.47 5.18 40.57 5.33 40.67 5.49 40.7 5.68 40.66 5.85 40.61 6.03 40.5 6.18 40.34 6.27 28.13 13.43 15.54 21.62 11.49 25.4 40.31 7.4 40.73 7.51 41.08 7.6 41.26 7.64 41.42 7.75 41.52 7.9 41.62 8.06 41.65 8.25 41.61 8.43 41.51 8.83 41.51 8.84 36.7 11.72 30.25 15.57 15.84 24.19 13.01 28.07 40.78 10.83 41.07 10.9 41.44 10.96 41.62 11 41.77 11.11 41.87 11.26 42.61 12.41 40.13 15.05 36.22 18.24 39.58 16.11 40.16 15.89 40.56 15.97 40.74 16.01 40.93 16.14 41.03 16.29 41.97 17.76 39.12 19.8 30.76 25.27 27.72 27.25 23.22 30.19 20.88 32.19 36.16 22.66 36.37 22.7 36.74 22.77 36.92 22.81 37.08 22.92 37.18 23.07 37.38 23.39 37.28 23.8 36.96 24 36.89 24.04 36.83 24.07 36.76 24.09 35.7 24.59 25.69 30.79 19.11 34.9 18.99 34.96 18.86 35 18.73 35Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Parachute Games</h3>
                                <p class="ct-icon-box__content">Class aptent taciti sociosqu ad litora torquent per conubia nostra, peru inceptos himenaeos.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="45px" height="38px" viewbox="0 0 45 38" class="ct-icon ct-icon--pen">
                                            <path d="M 44.81 7.95C 45.62 6.55 43.1 4.91 42.22 4.27 40.49 3.04 38.7 1.92 36.9 0.79 36.89 0.4 36.57 0.02 36.12-0 33.17-0.15 29.59 5.04 27.85 6.88 23.83 11.14 20.11 15.67 16.32 20.13 16.2 20.19 16.11 20.3 16.07 20.43 15.38 21.25 14.68 22.07 13.98 22.88 13.64 22.67 13.1 22.76 12.97 23.23 11.9 27.25 11.66 31.42 11.34 35.54 10.48 34.89 9.46 34.52 8.39 34.31 8.77 33.38 9.17 32.45 9.72 31.59 10.21 30.82 9.39 29.73 8.5 30.02 7.47 30.36 6.44 30.54 5.39 30.71 6.12 28.83 7.79 27.23 8.75 25.54 9.07 24.96 8.79 24.13 8.11 23.98 6.8 23.67 5.51 23.68 4.21 23.75 5.25 23.02 6.36 22.39 7.56 21.82 8.36 21.44 7.78 20.28 6.98 20.45 4.38 21.03 2.29 22.54 0.32 24.26-0.38 24.86 0.17 26.08 1.07 26.05 2.72 26 4.38 25.72 6.03 25.82 4.68 27.77 3.15 29.53 2.88 32.01 2.8 32.76 3.63 33.15 4.25 33.04 5.1 32.9 5.94 32.79 6.77 32.64 6.49 33.3 6.23 33.97 5.92 34.66 5.59 35.41 5.98 36.21 6.86 36.27 8.58 36.38 9.77 37.08 11.23 37.87 12.04 38.31 12.69 37.53 12.48 36.82 12.52 36.81 12.55 36.81 12.59 36.8 14.61 35.98 16.56 35.02 18.51 34.04 20.03 33.28 22.11 32.62 23.39 31.45 23.56 31.49 23.73 31.53 23.9 31.55 24.08 31.57 24.25 31.51 24.38 31.41 24.61 31.47 24.86 31.44 25.06 31.25 28.81 27.51 32.33 23.53 35.86 19.6 38.94 16.17 42.41 12.75 44.87 8.84 45.08 8.51 45.01 8.19 44.81 7.95ZM 32.26 5.56C 32.82 7.15 33.51 8.71 34.22 10.23 34.11 10.22 34 10.22 33.88 10.22 33.5 9.58 32.95 9 32.56 8.39 32.15 7.75 31.76 7.09 31.36 6.45 31.66 6.15 31.96 5.86 32.26 5.56ZM 32.97 15.59C 33.03 15.71 33.11 15.82 33.18 15.93 32.82 16.51 32.43 17.03 32.12 17.42 32.1 17.44 32.08 17.46 32.06 17.48 31.88 17.34 31.62 17.58 31.73 17.79 31.74 17.8 31.75 17.82 31.76 17.84 31.47 18.15 31.12 18.52 30.71 18.89 30.69 18.85 30.66 18.81 30.63 18.77 30.43 18.46 29.83 18.66 29.99 19.04 30.04 19.15 30.11 19.25 30.17 19.35 29.09 20.2 27.84 20.8 26.95 20.11 24.31 18.08 30.73 13.37 33.49 11.6 33.52 11.69 33.56 11.77 33.63 11.85 34.46 12.8 34.13 14.13 33.51 15.33 33.5 15.32 33.49 15.31 33.48 15.29 33.28 14.96 32.8 15.25 32.97 15.59ZM 30.88 6.91C 31.22 7.53 31.55 8.16 31.9 8.77 32.18 9.27 32.47 9.85 32.83 10.36 32.35 10.49 31.85 10.68 31.33 10.94 31.37 10.45 30.9 9.92 30.66 9.55 30.35 9.07 30.03 8.56 29.65 8.12 30.05 7.71 30.47 7.32 30.88 6.91ZM 27.87 9.98C 28.32 9.47 28.81 8.99 29.28 8.5 29.57 9.01 29.8 9.57 30.04 10.08 30.22 10.47 30.36 11.01 30.75 11.26 30.24 11.55 29.73 11.89 29.22 12.28 29.03 11.92 28.75 11.6 28.51 11.27 28.24 10.91 27.97 10.53 27.71 10.15 27.76 10.09 27.81 10.04 27.87 9.98ZM 27.32 10.6C 27.53 10.93 27.75 11.26 27.96 11.59 28.2 11.96 28.43 12.36 28.73 12.68 28.27 13.06 27.83 13.46 27.41 13.89 27.4 13.87 27.39 13.85 27.38 13.83 27.18 13.61 27.01 13.37 26.84 13.12 26.59 12.74 26.36 12.34 26.15 11.94 26.54 11.49 26.93 11.04 27.32 10.6ZM 25.67 12.48C 25.89 13 26.13 13.52 26.41 14.01 26.52 14.2 26.66 14.4 26.82 14.54 26.41 15.02 26.04 15.51 25.72 16.01 25.7 15.96 25.68 15.92 25.67 15.9 25.48 15.64 25.32 15.36 25.17 15.08 24.93 14.67 24.71 14.25 24.5 13.82 24.89 13.37 25.28 12.93 25.67 12.48ZM 24.02 14.37C 24.25 14.94 24.5 15.51 24.75 16.07 24.87 16.33 25.01 16.65 25.3 16.75 25 17.36 24.77 17.96 24.69 18.54 24.06 17.56 23.48 16.54 23.04 15.48 23.36 15.11 23.69 14.74 24.02 14.37ZM 18.76 31.64C 17.01 32.53 15.26 33.44 13.46 34.26 13.72 31.13 14.03 28 14.19 24.87 15.82 26.2 17.41 27.56 19.05 28.85 19.7 29.36 20.39 29.92 21.12 30.4 20.3 30.76 19.5 31.26 18.76 31.64ZM 24.23 29.98C 22.82 28.87 21.1 28.08 19.65 27.01 18.19 25.93 16.79 24.8 15.3 23.78 15.99 23.14 16.63 22.46 17.29 21.8 19.82 23.95 22.57 25.89 25.41 27.62 25.63 27.76 25.86 27.78 26.05 27.71 25.43 28.46 24.82 29.21 24.23 29.98ZM 26.63 27.01C 26.68 26.71 26.58 26.4 26.25 26.2 23.46 24.55 20.77 22.78 18.07 21.02 18.74 20.32 19.39 19.6 20.05 18.88 20.51 19.94 21.05 20.98 21.58 22 21.89 22.61 22.38 23.84 23.26 23.78 23.59 23.76 23.82 23.25 23.45 23.08 23.24 22.99 22.97 22.5 22.83 22.32 22.5 21.87 22.22 21.39 21.93 20.91 21.44 20.1 21 19.23 20.44 18.46 20.76 18.1 21.07 17.73 21.4 17.36 22.44 19.48 23.59 21.58 24.79 23.6 25.18 24.26 26 26.04 27 26.57 26.88 26.71 26.75 26.86 26.63 27.01ZM 27.69 25.77C 27.3 25.47 26.73 24.58 26.56 24.35 25.9 23.49 25.3 22.57 24.7 21.67 23.68 20.12 22.77 18.5 21.76 16.95 22.04 16.64 22.31 16.32 22.59 16 23.09 17.6 24.07 19.12 24.9 20.54 25.41 21.42 25.98 22.28 26.49 23.16 26.76 23.62 27.01 24.19 27.52 24.44 27.86 24.61 28.19 24.4 28.22 24.04 28.28 23.44 27.79 22.72 27.26 22.06 27.65 22.12 28.05 22.1 28.45 22.02 28.61 22.26 28.76 22.5 28.92 22.74 29.1 23.01 29.28 23.37 29.5 23.7 28.9 24.39 28.28 25.07 27.69 25.77ZM 30.13 22.98C 30.02 22.85 29.91 22.72 29.82 22.59 29.61 22.33 29.41 22.07 29.21 21.8 29.85 21.56 30.48 21.17 31.07 20.73 31.17 20.87 31.27 21.01 31.38 21.16 31.43 21.23 31.5 21.28 31.57 21.33 31.09 21.88 30.61 22.43 30.13 22.98ZM 32.14 20.69C 32.03 20.52 31.89 20.37 31.76 20.21 31.75 20.2 31.75 20.19 31.74 20.19 32.06 19.91 32.35 19.62 32.63 19.33 32.77 19.46 32.93 19.54 33.12 19.56 32.79 19.94 32.46 20.31 32.14 20.69ZM 33.51 19.11C 33.48 19.06 33.45 19.01 33.39 18.99 33.3 18.95 33.21 18.87 33.13 18.78 33.27 18.62 33.43 18.45 33.55 18.31 33.79 18.01 34.03 17.69 34.26 17.34 34.39 17.49 34.55 17.6 34.77 17.65 34.35 18.14 33.93 18.63 33.51 19.11ZM 35.12 17.24C 35.05 16.98 34.9 16.84 34.69 16.64 35.24 15.66 35.66 14.58 35.71 13.52 36.04 14.07 36.41 14.55 36.87 14.84 36.94 14.89 37.02 14.9 37.09 14.9 36.44 15.68 35.78 16.46 35.12 17.24ZM 35.58 10.46C 34.63 8.66 33.74 6.83 32.81 5.02 32.95 4.89 33.08 4.76 33.21 4.63 33.22 4.64 33.21 4.66 33.22 4.67 33.6 5.27 34.21 5.8 34.87 6.3 34.79 6.38 34.75 6.49 34.8 6.61 35.32 7.9 35.94 9.13 36.56 10.37 37.07 11.39 37.58 12.56 38.3 13.48 38.03 13.79 37.76 14.11 37.49 14.42 37.43 13.08 36.19 11.62 35.58 10.46ZM 39.1 12.55C 38.58 11.64 37.9 10.78 37.37 9.91 36.78 8.95 36.27 7.94 35.77 6.94 36.3 7.29 36.82 7.63 37.26 7.96 37.99 8.51 39.59 10.02 40.91 10.52 40.29 11.19 39.69 11.86 39.1 12.55ZM 42.12 9.25C 41.83 8.98 41.44 8.79 41.08 8.58 40.17 8.03 39.29 7.43 38.41 6.84 37.09 5.94 35.52 4.41 33.96 3.92 34.68 3.24 35.4 2.56 36.12 1.87 37.3 2.92 38.62 3.84 39.86 4.81 40.9 5.62 42.75 6.74 43.48 7.93 43.02 8.36 42.57 8.8 42.12 9.25Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Wacky Sports Games</h3>
                                <p class="ct-icon-box__content">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Vestibulum eti rhoncus posti uere augue eu.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="row-hidden" class="row hidden">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="37px" height="32px" viewbox="0 0 37 32" class="ct-icon ct-icon--drawing">
                                            <path d="M 36.81 31.81C 36.69 31.94 36.5 32 36.27 32 34.77 32 31.02 29.34 27.16 25.53 26.05 24.42 24.97 23.26 24.04 22.17 23.94 22.05 23.9 21.88 23.93 21.73 23.96 21.57 24.06 21.44 24.2 21.36 24.54 21.19 24.88 20.93 25.21 20.61 25.61 20.22 25.9 19.78 26.08 19.3 26.14 19.14 26.27 19.02 26.44 18.97 26.61 18.93 26.78 18.97 26.92 19.08 28.07 20.02 29.29 21.13 30.45 22.28 32.57 24.37 34.4 26.5 35.61 28.28 36.48 29.57 37.4 31.23 36.81 31.81ZM 25.4 16.89C 25.86 17.97 25.58 19.16 24.66 20.07 24.02 20.71 23.35 21.04 22.7 21.04 22.7 21.04 22.7 21.04 22.7 21.04 21.83 21.04 21.02 20.43 20.55 19.42 20.2 18.68 20.09 18 20 17.41 19.88 16.69 19.78 16.06 19.29 15.51 19.17 15.36 19.13 15.17 19.2 14.99 19.26 14.81 19.42 14.68 19.6 14.64 20.09 14.56 20.56 14.52 21.01 14.52 23.08 14.52 24.8 15.45 25.4 16.89ZM 20.06 9.54C 20.36 9.54 20.62 9.59 20.86 9.69 21.32 9.88 21.64 10.23 21.81 10.71 22.13 11.66 21.4 12.46 20.87 13.04 20.76 13.16 20.62 13.32 20.49 13.47 20.42 13.55 20.33 13.62 20.22 13.65 19.76 13.76 19.27 13.9 18.93 14 18.88 14.01 18.84 14.02 18.79 14.02 18.65 14.02 18.52 13.97 18.42 13.88 18.29 13.75 18.23 13.56 18.26 13.38 18.4 12.74 18.88 12.19 19.29 11.75 19.25 11.76 19.2 11.78 19.16 11.79 18.58 12 17.9 12.33 17.24 12.64 15.91 13.27 14.76 13.82 13.84 13.82 13.5 13.82 13.2 13.74 12.93 13.58 12.57 13.37 11.77 12.73 12.15 11.37 12.31 10.79 12.66 10.19 12.99 9.61 13.18 9.26 13.51 8.67 13.64 8.31 13.54 8.35 13.4 8.42 13.22 8.54 12.79 8.81 12.32 9.22 11.87 9.62 11.31 10.1 10.83 10.52 10.37 10.76 10.22 10.83 10.05 10.84 9.9 10.77 9.75 10.7 9.64 10.56 9.6 10.4 9.6 10.4 9.39 9.39 9.39 9.39 9.34 9.18 9.43 8.97 9.6 8.85 9.81 8.7 10.12 8.44 10.51 8.1 11.47 7.26 12.67 6.22 13.86 6.22 14.27 6.22 14.66 6.35 15 6.61 15.01 6.61 15.01 6.61 15.01 6.61 15.4 6.91 15.99 7.59 15.61 8.85 15.44 9.43 15.1 10.02 14.77 10.6 14.59 10.93 14.32 11.4 14.19 11.73 14.76 11.57 15.73 11.11 16.35 10.81 17.72 10.16 19.03 9.54 20.06 9.54ZM 33.8 23.38C 33.8 23.38 32.95 23.38 32.95 23.38 32.95 23.38 29.56 19.89 29.56 19.89 29.56 19.89 30.81 19.89 30.81 19.89 30.81 19.89 30.81 3.49 30.81 3.49 30.81 3.49 3.53 3.49 3.53 3.49 3.53 3.49 3.53 19.89 3.53 19.89 3.53 19.89 19.2 19.89 19.2 19.89 19.39 19.89 20.05 22 22.26 22 22.26 22 23.35 23.38 23.35 23.38 23.35 23.38 0.53 23.38 0.53 23.38 0.24 23.38 0 23.14 0 22.85 0 22.85 0 0.53 0 0.53 0 0.24 0.24 0 0.53 0 0.53 0 33.8 0 33.8 0 34.09 0 34.33 0.24 34.33 0.53 34.33 0.53 34.33 22.85 34.33 22.85 34.33 23.14 34.09 23.38 33.8 23.38Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Drawing Parties</h3>
                                <p class="ct-icon-box__content">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Vestibulum eti rhoncus posti uere augue eu.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="31px" height="32px" viewbox="0 0 31 32" class="ct-icon ct-icon--paint">
                                            <path d="M 27.67 2.59C 27.85 2.73 27.96 2.82 27.66 2.58 26.97 2.05 27.38 2.37 27.66 2.58 25.71 1.08 22.45 1.91 21.93 4.52 21.71 5.61 22.02 6.67 22.11 7.75 22.2 9.03 21.26 10.87 19.84 10.96 20.26 10.01 20.77 9.25 20.9 8.19 21.02 7.14 20.82 5.79 19.82 5.24 18.97 4.78 17.77 4.99 17.07 5.64 16.26 6.39 16.37 7.37 16.59 8.34 16.86 9.51 16.8 10.19 15.61 10.67 14.81 11 13.25 11.31 12.77 10.33 12.28 9.31 12.43 7.97 12.47 6.87 12.52 5.55 12.7 4.25 12.27 2.98 11.5 0.68 9.39-0.67 7.05 0.32 4.76 1.29 4.56 3.81 5.93 5.68 6.61 6.6 7.59 7.1 8.36 7.9 9.31 8.9 9.82 10.24 10.22 11.55 10.51 12.52 10.46 13.77 9.72 14.56 8.91 15.43 7.93 14.85 7.35 14.1 6.43 12.93 5.13 12.04 3.83 13.28 3.05 14.03 2.77 15.12 3.05 16.17 3.36 17.34 4.31 17.88 5.37 18.28 5.9 18.48 7.18 18.76 7.42 19.39 7.82 20.44 5.27 20.4 4.84 20.35 3.63 20.2 2.47 20.13 1.44 20.91 0.48 21.63-0.06 22.96-0 24.15 0.12 26.72 2.81 28.01 5.08 27.71 7.62 27.37 8.64 24.91 10.72 23.69 11.13 23.46 12.42 22.74 12.62 23.59 12.88 24.7 12.09 25.8 11.43 26.6 10.75 27.44 10.15 28.33 10.27 29.47 10.38 30.62 11.27 31.49 12.33 31.82 14.37 32.44 16.87 31.57 17.37 29.29 17.6 28.27 17.36 27.28 17.15 26.28 17.1 26.02 16.84 25.2 17.29 25.14 17.98 25.05 17.92 26.02 17.89 26.44 17.73 28.68 19.89 30.43 21.75 28.66 22.4 28.05 22.63 27.16 22.29 26.32 21.88 25.31 20.65 24.4 21.41 23.22 22.03 22.26 22.95 24.16 23.15 24.6 23.68 25.74 24.35 26.81 25.28 27.65 27.04 29.25 30.01 29.28 30.82 26.64 31.54 24.31 30.04 21.97 27.69 21.64 26.66 21.49 22.82 22.01 23.85 19.89 24.9 17.71 29.91 18.45 29.09 15.16 28.86 14.22 27.97 13.59 27.02 13.67 26.35 13.73 25.75 14.09 25.23 14.5 24.95 14.73 24.36 15.49 23.96 15.16 22.27 13.76 24.53 10.27 25.81 9.39 27.01 8.57 28.35 8.06 28.87 6.56 29.37 5.11 28.86 3.51 27.67 2.59ZM 2.63 23.04C 1.99 23.48 1.58 24.01 1.26 23.52 0.94 23.03 1.21 22.29 1.86 21.85 2.5 21.42 3.28 21.46 3.6 21.95 3.92 22.44 3.28 22.61 2.63 23.04ZM 5.08 14.19C 4.7 14.45 4.45 14.77 4.26 14.48 4.07 14.18 4.23 13.74 4.62 13.48 5 13.22 5.47 13.24 5.66 13.53 5.86 13.83 5.47 13.93 5.08 14.19ZM 14.22 30.57C 13.78 31.06 12.9 30.97 12.26 30.37 11.62 29.77 11.46 28.9 11.9 28.41 12.34 27.92 12.7 28.58 13.34 29.18 13.98 29.78 14.66 30.08 14.22 30.57ZM 7.94 2.73C 7.18 3.17 6.68 3.74 6.36 3.16 6.03 2.59 6.38 1.77 7.14 1.33 7.9 0.89 8.78 0.99 9.1 1.56 9.43 2.13 8.69 2.28 7.94 2.73ZM 27.3 25.49C 27.94 26.09 28.62 26.39 28.17 26.88 27.73 27.37 26.85 27.28 26.21 26.68 25.57 26.08 25.41 25.2 25.85 24.72 26.3 24.23 26.65 24.89 27.3 25.49ZM 24.71 4.41C 23.98 4.9 23.52 5.49 23.16 4.94 22.8 4.4 23.1 3.55 23.83 3.06 24.56 2.57 25.44 2.62 25.8 3.17 26.16 3.72 25.44 3.92 24.71 4.41Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Art-Painting Parties</h3>
                                <p class="ct-icon-box__content">Phasellus cursus, nulla sit amet prei tium iegestaus, nisii diam ultiricies mauris cresciam nunc.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-xs visible-sm"></div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="42px" height="28px" viewbox="0 0 42 28" class="ct-icon ct-icon--star">
                                            <path d="M 24.57 3.25C 20.51 1.68 16.15 0.26 11.78 0.02 10.78-0.04 9.31-0.02 8.54 0.74 8.47 0.8 8.41 0.96 8.36 1.11 6.61 1.72 6.59 5.3 6.48 6.98 4.46 6.78 1.44 7.09 0.3 8.81-1.16 11.08 3.03 12.7 4.59 13.28 3.79 15.18 2.95 17.05 3.13 19.17 3.15 19.46 3.3 19.74 3.61 19.81 3.66 19.83 3.72 19.83 3.76 19.83 3.83 19.89 3.89 19.93 4.01 19.93 7.09 20.33 10.69 20.13 14.42 19.89 14.53 19.93 14.64 19.98 14.75 20.02 14.98 20.11 15.26 20 15.44 19.82 25.14 19.21 35.5 18.71 40.13 27.68 40.33 28.09 40.84 28.07 41.17 27.85 41.53 27.98 41.99 27.81 41.99 27.3 42.34 16.63 34.42 7.06 24.57 3.25ZM 10.76 1.31C 12.48 1.18 14.25 1.64 15.89 2.03 19.05 2.75 22.13 3.78 25.13 4.97 29.3 6.64 32.83 9.4 35.47 12.85 33.87 11.37 32.1 10.06 30.25 8.9 27.83 7.4 25.17 6.18 22.38 5.61 19.29 4.97 15.99 5.55 12.85 5.59 12.35 4.02 11.61 2.21 10.23 1.42 10.43 1.35 10.6 1.33 10.76 1.31ZM 14.34 12C 13.74 12.17 13.88 12.92 14.34 13.05 14.34 13.11 14.34 13.17 14.36 13.27 14.32 13.35 14.34 13.47 14.38 13.55 14.45 13.97 14.56 14.4 14.65 14.81 14.9 16.08 15.03 17.3 14.61 18.48 14.59 18.48 14.56 18.48 14.52 18.48 12.79 17.67 11.44 16.34 10.02 15.12 10.02 15.12 10.02 15.1 10.02 15.1 10.04 14.71 9.55 14.42 9.2 14.64 8.46 15.12 8.04 16.21 7.46 16.89 6.71 17.81 5.69 18.72 4.45 18.64 4.53 16.72 5.4 14.95 5.85 13.1 5.93 12.7 5.67 12.46 5.38 12.44 5.32 12.31 5.21 12.2 5.05 12.13 4.47 11.91 0.5 10.43 1.68 9.38 2.94 8.25 5.43 8.4 7 8.14 7.42 8.08 7.51 7.53 7.31 7.25 7.64 5.96 7.86 4.65 8.25 3.36 8.42 2.75 8.56 2.14 9.31 2.34 9.94 2.49 10.36 3.23 10.65 3.73 11.32 4.85 11.63 6.14 12.05 7.34 12.09 7.46 12.16 7.58 12.2 7.66 12.24 7.77 12.31 7.86 12.45 7.91 13.35 8.3 14.58 8.11 15.57 8.28 16.75 8.48 17.97 8.85 18.99 9.47 17.82 10.8 16.04 11.52 14.34 12ZM 22.37 16.51C 22.35 16.38 22.28 16.25 22.2 16.14 22.7 16.31 23.22 16.47 23.73 16.66 23.28 16.6 22.84 16.56 22.37 16.51ZM 15.67 12.98C 15.65 12.94 15.65 12.92 15.62 12.88 17.53 12.38 19.29 11.37 20.46 9.77 24.34 11.15 28.08 12.88 31.54 15.08 35.07 17.32 37.24 19.9 39.1 23.15 34.16 16.65 23.39 12.68 15.67 12.98ZM 38.7 19.37C 38.53 18.96 38.33 18.57 38.12 18.19 38.59 18.89 39.06 19.61 39.5 20.35 39.5 20.35 39.5 20.38 39.52 20.38 39.26 20.05 38.99 19.7 38.7 19.37Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Anniversary Celebrations</h3>
                                <p class="ct-icon-box__content">Class aptent taciti sociosqu ad litora torquent per conubia nostra, peru inceptos himenaeos.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="36px" height="36px" viewbox="0 0 36 36" class="ct-icon ct-icon--knife">
                                            <path d="M 34.97 7.86C 34.97 7.86 27.45 15.62 27.45 15.62 27.29 15.78 27.11 15.93 26.92 16.06 26.92 16.06 33.13 22.47 33.13 22.47 33.57 22.93 33.58 23.67 33.15 24.14 23.45 34.6 10.69 36 4.57 36 2.51 36 1.2 35.85 1.01 35.82 0.58 35.76 0.22 35.47 0.07 35.05-0.08 34.64 0 34.17 0.29 33.84 0.29 33.84 20.24 10.88 20.24 10.88 20.4 10.43 20.64 10 20.97 9.64 20.97 9.64 28.68 1.11 28.68 1.11 29.32 0.4 30.22-0 31.14-0 32.09-0 33.01 0.42 33.65 1.17 33.65 1.17 35.11 2.85 35.11 2.85 36.35 4.29 36.29 6.49 34.97 7.86ZM 20.65 13.99C 20.65 13.99 3.61 33.59 3.61 33.59 8.72 33.68 21.23 32.83 30.69 23.32 30.69 23.32 24.18 16.61 24.18 16.61 23.62 16.49 23.09 16.24 22.65 15.87 22.65 15.87 21.31 14.74 21.31 14.74 21.05 14.52 20.83 14.27 20.65 13.99ZM 33.38 4.44C 33.38 4.44 31.93 2.75 31.93 2.75 31.71 2.51 31.43 2.38 31.14 2.38 30.86 2.38 30.58 2.5 30.37 2.73 30.37 2.73 22.66 11.26 22.66 11.26 22.59 11.34 22.54 11.42 22.49 11.51 22.48 11.66 22.44 11.81 22.37 11.94 22.34 12.29 22.48 12.64 22.76 12.89 22.76 12.89 24.11 14.02 24.11 14.02 24.34 14.21 24.63 14.31 24.91 14.31 25.25 14.31 25.58 14.18 25.82 13.93 25.82 13.93 33.33 6.17 33.33 6.17 33.78 5.71 33.8 4.93 33.38 4.44ZM 31.16 6.63C 30.52 6.63 30 6.1 30 5.44 30 4.78 30.52 4.25 31.16 4.25 31.8 4.25 32.31 4.78 32.31 5.44 32.31 6.1 31.8 6.63 31.16 6.63ZM 25.39 12.59C 24.75 12.59 24.23 12.06 24.23 11.4 24.23 10.74 24.75 10.21 25.39 10.21 26.03 10.21 26.54 10.74 26.54 11.4 26.54 12.06 26.03 12.59 25.39 12.59ZM 13.54 28.3C 13.31 28.55 13 28.68 12.69 28.68 12.41 28.68 12.13 28.57 11.91 28.36 11.44 27.91 11.41 27.16 11.85 26.68 11.85 26.68 19.35 18.33 19.35 18.33 19.78 17.85 20.51 17.82 20.98 18.27 21.45 18.72 21.47 19.47 21.04 19.96 21.04 19.96 13.54 28.3 13.54 28.3Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Birthday Parties</h3>
                                <p class="ct-icon-box__content">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Vestibulum eti rhoncus posti uere augue eu.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-xs visible-sm"></div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="40px" height="36px" viewbox="0 0 40 36" class="ct-icon ct-icon--lemon">
                                            <path d="M 34.54 4.9C 29.98 1.45 26.63-0.72 19.87 0.22 17.93 0.49 12 1.94 8.3 3.96 4.59 5.98 0.84 8.99 0.13 16.08-0.57 23.18 1.64 26.97 3.44 29.53 5.24 32.1 7.65 35.3 14.51 35.84 21.37 36.38 25.18 35.25 28.33 33.48 31.49 31.7 38.65 27.07 39.7 21.85 40.75 16.63 39.1 8.35 34.54 4.9ZM 32.89 27.71C 30.79 29.68 27.58 31.46 23.37 32.88 19.17 34.31 12.35 33.33 9.05 32.15 5.74 30.96 2.94 25.3 2.34 21.4 1.74 17.51 2.49 13.18 5.29 9.58 8.1 5.98 10.89 4.72 14.46 3.72 29.93-0.62 36.29 8.54 37.9 14.41 39.5 20.27 34.99 25.74 32.89 27.71ZM 16.66 22.83C 15.36 23.97 13.06 26.38 13.76 26.78 14.46 27.17 15.11 26.38 16.61 24.8 18.11 23.23 19.37 21.95 18.87 21.95 18.33 21.95 17.96 21.7 16.66 22.83ZM 20.67 5.88C 18.48 6.3 13.96 7.71 11.7 9.48 9.45 11.26 6.6 15.89 6.24 18.55 5.89 21.21 7.25 25.94 10.85 28.3 14.46 30.67 17.36 32.05 22.17 31.11 26.98 30.18 30.79 28.11 33.39 24.51 35.99 20.91 36.75 17.07 35.59 13.52 34.44 9.97 29.58 4.21 20.67 5.88ZM 8.35 19.93C 8.25 19.29 7.9 17.12 10.85 13.62 13.81 10.12 15.81 9.48 17.86 8.74 19.92 8 22.27 7.56 22.07 8.4 21.87 9.23 20.57 14.85 19.92 16.13 19.75 16.45 18.81 16.72 18.46 16.23 18.11 15.74 16.91 15.05 15.41 13.96 13.91 12.88 13.51 12.44 12.8 12.83 12.1 13.23 11.95 13.77 13.5 14.7 15.06 15.64 16.66 16.72 16.86 16.87 17.06 17.02 17.16 16.77 17.01 17.46 16.86 18.15 17.26 18.1 16.56 18.3 15.86 18.5 15.21 18.69 12.1 19.38 9 20.07 8.45 20.57 8.35 19.93ZM 31.39 23.38C 30.89 23.82 30.89 23.87 30.13 23.18 29.38 22.49 28.03 21.11 26.93 20.27 25.83 19.43 25.58 19.34 25.03 19.93 24.48 20.52 25.53 21.16 26.53 21.85 27.53 22.54 28.88 23.62 29.63 24.46 30.38 25.3 28.78 26.13 27.03 27.22 25.28 28.3 23.52 28.65 22.77 28.94 22.02 29.24 22.12 28.75 22.12 28.2 22.12 27.66 22.12 25.4 22.27 23.92 22.42 22.44 22.17 22.44 21.57 22.44 20.97 22.44 21.07 24.07 21.07 25.15 21.07 26.23 20.97 28.4 20.97 29.14 20.97 29.88 20.37 29.29 19.41 29.19 18.46 29.09 16.36 28.75 14.91 28.11 13.46 27.47 11.95 26.48 11.4 25.74 10.85 25 9.55 23.08 9.2 22.29 8.85 21.5 10.45 21.26 12.25 20.91 14.06 20.57 16.01 20.02 16.96 19.93 17.91 19.83 17.71 20.42 18.97 20.57 20.22 20.72 20.77 20.32 21.67 19.24 22.57 18.15 21.87 16.97 21.42 16.63 20.97 16.28 22.07 13.23 22.47 12.09 22.87 10.96 23.06 8.51 23.67 8.15 24.78 7.51 28.58 8.89 30.53 10.47 32.49 12.04 33.74 13.92 33.89 17.41 34.04 20.91 31.89 22.93 31.39 23.38ZM 23.52 17.32C 23.87 18.3 23.82 18.35 25.23 17.81 26.63 17.27 27.33 16.48 29.48 15.69 31.64 14.9 32.19 15.2 32.19 14.36 32.19 13.52 32.94 12.49 31.64 13.03 30.34 13.57 26.98 15.1 26.98 15.1 25.63 15.64 23.17 16.33 23.52 17.32Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Cocktail Parties</h3>
                                <p class="ct-icon-box__content">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Vestibulum eti rhoncus posti uere augue eu.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="29px" height="29px" viewbox="0 0 29 29" class="ct-icon ct-icon--pencil">
                                            <path d="M 28.34 28.99C 28.34 28.99 25.99 28.58 25.99 28.58 25.55 28.51 25.46 28.19 25.77 27.88 25.77 27.88 27.88 25.76 27.88 25.76 28.19 25.45 28.51 25.55 28.58 25.98 28.58 25.98 28.99 28.33 28.99 28.33 29.06 28.77 28.77 29.06 28.34 28.99ZM 22.63 19.66C 22.63 19.66 10.22 7.23 10.22 7.23 9.92 6.94 9.92 6.45 10.22 6.15 10.22 6.15 12.33 4.04 12.33 4.04 12.62 3.74 13.11 3.74 13.41 4.04 13.41 4.04 25.81 16.47 25.81 16.47 26.69 17.35 26.7 18.77 25.82 19.66 24.94 20.54 23.51 20.54 22.63 19.66ZM 2.57 10.82C 2.26 11.13 1.75 11.13 1.45 10.82 1.45 10.82 0.23 9.6 0.23 9.6-0.08 9.29-0.08 8.78 0.23 8.48 0.23 8.48 8.46 0.23 8.46 0.23 8.77-0.08 9.27-0.08 9.58 0.23 9.58 0.23 10.8 1.45 10.8 1.45 11.1 1.76 11.1 2.26 10.8 2.57 10.8 2.57 2.57 10.82 2.57 10.82ZM 6.23 10.15C 6.52 9.85 7 9.85 7.3 10.15 7.3 10.15 19.64 22.52 19.64 22.52 20.55 23.42 20.55 24.89 19.64 25.79 18.74 26.69 17.28 26.69 16.38 25.79 16.38 25.79 4.04 13.42 4.04 13.42 3.74 13.13 3.74 12.65 4.04 12.35 4.04 12.35 6.23 10.15 6.23 10.15Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Valentine Events</h3>
                                <p class="ct-icon-box__content">Phasellus cursus, nulla sit amet prei tium iegestaus, nisii diam ultiricies mauris cresciam nunc.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-xs visible-sm"></div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="33px" height="39px" viewbox="0 0 33 39" class="ct-icon ct-icon--notebook">
                                            <path d="M 32.95 15.01C 33.02 18.75 33.02 22.49 32.92 26.23 32.83 29.18 33.16 32.72 32.32 35.57 31.77 37.46 30.64 37.96 28.81 38.16 25.07 38.59 21.2 38.48 17.44 38.64 14.93 38.74 6.65 40.3 6.17 36.34 5.33 36.07 4.68 35.62 4.27 34.76 4.09 34.77 3.91 34.77 3.73 34.78 3.45 34.78 3.21 34.53 3.21 34.25 3.21 34.04 3.2 33.83 3.2 33.62 2.44 34.08 1.47 33.57 1.03 32.85 0.44 31.91 0.68 30.69 1.44 29.92 1.63 29.73 1.87 29.56 2.13 29.41 1.72 29.16 1.39 28.67 1.24 28.31 0.84 27.34 1.1 26.23 1.82 25.49 0.65 24.3 0.13 22.1 1.41 21.03 0.61 19.98 0.58 18.44 1.28 17.34 0.16 16.32 0.08 14.35 1 13.13-0.44 12.11-0.26 9.88 1.12 8.82 0.56 7.63 0.14 6.06 0.85 5.01-0.41 4.11 0 2.06 1.35 1.37 1.52 1.28 1.69 1.22 1.86 1.17 1.8 0.9 1.95 0.57 2.31 0.55 10.3 0.15 18.29-0.09 26.29 0.03 26.55 0.03 26.74 0.24 26.75 0.49 26.76 0.71 26.77 0.93 26.79 1.15 27.6 1.41 28.18 1.94 28.57 2.63 33.8 2.73 32.88 11.63 32.95 15.01ZM 1.33 4.51C 1.45 4.42 1.59 4.33 1.74 4.26 1.98 4.14 2.24 4.07 2.5 4.04 2.5 3.43 2.5 2.81 2.51 2.2 1.33 2.3 0.53 3.59 1.33 4.51ZM 2.5 5.23C 2.47 5.24 2.43 5.24 2.4 5.25 1.04 5.63 1.52 7.3 1.77 8.44 2.02 8.34 2.28 8.26 2.54 8.22 2.52 7.22 2.51 6.22 2.5 5.23ZM 2.56 9.39C 2.51 9.4 2.46 9.4 2.41 9.42 0.94 9.86 0.54 11.55 1.55 12.58 1.88 12.35 2.24 12.2 2.63 12.12 2.6 11.21 2.58 10.3 2.56 9.39ZM 2.66 13.3C 2.49 13.35 2.32 13.43 2.17 13.54 1.13 14.3 1.24 15.72 1.88 16.69 1.99 16.6 2.08 16.51 2.2 16.44 2.37 16.34 2.56 16.26 2.75 16.2 2.72 15.23 2.69 14.27 2.66 13.3ZM 2.79 17.39C 1.68 18 1.43 19.6 2.07 20.65 2.31 20.56 2.6 20.51 2.9 20.49 2.86 19.45 2.83 18.42 2.79 17.39ZM 2.94 21.7C 1.22 21.95 1.86 23.79 2.59 24.92 2.74 24.85 2.89 24.79 3.04 24.74 3.01 23.73 2.98 22.72 2.94 21.7ZM 3.07 26.01C 2.62 26.25 2.27 26.66 2.2 27.21 2.17 27.48 2.2 27.76 2.3 28.02 2.3 28.02 2.52 28.33 2.7 28.65 2.8 28.62 2.91 28.62 2.99 28.68 3.06 28.73 3.11 28.78 3.14 28.83 3.12 27.89 3.1 26.95 3.07 26.01ZM 2.04 31.73C 2.03 32.42 2.63 32.73 3.19 32.84 3.19 32.01 3.19 31.18 3.17 30.36 2.67 30.62 2.05 31.12 2.04 31.73ZM 24.28 22.67C 25.09 22.64 25.95 22.52 26.75 22.61 26.78 22.61 26.8 22.63 26.83 22.65 26.8 21.4 26.78 20.16 26.74 18.91 26.71 17.96 26.67 17.01 26.64 16.06 26.62 16.07 26.61 16.09 26.58 16.09 25.23 16.31 23.83 16.3 22.47 16.5 22.32 16.53 22.25 16.31 22.41 16.27 23.71 15.97 25.21 15.65 26.54 15.81 26.58 15.81 26.61 15.83 26.63 15.85 26.5 12.37 26.35 8.88 26.15 5.4 26.13 5.01 26.18 3.88 26.14 2.96 24.44 3.16 22.7 3.16 20.99 3.24 20.78 3.26 20.79 2.93 20.99 2.91 22.68 2.76 24.4 2.5 26.1 2.46 26.08 2.22 26.05 2.01 26 1.86 25.97 1.82 25.96 1.79 25.95 1.75 25.94 1.74 25.94 1.72 25.93 1.72 25.21 0.59 23.82 0.96 22.69 0.97 20.49 0.98 18.29 1.01 16.09 1.06 12.15 1.14 8.2 1.27 4.25 1.44 5.11 1.88 5.83 2.65 6.18 3.54 6.35 4 5.71 4.3 5.4 4 4.73 3.35 4.1 2.51 3.19 2.27 3.26 2.87 3.32 3.47 3.37 4.07 4.54 4.27 5.64 5.12 5.9 6.27 5.98 6.62 5.56 7.06 5.22 6.79 4.64 6.34 4.14 5.64 3.49 5.34 3.57 6.29 3.64 7.25 3.7 8.21 4.93 8.4 6.08 9.2 6.57 10.42 6.76 10.92 6.05 11.26 5.71 10.92 5.13 10.33 4.52 9.71 3.78 9.45 3.83 10.34 3.87 11.23 3.9 12.12 4.13 12.16 4.35 12.22 4.56 12.3 5.45 12.66 6.43 13.5 6.36 14.54 6.34 15.03 5.78 15.14 5.51 14.78 5.07 14.2 4.79 13.67 4.08 13.39 4.04 13.37 3.99 13.35 3.95 13.34 3.98 14.25 4.01 15.16 4.03 16.07 5.33 16.18 6.59 17.01 6.81 18.34 6.89 18.83 6.24 19.18 5.98 18.7 5.57 17.96 4.86 17.32 4.06 17.18 4.08 18.32 4.1 19.46 4.11 20.6 5.52 20.92 6.84 21.9 6.54 23.34 6.48 23.66 6.07 23.73 5.86 23.52 5.43 23.1 5.21 22.54 4.71 22.17 4.53 22.04 4.33 21.94 4.13 21.86 4.14 22.77 4.15 23.68 4.16 24.59 5.59 24.63 7.02 25.49 7.31 26.98 7.39 27.37 6.97 27.62 6.67 27.36 5.91 26.69 5.19 25.83 4.17 25.77 4.18 26.79 4.18 27.8 4.19 28.81 5.49 28.72 6.76 29.14 7.2 30.36 7.32 30.69 6.91 30.95 6.64 30.8 5.8 30.31 5.05 29.94 4.18 30.04 4.12 31.02 4.01 32.67 4.24 33.04 4.89 34.09 6.28 33.64 7.3 33.61 9.48 33.56 11.67 33.53 13.85 33.44 16.03 33.36 18.22 33.31 20.4 33.25 21.82 33.22 25.72 33.75 26.68 32.77 26.82 32.62 26.92 32.4 26.99 32.13 25.64 32.28 24.16 32.15 22.85 32.06 22.64 32.05 22.63 31.73 22.85 31.73 24.24 31.75 25.69 31.58 27.09 31.64 27.13 31.42 27.14 31.18 27.16 30.92 25.52 31.04 23.83 30.83 22.23 30.61 22.03 30.59 22.02 30.27 22.23 30.29 23.88 30.45 25.52 30.39 27.17 30.45 27.17 30.02 27.15 29.57 27.12 29.12 26.25 29.04 25.38 28.93 24.49 28.95 24.32 28.95 24.33 28.7 24.49 28.68 25.31 28.59 26.24 28.55 27.09 28.69 27.05 28.09 27 27.53 26.96 27.06 25.59 27.3 24.02 27.14 22.64 27.15 22.48 27.15 22.49 26.92 22.64 26.91 24.01 26.82 25.55 26.55 26.94 26.69 26.93 26.54 26.92 26.4 26.92 26.28 26.91 25.88 26.9 25.48 26.89 25.08 26.18 25.23 25.42 25.23 24.7 25.28 24.49 25.3 24.5 24.98 24.7 24.95 25.41 24.87 26.16 24.71 26.88 24.73 26.87 24.14 26.85 23.54 26.84 22.95 26.81 22.97 26.79 22.99 26.75 22.99 25.95 23.08 25.09 22.96 24.28 22.93 24.12 22.93 24.12 22.68 24.28 22.67ZM 28.34 15.01C 28.1 13.15 27.91 11.28 27.85 9.41 27.82 8.26 28.28 5.68 27.85 3.9 27.48 3.81 27.37 3.37 27.52 3.03 27.35 2.73 27.13 2.47 26.85 2.29 27.12 7.42 27.45 12.55 27.66 17.68 27.77 20.55 27.87 23.42 27.94 26.28 27.98 28.14 28.69 31.34 28.02 33 27.07 35.34 22.41 34.29 20.4 34.35 15.32 34.49 10.25 34.62 5.17 34.74 5.46 34.98 5.81 35.17 6.21 35.31 6.21 35.28 6.21 35.26 6.22 35.23 6.29 34.86 6.87 34.95 6.86 35.32 6.85 35.38 6.86 35.45 6.87 35.51 8.81 35.97 11.39 35.68 12.78 35.7 15.09 35.74 17.39 35.8 19.69 35.79 21.67 35.78 24.2 36.1 26.13 35.6 29.28 34.78 29.43 30.8 29.55 28.11 29.75 23.69 28.91 19.36 28.34 15.01ZM 29.02 3.94C 29.04 4.04 29.06 4.13 29.07 4.23 29.26 5.73 28.95 7.34 28.98 8.86 29.02 10.71 29.21 12.54 29.42 14.38 30.12 20.57 31.71 27.49 29.81 33.62 29.33 35.15 28.65 36.16 27.03 36.55 24.09 37.25 20.41 36.67 17.39 36.69 14.15 36.71 10.67 37.07 7.45 36.61 9.96 38.76 19.73 37.54 21.63 37.45 23.73 37.35 26.15 37.53 28.21 37.09 31.83 36.32 31.4 33.82 31.58 30.95 31.84 26.82 31.97 22.69 32 18.55 32.02 15.51 33.17 4.8 29.02 3.94ZM 24.29 20.36C 25.06 20.41 25.8 20.32 26.57 20.28 26.74 20.27 26.76 20.52 26.61 20.56 25.87 20.8 25.01 20.76 24.25 20.64 24.09 20.61 24.13 20.35 24.29 20.36ZM 26.13 18.63C 25.36 18.65 24.67 18.57 23.9 18.76 23.75 18.79 23.69 18.57 23.84 18.52 24.56 18.28 25.43 18.09 26.18 18.3 26.36 18.35 26.32 18.62 26.13 18.63ZM 16.56 11.74C 14.29 11.78 11.92 11.95 9.69 11.49 9.37 11.6 8.97 11.43 8.95 11 8.9 8.86 8.92 6.61 9.24 4.5 9.27 4.33 9.47 4.28 9.61 4.34 9.43 3.95 9.97 3.68 10.22 4.02 10.83 4.82 15.62 4.25 16.59 4.24 18.46 4.23 20.34 4.16 22.21 4.28 22.28 3.77 23.08 3.81 23.13 4.37 23.3 6.42 23.84 8.94 23.49 10.97 23.46 11.17 23.27 11.31 23.09 11.37 21.19 12.05 18.56 11.7 16.56 11.74ZM 22.4 8.95C 22.62 7.87 22.39 6.48 22.26 5.27 19.43 5.52 16.51 5.38 13.66 5.28 12.5 5.23 10.58 5.58 9.76 4.56 10.06 6.61 10.09 8.79 10.04 10.86 12.65 10.42 15.44 10.62 18.07 10.53 19.77 10.46 21.99 10.95 22.4 8.95ZM 23.47 14.17C 23.95 14.21 24.43 14.22 24.91 14.19 25.4 14.15 25.87 14.02 26.35 14.03 26.46 14.04 26.53 14.21 26.41 14.26 25.54 14.64 24.38 14.52 23.47 14.41 23.32 14.39 23.32 14.16 23.47 14.17ZM 26.14 12.43C 25.33 12.52 24.48 12.43 23.67 12.42 23.44 12.42 23.44 12.06 23.67 12.06 24.48 12.04 25.33 11.95 26.14 12.04 26.38 12.07 26.38 12.4 26.14 12.43ZM 25.97 9.39C 26.12 9.42 26.12 9.67 25.97 9.7 25.43 9.8 24.84 9.71 24.29 9.69 24.1 9.69 24.1 9.4 24.29 9.4 24.84 9.38 25.43 9.29 25.97 9.39ZM 25.97 6.99C 25.66 7.11 25.31 7.11 24.98 7.14 24.61 7.17 24.24 7.21 23.88 7.23 23.69 7.23 23.65 6.93 23.83 6.9 24.49 6.78 25.3 6.57 25.97 6.67 26.15 6.69 26.1 6.94 25.97 6.99ZM 25.72 4.98C 24.96 5 24.25 4.91 23.49 5.05 23.3 5.08 23.22 4.8 23.41 4.76 24.15 4.58 25.02 4.42 25.77 4.62 25.97 4.68 25.92 4.97 25.72 4.98Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Writing Skills Parties</h3>
                                <p class="ct-icon-box__content">Class aptent taciti sociosqu ad litora torquent per conubia nostra, peru inceptos himenaeos.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="28px" height="31px" viewbox="0 0 28 31" class="ct-icon ct-icon--return">
                                            <path d="M 16.6 3.82C 16.65 3 16.69 2.17 16.73 1.34 16.78 0.37 15.56-0.37 14.74 0.19 12.91 1.45 10.79 2.08 9.04 3.47 8.61 3.81 8.52 4.64 8.83 5.08 10.16 6.92 11.8 8.62 13.72 9.87 13.86 10.05 14.06 10.17 14.29 10.22 15.09 10.6 15.82 10.07 16.04 9.38 16.09 9.27 16.12 9.15 16.14 9.01 16.25 8.17 16.33 7.32 16.4 6.47 24.27 7.15 27.32 15.79 24.01 22.67 22.14 26.58 18.5 28.37 14.3 28.35 6.71 28.33 2.01 23.07 2.73 15.46 2.89 13.76 0.25 13.78 0.09 15.46-0.67 23.43 3.93 29.69 11.85 30.81 17.39 31.59 22.49 29.93 25.64 25.16 28.27 21.2 28.67 15.74 27.01 11.35 25.29 6.78 21.26 4.19 16.6 3.82ZM 13.75 6.6C 13.07 6.02 12.44 5.38 11.87 4.7 12.54 4.3 13.25 3.97 13.96 3.63 13.9 4.62 13.83 5.61 13.75 6.6Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Corporate Events</h3>
                                <p class="ct-icon-box__content">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Vestibulum eti rhoncus posti uere augue eu.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-xs visible-sm"></div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="30px" height="38px" viewbox="0 0 30 38" class="ct-icon ct-icon--coffee">
                                            <path d="M 28.83 29.58C 26.99 30.95 24.54 30.42 22.42 30.06 22.36 32.33 21.86 34.53 20.16 35.42 19.73 35.65 19.28 35.81 18.83 35.93 19.08 36.7 18.37 37.44 17.58 37.52 13.55 37.91 9.5 37.85 5.45 38 4.86 38.02 4.4 37.6 4.22 37.08 4.15 36.88 4.1 36.72 4.07 36.58 3.64 36.68 3.22 36.8 2.8 36.94 2.18 37.14 1.35 36.71 1.23 36.06 0.65 32.86 1.16 29.66 0.93 26.44 0.68 22.84 0.19 19.26 0.13 15.65 0.13 15.62 0.14 15.59 0.14 15.56-0.23 14.82 0.13 13.7 1.23 13.7 5.5 13.7 9.8 13.86 14.07 13.7 15.97 13.63 18.49 13.01 20.25 14.02 21.73 14.87 21.82 16.72 21.76 18.28 23.6 18.08 25.54 17.67 27.31 18.14 29.57 18.75 29.66 21.51 29.73 23.44 29.8 25.39 30.67 28.21 28.83 29.58ZM 19.54 24.81C 19.4 23.35 19.08 21.8 19.12 20.32 19.15 19.36 19.27 18.38 19.2 17.42 19.07 15.59 17.81 15.96 16.5 16.06 11.93 16.4 7.3 16.25 2.7 16.22 2.8 19.25 3.18 22.24 3.4 25.26 3.61 28.19 3.21 31.21 3.51 34.13 7.5 33.21 11.59 33.73 15.68 33.73 18.51 33.73 19.6 33.1 19.72 30.27 19.79 28.45 19.7 26.63 19.54 24.81ZM 27.12 22.52C 27.09 22.15 27.06 20.63 26.63 20.56 25.99 20.45 25.31 20.49 24.67 20.53 23.69 20.6 22.72 20.73 21.74 20.81 21.8 22.15 21.97 23.47 22.09 24.81 22.15 25.54 22.26 26.53 22.34 27.6 22.5 27.57 22.67 27.56 22.85 27.59 23.69 27.73 27.57 28.67 27.42 27.06 27.27 25.54 27.27 24.03 27.12 22.52ZM 10.21 13.23C 8.05 12.86 5.41 11.31 5.58 8.78 5.65 7.86 5.85 6.78 6.5 6.07 6.95 5.58 7.95 5.07 7.91 4.3 7.87 3.43 7.7 2.72 7.34 1.92 6.67 0.46 8.87-0.82 9.54 0.65 10.36 2.46 11.02 4.7 9.77 6.46 9.21 7.24 8.02 7.62 8.13 8.78 8.28 10.2 9.68 10.6 10.89 10.81 12.51 11.08 11.82 13.5 10.21 13.23Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Everyday Parties</h3>
                                <p class="ct-icon-box__content">Phasellus cursus, nulla sit amet prei tium iegestaus, nisii diam ultiricies mauris cresciam nunc.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="23px" height="36px" viewbox="0 0 23 36" class="ct-icon ct-icon--marker">
                                            <path d="M 17.81 1.29C 13.81-0.58 9.65-0.34 6.04 1.53 2.42 3.39 1.12 5.96 0.58 7.75-0.96 12.65 0.81 16.15 2.89 20.59 4.89 25.02 9.88 35.84 11.35 35.99 12.81 36.15 14.11 32.88 16.19 28.91 18.27 24.87 22.27 16.7 22.88 12.26 23.5 7.83 21.8 3.08 17.81 1.29ZM 22.11 12.34C 21.8 12.18 17.96 7.52 17.73 7.44 17.5 7.36 17.11 7.52 17.34 7.75 17.57 7.98 21.88 12.81 21.88 13.12 21.88 13.43 21.65 14.52 21.5 14.36 21.34 14.21 17.81 9.31 17.5 9.31 17.11 9.23 17.04 9.77 17.27 9.93 17.5 10.16 21.11 14.83 21.11 15.06 21.11 15.3 21.19 15.76 20.96 15.76 20.73 15.69 17.5 11.1 17.11 11.17 16.73 11.33 16.73 11.56 16.88 11.8 17.04 12.03 20.57 16.39 20.57 16.39 20.57 16.39 20.27 17.48 20.04 17.4 19.81 17.32 17.11 13.35 16.73 13.35 16.34 13.35 16.04 13.59 16.34 13.97 16.65 14.36 19.73 18.02 19.65 18.25 19.57 18.49 18.96 20.12 18.81 19.97 18.65 19.73 15.81 15.06 15.5 15.06 15.19 14.99 15.11 15.14 15.27 15.53 15.42 15.92 18.57 20.04 18.57 20.43 18.65 20.82 18.42 21.44 18.19 21.21 17.88 20.98 14.96 16.62 14.65 16.54 14.34 16.46 14.04 16.62 14.27 16.93 14.5 17.24 17.88 21.52 17.73 21.75 17.57 21.99 17.57 23 17.34 22.69 17.11 22.38 14.27 18.1 14.04 18.1 13.81 18.1 13.34 18.33 13.65 18.64 13.96 18.95 17.11 23 17.04 23.23 16.96 23.47 16.65 24.48 16.42 24.24 16.19 24.01 13.81 20.51 13.5 20.43 13.19 20.35 12.88 20.59 13.11 20.98 13.34 21.37 16.19 24.63 16.11 24.87 16.04 25.1 16.19 26.11 15.65 25.72 15.11 25.26 13.11 22.38 12.73 22.38 12.35 22.38 12.11 22.69 12.35 23 12.58 23.31 15.19 26.5 15.19 26.5 15.19 26.5 14.88 27.36 14.81 27.2 14.65 27.05 12.42 23.78 12.04 23.7 11.65 23.62 11.5 23.86 11.58 24.09 11.65 24.32 14.34 27.43 14.34 27.75 14.34 28.06 14.27 29.3 13.88 28.83 13.5 28.37 11.58 26.11 11.35 26.11 11.11 26.19 10.81 26.19 11.04 26.58 11.27 26.97 13.42 29.15 13.34 29.38 13.27 29.69 13.04 30.16 12.88 30.08 12.73 30 11.11 27.75 10.81 27.82 10.5 27.9 10.42 27.98 10.5 28.29 10.58 28.6 12.5 30.47 12.42 30.7 12.35 30.94 12.19 31.4 11.96 31.09 11.73 30.78 10.42 29.22 10.27 29.22 10.11 29.22 9.65 29.46 9.88 29.69 10.11 29.92 11.81 31.79 11.73 32.02 11.58 32.26 11.19 33.19 10.88 32.8 10.5 32.41 5.73 23.62 3.5 19.34 1.27 15.06-0.11 12.11 0.81 8.84 1.73 5.65 3.5 4.09 4.35 3.55 6.27 2.3 8.65 1.14 11.88 1.29 15.11 1.45 16.96 2.38 17.42 2.61 17.88 2.93 17.73 3.16 17.88 3.32 18.04 3.47 20.8 6.66 21.04 6.82 21.27 6.97 21.5 8.37 21.19 8.06 20.88 7.75 17.04 3 16.42 2.93 15.88 2.85 15.81 3.39 16.04 3.55 16.27 3.7 21.19 8.68 21.5 9.15 21.8 9.62 21.88 11.33 21.57 10.78 21.19 10.24 17.57 5.57 17.04 5.34 16.5 5.03 16.34 5.8 16.65 5.96 16.96 6.12 21.42 11.41 21.65 11.8 22.19 11.72 22.34 12.5 22.11 12.34ZM 4.12 5.42C 3.35 5.65 1.81 7.91 1.58 9.85 1.35 11.8 2.04 13.74 2.42 13.9 2.58 13.97 2.96 14.05 3.04 13.51 3.12 12.96 2.27 10.86 2.35 9.7 2.42 8.45 3.96 6.43 4.42 6.12 4.89 5.88 4.96 5.26 4.12 5.42ZM 9.12 6.12C 7.5 7.36 7.65 9.54 8.58 10.63 9.5 11.72 11.96 12.11 12.96 11.25 13.96 10.4 14.58 8.29 13.58 6.82 12.58 5.34 10.5 5.03 9.12 6.12ZM 11.58 10.71C 10.5 11.02 9.96 10.16 9.81 9.07 9.65 7.98 10.27 7.83 10.88 7.52 11.81 7.05 12.96 7.67 13.19 8.45 13.34 9.31 12.58 10.4 11.58 10.71Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">Holiday Events</h3>
                                <p class="ct-icon-box__content">Class aptent taciti sociosqu ad litora torquent per conubia nostra, peru inceptos himenaeos.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-xs visible-sm"></div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="ct-icon-box">
                            <div class="ct-icon-box__inner">
                                <div class="ct-icon-box__icon">
                                    <div class="inner">
                                        <svg width="35px" height="37px" viewbox="0 0 35 37" class="ct-icon ct-icon--flower">
                                            <path d="M 34.91 13.8C 33.81 3.87 25.85-0.72 16.64 0.09 8.55 0.8-0.59 6.39 0.04 15.8 0.64 24.8 9.98 28.72 17.72 27.52 18.14 30.61 17.98 33.85 18.8 36.83 18.86 37.05 19.19 37.06 19.25 36.83 19.85 34.41 19.75 31.28 19.25 28.38 25.57 27.81 31.95 25.4 34.17 19.93 34.21 19.88 34.24 19.82 34.24 19.76 34.89 18.07 35.16 16.1 34.91 13.8ZM 29.44 16.48C 30.28 16.51 31.11 16.54 31.95 16.57 32.55 16.59 33.16 16.65 33.75 16.58 33.66 17.58 33.44 18.47 33.12 19.28 31.33 19.21 29.43 19.41 27.66 19.49 27.3 19.5 27.32 20 27.66 20.04 29.23 20.22 31.02 20.37 32.68 20.23 32.4 20.73 32.09 21.2 31.73 21.63 29.9 21.55 27.9 22.06 26.1 22.31 25.82 22.34 25.8 22.78 26.1 22.77 27.6 22.7 29.27 22.78 30.82 22.59 30.09 23.25 29.26 23.81 28.35 24.3 28.34 24.3 28.33 24.29 28.32 24.29 25.86 24.28 23.43 24.45 20.97 24.35 20.68 24.33 20.61 24.82 20.9 24.87 22.77 25.21 24.75 25.35 26.66 25.09 24.3 26.06 21.61 26.64 19 27.1 18.75 25.94 18.44 24.85 18.08 23.89 18 23.67 17.9 23.47 17.81 23.26 17.84 23.24 17.87 23.2 17.89 23.16 18.68 21.45 19.74 20.03 21.15 18.81 21.39 18.6 21.64 18.42 21.89 18.23 22.46 18.29 23.03 18.37 23.58 18.55 24.09 18.72 24.54 19.05 25.06 19.18 25.67 19.33 25.96 18.53 25.47 18.18 24.79 17.7 23.7 17.58 22.74 17.62 23.66 16.99 24.59 16.39 25.38 15.63 25.73 15.3 25.37 14.57 24.89 14.76 23.19 15.45 21.48 16.85 20.17 18.13 18.94 19.33 17.91 20.71 17.39 22.35 16.08 19.81 14.04 17.72 11.45 16.54 11.13 16.39 10.9 16.8 11.18 17.01 14.53 19.48 16.77 22.34 17.56 26.55 17.57 26.6 17.58 26.66 17.59 26.71 10.35 26.98 1.73 23.91 1.28 15.3 0.8 6.31 10.21 1.63 17.72 1.32 20.43 1.2 23.01 1.61 25.28 2.53 23.85 2.59 22.37 2.87 21.16 3.08 20.93 3.12 20.98 3.51 21.21 3.49 22.44 3.35 23.68 3.28 24.92 3.31 25.66 3.33 26.4 3.44 27.13 3.46 27.75 3.83 28.35 4.22 28.9 4.67 28.11 4.69 27.31 4.77 26.54 4.81 26.24 4.82 26.24 5.27 26.54 5.29 27.57 5.34 28.67 5.46 29.71 5.41 30.51 6.2 31.22 7.08 31.8 8.09 29.08 7.64 26.16 7.81 23.43 7.73 23.21 7.73 23.22 8.06 23.43 8.08 26.26 8.34 29.28 8.89 32.13 8.7 32.44 9.31 32.72 9.94 32.95 10.63 32.24 10.46 31.48 10.52 30.75 10.5 29.8 10.49 28.84 10.47 27.88 10.47 27.56 10.47 27.58 10.93 27.88 10.96 28.84 11.05 29.8 11.13 30.75 11.2 31.55 11.27 32.38 11.42 33.16 11.25 33.29 11.71 33.41 12.17 33.5 12.66 33.25 12.68 33.02 12.8 32.77 12.85 32.69 12.86 32.61 12.86 32.53 12.87 31.59 12.77 30.63 12.89 29.69 12.91 28.49 12.93 27.29 12.9 26.09 12.84 25.8 12.82 25.81 13.26 26.09 13.29 28.12 13.52 30.66 13.99 32.69 13.5 33.03 13.52 33.37 13.47 33.62 13.31 33.75 14.17 33.81 14.98 33.8 15.73 33.19 15.66 32.56 15.72 31.95 15.74 31.95 15.74 29.44 15.83 29.44 15.83 29.02 15.84 29.02 16.47 29.44 16.48Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="ct-icon-box__header">World Guiding Parties</h3>
                                <p class="ct-icon-box__content">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Vestibulum eti rhoncus posti uere augue eu.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ct-u-padding-bottom-50">
                    <button class="btn btn-motive" data-show="#row-hidden">See All
                    </button>
                    <div class="clearfix hidden-xs ct-u-padding-top-30"></div>
                </div>
            </section>
            <!-- *** About Jessica *** -->
            <section data-background="images/demo-content/bg-01.jpg" data-height="511" data-parallax="30" class="ct-u-mask ct-u-display-tablex text-center ct-u-padding-both-40">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/demo-content/jhorse.png" alt="Jessica Horse">
                            </div>
                            <div class="col-md-6">
                                <h2 class="ct-section-header ct-section-header--white ct-u-margin-top-40">About   <b>Jessica</b></h2>
                                <p data-color="#ffffff">Event design &amp; planning is the premier event planning company in the Triangle. The company provides professional event planning services for any type and size of party, wedding, corporate event and religious celebrations.</p>
                                <a
                                href="about.html" class="btn btn-default-o">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- *** Happy Moms *** -->
            <section data-background="images/demo-content/bg-03.jpg" data-parallax="30" data-height="629" class="ct-u-mask ct-u-display-tablex text-center ct-u-padding-both-40">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-md-push-5 ct-u-padding-top-40">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube-nocookie.com/embed/_MC3XuMvsDI?rel=0&amp;showinfo=0" class="embed-responsive-item"></iframe>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-7">
                                <h2 class="ct-section-header ct-section-header--white ct-u-margin-top-40"><i class="fa fa-quote-left"></i>Happy   <b>Moms</b></h2>
                                <p data-color="#ffffff">Helping our clients throw entertaining and hassle-free events is our goal. Here are the <b>awards and recognition</b> we receive are a testament to our success.</p>
                                <img src="images/demo-content/icons.png" alt="Photography, I love photo, Camera"
                                class="ct-u-margin-bottom-30">
                                <div class="clearfix ct-u-padding-top-30"></div><a href="testimonials.html" class="btn btn-default-o">All Testimonials</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- *** News and Events *** -->
            <section class="container">
                <h2 class="ct-section-header">News   <b>&amp; Events</b></h2>
                <div class="row">
                    <div data-items="1" data-items-lg="2" class="ct-slick ct-js-slick ct-slick--arrows2 ct-u-padding-bottom-40">
                        <div class="item">
                            <article class="ct-blog-post ct-blog-post--image">
                                <div class="ct-blog-post__media">
                                    <img src="images/demo-content/blog-01.png" alt="Cupcake Paper Flowers" />
                                </div>
                                <div class="ct-blog-post__body">
                                    <div class="ct-blog-post__date"><span class="ct-blog-post__day">21</span><span class="ct-blog-post__month">august</span>
                                    </div>
                                    <h3 class="h4 ct-blog-post__title">Cupcake Paper Flowers</h3>
                                    <div class="ct-blog-post__content">Skewers (easiest) or Cake Wire (to shape the cake wire like a rainbow, an adult will have to cut the wire and bend it like an arc to fit the bowl or cup that you use.)
                                    </div><a href="blog-post-1.html" class="btn btn-gray-o">Read Article</a>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="ct-blog-post ct-blog-post--image">
                                <div class="ct-blog-post__media">
                                    <img src="images/demo-content/blog-02.png" alt="Biscuits Handmade" />
                                </div>
                                <div class="ct-blog-post__body">
                                    <div class="ct-blog-post__date"><span class="ct-blog-post__day">20</span><span class="ct-blog-post__month">august</span>
                                    </div>
                                    <h3 class="h4 ct-blog-post__title">Biscuits Handmade</h3>
                                    <div class="ct-blog-post__content">Spoon the marshmallows into the first color of Jell-O powder that you want to make. Close the bag tightly and shake to coat the marshmallow.
                                    </div><a href="blog-post-2.html" class="btn btn-gray-o">Read Article</a>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="ct-blog-post ct-blog-post--image">
                                <div class="ct-blog-post__media">
                                    <img src="images/demo-content/blog-03.png" alt="Graduation Cuties Celementines" />
                                </div>
                                <div class="ct-blog-post__body">
                                    <div class="ct-blog-post__date"><span class="ct-blog-post__day">19</span><span class="ct-blog-post__month">august</span>
                                    </div>
                                    <h3 class="h4 ct-blog-post__title">Graduation Cuties Celementines</h3>
                                    <div class="ct-blog-post__content">Can you tell we are excited about graduation this year? This oh-so-simple party idea will have you looking like the smartest (and most clever) hostess in town!
                                    </div><a href="blog-post-3.html" class="btn btn-gray-o">Read Article</a>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="ct-blog-post ct-blog-post--image">
                                <div class="ct-blog-post__media">
                                    <img src="images/demo-content/blog-04.png" alt="Party Favors Chalkboard" />
                                </div>
                                <div class="ct-blog-post__body">
                                    <div class="ct-blog-post__date"><span class="ct-blog-post__day">18</span><span class="ct-blog-post__month">august</span>
                                    </div>
                                    <h3 class="h4 ct-blog-post__title">Party Favors Chalkboard</h3>
                                    <div class="ct-blog-post__content">Skewers (easiest) or Cake Wire (to shape the cake wire like a rainbow, an adult will have to cut the wire and bend it like an arc to fit the bowl or cup that you use.)
                                    </div><a href="blog-post-4.html" class="btn btn-gray-o">Read Article</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </main>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>