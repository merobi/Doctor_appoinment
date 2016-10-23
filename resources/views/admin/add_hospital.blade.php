  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
<title>Prodocapp</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- Page plugins css -->
<link href="plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<!-- Color picker plugins css -->
<link href="plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker plugins css -->
<link href="plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/megna.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="../../../../www.w3schools.com/lib/w3data.js"></script>

<link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Top Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
       <div class="top-left-part"><a class="logo" href="home"><b><img src="imgs/Home-Icon.png" style="height:60px;width:100%" alt="home" /></b></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
     <?php foreach ($login_user_details as $row) { ?>

     
       <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="imgs/{{$row->image}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $row->fullname; ?></b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="<?php echo 'edit_admin/'.Session::get('login_id'); ?>"><i class="ti-user"></i> My Profile
            
            
            <li role="separator" class="divider"></li>
            <li><a href="logout"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <?php    } ?>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
  <!-- End Top Navigation -->
  <!-- Left navbar-header -->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
      <ul class="nav" id="side-menu">
        
        <li> <a href="home" class="waves-effect "><i class="fa fa-home fa-2x fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> </span></a></li>
        
        <li> <a href="#" class="waves-effect"><i data-icon="/" class="fa fa-hospital-o fa-2x fa-fw"></i> <span class="hide-menu"> Hospitals<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
           <li> <a href="add_hospital">Add Hospital</a></li>
           <!-- <li> <a href="import_hospitals">Import Hospital</a></li>-->
            <li> <a href="hospitals_info">View Hospitals </a></li>  
            <li> <a href="export_hospital">Export Hospitals </a></li>  
          </ul>
        </li>
        <li> <a href="forms" class="waves-effect"><i data-icon="&#xe00b;" class="   fa fa-heartbeat fa-2x fa-fw"></i> <span class="hide-menu">Diagnostic Center<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="add_diagnostic">Add Diagnostic Center</a></li>
            <!--<li> <a href="import_diagnostic">Import Diagnostic Center</a></li>-->
            <li> <a href="diagnostics_info">View Diagnostic Center</a></li>  
            <li> <a href="export_diagnostic">Export Diagnostic Center</a></li>  
          </ul>
        </li>
    <li><a href="inbox" class="waves-effect"><i data-icon=")" class="fa fa-user-md fa-2x fa-fw"></i> <span class="hide-menu">Doctors <span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="add_doctor">Add Doctor</a></li>
            <!-- <li> <a href="import_doctors">Import Doctor</a></li>-->
            <li> <a href="doctors_info"> View Doctors </a></li>            
            <li> <a href="export_doctors"> Export Doctors </a></li>            
          </ul>
        </li>
        <li> <a href="tables" class="waves-effect "><i data-icon="O" class="fa fa-wheelchair fa-2x fa-fw"></i> <span class="hide-menu">Patients<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="add_patient">Add Patient</a></li>
            <li> <a href="patients_info">View Patients</a></li>  
            <li> <a href="export_patients">Export Patients</a></li>  
          </ul>
        </li>        
    <li> <a href="#" class="waves-effect " ><i data-icon="&#xe008;" class="fa fa-user fa-2x fa-fw"></i> <span class="hide-menu">Appointment<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="add_appointment">Add Appointment</a></li>
            <li> <a href="appointment_info">View Appointment</a></li>  
            <li> <a href="export_appointments">Export Appointment</a></li>  
          </ul>
        </li>
    <li> <a href="#" class="waves-effect " ><i data-icon="&#xe008;" class="fa fa-user fa-2x fa-fw"></i> <span class="hide-menu">Admin<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="add_admin">Add Admin</a></li>
            <li> <a href="admins_info">View Admin</a></li>  
            <li> <a href="export_admin">Export Admin</a></li>  
          </ul>
        </li>     
        <li> <a href="logout" class="waves-effect "><i class="fa fa-sign-out fa-2x fa-fw" data-icon="v"></i> <span class="hide-menu"> Logout <span class="fa arrow"></span> </span></a></li>
</ul>
    </div>
  </div>
  <!-- Left navbar-header end -->
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Add Hospital</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Hospital</a></li>
            <li class="active">Add Hospital</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
		      <!-- .row -->
      	      <!-- .row -->
      <div class="row" style="background:#fff">
	    <form data-toggle="validator" class="form-horizontal" method="POST" action="manage_institution_info" enctype="multipart/form-data">
       <p class="text-muted m-t-30" style="color:green;text-align:center"><?php echo Session::get('message'); ?></p> 
        <div class="col-sm-6">
          <div class="white-box">
            <h3 class="box-title m-b-0" style="text-align:center">Hospital Information</h3>
            <p class="text-muted m-b-30">  </p>
           
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Hospital Name</label>
                 <div class="col-sm-9">
					<input type="text" class="form-control" name="name" placeholder="Enter Hospital Name"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Hospital Image</label>
                 <div class="col-sm-9">
                     <input type="file"  name="image" placeholder="Enter Hospital Name"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			  <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Registration Code</label>
                 <div class="col-sm-9">
					<input type="text" class="form-control" name="registration_code" placeholder="Enter Post Code"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			  <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Post Code</label>
                 <div class="col-sm-9">
					<input type="text" class="form-control" name="post_code" placeholder="Enter Post Code"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <!--<div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Establish Date</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="datepicker-autoclose" name="date" placeholder="mm/dd/yyyy" required>
					<div class="help-block with-errors"></div>
                </div>
              </div>-->
			  <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" placeholder="Enter Email"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			  <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Phone Number</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
				<div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Fax Number</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="fax" placeholder="Enter Phone Number"  required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			
			
          </div>
        </div>
		<div class="col-sm-6">
          <div class="white-box">
            <h3 class="box-title m-b-0" style="text-align:center"></h3>

            <p class="text-muted m-b-30">  </p>
			 
               <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Address</label>
                <div class="col-sm-9">
                  <textarea type="email" class="form-control"  name="address" placeholder="Enter Address"  required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
			  <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">About Hospital</label>
                <div class="col-sm-9">
                  <textarea type="email" class="form-control"  name="about_hospital" placeholder="Enter Address"  required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
               <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">Country.</label>
                <div class="col-sm-9">
                    <select class="selectpicker m-b-0 m-r-10" id="country" style="width:100%" name="country_id" data-style="btn-primary btn-outline" required>
                      <option value="">Select Country</option>
                      <?php foreach ($country_list as $key) { ?>
                         <option value="{{$key->country_id}}">{{$key->country_name}}</option>
                      <?php } ?>
                      
                   </select>
          <div class="help-block with-errors"></div>
                </div>
              </div>
               <div class="form-group">
                <label for="inputEmail4" class="control-label col-sm-3">City.</label>
                <div class="col-sm-9">
                    <select class="selectpicker m-b-0 m-r-10" id="city" style="width:100%" name="city_id" data-style="btn-primary btn-outline" required>
          						<option value="">Select City</option>          						
					         </select>
					<div class="help-block with-errors"></div>
                </div>
              </div>
              
          	
              
             <h3 class="box-title m-b-0" style="text-align:center">Account Details</h3>
			 <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputName4" name="username" placeholder="Enter Username" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4" class="control-label col-sm-3">Password</label>
                <div class="col-sm-9">
                  <input type="password" data-toggle="validator" data-minlength="6" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                  <span class="help-block">Minimum of 6 characters</span> </div>                
              </div>
              <input type="hidden" name="_token"  value="{{ csrf_token() }}" />
               <input type="hidden" name="type"  value="Hospital" />
              <div class="form-group">
              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                  <button type="submit" type="submit" class="btn btn-info">Submit</button>
                </div>
              </div>
			
			  
			  
            </form>
			
          </div>
        </div>
        </div>

      <!-- /.row -->
      <!-- .right-sidebar -->
      <div class="right-sidebar">
        <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
          <div class="r-panel-body">
            <ul>
              <li><b>Layout Options</b></li>
              <li>
                <div class="checkbox checkbox-info">
                  <input id="checkbox1" type="checkbox" class="fxhdr">
                  <label for="checkbox1"> Fix Header </label>
                </div>
              </li>
              
            </ul>
            <ul id="themecolors" class="m-t-20">
              <li><b>With Light sidebar</b></li>
              <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
              <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
              <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
              <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
              <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
              <li><a href="javascript:void(0)" theme="megna" class="megna-theme working">6</a></li>
              <li><b>With Dark sidebar</b></li>
              <br/>
              <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
              <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
              <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

              <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
              <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
              <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
              <li><b>Chat option</b></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> Design And Develop By : Techcoderz LTD</footer>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->


<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!-- Plugin JavaScript -->
<script src="plugins/bower_components/moment/moment.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
// Clock pickers
$('#single-input').clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'

});

$('.clockpicker').clockpicker({
    donetext: 'Done',
    
})
  .find('input').change(function(){
    console.log(this.value);
});

$('#check-minutes').click(function(e){
  // Have to stop propagation here
  e.stopPropagation();
  input.clockpicker('show')
      .clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
  $('input').prop('readOnly', true);
}
// Colorpicker

$(".colorpicker").asColorPicker();
$(".complex-colorpicker").asColorPicker({
    mode: 'complex'
});
$(".gradient-colorpicker").asColorPicker({
    mode: 'gradient'
});
// Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
      });
      
    jQuery('#date-range').datepicker({
        toggleActive: true
      });
    jQuery('#datepicker-inline').datepicker({
        
        todayHighlight: true
      });

// Daterange picker

$('.input-daterange-datepicker').daterangepicker({
          buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse'
        });
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                format: 'MM/DD/YYYY h:mm A',
                timePickerIncrement: 30,
                timePicker12Hour: true,
                timePickerSeconds: false,
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse'
            });
            $('.input-limit-datepicker').daterangepicker({
                format: 'MM/DD/YYYY',
                minDate: '06/01/2015',
                maxDate: '06/30/2015',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse',
                dateLimit: {
                    days: 6
                }
            });
</script>

<script type="text/javascript" charset="utf-8">
            $(function () {
                $("#country").on('change', function () {
                    console.log($(this).val());
                    $.ajax({
                        scriptCharset: "utf-8",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        type: 'GET',
                        url: '../resources/views/set_city.php?country_id=' + $(this).val(),
                        success: function (text) {
                            console.log(text);
                            $("#city").html(text);
                        }
                    });
                });


            });
            /*$(function () {
                $("#country1").on('change', function () {
                    console.log($(this).val());
                    $.ajax({
                        scriptCharset: "utf-8",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        type: 'GET',
                        url: '../resources/views/pages/city.php?country_id=' + $(this).val(),
                        success: function (text) {
                            console.log(text);
                            $("#city1").html(text);
                        }
                    });
                });


            });

            $(function () {
                $("#country2").on('change', function () {
                    console.log($(this).val());
                    $.ajax({
                        scriptCharset: "utf-8",
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        type: 'GET',
                        url: '../resources/views/pages/city.php?country_id=' + $(this).val(),
                        success: function (text) {
                            console.log(text);
                            $("#city2").html(text);
                        }
                    });
                });

                $("#city2").on('change',function(){
                     console.log($(this).val());
                     $.ajax({
                         scriptCharset: "utf-8" ,
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         type: 'GET',
                         url: '../resources/views/pages/city.php?city_id='+$(this).val(),
                           success: function(text) {
                            console.log(text);
                            $("#hospital1").html(text);
                        }
                     });
                });/*/
                
            // });
        </script>
<!--Style Switcher -->
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
<script src="js/validator.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
