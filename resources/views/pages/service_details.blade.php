@extends('master')
@section('content')
<section>
    
    <div class="pagetop">
    <div class="container">
        <div class="widget">
            <div class="widget-title">
                <h4 style="color:#000">Service<span> Details</span></h4>
            </div>
            
            
        </div><!-- Widget -->	
    </div>
</div>
                           
    
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col column s12 m12 l12">
                    <div class="staff-detail">
                        <div class="member-introduction">
                            <div class="member-wrapper">
                                      <?php
                                        foreach ($service_info as $v_info) {
                                            ?>
                                
                                <h5>{{$v_info->short_description}}</h5>
                                <p>{{$v_info->long_description}}</p>
                                
                                <?php } ?>
                            </div><!-- Member Detail -->
                        </div>
                    </div><!-- Member Introduction -->


                </div><!-- Staff Detail -->
            </div>
        </div>
    </div>
</div>










</section>
@endsection