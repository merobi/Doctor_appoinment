@extends('master')
@section('content')
<div class="pagetop">
    <div class="container">
        <div class="widget">
            <?php 
                                         $login_id = Session::get('login_id');
                                          if($login_id){
                                        ?>
            <div class="widget-title">
                <h4 style="color:#000">MANAGE <span> PROFILE</span></h4>
            </div>
            <div class="tagcloud1">
                <a title="" class="col column  m12" href="">Profile</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#profile">Manage Profile</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#about">Manage About me</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#skill">Manage Professional Skills </a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#availability">Manage Availablity Calendar</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#media">Manage Social Media</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#app">View Appoinment</a>
            </div>
            <?php
                                          }
                                          ?>
                                            
        </div><!-- Widget -->	
    </div>
</div>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col column s12 m12 l12">
                    <div class="staff-detail">
                        <div class="member-introduction">
                            <div class="member-wrapper">
                                <div class="staff-img"><img src="{{URL::to('/')}}<?php echo '/' . $profile_info_by_id->image; ?>" style="height:350px;width:350px"alt="" /></div>
                                <div class="member-detail">
                                    <i>Provide Comprehensive Quality Care</i>
                                    <h2>I' m <strong>{{$profile_info_by_id->firstname}}</strong></h2>
                                    <span>{{$skill_info_by_id->speciality}}</span>
                                    <ul class="info-list">
                                        <li><strong>Address:</strong>{{$profile_info_by_id->address}}</li>
                                        <li><strong>E-mail:</strong>{{$profile_info_by_id->email}}</li>
                                        <li><strong>Phone:</strong>{{$profile_info_by_id->phone_no}}</li>
                                        
                                        <li><a href="{{URL::to('/Doctor-Appointment/'.$profile_info_by_id->id)}}"><strong><i>Take An Appointment</i></strong></a></li> 
                                    </ul>
                                    <div class="social-icons">
                                        <a title="" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                        <a title="" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                        <a title="" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                        <a title="" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div><!-- Member Detail -->
                            </div>
                        </div><!-- Member Introduction -->
<!--                        <div class="has-popup-content popup11">
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
                                        <span>Hospital Search</span>
                                    </div>
                                    {!! Form::open(array('url' => '/Hospital-search' , 'method'=>'post' , 'files'=>'true' )) !!}
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select >
                                                <option value="" disabled selected>Select District</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>							
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Select City</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>														
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Select Hospital</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>	

                                        <div class="input-field col s12">
                                            <a href="{{URL::to('/Hospital-view')}}"><button type="button"><i class="fa fa-user-md"></i> Search</button></a>
                                        </div>

                                    </div>
                                    {!! Form::close() !!} 
                                </div>
                            </div> Consultation Popup 
                        </div>-->
                        <div class="staff-tabs">
                            <div class="staff-tabs-selectors">
                                <ul class="tabs">
                                    <li class="tab"><a href="#test1"><i class="fa fa-user"></i> About Me</a></li>
                                    <li class="tab"><a class="active" href="#test2"><i class="fa fa-pie-chart"></i> Professional Skills</a></li>
                                    <li class="tab"><a href="#test3"><i class="fa fa-calendar-o"></i> Availablity Calendar</a></li>
                                </ul>
                            </div>
                            <div class="staff-tab-content">
                                <div id="test1">
                                    {{$profile_info_by_id->about_me}}</div>
                                <div id="test2">
                                    <p>Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, er inceptos himenaeos. Mauris inerat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</p>
                                    <div class="all-skills">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <div class="progess-container">
                                                    <strong>Cosmetic Surgery</strong>
                                                    <span>80%</span>
                                                    <div class="progress"><div class="determinate" style="width: 80%"></div></div>
                                                </div><!-- Progress Container -->
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="progess-container">
                                                    <strong>Dental Surgeon</strong>
                                                    <span>86%</span>
                                                    <div class="progress"><div class="determinate" style="width: 86%"></div></div>
                                                </div><!-- Progress Container -->
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="progess-container">
                                                    <strong>Pediatrician</strong>
                                                    <span>65%</span>
                                                    <div class="progress"><div class="determinate" style="width:65%"></div></div>
                                                </div><!-- Progress Container -->
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <div class="progess-container">
                                                    <strong>General Doctor</strong>
                                                    <span>90%</span>
                                                    <div class="progress"><div class="determinate" style="width:90%"></div></div>
                                                </div><!-- Progress Container -->
                                            </div>
                                        </div>
                                    </div><!-- All Skills -->
                                </div>
                                <div id="test3">
                                    <p>Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan psum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ine rat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</p>


                                    <div class="appointment-tab">
                                        <div class="row">
                                            <div class="col s12 m12 l5">
                                                <div class="appointment-details">
                                                    <span>Provide Comprehensive</span>
                                                    <h4>Make An <span>Appointment</span></h4>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam adipiscing elit orem.</p>
                                                </div><!-- Appointment Details -->
                                            </div>
                                            <div class="col s12 m12 l7">
                                                <div class="appointment-form">
                                                    <form>
                                                        <div class="row">					
                                                            <div class="input-field col s12">
                                                                <select>
                                                                    <option value="" disabled selected>Choose Service</option>
                                                                    <option value="1">Option 1</option>
                                                                    <option value="2">Option 2</option>
                                                                    <option value="3">Option 3</option>
                                                                </select>
                                                            </div>							
                                                            <div class="input-field simple-label col s6">
                                                                <label>DATE FROM *</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input type="date" class="datepicker" />
                                                            </div>
                                                            <div class="input-field simple-label col s6">
                                                                <label>DESIRABLE TIME *</label>
                                                            </div>
                                                            <div class="input-field col s6">
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
                                                                <button class="coloured-btn" type="submit"><i class="fa fa-recycle"></i> Check Now</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- Staff Detail -->
                </div>
            </div>
        </div>
    </div>

    <div id="profile" class="modal fade" role="dialog">
        {!! Form::open(array('url' => '/update-doctor-profile' , 'method'=>'post', 'files'=>'true' )) !!}
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Manage Profile</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">

                        <div class="input-field col s12 m12">

                            <div class="input-field col s12 m2">
                                <span>Title <b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <select name="title">										
                                    <option>Select Title</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>      

                                </select>
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>First Name <b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="firstname"  type="text" value="{{$profile_info_by_id->firstname}}" />
                                <input name="id"  type="hidden" value="{{$profile_info_by_id->id}}" />
                                <input name="user_id"  type="hidden" value="{{$profile_info_by_id->user_id}}" />
                                <input name="image"  type="hidden" value="{{$profile_info_by_id->image}}" />
                                <span> </span>
                            </div>
                        </div>
                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Registration<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="regi_no"  type="text" value="{{$profile_info_by_id->regi_no}}"/>
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Last Name<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="lastname"  type="text" value="{{$profile_info_by_id->lastname}}"/>
                                <span> </span>
                            </div>

                        </div>
                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Email<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="email"  type="email" value="{{$profile_info_by_id->email}}"/>
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Phone<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="phone_no"  type="text" value="{{$profile_info_by_id->phone_no}}"/>
                                <span> </span>
                            </div>



                            <div class="input-field col s12 m2">
                                <span>City<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="city"  type="text" value="{{$profile_info_by_id->city_id}}"/>
                                <span> </span>
                            </div>

                            <div class="input-field col s12 m3">
                                <span>Image<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="image"  type="file" value="{{$profile_info_by_id->image}}" />
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m2">
                                <span>Post Code<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="post_code"  type="text" value="{{$profile_info_by_id->post_code}}"/>
                                <span> </span>
                            </div>

                            <div class="input-field col s12 m3">
                                <span>Address<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="address"  type="text" value="{{$profile_info_by_id->address}}"/>
                                <span> </span>
                            </div>



                        </div>        



                    </div>
                    <button type="submit" class="btn btn-primary pull-left" >Update profile</button>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>



            </div>


        </div>
        {!! Form::close() !!}  
    </div> 

    <div id="about" class="modal fade" role="dialog" style="height: 250px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-about' , 'method'=>'post', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Manage About</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">




                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m3">
                                <span>About<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m9">
                                <input name="id"  type="hidden" value="{{$profile_info_by_id->id}}"/>
<!--                                <input name="user_id"  type="hidden" value="{{$profile_info_by_id->user_id}}"/>-->
                                <input name="about"  type="text" value="{{$profile_info_by_id->about_me}}"/>
                                <span> </span>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary pull-left">Update About</button>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
            {!! Form::close() !!}  
        </div>
    </div>

    <div id="skill" class="modal fade" role="dialog" style="height: 250px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-doctor-skill' , 'method'=>'post', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Manage Degree</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">


                        <div class="input-field col s12 m12">

                            <div class="input-field col s12 m3">
                                <span>Degree<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="id"  type="hidden" value="{{$skill_info_by_id->id}}"/>
                                <input name="user_id"  type="hidden" value="{{$skill_info_by_id->user_id}}"/>
                                <input name="degree"  type="text" value="{{$skill_info_by_id->degree}}"/>
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m2">
                                <span>Speciality<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="speciality"  type="text" value="{{$skill_info_by_id->speciality}}"/>
                                <span> </span>
                            </div>
                        </div>




                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-left">Update Skill</button>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!}  
        </div>
    </div> 

    <div id="availability" class="modal fade" role="dialog" style="height:350px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-profile' , 'method'=>'post','name'=>'edit_profile', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Manage Availability</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">


                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Hospital Name<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="name"  type="text" />
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Date<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="date"  type="text" />
                                <span> </span>
                            </div>

                        </div>
                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>time<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="time"  type="text" />
                                <span> </span>
                            </div>


                        </div>      



                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-left">Update Schedule</button>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!}  
        </div>
    </div> 
    <div id="media" class="modal fade" role="dialog" style="height: 300px;">
                                        <h4 style="color:green">
                                            <?php
                                                $message=Session::get('message');
                                                if($message)
                                                {
                                                    echo $message;
                                                    Session::put('message','');
                                                }
                                            
                                            ?>
                                        </h4>
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-doctor-media' , 'method'=>'post', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Manage Media</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">


                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Media name<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="id"  type="hidden" value="{{$media_info_by_id->id}}"/>
                                <input name="s_name"  type="text" value="{{$media_info_by_id->s_name}}"/>
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Link<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="link"  type="text" value="{{$media_info_by_id->link}}"/>
                                <span> </span>
                            </div>

                        </div>




                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-left">Update Media</button>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!}  
        </div>
    </div> 
    <div id="app" class="modal fade" role="dialog" style="height:550px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-profile' , 'method'=>'post','name'=>'edit_profile', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">
                   <?php 
                   $doctor_app_info = DB::table('appoinment')
                                                 ->join('patient', 'patient.id', '=', 'appoinment.patient_id')
                                                 ->join('camber_info', 'camber_info.id', '=', 'appoinment.chamber_id')
                                                 ->select('appoinment.*', 'camber_info.name AS camberName', 'patient.name AS patientName')
                                                 ->get();
                 
                   ?>
                    <h4 class="modal-title" style="text-align: center;">Appoinment</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                            <tr>
                             <th>Patient Name</th>
                            <th>Chamber Name</th>
                            <th>Date</th>
                        
                            <th>Day</th>
                            <th>Time</th>
                            
                            
                             </tr>
                       </thead> 
                       <tbody>
                    <?php foreach ($doctor_app_info as $v_info) { ?>
                        <tr>
                            <td><?php echo $v_info->patientName; ?></td>
                            <td><?php echo $v_info->camberName; ?></td>
                            <td><?php echo $v_info->app_date; ?></td>
                            <td><?php echo $v_info->app_day; ?></td>
                            <td><?php echo $v_info->app_time; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                       </table>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!}  
        </div>
    </div> 

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection