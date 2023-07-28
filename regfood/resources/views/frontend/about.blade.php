

     @extends('frontend.layouts.main')
     @section('main-content')

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="tf__breadcrumb" style="background: url('{{asset('frontend/images/breadcrumb_bg.jpg')}}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="tf__breadcrumb_text">
                    <h1>about us</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a>about us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        ABOUT PAGE START
    ==============================-->
    <section class="tf__about_us mt_100 xs_mt_70">
        <div class="container">
            <div class="row">
            @foreach($data as $key=>$v)
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="tf__about_us_img">
                        <div class="img">
                            <img src="{{ asset('/uploads/'.$v->photo) }}" alt="about us" class="img-fluid w-100">
                        </div>
                        <h3>{{$v->experience}}<span>Years experience</span></h3>
                        <p>{{$v->details}}
                         <span>{{$v->title}}</span>
                        </p>
                    </div>
                </div>
                @endforeach

                @foreach($data1 as $key=>$v)
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="tf__section_heading mb_25">
                        <h4>About Company</h4>
                        <h2>{{$v->headline}}</h2>
                    </div>
                    <div class="tf__about_us_text">
                        <p>{{$v->details}}</p>
                        <ul>
                            <li>
                                <h4>{{$v->title}}</h4>
                                <p>{{$v->description}}</p>
                            </li>
                             <li>
                                <h4>{{$v->title}}</h4>
                                <p>{{$v->description}}</p>
                            </li>
                            <li>
                                <h4>{{$v->title}}</h4>
                                <p>{{$v->description}}</p>
                            </li> 
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="tf__mission mt_100 xs_mt_70" style="background: url('{{asset('frontend/images/mission_bg.png')}}');">
        <div class="tf__mission_overlay pt_70 xs_pt_40 pb_100 xs_pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-10 col-lg-7">
                        <div class="tf__mission_text">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-bullseye-arrow"></i>
                                    </div>
                                    <div class="text">
                                        <h4>vision</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis
                                            perspiciatis voluptatum odit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-lightbulb-on"></i>
                                    </div>
                                    <div class="text">
                                        <h4>mission</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis
                                            perspiciatis voluptatum odit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-gem"></i>
                                    </div>
                                    <div class="text">
                                        <h4>goals</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis
                                            perspiciatis voluptatum odit.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf__about_choose mt_100 xs_mt_70">
        <div class="container">
            @foreach($data2 as $key=>$v)
            <div class="row">
                <div class="col-xxl-8 col-lg-7 wow fadeInLeft" data-wow-duration="1s">
                    <div class="tf__section_heading mb_25">
                        <h4>Why choose us</h4>
                        <h2>{{$v->title}}</h2> 
                    </div>
                    <div class="tf__about_choose_text">
                        <p>{{$v->details}}</p>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="{{$v->icon}}"></i></span>
                                    <h4>{{$v->headline}}</h4>
                                    <p>{{$v->description}}</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="fal fa-truck"></i></span>
                                    <h4>{{$v->headline}}</h4>
                                    <p>{{$v->description}}</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="fas fa-file-certificate"></i></span>
                                    <h4>{{$v->headline}}</h4>
                                    <p>{{$v->description}}.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="fas fa-headset"></i></span>
                                    <h4>{{$v->headline}}</h4>
                                    <p>{{$v->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5 wow fadeInRight" data-wow-duration="1s">
                    <div class="tf__about_choose_img">
                        <img src="{{ asset('/uploads/'.$v->photo) }}" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </section>

    <section class="tf__counter mt_100 xs_mt_70" style="background: url('{{asset('frontend/images/counter_bg.jpg')}}');">
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

    <section class="tf__testimonial pt_95 xs_pt_65 mb_100 xs_mb_70">
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
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="{{asset('frontend/images/testimonial_img_2.jpg')}}" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>isita islam</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusamus
                                praesentium quaerat nihil magnam a porro eaque numquam</p>
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
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="{{asset('frontend/images/testimonial_img_3.jpg')}}" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>isita islam</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusamus
                                praesentium quaerat nihil magnam a porro eaque numquam</p>
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
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="{{asset('frontend/images/testimonial_img_1.jpg')}}" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>isita islam</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusamus
                                praesentium quaerat nihil magnam a porro eaque numquam</p>
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
            </div>
        </div>
    </section>
    <!--=============================
        ABOUT PAGE END
    ==============================-->
    @endsection


    