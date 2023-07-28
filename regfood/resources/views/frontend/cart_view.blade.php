@extends('frontend.layouts.main')
@section('main-content')
    <!--=============================
                                    MENU END
                                ==============================-->


    <!--=============================
                                    BREADCRUMB START
                                ==============================-->
    <section class="tf__breadcrumb" style="background: url('{{ asset('frontend/images/counter_bg.jpg') }}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="tf__breadcrumb_text">
                    <h1>cart view</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">cart view</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                    BREADCRUMB END
                                ==============================-->


    <!--============================
                                    CART VIEW START
                                ==============================-->
    <section class="tf__cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__cart_list">
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr align="center">
                                        <th class="tf__pro_img">
                                            Image
                                        </th>

                                        <th class="tf__pro_name">
                                            details
                                        </th>

                                        <th class="tf__pro_status">
                                            price
                                        </th>

                                        <th class="tf__pro_select">
                                            quantity
                                        </th>

                                        <th class="tf__pro_tk">
                                            Total
                                        </th>

                                        <th class="tf__pro_icon">
                                            clear all
                                        </th>
                                    </tr>
                                    @php
                                        $subtotal = 0;
                                    @endphp

                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="tf__pro_img">
                                                <img src="{{ asset('uploads/' . $item->card_data->photo) }}" alt="product"
                                                    class="img-fluid w-100">
                                            </td>

                                            <td class="tf__pro_name">
                                                <a href="#">{{ $item->card_data->title }}</a>
                                                {{-- <span>medium</span>
                                            <p>coca-cola</p>
                                            <p>7up</p> --}}
                                            </td>

                                            <td class="tf__pro_status">
                                                <h6>{{ $item->card_data->price }}</h6>
                                            </td>

                                            <td class="tf__pro_select">
                                                <div class="quentity_btn">
                                                    {{-- <button class="btn btn-danger"><i class="fal fa-minus"></i></button> --}}
                                                    <input type="text" placeholder="1" value="{{ $item->quntity }}">
                                                    {{-- <button class="btn btn-success"><i class="fal fa-plus"></i></button> --}}
                                                </div>
                                            </td>

                                            <td class="tf__pro_tk">
                                                <h6>{{ $item->card_data->price * $item->quntity }}</h6>
                                            </td>
                                            @php
                                                $subtotal += $item->card_data->price * $item->quntity;
                                            @endphp

                                            <td class="tf__pro_icon">
                                                <a href="{{ url('/remove', $item->id) }}"><i class="far fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__cart_list_footer_button mt_50">
                        <div class="row">
                            <div class="col-xl-7 col-md-6">
                                <div class="tf__cart_list_footer_button_img">
                                    <img src="{{ asset('frontend/images/cart_offer_img.jpg') }}" alt="cart offer"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="tf__cart_list_footer_button_text">
                                    <h6>total cart ({{ $count }})</h6>
                                    @if (Session::has('coupon'))
                                        <p>subtotal: <span>{{ $subtotal }}</span></p>
                                        {{-- <p>delivery: <span>00.00</span></p> --}}
                                        <p>coupon:<span>{{ session()->get('coupon.coupon_name') }}</span></p>
                                        <p>discount:<span>{{ session()->get('coupon.discount') }}({{ $discount = ($subtotal * session()->get('coupon.discount')) / 100 }})%</span>
                                        </p>
                                        <p class="total"><span>total:</span><span>{{ $subtotal - $discount }} <input
                                                    type="hidden" name="total"
                                                    id="t"></span></p>
                                    @else
                                        <p>subtotal: <span>{{ $subtotal }}</span></p>
                                        <p class="total"><span>total:</span><span>{{ $subtotal }} <input
                                                    type="hidden" name="total"
                                                    id="t"></span></p>
                                    @endif

                                    @if (Session::has('coupon'))
                                    @else
                                        <form action="{{ url('/coupon_apply') }}" metho="post">
                                            @csrf
                                            <input type="text" placeholder="Coupon Code" name="coupon_name">
                                            <button type="submit">apply</button>
                                        </form>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <input type="hidden" name="coupon_name" value="coupon_name">
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss='alert'>&times;</button>
                                            <b>{{ $message }}</b>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                        <input type="hidden" name="coupon_name" value="coupon_name">
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss='alert'>&times;</button>
                                            <b>{{ $message }}</b>
                                        </div>
                                    @endif
                                    {{-- <a class="common_btn" href="{{route('checkout_view')}}" id="total" >Checkout</a> --}}
                                    <form action="{{ url('checkout_view') }}" method="post">
                                        @csrf
                                        @if (Session::has('coupon'))
                                        <input type="text" name="total" value="{{ $subtotal - $discount }}"readonly="readonly" >
                                        {{-- <input type="hidden" value="{{$item->id}}" name="cart_id"> --}}
                                        @else
                                        <input type="text" name="total" value="{{ $subtotal }}" readonly="readonly" >
                                        @endif
                                        <input type="hidden" value="{{$item->user_id}}" name="user_id">
                                        <button type="submit" class="common_btn">Check Out</button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data-form').submit(function(e) {
                e.preventDefault();

                var data = $('#data-input').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('process.data') }}',
                    data: {
                        data: data,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                           console.log(data);
                        // $("#menuItems").html(data);
                    }

                });
            });
        });
    </script> --}}
    <!--============================
                                    CART VIEW END
                                ==============================-->


    <!--=============================
                                    FOOTER START
                                ==============================-->
@endsection
