
@extends('master')
@section('content')
<div class="pagetop">
    <div class="container">		
        <ul>
            <li>DOCTOR APPOINTMENT</li>
        </ul>
    </div>
</div>



<section>
    <div class="block double-parallax remove-bottom">
        <div class="parallax-container"><div data-speed="1" data-bleed="12" class="parallax"><img src="resources/double-parallax1.jpg" alt="" /></div></div>
        <div class="parallax-container"><div data-speed="0.4" class="parallax"><img src="resources/double-parallax2.jpg" alt="" /></div></div>
        <div class="row">
            <?php foreach ($doctor_info as $values) { ?>
            <div class="col l4 m12 s12 column">
                <div class="opening-shortcode">
                    	 <?php 
                         
                             $chamber_id = $values->camber_id;
                             $doctor_id = $values->id;
                             
                         ?>
                    <div class="modern-title" style="background:rgba(245,246,248,0.9)">
                        <p style="text-transform: uppercase;"><strong>{{ $values->firstname }}</strong></p>	
                    </div>
                     <div class="opening" style="margin-top:-10px;">
                         <div class="mockup overlap"><img src="{{URL::to('/')}}<?php echo '/' . $values->image; ?>" style="width:100%"alt="" /></div>
                       <div
                    <div class="opening" style="margin-top:-0px;">
                        <div ><p style="text-align: center">Address : {{ $values->address }}<br>
                        Email : {{ $values->email }}</p></div>
                    </div><!-- Opening Hours -->	
                </div><!-- Opening Shortcode -->
            </div>
            
           
        </div>
            
            <?php } ?>
                
            <?php
            
             $chamber_info = DB::table('camber_info')
                                                 ->where('id',$chamber_id)
                                                 ->get();
           
            ?>
            
            <div class="col l8 m12 s12 column">
                <div class="opening-shortcode">                                        
                    <div class="modern-title" style="text-align: left">
                        <h5 style="color:green;font-size: 14px">
                                            <?php
                                                $message=Session::get('message');
                                                if($message)
                                                {
                                                    echo $message;
                                                    Session::put('message','');
                                                }
                                            
                                            ?>
                                        </h5>
                        
                        <h2>APPOINTMENT <span> HOURS</span></h2>						
                    </div>
                  <?php    foreach ($chamber_info as $value) { ?>	
                    <div class="modern-title" style="background:rgba(245,246,248,0.9)">
                        <h5 style="text-transform: uppercase;text-align: left">{{ $value->name}}</h5>	
                    </div>
                    <div class="opening" style="margin-top:-25px;">
                        {!! Form::open(array('url' => '/Appoinment' , 'method'=>'post'  )) !!}<form>
                            <input name="patient_id"  type="hidden" value="1"/><br>
                            <input name="chamber_id"  type="hidden" value="{{ $value->id}}"/>
                            <input name="doctor_id"  type="hidden"  value="{{ $doctor_id}}"/>
                            <input name="date"  type="hidden" value="{{ $value->date}}"/>
                            <input name="day"  type="hidden" value="{{ $value->day}}"/>
                            <input name="time"  type="hidden" value="{{ $value->start_time}}-{{ $value->end_time}}"/>
                            
                            
                        
                        <?php
                         $login_id = Session::get('login_id');
                        if($login_id){?>
                        <input name="btn" class="btn btn-primary"  type="submit" value="DATE: {{ $value->date }} --- DAY: {{ $value->day }}----{{ $value->start_time}} –- {{ $value->end_time}}"/>
                       
                        <?php }else{?>
                            <?php session()->put('doctor_id_for_app',$doctor_id); ?>
                            <a class="call-popup popup1212" href="#" title="">DATE: {{ $value->date }} --- DAY: {{ $value->day }}----{{ $value->start_time}} –- {{ $value->end_time}}</a>
                           <?php } ?>
                        
                        {!! Form::close() !!} 
                    </div><!-- Opening Hours -->
                    
                  <?php }  ?>
                </div><!-- Opening Shortcode -->
              
                
     

                 
    </div>
    

</section>
@endsection