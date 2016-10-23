
@extends('master')
@section('content')

<div class="pagetop">
    <div class="container">
        <div class="widget">
            <div class="widget-title">
                <h4 style="color:#000">MANAGE <span> PROFILE</span></h4>
            </div>
            <div class="tagcloud1">
                <a title="" class="col column  m12" href="{{URL::to('/center-profile')}}">Profile</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#profile">Manage Profile</a>
                <!--                <a title="" class="col column  m12" data-toggle="modal" data-target="#about">Manage About Diagnostic</a>
                                <a title="" class="col column  m12" data-toggle="modal" data-target="#service">Add Diagnostic Service </a>
                                <a title="" class="col column  m12" data-toggle="modal" data-target="#link">Add Help Link</a>-->
                <a title="" class="col column  m12" data-toggle="modal" data-target="#media">Manage Social Media</a>
                <a title="" class="col column  m12" data-toggle="modal" data-target="#app">View Appoinment</a>
            </div>				
        </div><!-- Widget -->	
    </div>
</div>


<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col column s12 m12 l12">

                    <div class="col column  s12 m12 l9">
                        <div class="staff-detail">
                            <div class="member-introduction1">
                                <div class="member-wrapper1" >
                                    <div class="staff-img"><img src="{{URL::to('/')}}<?php echo '/' . $profile_info_by_id->image; ?>" style="height:350px;width:350px"alt="" /></div>
                                    <div class="member-detail">
                                        <i>Provide Comprehensive Quality Care</i>
                                        <h2>I' m <strong>{{$profile_info_by_id->name}}</strong></h2>

                                        <ul class="info-list">
                                            <li><strong>Address:</strong>{{$profile_info_by_id->address}}</li>
                                            <li><strong>E-mail:</strong>{{$profile_info_by_id->email}}</li>
                                            <li><strong>Phone:</strong>{{$profile_info_by_id->phone}}</li>
                                            <li><strong>TIMEING:</strong>9:00am -5:00pm</li>
                                            <li><strong>On Vacation</strong> 12:00pm -3:00pm</li>
                                           
                                        </ul>
                                        <div class="social-icons">
                                            <a title="" href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                                            <a title="" href="#"><i class="fa fa-linkedin"></i></a>
                                            <a title="" href="#"><i class="fa fa-twitter"></i></a>
                                            <a title="" href="#"><i class="fa fa-skype"></i></a>
                                        </div>
                                        <span></span>
                                    </div><!-- Member Detail -->
                                </div>
                            </div><!-- Member Introduction -->


                        </div><!-- Staff Detail -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="profile" class="modal fade" role="dialog">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-patient-about' , 'method'=>'post','name'=>'edit_profile', 'files'=>'true' )) !!}
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
                                <input name="name"  type="text" value="{{$profile_info_by_id ->name}}" />
                                <input name="id"  type="hidden" value="{{$profile_info_by_id ->id}}" />
                                <input name="user_id"  type="hidden" value="{{$profile_info_by_id ->user_id}}" />

                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Age<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="age"  type="text" value="{{$profile_info_by_id ->age}}"/>
                                <span> </span>
                            </div>

                        </div>
                        <div class="input-field col s12 m12">
                            <div class="input-field col s12 m2">
                                <span>Email<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="email"  type="email" value="{{$profile_info_by_id ->email}}"/>
                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>Phone<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="phone"  type="text" value="{{$profile_info_by_id ->phone}}"/>
                                <span> </span>
                            </div>



                            <div class="input-field col s12 m2">
                                <span>Address<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="address"  type="text" value="{{$profile_info_by_id ->address}}"/>
                                <span> </span>
                            </div>

                            <div class="input-field col s12 m3">
                                <span>Image<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="image"  type="file" value="{{$profile_info_by_id ->image}}"/>
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
    <div id="media" class="modal fade" role="dialog" style="height: 300px;">
        <div class="modal-dialog">
            {!! Form::open(array('url' => '/update-patient-media' , 'method'=>'post', 'files'=>'true' )) !!}
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
                                <input name="s_name"  type="text" value="{{$media_info_by_id->s_name}}" />
                                <input name="id"  type="hidden" value="{{$media_info_by_id->id}}" />
                                <input name="user_id"  type="hidden" value="{{$media_info_by_id->user_id}}" />

                                <span> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <span>URL<b style="color:red"> * </b> </span>
                            </div>
                            <div class="input-field col s12 m3">
                                <input name="link"  type="text" value="{{$media_info_by_id->s_name}}"/>
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
                                                 ->join('camber_info', 'camber_info.id', '=', 'appoinment.chamber_id')
                                                 
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
                            <th>Chamber Name</th>
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

