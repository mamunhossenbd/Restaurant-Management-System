<section class="tf__reservation mt_100 xs_mt_70">
    <div class="container">
        <div class="tf__reservation_bg" style="background: url('{{asset('frontend/images/reservation_bg.jpg')}}');">
            <div class="row">
                <div class="col-xl-6 ms-auto">
                    <div class="tf__reservation_form wow fadeInRight" data-wow-duration="1s">
                        <h2>book a table</h2>
                        <form method="post" action="{{url('/reservation')}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tf__reservation_input_single">
                                        <label for="name">name</label>
                                        <input type="text" id="name" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tf__reservation_input_single">
                                        <label for="email">email</label>
                                        <input type="email" id="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tf__reservation_input_single">
                                        <label for="phone">phone</label>
                                        <input type="text" id="phone" placeholder="Phone"name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tf__reservation_input_single">
                                        <label for="date">select date</label>
                                        <input type="date" id="date" name="date">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tf__reservation_input_single">
                                        <label>select time</label>
                                        <input type="time" id="" name="time" placeholder="Booking Time">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tf__reservation_input_single">
                                        <label>select person</label>
                                        <input type="number" id="" name="guest" placeholder="Number of Guest">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="common_btn">confirm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>