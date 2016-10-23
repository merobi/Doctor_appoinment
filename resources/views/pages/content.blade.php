@extends('master')
@section('content')
<section>
	<div class="block no-padding">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="creative-slider">
					<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
						<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;">
							<ul>
								<li data-index="rs-1" data-transition="fade" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 1">
									<!-- MAIN IMAGE -->
									<img   src="resources/slider1.jpg"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								</li>							

								<li data-index="rs-2" data-transition="fade" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 2">
									<!-- MAIN IMAGE -->
									<img   src="resources/slider2.jpg"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								</li>

								<li data-index="rs-3" data-transition="fade" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-title="Slide 2">
									<!-- MAIN IMAGE -->
									<img   src="resources/slider3.jpg"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								</li>
							</ul>
						</div>
					</div>
                                     <?php
                            header('Content-Type: text/html; charset=UTF-8');
                            $country_info = DB::table('tbl_country')
                                    ->get();
                            ?>
					<div class="appointment-form">
						<div class="simple-title">
							<h4>Make An Appointment</h4>
							<span>A Specialist will Contact You Shortly</span>
						</div>
						{!! Form::open(array('url' => '/doctor-appoinment' , 'method'=>'get' , 'files'=>'true' )) !!}
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
										<option value="" disabled selected>Select City</option>
										
									</select>
								</div>							
								<div class="input-field col s12">
									<select id="hospital1" class="hospital" name="hospital1">
										<option value="" disabled selected>Select Diagnostic center</option>
										
									</select>
								</div>
                                                                   <?php
                           
                            $speciality_info = DB::table('doctors_speciality')
                                    ->get();
                            ?>
								<div class="input-field col s12">
									<select id="specialist" class="hospital" name="specialist">
										<option value="" disabled selected>Select Speciality</option>
										<?php
                                            foreach ($speciality_info as $value_country) {
                                                ?>
                                                <option value="{{$value_country->id}}">{{$value_country->speciality}}</option>
                                            <?php } ?>
									</select>
								</div>	
								
								<div class="input-field col s12">
                                                                    <button type="submit"><i class="fa fa-recycle"></i> Check Now</button>
								</div>
							</div>
						{!! Form::close() !!}
					</div><!-- Appointment Form -->					
				</div><!-- Creative Slider  -->
			</div>
		</div>		
	</div>	
</section>

<section>
	<div class="marqueeDiv">
            <div class="specialistOp" style="width: 15%;float:left">
                    <p>Specialist </p>
		</div>
		<div class="runningOp" style="width: 80%;float:left">
			<marquee>Specialist Specialist Specialist Specialist Specialist Specialist Specialist Specialist</marquee>
		</div>
	</div>
</section>



<section>
	<div class="block whitish">
		<div class="container">
			<div class="row">
				<div class="col 24 m12 s12 column">
					<div class="all-services">
						<div class="row">
							<div class="col l3 m6 s12">
								<div class="service">
									<img src="images/new/Icon-1.png" style="height:233px;width:270"alt="" />
									<div class="service-hover">
										<i class="icon-hospital"></i>
									
										<h5>HOSPITAL LOGIN</h5>
									</div>
									<a href="{{URL::to('/hospital-login')}}" title="">HOSPITAL LOGIN <i class="fa fa-caret-right"></i></a>
								</div><!-- Service -->
							</div>
							<div class="col l3 m6 s12">
								<div class="service">
									<img src="images/new/Icon-2.png" style="height:233px;width:270"alt="" />
									<div class="service-hover">
										<i class="icon-medical-list"></i>
									
										<h5>DIAGNOSTIC CENTER'S LOGIN</h5>
									</div>
									<a href="{{URL::to('/center-login')}}" title="">DIAGNOSTIC CENTER'S LOGIN <i class="fa fa-caret-right"></i></a>
								</div><!-- Service -->
							</div>
							<div class="col l3 m6 s12">
								<div class="service">
									<img src="images/new/Icon-3.png" style="height:233px;width:270"alt="" />
									<div class="service-hover">
										<span><i class="icon-doctor"></i></span>
									
										<h5>DOCTOR'S LOGIN</h5>
									</div>
									<a href="{{URL::to('/doctor-login')}}" title="">DOCTOR'S LOGIN <i class="fa fa-caret-right"></i></a>
								</div><!-- Service -->
							</div>
							<div class="col l3 m6 s12">
								<div class="service">
									<img src="images/new/Icon-4.png" style="height:233px;width:270"alt="" />
									<div class="service-hover">
										<span><i class="icon-doctor"></i></span>
										
										<h5>PATIENT'S LOGIN</h5>
									</div>
									<a href="{{URL::to('/patient-login')}}" title="">PATIENT'S LOGIN <i class="fa fa-caret-right"></i></a>
								</div><!-- Service -->
							</div>
							
							
						</div>
					</div><!-- All Service -->
				</div>
				
			</div>
		</div>
	</div>
</section>

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
        
@endsection

