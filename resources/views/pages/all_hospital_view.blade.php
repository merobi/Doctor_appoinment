@extends('master')
@section('content')

<div class="pagetop">
    <div class="container">
         {!! Form::open(array('url' => '/All-Hospital-search'  , 'files'=>'true','method'=>'get' )) !!}
                             <?php
                                header('Content-Type: text/html; charset=UTF-8');
                                $country_info = DB::table('tbl_country')
                                        ->get();
                                
                                ?>
            <div class="row">
                <div class="input-field col m3 s12">
                    <select id="country" name="country_id">
                        <option value="" disabled selected>Select Country</option>
                        <?php
                                                foreach ($country_info as $value_country) {
                                                    ?>
                                                    <option value="{{$value_country->country_id}}">{{$value_country->country_name}}</option>
                                                <?php } ?>
                    </select>
                </div>							
                <div class="input-field col m3 s12">
                    <select id="city" class="city" name="city_id">
                        <option value=""  selected>Select City</option>
                        
                    </select>
                </div>
                <div class="input-field col m3 s12">
                    <select id="hospital" class="hospital" name="hospital">
                        <option value=""  selected>Select Hospital</option>
                        
                    </select>
                </div>

                <div class="input-field col m3 s12" style="margin-top:-18px">
                    <button type="submit" ><i class="fa fa-user-md"></i> Search</button>
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
<!--                    <aside class="col column s12 m12 l4 sidebar" style="border-right:none;height:200px">			-->
                        <div class="widget">
                           
                            <div class="recent-posts">
                                <?php
                                foreach ($hospital_info as $v_info) {
                                    ?>
                                <div class="widget-post">
                                    <div class="widget-post-img"><a href="{{URL::to('/hospital-profile/'.$v_info->id)}}"><img src="{{URL::to('/')}}<?php echo '/' . $v_info->image; ?>" style="height:150px;width:150px;" alt="" /></a></div>
                                    <div class="widget-post-name">
                                        <span>{{$v_info->address}}</span>
                                        <h5><a href="" title="">{{$v_info->about_hospital}}</a></h5>
                                    </div>
                                </div><!-- Widget Post -->
                                <?php } ?> 
                            </div><!-- Recent Posts -->
                        </div><!-- Widget --
                    	
-->                    
<!--                    </aside>	-->
                    	
                   	
                    						
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
                            $("#hospital").html(text);
                        }
                     });
                });               
            });

    </script>
@endsection
