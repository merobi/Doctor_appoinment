
@extends('master')
@section('content')
<div class="pagetop">
    <div class="container">		
        <ul>
            <h1>Registration form (only for Patient)</h1>
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

                        {!! Form::open(array('url' => '/Patient-info-save' , 'method'=>'post' , 'files'=>'true' )) !!}
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
                                    <span>Age<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <input name="age"  type="text" />
                                    <span> </span>
                                </div>

                            </div>

                            <div class="input-field col s12 m12">									
                                <div class="input-field col s12 m2">
                                    <span>Birthday <b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                <!--<input type="date" class="datepicker" placeholder="Choose Date" />-->
                                    <input type="text" name="birthday" />
                                    <span> </span>
                                </div>
                                
                                <div class="input-field col s12 m3">
                            <span>Image<b style="color:red"> * </b> </span>
                        </div>
                        <div class="input-field col s12 m3">
                            <input name="image"  type="file" />
                            <span> </span>
                        </div>
                            </div>

                        </div>
                        
                        <div class="row" style="padding:10px">	

                            <div class="input-field col s12 m12">
                                <div class="input-field col s12 m2">
                                    <span>Gender<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <select name="gender">
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>

                                </div>
                                <div class="input-field col s12 m3">
                                    <span>Blood Group<b style="color:red"> * </b> </span>
                                </div>
                                <div class="input-field col s12 m3">
                                    <select name="bloodgroup">
                                        <option value="0">--Select Blood group--</option>
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
                                
                                <div class="input-field col s12 m3">
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
                                    <input name="name"  type="text" />
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
                                    <input type="hidden" name="type" value="Patient" class="span6 typeahead" >
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