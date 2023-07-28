       @extends('frontend.layouts.main')
       @section('main-content')
           <!--=============================
            BANNER START
        ==============================-->
           <section class="tf__banner">
               <div class="tf__banner_overlay">
                   <span class="banner_shape_1">
                       <img src="{{ asset('frontend/images/tree_5.png') }}" alt="shape" class="img-fluid w-100">
                   </span>
                   <span class="banner_shape_2">
                       <img src="{{ asset('frontend/images/tree_3.png') }}" alt="shape" class="img-fluid w-100">
                   </span>
                   <span class="banner_shape_3">
                       <img src="{{ asset('frontend/images/tree_4.png') }}" alt="shape" class="img-fluid w-100">
                   </span>
                   <span class="banner_shape_4">
                       <img src="{{ asset('frontend/images/tree_6.png') }}" alt="shape" class="img-fluid w-100">
                   </span>
                   <span class="banner_shape_5">
                       <img src="{{ asset('frontend/images/tree_7.png') }}" alt="shape" class="img-fluid w-100">
                   </span>
                   <span class="banner_shape_6">
                       <img src="{{ asset('frontend/images/tree_2.png') }}" alt="shape" class="img-fluid w-100">
                   </span>
                   <div class="col-12">
                       <div class="tf__banner_slider" style="background: url(images/banner_bg.jpg);">
                           <div class="tf__banner_slider_overlay">
                               <div class=" container">
                                   <div class="row justify-content-center">
                                       <div class="col-xxl-6 col-xl-6 col-md-10 col-lg-6">
                                           <div class="tf__banner_text wow fadeInLeft" data-wow-duration="1s">
                                               <h3>Satisfy Your Cravings</h3>
                                               <h1>Delicious Foods With Wonderful Eating</h1>
                                               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit
                                                   minimaet debitis ut distinctio optio.</p>
                                               <form>
                                                   <input type="text" placeholder="Search . . .">
                                                   <button type="submit" class="common_btn">search</button>
                                               </form>
                                           </div>
                                       </div>
                                       <div class="col-xxl-5 col-xl-6 col-sm-10 col-md-9 col-lg-6">
                                           <div class="tf__banner_img wow fadeInRight" data-wow-duration="1s">
                                               <div class="img">
                                                   <img src="{{ asset('frontend/images/slider_img_1.png') }}"
                                                       alt="food item" class="img-fluid w-100">
                                                   <span>
                                                       35% off
                                                   </span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!--=============================
            BANNER END
        ==============================-->


           <!--=============================
            OFFER ITEM START
        ==============================-->
           <section class="tf__offer_item pt_95 pb_100 xs_pt_65 xs_pb_70">
               <div class="container">
                   <div class="row wow fadeInUp" data-wow-duration="1s">
                       <div class="col-md-8 col-lg-7 col-xl-6">
                           <div class="tf__section_heading mb_25">
                               <h4>daily offer</h4>
                               <h2>up to 75% off for this day</h2>
                           </div>
                       </div>
                   </div>
                   <div class="row offer_item_slider wow fadeInUp" data-wow-duration="1s">
                       <div class="col-xl-4">
                           <div class="tf__offer_item_single"
                               style="background: url('{{ asset('frontend/images/offer_item_img1.jpg') }}');">
                               <span>37% off</span>
                               <a class="title" href="menu_details.html">Chicken Nuggets</a>
                               <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                               <ul class="d-flex flex-wrap">
                                   <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                               class="fas fa-shopping-basket"></i></a></li>
                                   <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                   <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="col-xl-4">
                           <div class="tf__offer_item_single"
                               style="background: url('{{ asset('frontend/images/offer_item_img2.jpg') }}');">
                               <span>40% off</span>
                               <a class="title" href="menu_details.html">Beef Masala</a>
                               <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                               <ul class="d-flex flex-wrap">
                                   <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                               class="fas fa-shopping-basket"></i></a></li>
                                   <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                   <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="col-xl-4">
                           <div class="tf__offer_item_single"
                               style="background: url('{{ asset('frontend/images/offer_item_img3.jpg') }}');">
                               <span>55% off</span>
                               <a class="title" href="menu_details.html">Dal Makhani</a>
                               <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                               <ul class="d-flex flex-wrap">
                                   <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                               class="fas fa-shopping-basket"></i></a></li>
                                   <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                   <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="col-xl-4">
                           <div class="tf__offer_item_single"
                               style="background: url('{{ asset('frontend/images/offer_item_img2.jpg') }}');">
                               <span>45% off</span>
                               <a class="title" href="menu_details.html">Beef Masala</a>
                               <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                               <ul class="d-flex flex-wrap">
                                   <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                               class="fas fa-shopping-basket"></i></a></li>
                                   <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                   <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </section>

           <!-- CART POPUT START -->
           {{-- @include('frontend.cart') --}}
           <!-- CART POPUT END -->
           <!--=============================
            OFFER ITEM END
        ==============================-->


           <!--=============================
            RESERVATION START
        ==============================-->
           @include('frontend.reservation')
           <!--=============================
            RESERVATION END
        ==============================-->


           <!--=============================
            MENU ITEM START
        ==============================-->
           <section class="tf__menu mt_95 xs_mt_65">
               <div class="container">
                   <div class="row">
                       <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                           <div class="tf__section_heading mb_25">
                               <h4>food Menu</h4>
                               <h2>Popular Delicious Foods</h2>
                           </div>
                       </div>
                       <div class="menu_filter d-flex flex-wrap">
                           <button class="active categoty" data-filter="*" value="all">all menu</button>
                           <button data-filter="burger" value="burger" class='categoty'>burger</button>
                           <button data-filter="chicken" value="chicken" class='categoty'>chicken</button>
                           <button data-filter="pizza" value="pizza" class='categoty'>pizza</button>
                           <button data-filter="desserts" value="desserts" class='categoty'> desserts</button>
                        </div> 
                       {{-- <div class="menu_filter d-flex flex-wrap">
                          <ul class="main-nav nav navbar-nav">
                            @foreach ($category as $categories)
                            <li>{{$categories->name}}</li>
                            @endforeach
                            
                          </ul>
                        </div>  --}}
                   </div>

                   <div class="row grid">
                       @foreach ($product as $v)
                           <div class="col-xxl-3 col-sm-6 col-lg-4 " data-wow-duration="1s" id="menuItems">
                               <div class="tf__menu_item">
                                   <div class="tf__menu_item_img">
                                       <img src="{{ asset('uploads/' . $v->photo) }}" alt="menu"
                                           class="img-fluid w-100">
                                   </div>
                                   <div class="tf__menu_item_text">
                                       <a class="category" href="#">{{ $v->name }}</a>
                                       <a class="title" href="menu_details.html">{{ $v->title }}</a>
                                       <p class="rating">
                                           <i class="fas fa-star"></i>
                                           <i class="fas fa-star"></i>
                                           <i class="fas fa-star"></i>
                                           <i class="fas fa-star-half-alt"></i>
                                           <i class="far fa-star"></i>
                                           <span>24</span>
                                       </p>
                                       <h5 class="price">{{ $v->price }}<del>$90.00</del></h5>
                                       <a class="tf__add_to_cart" href="{{ url('cartmodel', $v->id) }}" data-bs-toggle=""
                                           data-bs-target="#cartModal">add
                                           to cart</a>
                                       <ul class="d-flex flex-wrap justify-content-end">
                                           <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                           <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                   </div>
               </div>
           </section>
           {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
           <script>
               $(document).ready(function() {
                   $('.categoty').click(function() {
                       let categoty = $(this).val();
                    //    consol.log(categoty);
                    //    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                       $.ajax({
                           type: "get",
                           url: '{{route("getCategory")}}',
                           data: {
                               categoty: categoty,
                               _token:'{{csrf_token()}}'
                           },
                           success: function(data) {
                            //    console.log(data);
                               $("#menuItems").html(data);
                           }
                       });

                   })
               });
           </script> --}}
           <!--=============================
            MENU ITEM END
        ==============================-->


           <!--=============================
            TEAM START
        ==============================-->
        <section class="tf__team mt_100 xs_mt_70 pt_95 xs_pt_65 pb_95 xs_pb_65">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <div class="tf__section_heading mb_25">
                            <h4>our team</h4>
                            <h2>meet our expert chefs</h2>
                        </div>
                    </div>
                </div>
    
                <div class="row team_slider">
                    @foreach($team as $item)
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_team">
                            <div class="tf__single_team_img">
                                <img src="{{asset('uploads/'.$item->photo)}}" alt="team" class="img-fluid w-100">
                            </div>
                            <div class="tf__single_team_text">
                                <h4>{{$item->name}}</h4>
                                <p>{{$item->designation}}</p>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
           <!--=============================
            TEAM END
        ==============================-->


           <!--=============================
            ADD SLIDER START
        ==============================-->
           <section class="tf__add_slider mt_75 xs_mt_45">
               <div class="container">
                   <div class="row wow fadeInUp" data-wow-duration="1s">
                       <div class="col-xl-6 col-lg-6">
                           <div class="tf__add_slider_single"
                               style="background: url('{{ asset('frontend/images/offer_slider_1.png') }}');">
                               <div class="text">
                                   <h5>weekly best seller</h5>
                                   <h2>Fried Chicken</h2>
                                   <p>Neque porro quisquam est qui dolor ipsum quia dolor sit ametsed.</p>
                                   <a href="menu_details.html">shop now <i class="far fa-long-arrow-right"></i></a>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-6 col-lg-6">
                           <div class="tf__add_slider_single"
                               style="background: url('{{ asset('frontend/images/offer_slider_2.png') }}');">
                               <div class="text">
                                   <h5>daily offer</h5>
                                   <h2>Hyderabadi Biryani</h2>
                                   <p>Neque porro quisquam est qui dolor ipsum quia dolor sit ametsed.</p>
                                   <a href="menu_details.html">shop now <i class="far fa-long-arrow-right"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!--=============================
            ADD SLIDER END
        ==============================-->


           <!--=============================
            DOWNLOAD APP START
        ==============================-->
           <section class="tf__download mt_100 xs_mt_70">
               <div class="row">
                   <div class="col-xl-4 col-lg-4">
                       <div class="tf__download_text_bg"
                           style="background: url('{{ asset('frontend/images/download_img.png') }}');">
                           <div class="tf__download_text_overlay">
                               <div class="tf__download_text wow fadeInUp" data-wow-duration="1s">
                                   <h5>$5.00 Cashback</h5>
                                   <h2>Easy To Order Our All Food</h2>
                                   <ul class="d-flex flex-wrap">
                                       <li>
                                           <a href="#">
                                               <span class="icon"><i class="fab fa-google-play"></i></span>
                                               <p>
                                                   <span>Available on the</span>
                                                   Google Play
                                               </p>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="icon"><i class="fab fa-apple"></i></span>
                                               <p>
                                                   <span>Download on the</span>
                                                   App Store
                                               </p>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-8 col-lg-8">
                       <div class="row download_slider">
                           <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__download_slider">
                                   <img src="{{ asset('frontend/images/download_slider_4.jpg') }}" alt="app download"
                                       class="img-fluid w-100">
                               </div>
                           </div>
                           <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__download_slider">
                                   <img src="{{ asset('frontend/images/download_slider_3.jpg') }}" alt="app download"
                                       class="img-fluid w-100">
                               </div>
                           </div>
                           <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__download_slider">
                                   <img src="{{ asset('frontend/images/download_slider_2.jpg') }}" alt="app download"
                                       class="img-fluid w-100">
                               </div>
                           </div>
                           <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__download_slider">
                                   <img src="{{ asset('frontend/images/download_slider_1.jpg') }}" alt="app download"
                                       class="img-fluid w-100">
                               </div>
                           </div>
                           <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__download_slider">
                                   <img src="{{ asset('frontend/images/download_slider_5.jpg') }}" alt="app download"
                                       class="img-fluid w-100">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!--=============================
            DOWNLOAD APP END
        ==============================-->


           <!--=============================
           TESTIMONIAL  START
        ==============================-->
        <section class="tf__testimonial pt_90 xs_pt_60 pb_100 xs_pb_70" style="background: url('{{asset('frontend/images/testimonial_bg.jpg')}}');">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <div class="tf__section_heading mb_20">
                            <h4>testimonial</h4>
                            <h2>our customar feedbacks</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row testi_slider">
                    @foreach($data as $item)
                    <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_testimonial">
                            <div class="tf__single_testimonial_img">
                                <img src="{{asset('uploads/'.$item->photo)}}" alt="testimonial" class="img-fluid w-100">
                            </div>
                            <div class="tf__single_testimonial_text">
                                <h4>{{ $item->name }}</h4>
                                <p class="designation">{{ $item->location }}</p>
                                <p class="feedback">{{ $item->description }}</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>
           <!--=============================
            TESTIMONIAL END
        ==============================-->


           <!--=============================
            COUNTER START
        ==============================-->
           <section class="tf__counter" style="background: url('{{ asset('frontend/images/counter_bg.jpg') }}');">
               <div class="tf__counter_overlay pt_120 xs_pt_90 pb_100 xs_pb_0">
                   <div class="container">
                       <div class="row">
                           <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__single_counter">
                                   <div class="text">
                                       <h2 class="counter">85,000</h2>
                                       <span><i class="fas fa-user"></i></span>
                                   </div>
                                   <p>customer serve</p>
                               </div>
                           </div>
                           <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__single_counter">
                                   <div class="text">
                                       <h2 class="counter">120</h2>
                                       <span><i class="fas fa-hat-chef"></i></span>
                                   </div>
                                   <p>experience chef</p>
                               </div>
                           </div>
                           <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__single_counter">
                                   <div class="text">
                                       <h2 class="counter">72,000</h2>
                                       <span><i class="fas fa-users"></i></span>
                                   </div>
                                   <p>happy customer</p>
                               </div>
                           </div>
                           <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                               <div class="tf__single_counter">
                                   <div class="text">
                                       <h2 class="counter">30</h2>
                                       <span><i class="fas fa-trophy"></i></span>
                                   </div>
                                   <p>winning award</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!--=============================
            COUNTER END
        ==============================-->


           <!--=============================
            BLOG START
        ==============================-->
           <section class="tf__blog pt_95 xs_pt_65 pb_65 xs_pb_35">
               <div class="container">
                   <div class="row wow fadeInUp" data-wow-duration="1s">
                       <div class="col-md-8 col-lg-7 col-xl-6">
                           <div class="tf__section_heading mb_25">
                               <h4>news & blogs</h4>
                               <h2>our latest foods blog</h2>
                           </div>
                       </div>
                   </div>

                   <div class="row blog_slider">
                       <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                           <div class="tf__single_blog">
                               <div class="tf__single_blog_img">
                                   <img src="{{ asset('frontend/images/blog_1.jpg') }}" alt="author"
                                       class="img-fluid w-100">
                               </div>
                               <div class="tf__single_blog_author">
                                   <div class="img">
                                       <img src="{{ asset('frontend/images/client_1.png') }}" alt="author"
                                           class="img-fluid w-100">
                                   </div>
                                   <div class="text">
                                       <h5>moni islam</h5>
                                       <p>14 May 2023</p>
                                   </div>
                               </div>
                               <div class="tf__single_blog_text">
                                   <a class="category" href="#">food</a>
                                   <a class="title" href="blog_details.html">Operates approximately 400 restaurants</a>
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                       sequi
                                       tenetur quidem.</p>
                                   <div class="tf__single_blog_footer">
                                       <a class="read_btn" href="blog_details.html">read more <i
                                               class="far fa-long-arrow-right"></i></a>
                                       <span><i class="far fa-comments"></i> 120</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                           <div class="tf__single_blog">
                               <div class="tf__single_blog_img">
                                   <img src="{{ asset('frontend/images/blog_2.jpg') }}" alt="author"
                                       class="img-fluid w-100">
                               </div>
                               <div class="tf__single_blog_author">
                                   <div class="img">
                                       <img src="{{ asset('frontend/images/client_2.png') }}" alt="author"
                                           class="img-fluid w-100">
                                   </div>
                                   <div class="text">
                                       <h5>john deo</h5>
                                       <p>30 Jan 2023</p>
                                   </div>
                               </div>
                               <div class="tf__single_blog_text">
                                   <a class="category" href="#">restaurent</a>
                                   <a class="title" href="blog_details.html">Introducing Our New Summer Menu!</a>
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                       sequi
                                       tenetur quidem.</p>
                                   <div class="tf__single_blog_footer">
                                       <a class="read_btn" href="blog_details.html">read more <i
                                               class="far fa-long-arrow-right"></i></a>
                                       <span><i class="far fa-comments"></i> 120</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                           <div class="tf__single_blog">
                               <div class="tf__single_blog_img">
                                   <img src="{{ asset('frontend/images/blog_3.jpg') }}" alt="author"
                                       class="img-fluid w-100">
                               </div>
                               <div class="tf__single_blog_author">
                                   <div class="img">
                                       <img src="{{ asset('frontend/images/client_3.png') }}" alt="author"
                                           class="img-fluid w-100">
                                   </div>
                                   <div class="text">
                                       <h5>jakia taima</h5>
                                       <p>20 Apr 2023</p>
                                   </div>
                               </div>
                               <div class="tf__single_blog_text">
                                   <a class="category" href="#">resort</a>
                                   <a class="title" href="blog_details.html">Summer Water Rosé + Bubbly Rosé is Here!</a>
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                       sequi
                                       tenetur quidem.</p>
                                   <div class="tf__single_blog_footer">
                                       <a class="read_btn" href="blog_details.html">read more <i
                                               class="far fa-long-arrow-right"></i></a>
                                       <span><i class="far fa-comments"></i> 120</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                           <div class="tf__single_blog">
                               <div class="tf__single_blog_img">
                                   <img src="{{ asset('frontend/images/blog_4.jpg') }}" alt="author"
                                       class="img-fluid w-100">
                               </div>
                               <div class="tf__single_blog_author">
                                   <div class="img">
                                       <img src="{{ asset('frontend/images/client_1.png') }}" alt="author"
                                           class="img-fluid w-100">
                                   </div>
                                   <div class="text">
                                       <h5>israt sultana</h5>
                                       <p>21 Mar 2023</p>
                                   </div>
                               </div>
                               <div class="tf__single_blog_text">
                                   <a class="category" href="#">party</a>
                                   <a class="title" href="blog_details.html">Tender fried baby squid with a salt,
                                       pepper</a>
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                       sequi
                                       tenetur quidem.</p>
                                   <div class="tf__single_blog_footer">
                                       <a class="read_btn" href="blog_details.html">read more <i
                                               class="far fa-long-arrow-right"></i></a>
                                       <span><i class="far fa-comments"></i> 120</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!--=============================
            BLOG END
        ==============================-->
       @endsection
