<!DOCTYPE html>
<html>


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Doctors Appointment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/materialize.min.css')}}" />
        <link rel="stylesheet" href="{{URL::to('css/icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/responsive.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/color.css')}}" />

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/revolution/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/revolution/navigation.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">

        <script src="{{URL::to('js/jquery.min.js')}}" type="text/javascript"></script> 

    </head>
    <body>
        <div class="theme-layout">


            <div class="pageloader">
                <div class="loader">
                    <div class="loader-inner ball-scale-ripple-multiple">
                        <!--                            <div></div>
                                                    <div></div>
                                                    <div></div>-->
                    </div>
                </div>	
            </div><!-- Pageloader -->


            @yield('header')
            <!-- Responsive Header -->



            @yield('content')

            @yield('top_footer')<!-- Footer -->

            @yield('footer')



        </div>	





        <div class="popup">
            <div class="popup-container">



                <div class="popup-wrapper">
                    <span class="close-all-popup"><i class="fa fa-close"></i></span>
                    <div class="has-popup-content popup1">
                        <div class="consultaion-popup">
                            <div class="consult-contact">
                                <i class="icon-telephone"></i>
                                <p>Please be patient while waiting for response.<strong>(24/7 Support!)</strong> Phone General Inquiries:</p>
                                <strong>+1 (022) 319 2687</strong>
                            </div>

                            <div class="appointment-form">
                                <div class="creative-title">
                                    <i>Provide Comprehensive Quality Care</i>
                                    <h4>Get Free Consulations</h4>
                                    <span>Questions Or Inquiries</span>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" placeholder="Complete Name" />
                                        </div>							
                                        <div class="input-field col s12">
                                            <input type="email" placeholder="Email Address" />
                                        </div>							
                                        <div class="input-field col s12">
                                            <input type="text" placeholder="Subject" />
                                        </div>	
                                        <div class="input-field col s12">
                                            <textarea placeholder="Description"></textarea>
                                        </div>
                                        <div class="input-field col s12">
                                            <button type="submit"><i class="fa fa-user-md"></i> Contact Us Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- Consultation Popup -->
                    </div>

                    <div class="has-popup-content popup11">
                        <div class="consultaion-popup">
                            <div class="consult-contact">
                                <i class="icon-telephone"></i>
                                <p>Please be patient while waiting for response.<strong>(24/7 Support!)</strong> Phone General Inquiries:</p>
                                <strong>+1 (022) 319 2687</strong>
                            </div>
                            <?php
                            header('Content-Type: text/html; charset=UTF-8');
                            $country_info = DB::table('tbl_country')
                                    ->get();
                            ?>
                            <div class="appointment-form">
                                <div class="creative-title">
                                    <i>Provide Comprehensive Quality Care</i>
                                    <h4>Get Free Consulations</h4>
                                    <span>Hospital Search</span>
                                </div>
                                {!! Form::open(array('url' => '/All-Hospital-search'  , 'files'=>'true','method'=>'get' )) !!}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select  id="country" name="country_id" onchange="selectCity(this.value)">
                                            <option selected value="">Select Country</option>
                                            <?php
                                            foreach ($country_info as $value_country) {
                                                ?>
                                                <option value="{{$value_country->country_id}}">{{$value_country->country_name}}</option>
                                            <?php } ?>
                                        </select>
                                    </div>							
                                    <div class="input-field col s12">
                                        <select name="city" id="city" >
                                            <option  selected value="">Select City</option>

                                        </select>
                                    </div>														
                                    <!--                                        <div class="input-field col s12">
                                                                                <select name="hospital" id="hospital">
                                                                                    <option value="" disabled selected>Select Hospital</option>
                                                                                    
                                                                                </select>
                                                                            </div>	-->

                                    <div class="input-field col s12">
                                        <button type="submit" ><i class="fa fa-user-md"></i> Search</button>
                                    </div>

                                </div>
                                {!! Form::close() !!} 
                            </div>
                        </div><!-- Consultation Popup -->
                    </div>

                    <div class="has-popup-content popup12">
                        <div class="consultaion-popup">
                            <div class="consult-contact">
                                <i class="icon-telephone"></i>
                                <p>Please be patient while waiting for response.<strong>(24/7 Support!)</strong> Phone General Inquiries:</p>
                                <strong>+1 (022) 319 2687</strong>
                            </div>

                            <div class="appointment-form">
                                <div class="creative-title">
                                    <i>Provide Comprehensive Quality Care</i>
                                    <h4>Get Free Consulations</h4>
                                    <span>Diagnostic center Search</span>
                                </div>
                                {!! Form::open(array('url' => '/All-Center-search' , 'method'=>'get' , 'files'=>'true' )) !!}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select id="country1" name="country_id1" onchange="selectCity(this.value)">
                                            <option value="" disabled selected>Select District</option>
                                            <?php
                                            foreach ($country_info as $value_country) {
                                                ?>
                                                <option value="{{$value_country->country_id}}">{{$value_country->country_name}}</option>
                                            <?php } ?> 
                                        </select>
                                    </div>							
                                    <div class="input-field col s12">
                                        <select name="city1" id="city1">
                                            <option selected value="">Select City</option>

                                        </select>
                                    </div>
                                    <!--                                        <div class="input-field col s12">
                                                                                <select>
                                                                                    <option value="" disabled selected>Select Diagnostic Center</option>
                                                                                    <option value="1">Option 1</option>
                                                                                    <option value="2">Option 2</option>
                                                                                    <option value="3">Option 3</option>
                                                                                </select>
                                                                            </div>-->

                                    <div class="input-field col s12">
                                        <button type="submit"><i class="fa fa-user-md"></i> Search</button>
                                    </div>

                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div><!-- Consultation Popup -->
                    </div>
                    <div class="has-popup-content popup13">
                        <div class="consultaion-popup">
                            <div class="consult-contact">
                                <i class="icon-telephone"></i>
                                <p>Please be patient while waiting for response.<strong>(24/7 Support!)</strong> Phone General Inquiries:</p>
                                <strong>+1 (022) 319 2687</strong>
                            </div>

                            <div class="appointment-form">
                                <div class="creative-title">
                                    <i>Provide Comprehensive Quality Care</i>
                                    <h4>Get Free Consulations</h4>
                                    <span>Specialist Search </span>
                                </div>
                                {!! Form::open(array('url' => '/All-Specialist-search' , 'method'=>'get' , 'files'=>'true' )) !!}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select id="country2" name="country_id2" onchange="selectCity(this.value)">
                                            <option value="" disabled selected>Select Country</option>
                                            <?php
                                            foreach ($country_info as $value_country) {
                                                ?>
                                                <option value="{{$value_country->country_id}}">{{$value_country->country_name}}</option>
                                            <?php } ?> 
                                        </select>
                                    </div>							
                                    <div class="input-field col s12">
                                        <select name="city2" id="city2">
                                            <option selected value="">Select City</option>

                                        </select>
                                    </div>
                                    <div class="input-field col s12">
                                        <select id="hospital1" class="hospital" name="hospital1">
                                            <option value=""  selected>Select Hospital</option>

                                        </select>
                                    </div>
                                     <?php
                           
                            $speciality_info = DB::table('doctors_speciality')
                                    ->get();
                            ?>
                                    <div class="input-field col s12">
                                        <select id="specialist" class="hospital" name="specialist">
                                            <option value=""  selected>Select Specialist</option>
                                             <?php
                                            foreach ($speciality_info as $value_country) {
                                                ?>
                                                <option value="{{$value_country->id}}">{{$value_country->speciality}}</option>
                                            <?php } ?>
                                        </select>
                                    </div>	

                                    <div class="input-field col s12">
                                        <button type="submit"><i class="fa fa-user-md"></i> Search</button>
                                    </div>

                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div> 
                    </div>

                    <div class="has-popup-content popup2">
                        <div class="appointment-popup">
                            <div class="appointment-tab style2">
                                <div class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="appointment-details">
                                            <span>Provide Comprehensive</span>
                                            <h4>Make An <span>Appointment</span></h4>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam adipiscing elit orem.</p>
                                            <h5 class="subtitle">OPENING HOURS</h5>
                                            <div class="opening">
                                                <div class="timing"><span>Monday- Friday</span><i>8am to 7pm</i></div>
                                                <div class="timing"><span>Saturday</span><i>10am to 4pm</i></div>
                                                <div class="timing"><span>Sunday</span><i>Closed</i></div>
                                            </div>												
                                        </div><!-- Appointment Details -->
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="appointment-form">
                                            <form>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Your Country</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                        </select>
                                                    </div>							
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Choose Service</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                        </select>
                                                    </div>							
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Doctor</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                        </select>
                                                    </div>	
                                                    <div class="input-field simple-label col s12 l6 m6">
                                                        <label>DATE FROM *</label>
                                                    </div>
                                                    <div class="input-field date-icon col s12 l6 m6">
                                                        <input type="date" class="datepicker" placeholder="Choose Date" />
                                                    </div>
                                                    <div class="input-field simple-label col s12 l6 m6">
                                                        <label>DESIRABLE TIME *</label>
                                                    </div>
                                                    <div class="input-field col s12 l6 m6">
                                                        <select>
                                                            <option value="" disabled selected>Select Time</option>
                                                            <option value="1">01:00 AM</option>
                                                            <option value="2">05:00 PM</option>
                                                            <option value="3">09:00 PM</option>
                                                        </select>
                                                    </div>																		
                                                    <div class="col s12">
                                                        <p>All Fields With An ( * ) Are Required.</p>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <button type="submit"><i class="fa fa-recycle"></i> Check Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Appointment Popup -->
                    </div>

                    <div class="has-popup-content popup3">
                        <div class="gift-popup">
                            <div class="send-gift">
                                <div class="mockup"><img src="images/mockup3.png" alt="" /></div>
                                <div class="gift-popup-text">
                                    <i>Provide Comprehensive Quality Care</i>
                                    <h3>Send Your Gift</h3>
                                    <span>Care Health</span>
                                    <p>Suspendisse metus blandit sed dolor quis, comiodo commodo elit mollis ligula eget.</p>
                                    <div class="facny-btn-set">
                                        <a class="color1" href="#" title="">
                                            <i class="fancy-icon icon-telephone"></i>
                                            <strong>(021) 987-234-56</strong>
                                            <i>Call Us Everyday</i>
                                        </a>
                                        <a class="color2" href="#" title="">
                                            <i class="fancy-icon icon-doctor"></i>
                                            <strong>Ask Us To Collect</strong>
                                            <i>Call Us Everyday</i>
                                        </a>
                                        <a class="color3" href="#" title="">
                                            <i class="fancy-icon icon-home"></i>
                                            <span>3200 Barbaros Bulvarı Istanbul</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Gift Popup -->
                    </div>

                    <div class="has-popup-content popup4">
                        <div class="event-registration">
                            <div class="event-popup-top">
                                <div class="event-popup-title">
                                    <i>whats going on there come and learn</i>
                                    <h3>about event <span>Registration</span></h3>
                                </div>
                                <div class="event-info">
                                    <div class="event-cell half"><i class="fa fa-key"></i>245 Tickets</div>
                                    <div class="event-cell half"><i class="fa fa-key"></i>Jan 17-19, 2015</div>
                                    <div class="event-cell"><i class="fa fa-key"></i>3200 Barbaros Bulvarı Besiktas/Istanbul, TR</div>
                                </div>
                            </div>

                            <div class="appointment-form center">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12 m12 l4">	
                                            <input type="text" placeholder="Complete Name" />
                                        </div>					
                                        <div class="input-field col s12 m12 l4">	
                                            <input type="email" placeholder="Email Address" />
                                        </div>					
                                        <div class="input-field col s12 m12 l4">	
                                            <input type="text" placeholder="Phone Number" />
                                        </div>					
                                        <div class="input-field col s12">
                                            <button type="submit"><i class="fa fa-paper-plane"></i> Register Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    
<div class="has-popup-content popup1212">
        <?php  $doctor_id_for_app=Session::get('doctor_id_for_app'); ?>
                        <div class="event-registration">
                            <div class="event-popup-top">
                                <h5 style="text-align: center">Please Login For Appointment</h5>                               
                            </div>

                            <div class="appointment-form center">
                               {!! Form::open(array('url' => '/patientlogin' , 'method'=>'post'  )) !!}
                                    <div class="row">
                                        <div class="input-field col s12 m12 l8" style="margin-left: 20%">	
                                            <input type="text" placeholder="Username" name="username" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                             <input type="hidden" name="doctor_id" value="{{ $doctor_id_for_app }}">
                                        </div>					
                                        					
                                        <div class="input-field col s12 m12 l8" style="margin-left: 20%">	
                                            <input type="password" name="password" placeholder="Password" />
                                        </div>					
                                        <div class="input-field col s12">
                                            <button type="submit" name="submit"><i class="fa fa-paper-plane"></i> Login</button>
                                        </div>
                                    </div>
                               {!! Form::close() !!} 
                            </div>
                        </div>
                    </div>	

                    <div class="has-popup-content popup5">
                        <div class="cash-popup">
                            <div class="cash-popup-inner">
                                <span>Provide Comprehensive Quality Care</span>
                                <h4>Send Us Cash Gift <span>Care Health</span></h4>
                                <p>Suspendisse metus blandit sed dolor quis, comiodo <br/> commodo elit mollis ligula eget.</p>
                                <form>
                                    <div class="row">
                                        <div class="col s12 m12 offset-l3 l6 ">
                                            <select>
                                                <option>Select Your Currency</option>
                                                <option>Currency 1</option>
                                                <option>Currency 2</option>
                                                <option>Currency 3</option>
                                                <option>Currency 4</option>
                                                <option>Currency 5</option>
                                            </select>
                                        </div>
                                        <div class="select-donate-price">
                                            <strong>How much would you like to Donate?</strong>
                                            <span class="button-set">
                                                <a href="#" title="">$10.00</a>
                                                <a class="active" href="#" title="">$50.00</a>
                                                <a href="#" title="">$100.00</a>
                                                <a href="#" title="">$500.00</a>
                                            </span>
                                            <span class="other-amount">
                                                <textarea placeholder="Enter The Amout You Want"></textarea>
                                            </span>
                                        </div><!-- Select Donate Price -->
                                        <div class="select-type">
                                            <strong>Select Your Payment Type</strong>
                                            <span class="button-set">
                                                <a href="#" title="">Reccurring</a>
                                                <a class="active" href="#" title="">One Time Payment</a>
                                            </span>
                                        </div><!-- Select Type -->
                                        <div class="select-option">
                                            <strong>Select Your Payment Option</strong>
                                            <span class="button-set">
                                                <a href="#" title="">Credit Card</a>
                                                <a class="active" href="#" title=""> Banking Transfer</a>
                                                <a href="#" title="">Paypal</a>
                                            </span>
                                            <p>In Case of credit card ,Transaction in Doller($) will be accepted.</p>
                                            <div class="row">
                                                <div class="col s12 m12 offset-l3 l6">
                                                    <input type="text" placeholder="Enter your 16 digit card number:" />
                                                </div>
                                                <div class="col s12 m12 offset-l3 l6">
                                                    <select>
                                                        <option>Month Of Expiry</option>
                                                        <option>Januray</option>
                                                        <option>Feburary</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                    </select>
                                                </div>
                                                <div class="col s12 m12 offset-l3 l6">
                                                    <select>
                                                        <option>Month Of Expiry</option>
                                                        <option>Januray</option>
                                                        <option>Feburary</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                    </select>
                                                </div>
                                                <div class="col s12 m12 offset-l3 l6">
                                                    <input type="text" placeholder="Card Verification Number" />
                                                </div>
                                            </div>
                                        </div><!-- Select Type -->
                                        <div class="personal-detail">
                                            <strong>Personal Detail</strong>
                                            <div class="row">
                                                <div class="col s12 m12 l6">
                                                    <input type="text" placeholder="First Name" />
                                                </div>
                                                <div class="col s12 m12 l6">
                                                    <input type="text" placeholder="Last Name" />
                                                </div>
                                                <div class="col s12 m12 l6">
                                                    <input type="email" placeholder="Email Ids" />
                                                </div>
                                                <div class="col s12 m12 l6">
                                                    <input type="text" placeholder="Phone Number" />
                                                </div>
                                                <div class="col s12 m12 l12">
                                                    <input type="text" placeholder="Address" />
                                                </div>
                                                <div class="col s12 m12 l12">
                                                    <textarea placeholder="Detail"></textarea>
                                                </div>
                                                <div class="col s12 m12 l12">
                                                    <button class="dark-btn">Donate Now</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- Cash Popup -->
                    </div>		
                </div>
            </div>
        </div><!-- Popup -->



        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{URL::to('js/revolution/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->	
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/revolution/revolution.initialize2.js')}}"></script>

        <script  type="text/javascript" src="{{URL::to('js/materialize.min.js')}}"></script>
        <script src="{{URL::to('js/enscroll-0.5.2.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('js/jquery.poptrox.min.js')}}"></script>
        <script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
        <script src="{{URL::to('js/smoothscroll.js')}}"></script>
        <script src="{{URL::to('js/script.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
                                            jQuery(document).ready(function () {

                                                /* ============  Carousel ================*/
                                                $('.staff-carousel').owlCarousel({
                                                    autoplay: true,
                                                    autoplayTimeout: 2500,
                                                    smartSpeed: 2000,
                                                    autoplayHoverPause: true,
                                                    loop: true,
                                                    dots: false,
                                                    nav: true,
                                                    margin: 0,
                                                    mouseDrag: true,
                                                    singleItem: true,
                                                    items: 1,
                                                    autoHeight: true
                                                });
                                                $("#test122").click(function () {
                                                    alert('clicked');
                                                });


                                            });
        </script>


<!-- <script src='js/jquery.js'></script>-->
        <script type="text/javascript" charset="utf-8">
            $(function () {
                $("#country").on('change', function () {
                    console.log($(this).val());
                    $.ajax({
                        scriptCharset: "utf-8",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        type: 'GET',
                        url: '../resources/views/pages/city.php?country_id=' + $(this).val(),
                        success: function (text) {
                            console.log(text);
                            $("#city").html(text);
                        }
                    });
                });


            });
            $(function () {
                $("#country1").on('change', function () {
                    console.log($(this).val());
                    $.ajax({
                        scriptCharset: "utf-8",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        type: 'GET',
                        url: '../resources/views/pages/city.php?country_id=' + $(this).val(),
                        success: function (text) {
                            console.log(text);
                            $("#city1").html(text);
                        }
                    });
                });


            });

            $(function () {
                $("#country2").on('change', function () {
                    console.log($(this).val());
                    $.ajax({
                        scriptCharset: "utf-8",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        type: 'GET',
                        url: '../resources/views/pages/city.php?country_id=' + $(this).val(),
                        success: function (text) {
                            console.log(text);
                            $("#city2").html(text);
                        }
                    });
                });

                $("#city2").on('change',function(){
                     console.log($(this).val());
                     $.ajax({
                         scriptCharset: "utf-8" ,
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         type: 'GET',
                         url: '../resources/views/pages/city.php?city_id='+$(this).val(),
                           success: function(text) {
                            console.log(text);
                            $("#hospital1").html(text);
                        }
                     });
                });
                
            });
        </script>
    </body>
</html>
