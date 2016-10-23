
@extends('master')
@section('content')
<div class="pagetop">
	<div class="container">		
		<ul>
			<li>PATIENT LOGIN</li>
		</ul>
	</div>
</div>



<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col column offset-l2 s12 m12 l8" style="border:1px solid #9E449B">
					<div class="modern-title">
						<h5>Please enter your username & password </h5>
						<span>To Provide Comprehensive Quality Care</span>
					</div>

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
						{!! Form::open(array('url' => '/Patient-login' , 'method'=>'post'  )) !!}
						    <div class="row" style="padding:30px">
								<div class="input-field col s12 m12 l12">
									<div class="input-field col s3 m3">
										<span>Username</span>
									</div>
									<div class="input-field col s12 m6">
                                                                            <input name="username"  type="text" placeholder="Enter Username" required=""/>
                                                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
										<span></span>
									</div>
								</div>
								<div class="input-field col s12 m12 l12">
									<div class="input-field col s3 m3">
										<span>Password</span>
									</div>
									<div class="input-field col s12 m6">
                                                                            <input name="password"  type="password" placeholder="Enter Password" required=""/>
									<span></span>
									</div>
								</div>
							
							
								<div class="input-field col s12 m12 l12">
                                                                    <button id="submit" class="coloured-btn submit" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> LOGIN</button></a>
								</div>
								<div class="input-field col s12 m12 l12">
									<a href="{{URL::to('/patient-registration')}}"><button id="submit" class="coloured-btn submit" type="button"><i class="fa fa-registered" aria-hidden="true"></i> Registration</button></a>
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