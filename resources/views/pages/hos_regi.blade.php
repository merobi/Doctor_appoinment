
@extends('master')
@section('content')
<div class="pagetop">
    <div class="container">		
        <ul>
            <h1>Registration form (only for Hospital)</h1>
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

                       {!! Form::open(array('url' => '/Hospital-info-save' , 'method'=>'post' , 'files'=>'true' )) !!}
                            <div class="row" style="padding:10px">
                                <h6>Personal Information</h6>
                                <div class="input-field col s12 m12">

                                    <div class="input-field col s12 m2">
                                        <span>Name <b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input name="name"  type="text" />
                                        <span> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <span>Registration <b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input name="registration"  type="text" />
                                        <span> </span>
                                    </div>
                                     <div class="input-field col s12 m2">
                                    <span>Image<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="image"  type="file" />
                                    <span> </span>
                                </div>
                                </div>



                            </div>

                            <div class="row" style="padding:10px">	



                            </div>
                            <div class="row" style="padding:10px">	

                                <div class="input-field col s12 m12">
                                    <div class="input-field col s12 m2">
                                        <span>Address <b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m9">
                                        <input name="address"  type="text" />
                                        <span> </span>
                                    </div>									
                                </div>
                                <div class="input-field col s12 m12">
                                    <div class="input-field col s12 m2">
                                        <span>  </span>
                                    </div>
                                    <div class="input-field col s12 m9">
                                        <input name="address"  type="text" />
                                        <span> </span>
                                    </div>									
                                </div>
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
                                       <select name="country_id">
                                                <option value="" disabled selected>Select country</option>
                                                <?php
                                                foreach ($country_info as $value_info) {
                                                    ?>
                                                    <option value="{{$value_info->id}}">{{$value_info->country_name}}</option>
                                                <?php } ?>
                                    </select>
                                        <span> </span>
                                    </div>

                                   <div class="input-field col s12 m2">
                                        <span>City <b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <select name="city_id">
                                            <option value="" disabled selected>Select city</option>
                                            <?php
                                                foreach ($city_info as $value_info) {
                                                    ?>
                                                    <option value="{{$value_info->id}}">{{$value_info->city_name}}</option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                
                                <div class="input-field col s12 m12">
                                    
                                    <div class="input-field col s12 m2">
                                        <span>Post Code<b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input name="post_code"  type="text" />
                                        <span> </span>
                                    </div>
                                    
                                    <div class="input-field col s12 m2">
                                        <span>Email<b style="color:red"> * </b> </span>
                                    </div>

                                    <div class="input-field col s12 m3">
                                        <input name="email"  type="email" />
                                        <span> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">	



                                <div class="input-field col s12 m12">
                                    <div class="input-field col s12 m2">
                                        <span>Phone Number <b style="color:red"> * </b> </span>
                                    </div>
                                    									
                                    <div class="input-field col s12 m3">
                                        <input name="phone"  type="text" />
                                        <span> </span>
                                    </div>
                                    
                                    <div class="input-field col s12 m2">
                                        <span>FAX <b style="color:red"> * </b> </span>
                                    </div>
                                    									
                                    <div class="input-field col s12 m3">
                                        <input name="fax"  type="text" />
                                        <span> </span>
                                    </div>
                                </div>
                                
                                
                                <div class="input-field col s12 m12">
                                    <div class="input-field col s12 m2">
                                        <span>About Hospital <b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m9">
                                        <input name="about_hospital"  type="text" />
                                        <span> </span>
                                    </div>									
                                </div>
                            </div>
                       
                       <div class="row" style="padding:10px">	
                            <h6 style="margin-top:50px">Social Media</h6>
                            
                                <div class="input-field col s12 m12">
                                    <div class="input-field col s12 m2">
                                        <span>Web Name <b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input name="s_name"  type="text" />
                                        <span> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <span>URL <b style="color:red"> * </b> </span>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input name="link"  type="text" />
                                        <span> </span>
                                    </div>
                                </div>
                               

                        </div>
                       
                            <div class="row" style="padding:10px">	
                                <h6 style="margin-top:50px">Account Details</h6>
                                <div class="input-field col s12 m12">
                                    <div class="input-field col s12 m2">
                                        <span>Username <b style="color:red"> * </b> </span>
                                        <input type="hidden" name="type" value="Hospital" class="span6 typeahead" >
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input name="username"  type="text" />
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

@endsection