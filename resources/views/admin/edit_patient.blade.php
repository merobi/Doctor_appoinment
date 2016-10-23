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
<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<!-- Menu CSS -->
<link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
<!-- Page plugins css -->
<link href="{{ asset('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet">
<!-- Color picker plugins css -->
<link href="{{ asset('plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="{{ asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Daterange picker plugins css -->
<link href="{{ asset('plugins/bower_components/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('css/colors/megna.css') }}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="../../../../www.w3schools.com/lib/w3data.js"></script>

<link href="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
</head>


<body>
<!-- Preloader -->

<div id="wrapper">
  <!-- Top Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
       <div class="top-left-part"><a class="logo" href="{{ url('home') }}"><b> <img src="{{ URL::to('/') }}/imgs/Home-Icon.png" style="height:60px;width:100%" alt="Logo " /></b></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
     
         <?php foreach ($login_user_details as $row) { ?>

     
       <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ URL::to('/') }}/imgs/{{ $row->image }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $row->fullname; ?></b> </a>
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
        
        <li> <a href="{{ url('home') }}" class="waves-effect "><i class="fa fa-home fa-2x fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> </span></a></li>
        
        <li> <a href="#" class="waves-effect"><i data-icon="/" class="fa fa-hospital-o fa-2x fa-fw"></i> <span class="hide-menu"> Hospitals<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
           <li> <a href="{{ url('add_hospital') }}">Add Hospital</a></li>
           <!--<li> <a href="{{ url('import_hospitals') }}">Import Hospital</a></li>-->
            <li> <a href="{{ url('hospitals_info') }}">View Hospitals </a></li>  
            <li> <a href="{{ url('export_hospital') }}">Export Hospitals </a></li>  
          </ul>
        </li>
        <li> <a href="forms" class="waves-effect"><i data-icon="&#xe00b;" class="   fa fa-heartbeat fa-2x fa-fw"></i> <span class="hide-menu">Diagnostic Center<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{ url('add_diagnostic') }}">Add Diagnostic Center</a></li>
            <!--<li> <a href="{{ url('import_diagnostic') }}">Import Diagnostic Center</a></li>-->
            <li> <a href="{{ url('diagnostics_info') }}">View Diagnostic Center</a></li>  
            <li> <a href="{{ url('export_diagnostic') }}">Export Diagnostic Center</a></li>  
          </ul>
        </li>
    <li><a href="inbox" class="waves-effect"><i data-icon=")" class="fa fa-user-md fa-2x fa-fw"></i> <span class="hide-menu">Doctors <span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{ url('add_doctor') }}">Add Doctor</a></li>
           <!--<li> <a href="{{ url('import_doctors') }}">Import Doctor</a></li>-->
            <li> <a href="{{ url('doctors_info') }}"> View Doctors </a></li>            
            <li> <a href="{{ url('export_doctors') }}"> Export Doctors </a></li>            
          </ul>
        </li>
        <li> <a href="tables" class="waves-effect "><i data-icon="O" class="fa fa-wheelchair fa-2x fa-fw"></i> <span class="hide-menu">Patients<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{ url('add_patient') }}">Add Patient</a></li>
            <li> <a href="{{ url('patients_info') }}">View Patients</a></li>  
            <li> <a href="{{ url('add_hospital') }}">Export Patients</a></li>  
          </ul>
        </li>        
    <li> <a href="#" class="waves-effect " ><i data-icon="&#xe008;" class="fa fa-user fa-2x fa-fw"></i> <span class="hide-menu">Appointment<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{ url('add_appointment') }}">Add Appointment</a></li>
            <li> <a href="{{ url('appointment_info') }}">View Appointment</a></li>  
            <li> <a href="{{ url('export_appointments') }}">Export Appointment</a></li>  
          </ul>
        </li>
    <li> <a href="#" class="waves-effect " ><i data-icon="&#xe008;" class="fa fa-user fa-2x fa-fw"></i> <span class="hide-menu">Admin<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{ url('add_admin') }}">Add Admin</a></li>
            <li> <a href="{{ url('admins_info') }}">View Admin</a></li>  
            <li> <a href="{{ url('export_admin') }}">Export Admin</a></li>  
          </ul>
        </li>     
        <li> <a href="{{ url('logout') }}" class="waves-effect "><i class="fa fa-sign-out fa-2x fa-fw" data-icon="v"></i> <span class="hide-menu"> Logout <span class="fa arrow"></span> </span></a></li>
</ul>
    </div>
  </div>
  <!-- Left navbar-header end -->
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Update Admin</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Update Admin</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
          <!-- .row -->
      <div class="row" style="background:#fff">    
       {!! Form::open(array('url' => 'update_patient' , 'method'=>'post', 'files'=>'true','enctype'=>'multipart/form-data')) !!}
     <div data-toggle="validator" class="form-horizontal">
      <div class="col-sm-3">

      </div>  
      <div class="col-sm-6">
          <div class="white-box">
            
        <h3 class="box-title m-b-0" style="text-align:center">Account Details</h3>
            <p class="text-muted m-b-30" style="color:green;text-align:center"><?php echo Session::get('message'); ?></p>  
           <?php 
                foreach ($users as $row) {                 
              ?>
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputName4" value="<?= $row->username ?>" name="username" placeholder="Enter Username" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            
              <div class="form-group">
                <label for="inputPassword4" class="control-label col-sm-3">Password</label>
                <div class="col-sm-9">
                  <input type="text" name="password" value="<?= $row->password ?>"  data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword4" placeholder="Enter Password" required>
                   <input type="hidden" name="id" value="<?= $row->id ?>"  data-toggle="validator"  class="form-control" id="inputPassword4" placeholder="Enter Password" required>
                  <span class="help-block">Minimum of 6 characters</span> </div>
                
              </div>
              <?php } ?>

              <?php 
                foreach ($patient_info as $row) {                 
              ?>
               <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Full Name</label>
                <div class="col-sm-9">
                  <input type="text" value="<?= $row->name ?>"  class="form-control" id="inputName4" name="name" placeholder="Enter Full Name" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
               <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Old Photo</label>
                <div class="col-sm-9">
                  <img src="{{ URL::to('/') }}/imgs/{{ $row->image }}" style="height:150px;with:150px" alt="{{ $row->name }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Select New Photo</label>
                <div class="col-sm-9">
                  <input type="file"  id="inputName4" name="image" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
               <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Email</label>
                <div class="col-sm-9">
                  <input type="email" value="<?= $row->email ?>"  class="form-control" id="inputName4" name="email" placeholder="Enter Email" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
               <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Phone Number</label>
                <div class="col-sm-9">
                  <input type="number" value="<?= $row->phone ?>"  class="form-control" id="inputName4" name="phone" placeholder="Enter Phone" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
               <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Blood Group</label>
                <div class="col-sm-9">
                  <input type="text" value="<?= $row->bloodgroup ?>"  class="form-control" name="bloodgroup" id="inputName4" name="phone" placeholder="Enter Phone" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Age</label>
                <div class="col-sm-9">
                  <input type="number" value="<?= $row->age ?>"  name="age" class="form-control" id="inputName4" name="phone" placeholder="Enter Phone" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                  <label for="inputName4" class="control-label col-sm-3">Gender</label>
                  <div class="col-sm-9">
                  <select class="selectpicker m-b-0 m-r-10" name="gender" style="width:100%" data-style="btn-primary btn-outline" required>
                    <option value="<?= $row->gender ?>"><?= $row->gender ?></option>
                    <option value="Male">Male</option>
                    <option value=">Female">Female</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
              </div>
               <div class="form-group">
                  <label for="inputEmail4" class="control-label col-sm-3">Birthday</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" value="<?= $row->birthday ?>" name="birthday" id="datepicker-autoclose" placeholder="mm/dd/yyyy" required>
                  <div class="help-block with-errors"></div>
                  </div>
                </div>
               <div class="form-group">
                <label for="inputName4" class="control-label col-sm-3">Address</label>
                <div class="col-sm-9">
                  <input type="text" value="<?= $row->address ?>"  class="form-control" id="inputName4" name="address" placeholder="Enter Address" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <?php } ?>
              <input type="hidden" name="_token"  value="{{ csrf_token() }}" />
              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                  <button type="submit" name="submit" class="btn btn-info">Submit</button>
                </div>
              </div>

            </div>
            
      
          </div>
        </div>
        {!! Form::close() !!}
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
<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!-- Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/moment/moment.js') }}"></script>
<!-- Clock Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js') }}"></script>
<script src="{{ asset('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js') }}"></script>
<script src="{{ asset('plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') }}"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- Date range Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/validator.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
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
<!--Style Switcher -->
<!--slimscroll JavaScript -->

</body>
</html>
