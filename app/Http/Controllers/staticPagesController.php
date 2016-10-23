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
class staticPagesController extends BaseController
{

	public function index(){
		return view('index');
	}
	
	public function homepage(){	
	$login_id = Session::get('login_id');
		if($login_id){
			$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();

			return view('home')->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}

	public function hospitals_info(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();

		$users = DB::table('tbl_users')
            ->join('institute_info', 'institute_info.user_id', '=', 'tbl_users.id')
           	//->select('users.*', 'admin_details.*')
           	->where('tbl_users.type','Hospital')
            ->get();	

		return view('hospitals_info')->with('data',$users)->with('login_user_details',$login_user_details);	
		}else{
		return redirect('index');
		}
	}
	public function addadmin(){
		$login_id = Session::get('login_id');
		if($login_id){
			$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();

			return view('add_admin')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}

	public function add_appointment(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		$patients_info = DB::table('patient')
		            ->get();
		$doctors_info = DB::table('doctors_info')
		            ->get();	
		$camber_info = DB::table('camber_info')
		            ->get();                 

        return view('add_appointment')
        		->with('patients_info',$patients_info)
        		->with('doctors_info',$doctors_info)
        		->with('camber_info',$camber_info)
        		->with('login_user_details',$login_user_details);
        		}else{
		return redirect('index');
		}	
	}

	public function add_diagnostic(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
            $country_list = DB::table('tbl_country')
            ->get();
		return view('add_diagnostic')->with('country_list',$country_list)->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}

	public function add_doctor(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
            $country_list = DB::table('tbl_country')
            ->get();
		return view('add_doctor')->with('country_list',$country_list)->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}

	public function add_hospital(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
       $country_list = DB::table('tbl_country')
            ->get();
		return view('add_hospital')->with('country_list',$country_list)->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}

	public function add_patient(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('add_patient')->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}

	public function admins_info(){


		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();

		//$users = DB::table('users')->get();
		$users = DB::table('admin_details')
            ->join('tbl_users', 'tbl_users.id', '=', 'admin_details.user_id')
           	//->select('users.*', 'admin_details.*')
            ->get();	

		return view('admins_info')->with('data',$users)->with('login_user_details',$login_user_details);
		//return view('admins_info')->with('data',$users)/*->with('details',$admin_details)*/;
		}else{
		return redirect('index');
		}
	}

	

	public function appointment_info(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();

		$appointment_info = DB::table('appoinment')
            ->join('doctors_info', 'doctors_info.id', '=', 'appoinment.doctor_id')
            ->join('camber_info', 'camber_info.id', '=', 'appoinment.chamber_id')
            ->join('patient', 'patient.id', '=', 'appoinment.patient_id')    
            ->select('camber_info.name as chambername','appoinment.id as appid','doctors_info.firstname','doctors_info.lastname','patient.name as patientname','appoinment.*')       
            ->get();	

		return view('appointment_info')->with('appointment_info',$appointment_info)->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}

	public function diagnostics_info(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		$users = DB::table('tbl_users')
            ->join('institute_info', 'institute_info.user_id', '=', 'tbl_users.id')
           	//->select('users.*', 'admin_details.*')
           	->where('tbl_users.type','Diagnostic')
            ->get();	

		return view('diagnostics_info')->with('data',$users)->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}

	public function doctors_profile_details(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('doctors_profile_details')->with('login_user_details',$login_user_details);
		}else{
		return redirect('index');
		}
	}


	public function edit_doctors($id){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();

       
        $doctors_info = DB::table('doctors_info')
            ->where('id',$id)
            ->get();
        
        foreach ($doctors_info as $key) {
        	$user_id = $key->user_id;
	        $speciality_id = $key->speciality_id;
	        $chamber_id = $key->camber_id;
	        $hospital_id = $key->hospital_id;
	        $socialmedia_id =$key->socialmedia_id;
	        $city_id =$key->city_id;
	        $country_id =$key->country_id;
        }
        $doctors_user_info = DB::table('tbl_users')
            ->where('id',$user_id)
            ->get();
        $doctors_speciality_info = DB::table('doctors_speciality')
            ->where('id',$speciality_id)
            ->get();
        $doctors_chamber_info = DB::table('camber_info')
            ->where('id',$chamber_id)
            ->get();
        foreach ($doctors_chamber_info as $key) {        
	        $city_id2 =$key->city_id;
	        $country_id2 =$key->country_id;
        } 

        $doctors_hosptal_info = DB::table('institute_info')
            ->where('id',$hospital_id)
            ->get();
        $doctors_city_info = DB::table('tbl_city')
            ->where('city_id',$city_id)
            ->get();
        $doctors_country_info = DB::table('tbl_country')
            ->where('country_id',$country_id)
            ->get(); 
        $doctors_city_info2 = DB::table('tbl_city')
            ->where('city_id',$city_id2)
            ->get();
        $doctors_country_info2 = DB::table('tbl_country')
            ->where('country_id',$country_id2)
            ->get(); 

         $doctors_social_media_info = DB::table('social_media')
            ->where('id',$speciality_id)
            ->get();    
			return view('edit-doctors')
				->with('doctors_info',$doctors_info)
				->with('doctors_user_info',$doctors_user_info)
				->with('doctors_speciality_info',$doctors_speciality_info)
				->with('doctors_chamber_info',$doctors_chamber_info)
				->with('doctors_hosptal_info',$doctors_hosptal_info)
				->with('doctors_city_info',$doctors_city_info)
				->with('doctors_country_info',$doctors_country_info)
				->with('doctors_city_info2',$doctors_city_info)
				->with('doctors_country_info2',$doctors_country_info)
				->with('doctors_social_media_info',$doctors_social_media_info)
				->with('login_user_details',$login_user_details);

		}else{
		return redirect('index');
		}
	}


	public function edit_admin($id){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
        ->where('user_id',$login_id)
        ->get();
		$users_details = DB::table('admin_details')
		->where('user_id',$id)
		->get();	
		$users = DB::table('tbl_users')
		->where('id',$id)
        ->get();		
		return view('edit_admin')->with('data',$users)
			->with('users_details',$users_details)
			->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}



	public function edit_diagnostic($id){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
        $diagnostic_details = DB::table('institute_info')
            ->where('id',$id)
            ->get();

        foreach ($diagnostic_details as $key ) {
           $user_id=$key->user_id;
           $city_id = $key->city_id;
           $country_id = $key->country_id;
        }
        $users_details = DB::table('tbl_users')
            ->where('id',$user_id)
            ->get();
         $city_details = DB::table('tbl_city')
            ->where('city_id',$city_id)
            ->get();
         $country_details = DB::table('tbl_country')
            ->where('country_id',$country_id)
            ->get();

			return view('edit_diagnostic')
					->with('diagnostic_details',$diagnostic_details)
					->with('users_details',$users_details)
					->with('city_details',$city_details)
					->with('country_details',$country_details)
					->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}


	public function edit_hospital($id){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
        $diagnostic_details = DB::table('institute_info')
            ->where('id',$id)
            ->get();

        foreach ($diagnostic_details as $key ) {
           $user_id=$key->user_id;
           $city_id = $key->city_id;
           $country_id = $key->country_id;
        }
        $users_details = DB::table('tbl_users')
            ->where('id',$user_id)
            ->get();
         $city_details = DB::table('tbl_city')
            ->where('city_id',$city_id)
            ->get();
         $country_details = DB::table('tbl_country')
            ->where('country_id',$country_id)
            ->get();

			return view('edit_hospital')
					->with('diagnostic_details',$diagnostic_details)
					->with('users_details',$users_details)
					->with('city_details',$city_details)
					->with('country_details',$country_details)
					->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}


	


	public function export_admin(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('export_admin')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function export_appointments(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('export_appointments')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function export_diagnostic(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('export_diagnostic')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function export_doctors(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('export_doctors')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function export_hospital(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('export_hospital')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function export_patients(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('export_patients')->with('login_user_details',$login_user_details);	
		}else{
			return redirect('index');
		}
	}
	

	
	public function import_diagnostic(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('import_diagnostic')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function import_doctors(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('import_doctors')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function import_hospitals(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		return view('import_hospitals')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	
	public function patients_info(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		$users = DB::table('patient')
            ->join('tbl_users', 'tbl_users.id', '=', 'patient.user_id')  
            ->get();	
        return view('patients_info')->with('data',$users)->with('login_user_details',$login_user_details);
        }else{
			return redirect('index');
		}
	}

	public function edit_appointment(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
		$patients_info = DB::table('patient')
		            ->get();
		$doctors_info = DB::table('doctors_info')
		            ->get();	
		$camber_info = DB::table('camber_info')
		            ->get();                 

        return view('add_appointment')
        		->with('patients_info',$patients_info)
        		->with('doctors_info',$doctors_info)
        		->with('camber_info',$camber_info)
        		->with('login_user_details',$login_user_details);
        }else{
		return redirect('index');
		}	
	}

	public function edit_patient($id){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();

        $users = DB::table('tbl_users')
        			->where('id',$id)
		            ->get(); 
        $patient_info = DB::table('patient')
        			->where('user_id',$id)
		            ->get();     
		return view('edit_patient')
			->with('users',$users)
			->with('patient_info',$patient_info)
			->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}

	public function doctors_info(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
        $doctor_info = DB::table('doctors_info')           
           	->get();            
		return view('doctors_info')
			->with('login_user_details',$login_user_details)
			->with('doctor_info',$doctor_info);
		}else{
			return redirect('index');
		}
	}

	public function edit_doctor(){
		$login_id = Session::get('login_id');
		if($login_id){
		$login_user_details = DB::table('admin_details')
            ->where('user_id',$login_id)
            ->get();
            $doctor_info = DB::table('doctors_info')
            ->join('institute_info', 'institute_info.id', '=', 'doctors_info.hospital_id')
            ->join('camber_info', 'camber_info.id', '=', 'doctors_info.camber_id')
            ->join('doctors_speciality', 'doctors_speciality.id', '=', 'doctors_info.speciality_id')    
            ->select('camber_info.name as chambername','appoinment.id as appid','doctors_info.firstname','doctors_info.lastname','patient.name as patientname','appoinment.*')       
            ->get();            
			return view('doctors_info')->with('login_user_details',$login_user_details);
		}else{
			return redirect('index');
		}
	}
	public function logout(){

		Session::forget('login_id');
		return view('/');
	}


}
?>
