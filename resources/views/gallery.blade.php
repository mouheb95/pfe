@extends('layouts.base')
@section('container')
        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Photo <b>gallery</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
            <!-- *** Isotope Gallery *** -->
            <div class="container">
                <div class="ct-isotope-container">
                    <div class="ct-isotope-filtering">
                        <button class="btn btn-gray-o is-active" data-filter="*">Show All
                        </button>
                        <button class="btn btn-gray-o" data-filter=".august">August, 2015
                        </button>
                        <button class="btn btn-gray-o" data-filter=".july">July, 2015
                        </button>
                        <button class="btn btn-gray-o" data-filter=".june">June, 2015
                        </button>
                        <button class="btn btn-gray-o" data-filter=".may">May, 2015
                        </button>
                    </div>
                    <div class="ct-isotope-gallery ct-isotope-gallery--lg-4 ct-isotope-gallery--md-3 ct-isotope-gallery--sm-2 ct-isotope-gallery--xs-1">
                        <figure class="ct-isotope-item isotope-grid-sizer august">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-01.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-01.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-1.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item july">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-02.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-02.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-2.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item june">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-03.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-03.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-3.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item may">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-04.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-04.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-4.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item august">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-05.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-05.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-5.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item july">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-06.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-06.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-6.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item june">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-07.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-07.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-1.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item may">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-08.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-08.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-2.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item august">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-09.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-09.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-3.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item july">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-10.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-10.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-4.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item june">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-11.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-11.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-5.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="ct-isotope-item may">
                            <div class="ct-isotope-item__media">
                                <img src="assets/images/demo-content/gallery-12.jpg" alt="Gallery Item" />
                                <div class="ct-isotope-item__hover">
                                    <div class="ct-isotope-item__inner"><a href="assets/images/demo-content/gallery-12.jpg" class="btn btn-default-o--type2 btn-sm mfp-image">View Image</a><a href="package-detail-6.html" class="btn btn-default-o--type2 btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <button class="btn btn-motive ct-js-infinite" id="load-more" data-load-name="gallery-" data-load-page="1">Load More
                    </button>
                </div>
            </div>
            <!-- *** Latest Themes *** -->
            <section data-background="assets/images/demo-content/bg-05.jpg" data-parallax="35" class="ct-u-padding-bottom-50">
                <div class="container">
                    <h2 class="ct-section-header">Latest   <b>Themes</b></h2>
                </div>
                <div data-items-xl="4" data-items-lg="3" data-items-sm="2" data-items-xs="1" class="ct-slick ct-js-slick">
                    <div class="item">
                        <a href="event-adult.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-01.jpg" alt="Cupcake Paper Flowers" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Cupcake Paper Flowers</span><span class="ct-theme-box__date">9 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="event-birthday.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-02.jpg" alt="Costume Day For All Kids" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Costume Day For All Kids</span><span class="ct-theme-box__date">8 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="event-church.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-03.jpg" alt="Being Great Dressing In Animals" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Being Great Dressing In Animals</span><span class="ct-theme-box__date">7 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="event-neighborhood.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-04.jpg" alt="Being Great Dressing In Animals" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Being Great Dressing In Animals</span><span class="ct-theme-box__date">7 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="event-picnics.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-01.jpg" alt="Cupcake Paper Flowers" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Cupcake Paper Flowers</span><span class="ct-theme-box__date">9 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="event-schools.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-02.jpg" alt="Costume Day For All Kids" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Costume Day For All Kids</span><span class="ct-theme-box__date">8 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="event-sepcial.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-03.jpg" alt="Being Great Dressing In Animals" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Being Great Dressing In Animals</span><span class="ct-theme-box__date">7 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="event-sports-team.html" class="ct-theme-box">
                            <div class="ct-theme-box__media">
                                <img src="assets/images/demo-content/latest-themes-04.jpg" alt="Being Great Dressing In Animals" />
                            </div>
                            <div class="ct-theme-box__content">
                                <div class="outer">
                                    <div class="inner"><span class="ct-theme-box__title">Being Great Dressing In Animals</span><span class="ct-theme-box__date">7 September, 2015</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix ct-u-padding-bottom-50"></div>
            </section>
            <!-- *** News and Events *** -->
            <section class="container">
                <h2 class="ct-section-header">News   <b>&amp; Events</b></h2>
                <div class="row">
                    <div data-items="1" data-items-lg="2" class="ct-slick ct-js-slick ct-slick--arrows2 ct-u-padding-bottom-40">
                        <div class="item">
                            <article class="ct-blog-post ct-blog-post--image">
                                <div class="ct-blog-post__media">
                                    <img src="assets/images/demo-content/blog-01.png" alt="Cupcake Paper Flowers" />
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
                                    <img src="assets/images/demo-content/blog-02.png" alt="Biscuits Handmade" />
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
                                    <img src="assets/images/demo-content/blog-03.png" alt="Graduation Cuties Celementines" />
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
                                    <img src="assets/images/demo-content/blog-04.png" alt="Party Favors Chalkboard" />
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
        @stop