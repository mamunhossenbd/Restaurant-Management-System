



     @extends('frontend.layouts.main')
     @section('main-content')
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="tf__breadcrumb" style="background: url('{{asset('frontend/images/breadcrumb_bg.jpg')}}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="tf__breadcrumb_text">
                    <h1>Latest news Blogs</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">blogs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        BLOG PAGE START
    ==============================-->
    <section class="tf__blog_page mt_75 xs_mt_45 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
            @foreach($pelam as $key=>$v)
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_blog">
                         <div class="tf__single_blog_img">
                            <img src="{{ asset('/uploads/'.$v->photo) }}" alt="author" class="img-fluid w-100">
                        </div> 
                         <div class="tf__single_blog_author">
                            <div class="img">
                                <img src="{{ asset('/uploads/'.$v->bloger_photo) }}" alt="author" class="img-fluid w-100">
                            </div> 
                            <div class="text">
                                <h5>{{$v->bloger_name}}</h5>
                                <p>{{$v->date}}</p>
                            </div>
                        </div>
                        <div class="tf__single_blog_text">
                            <a class="category" href="#">{{$v->name}}</a>
                            <a class="title" href="blog_details.html">{{$v->title}}</a>
                            <p>{{$v->details}}</p>
                            <div class="tf__single_blog_footer">
                                <a class="read_btn" href="blog_details.html">read more <i
                                        class="far fa-long-arrow-right"></i></a>
                                <span><i class="{{$v->like}}"></i> 120</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_blog">
                        <div class="tf__single_blog_img">
                            <img src="{{asset('frontend/images/blog_2.jpg')}}" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_blog_author">
                            <div class="img">
                                <img src="{{asset('frontend/images/client_2.png')}}" alt="author" class="img-fluid w-100">
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
                </div> -->
                <!-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_blog">
                        <div class="tf__single_blog_img">
                            <img src="{{asset('frontend/images/blog_3.jpg')}}" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_blog_author">
                            <div class="img">
                                <img src="{{asset('frontend/images/client_3.png')}}" alt="author" class="img-fluid w-100">
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
                </div> -->
                <!-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_blog">
                        <div class="tf__single_blog_img">
                            <img src="{{asset('frontend/images/blog_4.jpg')}}" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_blog_author">
                            <div class="img">
                                <img src="{{asset('frontend/images/client_1.png')}}" alt="author" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h5>israt sultana</h5>
                                <p>21 Mar 2023</p>
                            </div>
                        </div>
                        <div class="tf__single_blog_text">
                            <a class="category" href="#">party</a>
                            <a class="title" href="blog_details.html">Tender fried baby squid with a salt, pepper</a>
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
                </div> -->
                <!-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_blog">
                        <div class="tf__single_blog_img">
                            <img src="{{asset('frontend/images/blog_5.jpg')}}" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_blog_author">
                            <div class="img">
                                <img src="{{asset('frontend/images/client_4.png')}}" alt="author" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h5>jakia taima</h5>
                                <p>20 Apr 2023</p>
                            </div>
                        </div>
                        <div class="tf__single_blog_text">
                            <a class="category" href="#">resort</a>
                            <a class="title" href="blog_details.html">Eclectic and imaginative menu in the
                                restaurant</a>
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
                </div> -->
                <!-- <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_blog">
                        <div class="tf__single_blog_img">
                            <img src="{{asset('frontend/images/blog_1.jpg')}}" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_blog_author">
                            <div class="img">
                                <img src="{{asset('frontend/images/client_1.png')}}" alt="author" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h5>israt sultana</h5>
                                <p>21 Mar 2023</p>
                            </div>
                        </div>
                        <div class="tf__single_blog_text">
                            <a class="category" href="#">party</a>
                            <a class="title" href="blog_details.html">Flowers, candles and menu cards are provided</a>
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
                </div> -->
            </div>
            <div class="tf__pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BLOG PAGE END
    ==============================-->
    @endsection


    