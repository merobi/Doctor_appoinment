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
     
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        
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
           <li> <a href="import_hospitals">Import Hospital</a></li>
            <li> <a href="hospitals_info">View Hospitals </a></li>  
            <li> <a href="export_hospital">Export Hospitals </a></li>  
          </ul>
        </li>
        <li> <a href="forms" class="waves-effect"><i data-icon="&#xe00b;" class=" 	fa fa-heartbeat fa-2x fa-fw"></i> <span class="hide-menu">Diagnostic Center<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="add_diagnostic">Add Diagnostic Center</a></li>
            <li> <a href="import_diagnostic">Import Diagnostic Center</a></li>
            <li> <a href="diagnostics_info">View Diagnostic Center</a></li>  
            <li> <a href="export_diagnostic">Export Diagnostic Center</a></li>  
          </ul>
        </li>
		<li><a href="inbox" class="waves-effect"><i data-icon=")" class="fa fa-user-md fa-2x fa-fw"></i> <span class="hide-menu">Doctors <span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="add_doctor">Add Doctor</a></li>
            <li> <a href="import_doctors">Import Doctor</a></li>
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
          <h4 class="page-title">Dashboard </h4>
        </div>
        
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
          <div class="white-box">
            <div class="row row-in">
              <div class="col-lg-3 col-sm-6 row-in-br">
                <div class="col-in row">
                  <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="fa fa-user-md" ></i>
                    <h5 class="text-muted vb">Total Doctors</h5>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <h3 class="counter text-right m-t-15 text-danger">23</h3>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                <div class="col-in row">
                  <div class="col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-hospital-o" data-icon="&#xe01b;"></i>
                    <h5 class="text-muted vb">Total Hospitals</h5>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <h3 class="counter text-right m-t-15 text-megna">169</h3>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                      <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 row-in-br">
                <div class="col-in row">
                  <div class="col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-heartbeat" data-icon="&#xe00b;"></i>
                    <h5 class="text-muted vb">Total Diagnostic</h5>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <h3 class="counter text-right m-t-15 text-primary">157</h3>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6  b-0">
                <div class="col-in row">
                  <div class="col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-wheelchair" data-icon="&#xe016;"></i>
                    <h5 class="text-muted vb">Total Patients</h5>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <h3 class="counter text-right m-t-15 text-success">431</h3>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--row -->
      <!-- /.row -->
   
      <!--row -->
      <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
          <div class="white-box">
            <h3 class="box-title">Recent Comments</h3>
            <div class="comment-center">
              <div class="comment-body">
                <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                <div class="mail-contnet">
                  <h5>Pavan kumar</h5>
                  <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
              </div>
              <div class="comment-body">
                <div class="user-img"> <img src="plugins/images/users/sonu.jpg" alt="user" class="img-circle"> </div>
                <div class="mail-contnet">
                  <h5>Sonu Nigam</h5>
                  <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span><span class="label label-rounded label-success">APPROVED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
              </div>
              <div class="comment-body">
                <div class="user-img"> <img src="plugins/images/users/arijit.jpg" alt="user" class="img-circle"> </div>
                <div class="mail-contnet">
                  <h5>Arijit Sinh</h5>
                  <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. </span><span class="label label-rounded label-danger">REJECTED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
          
          <div class="white-box">
            <h3 class="box-title">Chat </h3>
            <div class="chat-box">
              <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                <li>
                  <div class="chat-image"> <img alt="male" src="plugins/images/users/sonu.jpg"> </div>
                  <div class="chat-body">
                    <div class="chat-text">
                      <h4>You</h4>
                      <p> Hi, All! </p>
                      <b>10.00 am</b> </div>
                  </div>
                </li>
                <li class="odd">
                  <div class="chat-image"> <img alt="Female" src="plugins/images/users/genu.jpg"> </div>
                  <div class="chat-body">
                    <div class="chat-text">
                      <h4>Mrs.Doctor</h4>
                      <p> Hi, How are you? yor next  next meeting? </p>
                      <b>10.03 am</b> </div>
                  </div>
                </li>
                <li>
                  <div class="chat-image"> <img alt="male" src="plugins/images/users/ritesh.jpg"> </div>
                  <div class="chat-body">
                    <div class="chat-text">
                      <h4>You</h4>
                      <p> Hi, Good, tomorrow </p>
                      <b>10.05 am</b> </div>
                  </div>
                </li>
              </ul>
              <div class="row">
                <div class="col-sm-12">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Say something">
                    <span class="input-group-btn">
                    <button class="btn btn-success" type="button">Send</button>
                    </span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!-- /.row -->
      <!--row -->
     
     
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
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Counter js -->
<script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="plugins/bower_components/raphael/raphael-min.js"></script>
<script src="plugins/bower_components/morrisjs/morris.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
<script src="js/dashboard1.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script type="text/javascript">
  
  /* $(document).ready(function() {
      $.toast({
        heading: 'Welcome to Elite admin',
        text: 'Use the predefined ones, or specify a custom position object.',
        position: 'top-right',
        loaderBg:'#ff6849',
        icon: 'info',
        hideAfter: 3500, 
        
        stack: 6
      })
    });*/
</script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
