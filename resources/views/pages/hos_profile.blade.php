
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
                <a title="" class="col column  m12" href="{{URL::to('/hospital-profile')}}" style="margin-left: 10px;">Profile</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#profile">Manage Profile</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#about">Manage About Hospital</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#service">Add Medical Service </a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#link">Add Help Link</a>
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
                    <aside class="col column s12 m12 l3 sidebar">			
                        <?php
                        $service_info = DB::table('tbl_medical_service')
                                ->where('institute_id', 1)
                                ->get();
                        ?>
                        <div class="widget">
                            <div class="widget-title">
                                <h4>MEDICAL <span>SERVICES</span></h4>
                                <span>Provide Comprehensive</span>
                            </div>

                            <div class="why-choose">
                                <?php
                                foreach ($service_info as $v_info) {
                                    ?>
                                    <div class="choose-box">
                                        <span><i class=" fa fa-star"></i></span>
                                        <div class="choose-inner">
                                            <h4>

                                                <li style="list-style:none;"><a href="{{URL::to('/Service-details/'.$v_info->id)}}">{{$v_info->heading}}</a></li>

                                            </h4>
                                            <span>{{$v_info->short_description}}</span>

                                        </div>
                                    </div><!-- Choose Box  -->
                                <?php } ?> 


                            </div>								
                        </div><!-- Widget -->		
                        <div class="widget">
                            <?php
                            $link_info = DB::table('tbl_help_link')
                                    ->where('institute_id', 1)
                                    ->get();
                            ?>
                            <div class="widget-title">
                                <h4>helpful <span>links</span></h4>
                                <span>Provide Comprehensive</span>
                            </div>
                            <ul>
                                <?php
                                foreach ($link_info as $v_info) {
                                    ?>
                                <li><a target="_blanck" href="{{$v_info->url}}">{{$v_info->heading}}</a></li>
                                <?php } ?> 
                            </ul>						
                        </div><!-- Widget -->	
                        <!--                        <div class="widget">
                                                    <div class="widget-title">
                                                        <h4>TAG <span>CLOUDS</span></h4>
                                                        <span>Provide Comprehensive</span>
                                                    </div>
                                                    <div class="tagcloud">
                                                        <a title="" href="#">Featured</a>
                                                        <a title="" href="#">Design</a>
                                                        <a title="" href="#">Development</a>
                                                        <a title="" href="#">Code</a>
                                                        <a title="" href="#">Featured</a>
                                                        <a title="" href="#">Design</a>
                                                        <a title="" href="#">Development</a>
                                                        <a title="" href="#">Code</a>
                                                    </div>				
                                                </div> Widget -->

                    </aside>	
                    <div class="col column  s12 m12 l9">
                        <div class="staff-detail">
                            <div class="member-introduction1">
                                <div class="member-wrapper1" >
                                    <div class="staff-img"><img src="{{URL::to('/')}}<?php echo '/' . $profile_info_by_id->image; ?>" style="height:350px;width:350px" alt="" /></div>
                                    <div class="member-detail">
                                        <i>Provide Comprehensive Quality Care</i>
                                        <h2> <strong>{{$profile_info_by_id->name}}</strong></h2>
                                        <span></span>
                                        <ul class="info-list">
                                            <li><strong>Address:</strong>{{$profile_info_by_id->address}}</li>
                                            <li><strong>E-mail:</strong>{{$profile_info_by_id->email}}/li>
                                            <li><strong>Phone:</strong>{{$profile_info_by_id->phone}}</li>
                                            <li><strong>TIMMING:</strong>9:00am -5:00pm</li>
                                            <li><strong>On Vacation</strong> 12:00pm -3:00pm</li>											
                                        </ul>
                                        <div class="social-icons">
                                            <a title="" href="#"><i class="fa fa-facebook"></i></a>
                                            <a title="" href="#"><i class="fa fa-linkedin"></i></a>
                                            <a title="" href="#"><i class="fa fa-twitter"></i></a>
                                            <a title="" href="#"><i class="fa fa-skype"></i></a>
                                        </div>
                                        <span></span>
                                    </div><!-- Member Detail -->
                                </div>
                            </div><!-- Member Introduction -->

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
                                        {{$profile_info_by_id->about_hospital}} 
                                    </div>
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
                                        <p>Duis sed odio sit amet nibh vulate cursus sit amet mauris.Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed no mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ine rat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim et ven veni am, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse er os cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class apte nt taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p> 	
                                    </div>
                                </div>
                            </div>
                        </div><!-- Staff Detail -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="profile" class="modal fade" role="dialog">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-hospital-profile' , 'method'=>'post','files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Manage Profile</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">


                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Name<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="name"  type="text" value="{{$profile_info_by_id->name}}" />
                                <input name="id"  type="hidden" value="{{$profile_info_by_id->id}}" />
                                <input name="user_id"  type="hidden" value="{{$profile_info_by_id->user_id}}" />

                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Fax<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="fax"  type="text" value="{{$profile_info_by_id->fax}}" />
                                <span> </span>
                            </div>

                        </div>
                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Email<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="email"  type="email" value="{{$profile_info_by_id->email}}" />
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Phone<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="phone"  type="text" value="{{$profile_info_by_id->phone}}" />
                                <span> </span>
                            </div>



                            <div class="input-field col s12 m2">
                                <span>City<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="city"  type="text" value="{{$profile_info_by_id->city_id}}" />
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
                                <input name="post_code"  type="text" value="{{$profile_info_by_id->post_code}}" />
                                <span> </span>
                            </div>

                            <div class="input-field col s12 m3">
                                <span>Address<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="address"  type="text" value="{{$profile_info_by_id->address}}" />
                                <span> </span>
                            </div>



                        </div>        



                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-left">Update profile</button>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!} 
        </div>
    </div> 

    <div id="about" class="modal fade" role="dialog" style="height: 300px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-hospital-about' , 'method'=>'post', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Manage About</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">


                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>About<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m9">
                                <input name="id"  type="hidden" value="{{$profile_info_by_id->id}}"/>
                                <input name="user_id"  type="hidden" value="{{$profile_info_by_id->user_id}}"/>
                                <input name="about"  type="text" value="{{$profile_info_by_id->about_hospital}}"/>
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
    <div id="service" class="modal fade" role="dialog" style="height: 420px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/medical-service' , 'method'=>'post','name'=>'edit_profile', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Add Medical Service</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">


                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Heading<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="heading"  type="text" />
                                <input  name='id' type="hidden" value="{{$profile_info_by_id->id}}"/>
                                <input  name='user_id' type="hidden" value="{{$profile_info_by_id->user_id}}"/>
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Short Description<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="short_description"  type="text" />
                                <span> </span>
                            </div>

                        </div>
                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Long Description<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m10">
                                <input name="long_description"  type="text" />
                                <span> </span>
                            </div>


                        </div>




                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-left">Add Service</button>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!} 
        </div>
    </div> 

    <div id="link" class="modal fade" role="dialog" style="height:250px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/Add-help-link' , 'method'=>'post', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">

                    <h4 class="modal-title" style="text-align: center;">Add Help Link</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">


                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Heading<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input  name='id' type="hidden" value="{{$profile_info_by_id->id}}"/>
                                <input  name='user_id' type="hidden" value="{{$profile_info_by_id->user_id}}"/>
                                <input name="heading"  type="text" />
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>URL<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="url"  type="text" />
                                <span> </span>
                            </div>

                        </div>




                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-left">Add Link</button>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            {!! Form::close() !!} 
        </div>
    </div> 
    <div id="media" class="modal fade" role="dialog" style="height: 300px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-hospital-media' , 'method'=>'post','name'=>'edit_profile', 'files'=>'true' )) !!}
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
                                <input name="user_id"  type="hidden" value="{{$media_info_by_id->user_id}}"/>
                                <input name="s_name"  type="text"  value="{{$media_info_by_id->s_name}}"/>
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
    <div id="app" class="modal fade" role="dialog" style="height:350px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-profile' , 'method'=>'post','name'=>'edit_profile', 'files'=>'true' )) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(230,230,230,0.9);">
                   <?php 
                   $doctor_app_info = DB::table('appoinment')
                                                 ->join('doctors_info', 'doctors_info.id', '=', 'appoinment.doctor_id')
                                                 ->join('patient', 'patient.id', '=', 'appoinment.patient_id')
                                                 
                                                 ->get();
                   ?>
                    <h4 class="modal-title" style="text-align: center;">Appoinment</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:10px">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                            <tr>
                            <th>Doctor Name</th>
                            <th>Patient Name</th>
                            <th>Date</th>
                        
                            <th>Day</th>
                            <th>time</th>
                            
                            
                             </tr>
                       </thead> 
                       <tbody>
                    <?php foreach ($doctor_app_info as $v_info) { ?>
                        <tr>
                            <td><?php echo $v_info->firstname; ?> <?php echo $v_info->lastname; ?></td>
                            <td><?php echo $v_info->name; ?></td>
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

