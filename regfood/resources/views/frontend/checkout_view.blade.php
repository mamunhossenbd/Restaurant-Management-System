@extends('frontend.layouts.main')
@section('main-content')
    <!--=============================
            MENU END
        ==============================-->

    <!--=============================
            BREADCRUMB START
        ==============================-->
    <section class="tf__breadcrumb" style=" background: url('{{ asset('frontend/images/counter_bg.jpg') }}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="tf__breadcrumb_text">
                    <h1>checkout</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
            BREADCRUMB END
        ==============================-->


    <!--============================
            CHECK OUT PAGE START
        ==============================-->
    <section class="tf__cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-wow-duration="1s">
                    <div class="tf__checkout_form">
                        <div class="tf__check_form">
                            <h5>CHECKOUT</h5>
                            <form action="{{url('/order_conform')}}" method="post">
                                @csrf
                                <div class="row mt_30">
                                    <div class="col-12">
                                        <h5>Customer Address</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <Label>First Name</Label>
                                            <input type="text" placeholder="First Name" name="first_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <Label>Last Name</Label>
                                        <div class="tf__check_single_form">
                                            <input type="text" placeholder="Last Name"name="last_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <Label>Email</Label>
                                            <input type="text" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <label for="inputPassword4">Phone</label>
                                        <div class="input-group">
                                            <span class="input-group-text phone" id="form-label">+88</span>
                                            <input type="text" maxlength="11" value="" pattern="\d{11}" name="phone" class="form-control " placeholder="YOUR MOBILE NUMBER" aria-label="phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <label for="inputAddress2">District</label>
                                            <select class="select_js" name="district" required>
                                                <option value="">select district</option>
                                                <option value="dhaka">Dhaka</option>
                                                <option value="gazipur">Gazipur</option>
                                                <option value="kishoreganj">Kishoreganj</option>
                                                <option value="manikganj">Manikganj</option>
                                                <option value="munshiganj">Munshiganj</option>
                                                <option value="narayanganj">Narayanganj</option>
                                                <option value="narsingdi">Narsingdi</option>
                                                <option value="tangail">Tangail</option>
                                                <option value="faridpur">Faridpur</option>
                                                <option value="gopalganj">Gopalganj</option>
                                                <option value="Madaripur">Madaripur</option>
                                                <option value="rajbari">Rajbari</option>
                                                <option value="shariatpur">Shariatpur</option>
                                                <option value="chittagong">Chittagong</option>
                                                <option value="noakhali">Noakhali</option>
                                                <option value="feni">Feni</option>
                                                <option value="brahmanbaria">Brahmanbaria</option>
                                                <option value="comilla">Comilla</option>
                                                <option value="chandpur">Chandpur</option>
                                                <option value="lakshmipur">Lakshmipur</option>
                                                <option value="khagrachhari">Khagrachhari</option>
                                                <option value="rangamati">Rangamati</option>
                                                <option value="bandarban">Bandarban</option>
                                                <option value="coxbazar">Cox&#039;s Bazar</option>
                                                <option value="bagerhat">Bagerhat</option>
                                                <option value="chuadanga">Chuadanga</option>
                                                <option value="jessore">Jessore</option>
                                                <option value="jhenaidah">Jhenaidah</option>
                                                <option value="khulna">Khulna</option>
                                                <option value="kushtia">Kushtia</option>
                                                <option value="magura">Magura</option>
                                                <option value="meherpur">Meherpur</option>
                                                <option value="narail">Narail</option>
                                                <option value="satkhira">Satkhira</option>
                                                <option value="habiganj">Habiganj</option>
                                                <option value="moulvibazar">Moulvibazar</option>
                                                <option value="sunamganj">Sunamganj</option>
                                                <option value="sylhet">Sylhet</option>
                                                <option value="mymensingh">Mymensingh</option>
                                                <option value="netrokona">Netrokona</option>
                                                <option value="jamalpur">Jamalpur</option>
                                                <option value="sherpur">Sherpur</option>
                                                <option value="rajshahi">Rajshahi</option>
                                                <option value="natore">Natore</option>
                                                <option value="naogaon">Naogaon</option>
                                                <option value="sirajganj">Sirajganj</option>
                                                <option value="pabna">Pabna</option>
                                                <option value="bogura">Bogura</option>
                                                <option value="chapainawabganj">Chapainawabganj</option>
                                                <option value="joypurhat">Joypurhat</option>
                                                <option value="barisal">Barisal</option>
                                                <option value="barguna">Barguna</option>
                                                <option value="bhola">Bhola</option>
                                                <option value="jhalokati">Jhalokati</option>
                                                <option value="patuakhali">Patuakhali</option>
                                                <option value="pirojpur">Pirojpur</option>
                                                <option value="rangpur">Rangpur</option>
                                                <option value="dinajpur">Dinajpur</option>
                                                <option value="kurigram">Kurigram</option>
                                                <option value="nilphamari">Nilphamari</option>
                                                <option value="gaibandha">Gaibandha</option>
                                                <option value="thakurgaon">Thakurgaon</option>
                                                <option value="panchagarh">Panchagarh</option>
                                                <option value="lalmonirhat">Lalmonirhat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <label for="inputCity">City/THANA</label>
                                            <input type="text" placeholder="Street Address *" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <Label>Home Address</Label>
                                            <input type="text" placeholder="Apartment, suite, unit, etc. "name="apartment" required >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <Label>Zip Code</Label>
                                            <input type="text" placeholder="Zip *" name="zip" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="tf__check_single_form mt_30 mb-0">
                                            <h5>Additional Information</h5>
                                            <textarea cols="3" rows="4" placeholder="Notes about your order, e.g. special notes for delivery" name="aditional_information" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="sticky_sidebar" class="tf__cart_list_footer_button">
                                    <div class="tf__cart_list_footer_button_text">
                                        {{-- <h6>total cart (02)</h6> --}}
                                        {{-- <p>subtotal: <span>$124.00</span></p>
                                        <p>discount: <span>$10.00</span></p> --}}
                                        <p class="total"><span>total:</span> <span>{{$total}}</span></p>
                                        <input type="hidden" name="total"value="{{$total}}" id="">
                                        <input type="hidden" name="user_id" value="{{$user_id}}">
                                        {{-- <a class="common_btn" href="">Order Conform</a> --}}
                                        <input type="submit" class="common_btn" value="Order Conform">
                                        
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
            CHECK OUT PAGE END
        ==============================-->


    <!--=============================
            FOOTER START
        ==============================-->
@endsection

{{-- <script type="text/javascript" src="https://www.safefood.com.bd/assets/js/jquery.com_jquery-1.9.1.js"></script>

<script type="text/javascript" src="https://www.safefood.com.bd/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.safefood.com.bd/assets/js/jquery.meanmenu.min.js"></script>
<script type="text/javascript" src="https://www.safefood.com.bd/assets/js/slick.min.js"></script>
<script type="text/javascript" src="https://www.safefood.com.bd/assets/js/plugins.js"></script>
<script type="text/javascript" src="https://www.safefood.com.bd/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
<script>
    // success msg auto hide
    $('.successMessage').fadeIn().delay(4000).fadeOut('fast');
    //get attribute product quantity
    $(document).on('click', '.getQty', function() {
        var getQty = $(this).text();
        $('.setQty').val(getQty)
        var productID = $(this).data('prod-id');
        var prodPrice = $(this).data('prod-price');
        var prodSku = $(this).data('prod-sku');
        var productAmount = getQty;
        $('.prod-price').text(prodPrice)
        $('.sku').text(prodSku)
        $.ajax({
            url: '/get/quantity/' + productID + '/' + productAmount,
            type: "GET",
            dataType: "json",
            success: function(data) {
                console.log(data.stock_qty.attribute_qty)
                if (data.stock_qty.attribute_qty == 0) {
                    $('.add-to-cart-btn').addClass('d-none')
                    $('.stock-out').text('Out of stock')
                } else {
                    $('.add-to-cart-btn').removeClass('d-none')
                    $('.stock-out').text('')
                }
            }
        });
    });
    //increase quantity cart page
    $(document).on('click', '.quan-coun .quantity-btn[data-quantity-plus]', function(e) {
        console.log('here')
        var qty = parseInt($(this).siblings(".quantity-input").val());
        var qt_max = 100
        if (qty < qt_max || !qt_max) {
            qty += 1;
            $(this).siblings(".quantity-input").val(qty);
            console.log(qty)
            var rowId = $(this).attr('data-row-id');
            var product_id = $(this).attr('data-id');
            var prodAmount = $(this).attr('data-prod-amount');
            var qty = $(this).siblings(".quantity-input").val();
            var total = 0;
            var subtotal = 0;
            $.ajax({
                url: "/cart/update/qty",
                type: "POST",
                data: {
                    _token: "lnwJgwJO7vgnVjj0QDcQ7b6Nt1pFWrtdhSE8uha7",
                    rowId: rowId,
                    product_id: product_id,
                    prodAmount: prodAmount,
                    qty: qty,
                },
                success: function(response) {
                    console.log(response.error)
                    if (response.error) {
                        $('.error_' + rowId).html("<small class='text-danger' role='alert'>" +
                            response.error + "</strong></small>");
                        $('.if_error_' + rowId).removeClass('d-none');
                    } else {
                        $('.subtotal').html(response.subtotal)
                        $('#countitem').html(response.cart_count)
                        $('.error_' + rowId).html("");
                        $('.if_error_' + rowId).addClass('d-none');
                    }
                },
            });
        }
    });
    // decrease quantity cart page
    $(document).on('click', '.quan-coun .quantity-btn[data-quantity-minus]', function(e) {
        var qty = parseInt($(this).siblings(".quantity-input").val());
        if (qty > 1) {
            qty -= 1;
            $(this).siblings(".quantity-input").val(qty);
            var rowId = $(this).attr('data-row-id');
            var product_id = $(this).attr('data-id');
            var prodAmount = $(this).attr('data-prod-amount');
            var qty = $(this).siblings(".quantity-input").val();
            var total = 0;
            var subtotal = 0;
            $.ajax({
                url: "/cart/update/qty",
                type: "POST",
                data: {
                    _token: "lnwJgwJO7vgnVjj0QDcQ7b6Nt1pFWrtdhSE8uha7",
                    rowId: rowId,
                    product_id: product_id,
                    prodAmount: prodAmount,
                    qty: qty,
                },
                success: function(response) {
                    console.log(response.error)
                    if (response.error) {
                        $('.error_' + rowId).html("<small class='text-danger' role='alert'>" +
                            response.error + "</strong></small>");
                        $('.if_error_' + rowId).removeClass('d-none');
                    } else {
                        $('.subtotal').html(response.subtotal)
                        $('#countitem').html(response.cart_count)
                        $('.error_' + rowId).html("");
                        $('.if_error_' + rowId).addClass('d-none');
                    }
                },
            });
        }
    });
    //product page increase quantity
    $(document).on('click', '.quan-coun .qty-count--add', function(e) {
        console.log('here')
        var qty = parseInt($(this).siblings(".quantity-input").val());
        var qt_max = 100
        if (qty < qt_max || !qt_max) {
            qty += 1;
            $(this).siblings(".quantity-input").val(qty);
            console.log(qty)
        }
    });

    //product page decrease quantity
    $(document).on('click', '.quan-coun .qty-count--minus', function(e) {
        var qty = parseInt($(this).siblings(".quantity-input").val());
        if (qty > 1) {
            qty -= 1;
            $(this).siblings(".quantity-input").val(qty);
        }
    });
    // add to cart
    $(document).on('click', '#add-to-cart', function() {
        $('.quantity_error').text('');
        var prodAmount = '';
        var prodID = $(this).data('prod-id');
        var quantity = $('.product-qty').val();
        var prodAmount = $('.setQty').val();
        if (prodAmount == undefined) {
            prodAmount = '';
        }
        var cartData = {
            "prodAmount": prodAmount,
            "quantity": quantity,
            "_token": "lnwJgwJO7vgnVjj0QDcQ7b6Nt1pFWrtdhSE8uha7",
        }
        $.ajax({
            url: '/cart/' + prodID,
            type: "POST",
            dataType: "json",
            data: cartData,
            success: function(response) {
                $(window).scrollTop({
                    top: 0,
                    behavior: 'smooth'
                });
                var countitem = 0;
                $('.quantity_error').text('');
                if (response.status == 'success') {
                    countitem = response.cart_count;
                    console.log(countitem)
                    $('#success').html('<div class="success"><i class="fa fa-check-circle"></i> ' +
                        response.success + '</div>').fadeIn().delay(4000).fadeOut('fast')
                    $('.countitem').text(countitem)
                } else {
                    if (response.errors) {
                        $('.quantity_error').text(response.errors);
                        if (response.errors.quantity) {
                            $('.quantity_error').text(response.errors.quantity[0]);
                        }
                    }
                }
                console.log(response)
            }
        });
    });

    // dynamic thana district
    $('.district_id').on('change', function() {
        var districtID = $(this).val();
        if (districtID) {
            $.ajax({
                url: 'get/thana/' + districtID,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    // console.log(data);
                    $('.thana_id').empty();
                    $('.thana_id').append('<option value="">--Select Thana--</option>');
                    $.each(data, function(key, value) {
                        $('.thana_id').append('<option value="' + value.id + '">' + value
                            .name + '</option>');
                    });
                }
            });
        } else {
            $('.thana_id').empty();
        }
    });
    //shipping
    $(document).ready(function() {
        $('.shipping').on('change', function() {
            var shipping = $(this).val()
            if (shipping) {
                $.ajax({
                    url: 'get/shipping/' + shipping,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        let shipCost = 0;
                        let coupon_amount = 0;
                        shipCost = data.shipping_cost
                        $('.shipping-charge .charge').text(shipCost.toFixed(2))
                        $('.shipping_cost').val(shipCost)
                        let cartSubTotal = parseFloat(data.subtotal)
                        coupon_amount = parseFloat(data.coupon_amount)
                        let total = (cartSubTotal + shipCost) - coupon_amount
                        $("#cart_total").text(total.toFixed(2))
                    }
                });
            }
        });
    });
    //place order validation
    $(document).ready(function() {
        $('#place-order').validate();
    });

    $(document).on('change keyup', '.qty-update', function() {
        var rowId = $(this).attr('data-row-id');
        var product_id = $(this).attr('data-id');
        var prodAmount = $(this).attr('data-prod-amount');
        var qty = $(this).val();
        var total = 0;
        var subtotal = 0;
        $.ajax({
            url: "/cart/update/qty",
            type: "POST",
            data: {
                _token: "lnwJgwJO7vgnVjj0QDcQ7b6Nt1pFWrtdhSE8uha7",
                rowId: rowId,
                product_id: product_id,
                prodAmount: prodAmount,
                qty: qty,
            },
            success: function(response) {
                console.log(response.error)
                if (response.error) {
                    $('.error_' + rowId).html("<small class='text-danger' role='alert'>" + response
                        .error + "</strong></small>");
                    $('.if_error_' + rowId).removeClass('d-none');
                } else {
                    $('.subtotal').html(response.subtotal)
                    $('#countitem').html(response.cart_count)
                    $('.error_' + rowId).html("");
                    $('.if_error_' + rowId).addClass('d-none');
                }
            },
        });
    });

    function cartUpdate() {
        var rowId = $(this).attr('data-row-id');
        var product_id = $(this).attr('data-id');
        var prodAmount = $(this).attr('data-prod-amount');
        var qty = $('.quantity-input').val();
        var total = 0;
        var subtotal = 0;
        $.ajax({
            url: "/cart/update/qty",
            type: "POST",
            data: {
                _token: "lnwJgwJO7vgnVjj0QDcQ7b6Nt1pFWrtdhSE8uha7",
                rowId: rowId,
                product_id: product_id,
                prodAmount: prodAmount,
                qty: qty,
            },
            success: function(response) {
                console.log(response.error)
                if (response.error) {
                    $('.error_' + rowId).html("<small class='text-danger' role='alert'>" + response.error +
                        "</strong></small>");
                } else {
                    $('.subtotal').html(response.subtotal)
                    $('#countitem').html(response.cart_count)
                    $('.error_' + rowId).html("");
                }
            },
        });
    }
    $(function() {
        $('[data-bs-toggle="tooltip"]').tooltip()
    })
</script> --}}
