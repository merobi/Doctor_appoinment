
@extends('master')
@section('content')
<div class="pagetop">
    <div class="container">		
        <ul>
            <h1>Registration form (only for doctors)</h1>
            <p> Please enter your personal information in the required fields</p>
        </ul>
    </div>
</div>



<section>
    <div class="block gray">
        <div class="container">
            <div class="row">
                <div class="col column  s12 m12 " style="border:1px solid #9E449B">
                    <div class="contact-form">

                        <h5 style="color:red">
                                            <?php
                                                $exception=Session::get('exception');
                                                if($exception)
                                                {
                                                    echo $exception;
                                                    Session::put('exception','');
                                                }
                                            
                                            ?>
                                        </h5>
                                        <h5 style="color:green">
                                            <?php
                                                $message=Session::get('message');
                                                if($message)
                                                {
                                                    echo $message;
                                                    Session::put('message','');
                                                }
                                            
                                            ?>
                                        </h5>
                        <div id="formresult"></div>

                        {!! Form::open(array('url' => '/Doctor-info-save' , 'method'=>'post' , 'files'=>'true' )) !!}

                        <div class="row" style="padding:10px">
                            <h6>Personal Information</h6>
                            <div class="input-field col s12 m12">

                                <div class="input-field col s12 m2">
                                    <span>Title <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <select name="title" required="">										
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                    </select>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>First Name <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="firstname"  type="text" required=""/>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <span> </span>
                                </div>
                            </div>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Birthday<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="birthday"  type="text" placeholder="yy-mm-dd" required=""/>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>Last Name<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="lastname"  type="text" required=""/>
                                    <span> </span>
                                </div>

                            </div>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Email<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="email"  type="email" required=""/>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>Phone<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="phone_no"  type="text" required=""/>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m2">
                                    <span>Blood Group<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <select name="bloodgroup" required="">
                                        <option value="0" selected="">--Select Blood group--</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                    <span> </span>
                                </div>

                                <div class="input-field col s12 m3">
                                    <span>Registration No<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="regi_no"  type="text" required=""/>
                                    <span> </span>
                                </div>

                                <div class="input-field col s12 m2">
                                    <span>Address<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="address"  type="text" required=""/>
                                    <span> </span>
                                </div>

                                <div class="input-field col s12 m3">
                                    <span>Image<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="image"  type="file" required="" />
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m12">
<?php
$country_info = DB::table('tbl_country')
        ->get();
$city_info = DB::table('tbl_city')
        ->get();
?>
                                    <div class="input-field col s12 m2">
                                        <span>Country<b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <select name="country_id2" required="">
                                            <option value="" disabled selected>Select country</option>
<?php
foreach ($country_info as $value_info) {
    ?>
                                                <option value="{{$value_info->country_id}}">{{$value_info->country_name}}</option>
                                            <?php } ?>
                                        </select>
                                        <span> </span>
                                    </div>

                                    <div class="input-field col s12 m3">
                                        <span>City<b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <select name="city_id" required="">
                                            <option value="" disabled selected>Select city</option>
<?php
foreach ($city_info as $value_info) {
    ?>
                                                <option value="{{$value_info->city_id}}">{{$value_info->city_name}}</option>
                                            <?php } ?>
                                        </select>
                                        <span> </span>
                                    </div>
                                </div>

                                <div class="input-field col s12 m2">
                                    <span>Post Code<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="post_code"  type="text" required=""/>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>About Me<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="about_me"  type="text" required=""/>
                                    <span> </span>
                                </div>
<?php
$hospital_info = DB::table('institute_info')
        ->get();
?>
                                <div class="input-field col s12 m2">
                                    <span>Hospital <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <select name="hospital_id" required="">
                                        <option value="" disabled selected>Select hospital</option>
<?php
foreach ($hospital_info as $value_info) {
    ?>
                                            <option value="{{$value_info->id}}">{{$value_info->name}}</option>
                                        <?php } ?>
                                    </select>

                                </div>

                            </div>        



                        </div>

                        <div class="row" style="padding:10px">	
                            <h6 style="margin-top:50px">Degree And Speciality</h6>
                            <div id="p_scents">
                                <div class="form-group" >
                                    <div class="input-field col s12 m12">
                                        <div class="input-field col s12 m2">
                                            <span>Degree <b style="color:red"> * </b> </span>
                                        </div>
                                        <div class="input-field col s12 m3">
                                            <select name="degree" required="">
                                                <option value="" disabled selected>Select Doctor</option>
                                                <option value="mbbs">MBBS</option>
                                                <option value="fcfrs">FCFRS</option>
                                            </select>

                                        </div>
                                        <div class="input-field col s12 m3">
                                            <span>Institution<b style="color:red"> * </b> </span>
                                        </div>
                                        <div class="input-field col s12 m3">
                                            <input name="institution"  type="text" required=""/>
                                            <span> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            <div id="p_media2">
                                <a style="float: right;margin-top:0px;"href="#" class="btn btn-primary" id="addScnt1">Add<i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </div>-->

                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Speciality<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="speciality"  type="text" required=""/>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>Sub-Speciality<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="subspeciality"  type="text" required=""/>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span> </span>
                                </div>

                            </div>



                        </div>

                        <div class="row" style="padding:10px">	
                            <h6 style="margin-top:50px">Camber Details</h6>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Name <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m9">
                                    <input name="c_name"  type="text" required=""/>
                                    <span> </span>
                                </div>									
                            </div>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Address <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m9">
                                    <input name="c_address"  type="text" required=""/>
                                    <span> </span>
                                </div>									
                            </div>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>  </span>
                                </div>
                                <div class="input-field col s12 m9">
                                    <input name="name"  type="text"/>
                                    <span> </span>
                                </div>									
                            </div>
                            <div class="input-field col s12 m2">
                                <span>Country <b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <select name="country_name" required="">
                                    <option value="" disabled selected>Select country</option>
<?php
foreach ($country_info as $value_info) {
    ?>
                                        <option value="{{$value_info->country_name}}">{{$value_info->country_name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>City <b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <select name="c_city" required="">
                                    <option value="" disabled selected>Select City</option>
<?php
foreach ($city_info as $value_info) {
    ?>
                                        <option value="{{$value_info->city_name}}">{{$value_info->city_name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-field col s12 m12">
                                
                                <div class="input-field col s12 m2">
                                    <span>Date<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="date"  type="text" required=""/>
                                    <span> </span>
                                </div>
                            </div>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>DAY <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <select name="day" required="">
                                        <option value="">Select Day</option>
                                        <option value="saturday" >Saturday</option>
                                        <option value="sunday" >Sunday</option>
                                        <option value="monday" >Monday</option>
                                        <option value="tuesday" >Tuesday</option>
                                        <option value="wednesday" >Wednesday</option>
                                        <option value="thursday" >Thursday</option>
                                        <option value="friday" >Friday</option>
                                    </select>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>Post Code<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="c_code"  type="text" required=""/>
                                    <span> </span>
                                </div>
                            </div>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Start Time<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="start_time"  type="text" placeholder="00.00AM/PM"/>
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>End Time<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="end_time"  type="text"  placeholder="00.00AM/PM"/>
                                    <span> </span>
                                </div>
                            </div>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Phone Number <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3" >

                                    <input name="c_phone"  type="text" />

                                </div>
                                <div class="input-field col s12 m3">
                                    <span>Contact Support <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3" >
                                    <input name="c_suppt"  type="text" />
                                </div>

                            </div>
                            <!--                            <div class="input-field col s12 m12">
                                                            <div class="input-field col s12 m2">
                                                                <span>Contact Support <b style="color:red"> * </b> </span>
                                                            </div>
                                                            <div class="input-field col s12 m3" >
                                                                <input name="c_suppt"  type="text" />
                                                            </div>									
                                                            
                                                        </div>-->
                        </div>

                        <div class="row" style="padding:10px">	
                            <h6 style="margin-top:50px">Social Media</h6>
                            <div id="p_media">
                                <div class="form-group" >
                                    <div class="input-field col s12 m12">
                                        <div class="input-field col s12 m2">
                                            <span>Media Name <b style="color:red"> * </b> </span>
                                        </div>
                                        <div class="input-field col s12 m3">
                                            <select name="s_name">
                                                <option value="" disabled selected>Select media</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Linkdin">Linkdin</option>
                                                <option value="Twitter">Twitter</option>
                                                <option value="Instagram">Instagram</option>
                                            </select>
                                            <span> </span>
                                        </div>
                                        <div class="input-field col s12 m3">
                                            <span>Link <b style="color:red"> * </b> </span>
                                        </div>
                                        <div class="input-field col s12 m3">
                                            <input name="link"  type="text" />
                                            <span> </span>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                        </div>
<!--                        <div id="p_media1">
                            <a style="float: right;margin-top:0px;"href="#" class="btn btn-primary" id="addScnt">Add<i class="fa fa-plus-square-o" aria-hidden="true"></i>
                            </a>
                        </div>-->
                        <div class="row" style="padding:10px">	
                            <h6 style="margin-top:50px">Account Details</h6>
                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Username <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="username"  type="text" />
                                    <input type="hidden" name="type" value="Doctor" class="span6 typeahead" >
                                    <span> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <span>Password <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="password"  type="password" />
                                    <span> </span>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding:10px">	

                            <div class="input-field col s12 m12 l12">
                                <button  class="coloured-btn submit" ><i class="fa fa-registered" aria-hidden="true"></i> Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}  

                    </div><!-- Contact Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var scntDiv = $('#p_media2');
        var i = 1;

        $('#addScnt1').on('click', function (e) {
            e.preventDefault();
            i++;
            $(scntDiv).append('<div class="form-group" ><div class="input-field col s12 m12"><div class="input-field col s12 m2"> <span>Degree <b style="color:red"> * </b> </span></div> <div class="input-field col s12 m3"><select name="degree"><option value="" disabled selected>Select Doctor</option> <option value="mbbs">MBBS</option><option value="fcfrs">FCFRS</option> </select></div> <div class="input-field col s12 m3"> <span>Institution<b style="color:red"> * </b> </span> </div><div class="input-field col s12 m3"><input name="institution"  type="text" /><span> </span> </div> </div> <a href="#" class="btn btn-info"style="float:right; margin-right:0px;margin-top:0px;" id="remScnt1">Remove</a></div>');


        });

        $(scntDiv).on('click', '#remScnt1', function (e) {
            e.preventDefault();
            $(this).parent('.form-group').remove();
            i--;

        })
    });
</script>
<script>
    $(document).ready(function () {
        var scntDiv = $('#p_media1');
        var i = 1;

        $('#addScnt').on('click', function (e) {
            e.preventDefault();
            i++;
            $(scntDiv).append('<div class="form-group" ><div class="input-field col s12 m12"><div class="input-field col s12 m2"> <span>Media Name <b style="color:red"> * </b> </span></div><div class="input-field col s12 m3"> <select name="s_name"> <option value="" disabled selected>Select media</option><option value="Facebook">Facebook</option><option value="Linkdin">Linkdin</option>  <option value="Twitter">Twitter</option> <option value="Instagram">Instagram</option> </select> <span> </span> </div> <div class="input-field col s12 m3"> <span>Link <b style="color:red"> * </b> </span> </div><div class="input-field col s12 m3"><input name="link"  type="text" /><span> </span> </div> </div><a href="#" class="btn btn-info"style="float:right; margin-right:0px;margin-top:0px;" id="remScnt">Remove</a></div>');


        });

        $(scntDiv).on('click', '#remScnt', function (e) {
            e.preventDefault();
            $(this).parent('.form-group').remove();
            i--;

        })
    });
</script>
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jasny-bootstrap.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<script language="javascript">print_country("country");</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
    $(".js-example-basic-multiple").select2();
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
    $(".js-example-basic-multiple").select2();
</script>
@endsection