@extends('master')
@section('header')

<!-- Responsive Header -->
<header class="stick">
	<div class="topbar style2">
		<div class="container">
			<ul class="topbar-info">
				<li><i class="icon-telephone2"></i> <strong>Call Us Today!</strong>  (+88) 01874060299</li>
				<li><i class="icon-envelope"></i> <strong>Email:</strong>  info@techcoderz.com</li>
			</ul>
			<div class="social-icons">
				<a class="facebook" title="" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a class="linkedin" title="" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
				<a class="twitter" title="" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				<a class="skype" title="" href="https://www.skype.com/"><i class="fa fa-skype"></i></a>
			</div>
			<div class="social-icons">
				<a class="facebook" title="" href="#"><i><img src="{{URL::to('images/flags/square/english_uk.png')}}" style="height:30px;width:30px"></i></a>
				<a class="facebook" title="" href="#"><i><img src="{{URL::to('images/flags/square/deutsch.png')}}" style="height:30px;width:30px"></i></a>
				<a class="facebook" title="" href="#"><i><img src="{{URL::to('images/flags/square/afrikaans.png')}}" style="height:30px;width:30px"></i></a>
				<a class="facebook" title="" href="#"><i><img src="{{URL::to('images/flags/square/icelandic.png')}}" style="height:30px;width:30px"></i></a>
				<a class="facebook" title="" href="#"><i><img src="{{URL::to('images/flags/square/turkce.png')}}" style="height:30px;width:30px"></i></a>
<!--				<a class="call-popup popup1" title="" href="#"><i>FAQ</i></a>-->
				
			</div>
		</div>
	</div><!-- Topbar -->
	<div class="menu-bar-height"></div>
	<div class="menu-bar">
		<div class="container">
			<div class="logo"><a href="#" title=""><img src="images/new/Home-Icon.png" style="height:70px" alt="" /></a></div>
			<nav class="menu">
				<ul>
					<li><a href="{{URL::to('/')}}" title="">HOME</a></li>
					<li><a class="call-popup popup11" href="#" title="">HOSPITALS</a></li>					
					<li><a class="call-popup popup12" href="#" title="">DIAGNOSTIC CENTER</a></li>
					<li><a class="call-popup popup13" href="#"  title="">SPECIALIST</a></li>					
					<li><a href="{{URL::to('/contact')}}" title="">CONTACT</a></li>					
					<?php 
                                         $login_id = Session::get('login_id');
                                          if(!$login_id){
                                        ?>
                                              <li><a href="#" title="">LOGIN</a>
                                          
						<ul>
							<li><a href="{{URL::to('/doctor-login')}}" title="">Doctor's Login</a></li>
							<li><a href="{{URL::to('/hospital-login')}}" title="">Hospital's Login</a></li>
							<li><a href="{{URL::to('/center-login')}}" title="">Diagnostic Center Login </a></li>
							<li><a href="{{URL::to('/patient-login')}}" title="">Patient Login</a></li>
						</ul>
					</li>
                                        <?php
                                          }else{
                                          ?>
                                            <li><a href="{{URL::to('/Logout')}}" title="">Logout</a></li>	
                                        <?php } ?>
					
				</ul>
				
			</nav>
		</div>
	</div><!-- Menu Bar -->
</header><!-- Header -->
@endsection