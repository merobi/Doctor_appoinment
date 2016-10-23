@extends('master')
@section('content')

<div class="pagetop">
    <div class="container">
        <?php
        header('Content-Type: text/html; charset=UTF-8');
        $country_info = DB::table('tbl_country')
                ->get();
        $city_info = DB::table('tbl_city')
                ->get();
        ?>
        {!! Form::open(array('url' => '/All-Specialist-search'  , 'files'=>'true','method'=>'get' )) !!}
        <div class="row">
            <div class="input-field col m2 s12">
                <select id="country" name="country_id">
                    <option value="" disabled selected>Select Country</option>
                    <?php
                    foreach ($country_info as $value_country) {
                        ?>
                        <option value="{{$value_country->country_id}}">{{$value_country->country_name}}</option>
                    <?php } ?> 
                </select>
            </div>							
            <div class="input-field col m2 s12">
                <select id="city" name="city2">
                    <option value=""  selected>Select City</option>

                </select>
            </div>
            <div class="input-field col m2 s12">
                <select id="hospital1" name="hospital1">
                    <option value="" disabled selected>Select Hospital</option>

                </select>
            </div>

            <div class="input-field col m2 s12">
                          <?php
                           
                            $speciality_info= DB::table('doctors_speciality')
                                    ->get();
                            ?>
                <select id="specialist" name="specialist">
                    <option value="" disabled selected>Select Specialist</option>
                           <?php
                                            foreach ($speciality_info as $value_country) {
                                                ?>
                                                <option value="{{$value_country->id}}">{{$value_country->speciality}}</option>
                                            <?php } ?>
                </select>
            </div>
            <div class="input-field col m4 s12" style="margin-top:-18px">
                <button type="submit"><i class="fa fa-user-md"></i> Search</button>
            </div>

        </div>
        {!! Form::close() !!} 
    </div>
</div>



<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col column s12 m12 l12">
                    <div class="doctors-timetable">

                        <div class="timetable-tab-content">
                            <div id="sat">
                                <div class="staff-timetable">
                                    <div class="row">
                                        
                                        <?php
                                        foreach ($specialist_info as $v_info) {
                                            ?>
                                            <div class="col s12 m12 l6">

                                                <div class="doc-time ">

                                                    <a href="{{URL::to('/doctor-profile/'.$v_info->id)}}"><img src="{{URL::to('/')}}<?php echo '/' . $v_info->image; ?>" alt="" /></a>
                                                    <div class="doc-detail">
                                                        <h4><i class="fa fa-user"></i> Dr. {{$v_info->title}} {{$v_info->firstname}} {{$v_info->lastname}}</h4>
                                                        <ul>
                                                            <li>

                                                                <strong>Department:</strong><span><a href="#" title=""></a></span>

                                                            </li>

                                                            <li>
                                                                <strong>Speciality:</strong><span><a href="#" title="">Cardiology</a></span>
                                                            </li>
                                                        </ul>
                                                        <a class="dark-btn" href="{{URL::to('/Doctor-Appointment/'.$v_info->id)}}" title=""><i class="fa fa-user"></i> APPOINTMENT NOW</a>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php } ?><!-- Doctor Time -->
                                    </div>
                                </div><!-- Staff Timetable -->
                            </div><!-- Saturday -->						

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" charset="utf-8">
            jQuery( document ).ready(function(){
                $("#country").on('change',function(){
                     console.log($(this).val());
                     $.ajax({
                         scriptCharset: "utf-8" ,
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         type: 'GET',
                         url: '../resources/views/pages/city.php?country_id='+$(this).val(),
                           success: function(text) {
                            console.log(text);
                            $("#city").html(text);
                        }
                     });
                });
                
                 $("#city").on('change',function(){
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