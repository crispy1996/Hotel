@guest

    @include('layouts.homeheader')
    
@else

    @if(Auth()->User()->type == 3)
        @include('layouts.adminheader')
    @elseif(Auth()->User()->type == 2)
        @include('layouts.operatorheader')
    @else
        @include('layouts.clientheader')
    @endif    

@endguest

            <!-- wrapper -->
            <div id="wrapper">
                <!-- Content-->
                <div class="content">
                    <!--section -->
                    <section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
                        <div class="slideshow-container" data-scrollax="properties: { translateY: '200px' }" >

                            <!-- slideshow-item -->
                            <div class="slideshow-item">
                                <div class="bg"  data-bg="images/arton8.jpg"></div>
                            </div>
                            <!--  slideshow-item end  -->
                            <!-- slideshow-item -->
                            <div class="slideshow-item">
                                <div class="bg"  data-bg="images/arton9.jpg"></div>
                            </div>
                            <!--  slideshow-item end  -->
                            <!-- slideshow-item -->
                            <div class="slideshow-item">
                                <div class="bg"  data-bg="images/arton10.jpg"></div>
                            </div>
                            <!--  slideshow-item end  -->

                        </div>
                        <div class="overlay"></div>
                        <div class="hero-section-wrap fl-wrap">
                            <div class="container">
                                <div class="intro-item fl-wrap">
                                    <h2>Building Memories</h2>
                                    <h3>Find great places , hotels , restaurants</h3>
                                </div>
                                <!-- 
                                <div class="main-search-input-wrap" style="display:none;">
                                    <div class="main-search-input fl-wrap">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="What are you looking for?" value=""/>
                                        </div>

                                        <button class="main-search-button" onclick="window.location.href='listings-half-screen-map-list.html'">Search</button>
                                    </div>
                                </div>
                                 -->
                            </div>
                        </div>
                        <div class="bubble-bg"> </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec2" class="custom-scroll-link">Let's Start</a></div>
                        </div>
                    </section>
                    <!-- section end -->

                    <!--section -->
                    <section class="gray-section">
                        <div class="container">
                            <div class="section-title">
                                <h2>Special Deals</h2>
                                <div class="section-subtitle">Best Hotels</div>
                                <span class="section-separator"></span>
                                <p>Discoverer and experience new places</p>
                            </div>
                        </div>
                        <!-- carousel -->
                        <div class="list-carousel fl-wrap card-listing ">
                            <!--listing-carousel-->
                            <div class="listing-carousel  fl-wrap ">
                                <!--slick-slide-item-->
                                
                                <!--slick-slide-item-->
                              @foreach($hotels as $item)  
                                <div class="slick-slide-item">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="/storage/logo/{{$item->cover_image}}" style="height: 235px;width: 310px;" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" >Hotel</a>
                                                <div class="listing-avatar"><img src="images/avatar/55.jpg" alt="">
                                                    <span class="avatar-tooltip">Added By  <strong>{{$item['user']['Firstname']}}</strong></span>
                                                </div>
                                                <h3><a href="/hotel/{{Crypt::encrypt($item->id)}}">{{$item->name}}</a></h3>
                                                <p>{{str_limit($item->description,14)}} </p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="{{$item->star}}">
                                                        <span>({{$item->star}} reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->district->name}}, {{$item->province->name}} - {{$item->country->name}}</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                             @endforeach   
                                <!--slick-slide-item end-->
                            </div>
                            <!--listing-carousel end-->
                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                        </div>
                        <!--  carousel end-->
                    </section>
                    <!-- section end -->

                    <!--section -->
                    <section id="sec2">
                        <div class="container">
                            <div class="section-title">
                                <h2>Categories</h2>
                                <div class="section-subtitle">Special Deals</div>
                                <span class="section-separator"></span>
                                <p>Explore some of the best tips from around the city from our partners and friends.</p>
                            </div>
                            <!-- portfolio start -->
                            <div class="gallery-items fl-wrap mr-bot spad">
                                <!-- gallery-item-->

                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/all/22.jpg"   alt="">
                                            <div class="listing-counter"><span>21 </span> hotels</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Hotel</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/all/22.jpg"   alt="">
                                            <div class="listing-counter"><span>36 </span> restaurent</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Restaurant</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/all/22.jpg"   alt="">
                                            <div class="listing-counter"><span>42 </span> Events</div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Events</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                            </div>
                            <!-- portfolio end -->

                        </div>
                    </section>
                    <!-- section end -->

                    <section class="gray-bg no-pading no-top-padding" id="sec1">
                        <div class="col-list-wrap  center-col-list-wrap left-list">
                            <div class="container">
                                <div class="listsearch-maiwrap box-inside fl-wrap">
                                    <div class="listsearch-header fl-wrap">
                                        <h3> <span>All Restaurants</span></h3>
                                        <div class="listing-view-layout">
                                            <ul>
                                                <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                                <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- listsearch-input-wrap  -->

                                </div>
                                <!-- list-main-wrap-->
                                <div class="list-main-wrap fl-wrap card-listing">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="images/all/4.jpg" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Restaurants</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Luxury Restaurant</a></h3>
                                                <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> KN3 Av 6 Kigali City - Rwanda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="images/all/4.jpg" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Restaurants</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Luxury Restaurant</a></h3>
                                                <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> KN3 Av 6 Kigali City - Rwanda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="images/all/4.jpg" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Restaurants</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Luxury Restaurant</a></h3>
                                                <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> KN3 Av 6 Kigali City - Rwanda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <div class="clearfix"></div>
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="images/all/4.jpg" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Restaurants</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Luxury Restaurant</a></h3>
                                                <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> KN3 Av 6 Kigali City - Rwanda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="images/all/4.jpg" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Restaurants</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Luxury Restaurant</a></h3>
                                                <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> KN3 Av 6 Kigali City - Rwanda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="images/all/4.jpg" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <a class="listing-geodir-category" href="listing.html">Restaurants</a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Luxury Restaurant</a></h3>
                                                <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> KN3 Av 6 Kigali City - Rwanda</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- pagination-->
                                    <div class="pagination">
                                        <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                        <a href="#" class="blog-page transition">1</a>
                                        <a href="#" class="blog-page current-page transition">2</a>
                                        <a href="#" class="blog-page transition">3</a>
                                        <a href="#" class="blog-page transition">4</a>
                                        <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <!-- list-main-wrap end-->
                            </div>
                        </div>
                    </section>

                    <!--section -->
                    <section class="color-bg">
                        <div class="shapes-bg-big"></div>
                        <div class="container">
                            <div class=" single-facts fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="54">54</div>
                                            </div>
                                        </div>
                                        <h6>Hotels</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="122">122</div>
                                            </div>
                                        </div>
                                        <h6>Restaurants</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="13">13</div>
                                            </div>
                                        </div>
                                        <h6>Won Awards</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                 <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="12168">12168</div>
                                            </div>
                                        </div>
                                        <h6>Happy customers every year</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->

                            </div>
                        </div>
                    </section>
                    <!-- section end -->

                    <!--section -->
                    <section style="display:none;">
                        <div class="container">
                            <div class="section-title">
                                <h2>Testimonials</h2>
                                <div class="section-subtitle">Clients Reviews</div>
                                <span class="section-separator"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                            </div>
                        </div>
                        <!-- testimonials-carousel -->
                        <div class="carousel fl-wrap">
                            <!--testimonials-carousel-->
                            <div class="testimonials-carousel single-carousel fl-wrap">
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae dicta sunt explicabo. </p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="images/avatar/55.jpg" alt=""></div>
                                        <h4>Lisa Noory</h4>
                                        <span>Restaurant Owner</span>
                                    </div>
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                        <p>Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="images/avatar/55.jpg" alt=""></div>
                                        <h4>Antony Moore</h4>
                                        <span>Restaurant Owner</span>
                                    </div>
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <p>Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent.</p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="images/avatar/55.jpg" alt=""></div>
                                        <h4>Austin Harisson</h4>
                                        <span>Restaurant Owner</span>
                                    </div>
                                </div>
                                <!--slick-slide-item end-->
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                        <p>Qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram seacula quarta decima et quinta decima.</p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <div class="testimonilas-avatar"><img src="images/avatar/55.jpg" alt=""></div>
                                        <h4>Garry Colonsi</h4>
                                        <span>Restaurant Owner</span>
                                    </div>
                                </div>
                                <!--slick-slide-item end-->
                            </div>
                            <!--testimonials-carousel end-->
                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                        </div>
                        <!-- carousel end-->
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section class="gray-section">
                        <div class="container">
                            <div class="fl-wrap spons-list">
                                <ul class="client-carousel">
                                    <li><a href="#" target="_blank"><img src="images/clients/1.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="images/clients/2.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="images/clients/3.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="images/clients/1.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="images/clients/2.png" alt=""></a></li>
                                    <li><a href="#" target="_blank"><img src="images/clients/3.png" alt=""></a></li>
                                </ul>
                                <div class="sp-cont sp-cont-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="sp-cont sp-cont-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2>Tips & Articles</h2>
                                <div class="section-subtitle">From the blog.</div>
                                <span class="section-separator"></span>
                                <p>Browse the latest articles from our blog.</p>
                            </div>
                            <div class="row home-posts">
                                <div class="col-md-4">
                                    <article class="card-post">
                                        <div class="card-post-img fl-wrap">
                                            <a href="blog-single.html"><img src="images/all/19.jpg"   alt=""></a>
                                        </div>
                                        <div class="card-post-content fl-wrap">
                                            <h3><a href="blog-single.html">Gallery Post</a></h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                            <div class="post-author"><a href="#"><img src="images/avatar/55.jpg" alt=""><span>By , Alisa Noory</span></a></div>
                                            <div class="post-opt">
                                                <ul>
                                                    <li><i class="fa fa-calendar-check-o"></i> <span>25 April 2018</span></li>
                                                    <li><i class="fa fa-eye"></i> <span>264</span></li>
                                                    <li><i class="fa fa-tags"></i> <a href="#">Photography</a>  </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="card-post">
                                        <div class="card-post-img fl-wrap">
                                            <a href="blog-single.html"><img  src="images/all/19.jpg"   alt=""></a>
                                        </div>
                                        <div class="card-post-content fl-wrap">
                                            <h3><a href="blog-single.html">Video and gallery post</a></h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                            <div class="post-author"><a href="#"><img src="images/avatar/55.jpg" alt=""><span>By , Mery Lynn</span></a></div>
                                            <div class="post-opt">
                                                <ul>
                                                    <li><i class="fa fa-calendar-check-o"></i> <span>25 April 2018</span></li>
                                                    <li><i class="fa fa-eye"></i> <span>264</span></li>
                                                    <li><i class="fa fa-tags"></i> <a href="#">Design</a>  </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="card-post">
                                        <div class="card-post-img fl-wrap">
                                            <a href="blog-single.html"><img  src="images/all/19.jpg"   alt=""></a>
                                        </div>
                                        <div class="card-post-content fl-wrap">
                                            <h3><a href="blog-single.html">Post Article</a></h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                            <div class="post-author"><a href="#"><img src="images/avatar/55.jpg" alt=""><span>By , Garry Dee</span></a></div>
                                            <div class="post-opt">
                                                <ul>
                                                    <li><i class="fa fa-calendar-check-o"></i> <span>25 April 2018</span></li>
                                                    <li><i class="fa fa-eye"></i> <span>264</span></li>
                                                    <li><i class="fa fa-tags"></i> <a href="#">Stories</a>  </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- section end -->

                </div>
                <!-- Content end -->
            </div>
            <!-- wrapper end -->
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>About Us</h3>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>We are a Rwandan based holiday booking agency that covers Rwanda, Uganda, Tanzania, Burundi, Kenya and Central African countries. We strive to offer the best at pocket friendly prices while working with local teams to be able to offer unforgettable experiences to our customers</p>
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><span><i class="fa fa-envelope-o"></i> Email :</span><a href="#" target="_blank">reservations@tablesandhills.com</a></li>
                                        <li> <span><i class="fa fa-map-marker"></i> Adress :</span><a href="#" target="_blank">Kigali City - RWANDA</a></li>
                                        <li><span><i class="fa fa-phone"></i> Phone :</span><a href="#">+(250) 788 677 705</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our Last News</h3>
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/23.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Vivamus dapibus rutrum</a>
                                                <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/23.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title=""> In hac habitasse platea</a>
                                                <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/23.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Tortor tempor in porta</a>
                                                <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our  Twitter</h3>
                                <div id="footer-twiit"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Subscribe</h3>
                                <div class="subscribe-widget fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                    <div class="subcribe-form">
                                        <form id="subscribe">
                                            <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-rss"></i> Subscribe</button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-menu fl-wrap">
                                        <ul>
                                            <li><a href="#">Home </a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Listing</a></li>
                                            <li><a href="#">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-widget">
                                    <img src="images/logo3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright"> &#169; Tablesandhills.com 2018 .  All rights reserved.</div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end  -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Sign In <span>Tables &<strong>Hills</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">
                                        <form method="POST" action="{{ route('login') }}"  name="registerform">
                                            @csrf
                                            <label> Email Address * </label>
                                            <input name="email" type="email"   onClick="this.select()" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                             value="{{ old('email') }}" required autofocus>
                                             <!-- <a href="dashboard-add-listing.html" class="add-list show-reg-form modal-open">Sign In</a> -->
                                        

                                            <label >Password * </label>
                                            <input name="password" type="password"   onClick="this.select()" >

                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                        <form method="POST" action="{{ route('register') }}" class="main-register-form" id="main-register-form2">
                                            @csrf
                                                <label >First Name * </label>
                                                <input type="text"   onClick="this.select()" class="form-control{{ $errors->has('First name') ? ' is-invalid' : '' }}" name="First" value="{{ old('Firstname') }}" required autofocus>

                                                <label>Second Name *</label>
                                                <input name="Last" type="text"  onClick="this.select()" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('Lastname') }}" required autofocus>

                                                <label>Email Address *</label>
                                                <input   onClick="this.select()" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                <label >Password *</label>
                                                <input name="password" type="password"   onClick="this.select()"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required >


                                                <label >Confirm Password *</label>
                                                <input name="password_confirmation" type="password"   onClick="this.select()" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required >
                                                <button type="submit"   class="log-submit-btn"  >
                                                    <span>Register</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>

<!-- Mirrored from citybook.kwst.net/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 17:30:42 GMT -->
</html>
