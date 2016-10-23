<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\laravel;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
/**
 * 
 */
class staticPagesController extends BaseController {

    public function index() {
        return view('index');
    }

    public function homepage() {
        return view('home');
    }

    public function hospitals_info() {

        $users = DB::table('institute_info')
                ->join('tbl_users', 'tbl_users.id', '=', 'institute_info.user_id')
                //->select('users.*', 'admin_details.*')
                ->where('tbl_users.type', 'Hospital')
                ->get();

        return view('hospitals_info')->with('data', $users);
    }

    public function addadmin() {
        return view('add_admin');
    }

    public function add_appointment() {
        $patients_info = DB::table('patient')
                ->get();
        $doctors_info = DB::table('doctors_info')
                ->get();
        $camber_info = DB::table('camber_info')
                ->get();

        return view('add_appointment')
                        ->with('patients_info', $patients_info)
                        ->with('doctors_info', $doctors_info)
                        ->with('camber_info', $camber_info);
    }

    public function add_diagnostic() {
        return view('add_diagnostic');
    }

    public function add_doctor() {
        return view('add_doctor');
    }

    public function add_doctor_cheek(Request $request) {
      $data=array();
      $data2=array();
      $data3=array();
      $data4=array();
      $data5=array();
      $data6=array();
      $data7=array();
      $data8=array();
      $image = $request->file('image');
      $file_size =   $image->getClientSize();
        
        if ($image) {
        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'imgs/';
        $image_url = $upload_path . $image_full_name;
        if($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg')
        {
            if($file_size < 2097153)
            {
            $success = $image->move($upload_path, $image_full_name);
            }
            else{
                 Session::put('message', "Maxmium file size is 2MB !");
        return Redirect::to('/add_doctor');
            }
        }
        else{
             Session::put('message', "File Type not supported  !");
        return Redirect::to('/add_doctor');
        }
        if($success)
        {
          
      $data['username']=$request->username;
      $data['password']=$request->password;
      DB::table('tbl_users')->insert($data);
      $user_id=DB::getPdo()->lastInsertId();
      
      $data2['user_id']=$user_id;
      $data2['degree']=$request->degree;
      $data2['speciality']=$request->speciality;
      $data2['subspeciality']=$request->subspeciality;
      $data2['institution']=$request->institution;
      DB::table('doctors_speciality')->insert($data2);
      $speciality_id =DB::getPdo()->lastInsertId();
      
      $data7['country_name']=$request->country_name;
      DB::table('tbl_country')->insert($data7);
      $country_id =DB::getPdo()->lastInsertId();
      
      $data8['country_id']=$country_id;
      $data8['city_name']=$request->c_city;
      DB::table('tbl_city')->insert($data8);
      
      $data3['name']=$request->c_name;
      $data3['address']=$request->c_address;
      $data3['country_id']=$request->country_id2;
      $data3['city_id'] = $request->city_id;
      $data3['postcode'] = $request->c_code;
      $data3['phonenumber']=$request->c_phone;
      $data3['contactsupport']=$request->c_suppt;
      $data3['day'] = $request->day;
      $data3['start_time']=$request->start_time;
      $data3['end_time']=$request->end_time;
      DB::table('camber_info')->insert($data3);
      $camber_id =DB::getPdo()->lastInsertId();
      
     $institute_id =DB::getPdo()->lastInsertId();
      
      $data5['user_id']=$user_id;
      $data5['s_name']=$request->s_name;
      $data5['link']=$request->link;
      DB::table('social_media')->insert($data5);
      $social_id =DB::getPdo()->lastInsertId();
      
      
      $data6['user_id'] = $user_id;
      $data6['speciality_id'] = $speciality_id;
      $data6['camber_id'] = $camber_id;
//      $data6['institute_id'] = $institute_id;
      $data6['socialmedia_id'] = $social_id;
//      $data6['hospital_id'] = $request->hospital_id;
      $data6['title'] = $request->title;
      $data6['firstname'] = $request->firstname;
      $data6['lastname']=$request->lastname;
      $data6['image']=$image_url;
      $data6['birthday']=$request->birthday;
      $data6['email']=$request->email;
      $data6['phone_no']=$request->phone_no;
      $data6['bloodgroup']=$request->bloodgroup;
      $data6['regi_no']=$request->regi_no;
      $data6['address']=$request->address;
      $data6['country_id']=$request->country_id2;
      $data6['city_id']=$request->city_id;
      $data6['post_code']=$request->post_code;
      $data6['about_me']=$request->about_me;
      DB::table('doctors_info')->insert($data6);
      
      
      
      Session::put('message',"Doctor Add Successfully");
      
       return Redirect::to('/add_doctor');
       
    }
    }
    }
    public function add_hospital() {
        return view('add_hospital');
    }

    public function add_patient() {
        return view('add_patient');
    }

    public function admins_info() {

        $login_id = Session::get('login_id');
        if ($login_id) {
            $login_user_details = DB::table('admin_details')
                    ->where('user_id', $login_id)
                    ->get();

            //$users = DB::table('users')->get();
            $users = DB::table('admin_details')
                    ->join('tbl_users', 'tbl_users.id', '=', 'admin_details.user_id')
                    //->select('users.*', 'admin_details.*')
                    ->get();

            return view('admins_info')->with('data', $users)->with('login_user_details', $login_user_details);
            //return view('admins_info')->with('data',$users)/*->with('details',$admin_details)*/;
        } else {
            return redirect('index');
        }
    }

    public function doctors_info() {
        return view('doctors_info');
    }

    public function appointment_info() {

        $appointment_info = DB::table('appoinment')
                ->join('doctors_info', 'doctors_info.id', '=', 'appoinment.doctor_id')
                ->join('camber_info', 'camber_info.id', '=', 'appoinment.chamber_id')
                ->join('patient', 'patient.id', '=', 'appoinment.patient_id')
                ->select('camber_info.name as chambername', 'appoinment.id as appid', 'doctors_info.firstname', 'doctors_info.lastname', 'patient.name as patientname', 'appoinment.*')
                ->get();

        return view('appointment_info')->with('appointment_info', $appointment_info);
    }

    public function diagnostics_info() {
        $users = DB::table('institute_info')
                ->join('tbl_users', 'tbl_users.id', '=', 'institute_info.user_id')
                //->select('users.*', 'admin_details.*')
                ->where('tbl_users.type', 'Diagnostic')
                ->get();

        return view('diagnostics_info')->with('data', $users);
    }

    public function doctors_profile_details() {
        return view('doctors_profile_details');
    }

    public function edit_doctors() {
        return view('edit-doctors');
    }

    public function edit_admin($id) {
        $users = DB::table('admin_details')
                ->join('tbl_users', 'tbl_users.id', '=', 'admin_details.user_id')
                //->select('users.*', 'admin_details.*')
                ->get();
        return view('edit_admin')->with('data', $users);
    }

    public function edit_patient($id) {
        $users = DB::table('patient')->join('tbl_users', 'tbl_users.id', '=', 'patient.user_id')->get();
        return view('edit_patient')->with('data', $users);
    }
    
    public function update_admin(Request $request) {

        $admin = $request->all();

        $image = $request->file('image');
        $file_size = $image->getClientSize();
        if ($image) {
		        $image_name = str_random(20);
		        $ext = strtolower($image->getClientOriginalExtension());
		        $image_full_name = $image_name . '.' . $ext;
		        $upload_path = 'imgs/';
		        $image_url = $upload_path . $image_full_name;
		        if($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg')
		        {
		            if($file_size < 2097153)
		            {
		            	$success = $image->move($upload_path, $image_full_name);
		            }
		            else{
		                 \Session::flash('message', "Maxmium file size is 2MB !");
		       			return redirect('admins_info');
		            }
		        }
		        else{
		             \Session::flash('message', "File Type not supported  !");
		      		 return redirect('admins_info');
		        }
		        if($success)
		        {
                $id = $request->id;
                $i = DB::table('tbl_users')
                        ->where('id', $id)
                        ->update(
                        array(
                            'username' => $admin['username'],
                            'password' => $admin['password'],
                            'type' => "Admin",
                        )
                );

                $j = DB::table('admin_details')
                        ->where('user_id', $id)
                        ->update(
                        array(
                            'fullname' => $admin['fullname'],
                            'email' => $admin['email'],
                            'phone' => $admin['phone'],
                            'address' => $admin['address'],
                            'user_id' => $admin['id'],
                            'image' => $file_size,
                        )
                );
                if ($i > 0 && $j > 0) {
                    \Session::flash('message', 'Add successfull');
                    return Redirect::to('admins_info');
            
                }
        }
    }
    }
    
    public function edit_diagnostic() {
        return view('edit_diagnostic');
    }

    public function edit_hospital() {
        return view('edit_hospital');
    }

    

    public function export_admin() {
        return view('export_admin');
    }

    public function export_appointments() {
        return view('export_appointments');
    }

    public function export_diagnostic() {
        return view('export_diagnostic');
    }

    public function export_doctors() {
        return view('export_doctors');
    }

    public function export_hospital() {
        return view('export_hospital');
    }

    public function export_patients() {
        return view('export_patients');
    }

    public function import_diagnostic() {
        return view('import_diagnostic');
    }

    public function import_doctors() {
        return view('import_doctors');
    }

    public function import_hospitals() {
        return view('import_hospitals');
    }

    public function patients_info() {
        $users = DB::table('patient')
                ->join('tbl_users', 'tbl_users.id', '=', 'patient.user_id')
                ->get();
        return view('patients_info')->with('data', $users);
    }

    public function logout() {

        Session::forget('login_id');
        return view('index');
    }

}

?>
