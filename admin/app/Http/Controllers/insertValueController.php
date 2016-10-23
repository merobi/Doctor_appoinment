<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\laravel;
use Illuminate\Support\Facades\Input;
use DB;
/**
* 
*/
class insertValueController extends Controller
{

	public function manage_admin(Request $request)
	{		
		

		$admin = $request->all();

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
		                 \Session::flash('message', "Maxmium file size is 2MB !");
		       			return redirect('add_admin');
		            }
		        }
		        else{
		             \Session::flash('message', "File Type not supported  !");
		      		 return redirect('add_admin');
		        }
		        if($success)
		        {
					$data = array(
						'username' =>$admin['username'],
						'password' =>$admin['password'],
						'type' => "Admin",
					);

					$i = DB::table('tbl_users')->insert($data);

					$lastInsertId=DB::getPdo()->lastInsertId();

					$details = array(
							'fullname' => $admin['fullname'],
							'email' => $admin['email'],
							'phone' =>$admin['phone'],
							'address' => $admin['address'],
							'image' => $image_full_name,
							'user_id' => $lastInsertId,
						);

					

					$j = DB::table('admin_details')->insert($details);
					if($i>0 && $j>0){
						\Session::flash('message','Add successfull');
						return redirect('add_admin');
					}
				}
   		 }				
	}

	public function manage_institution_info(Request $request){

			$hospital_info = $request->all();

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
		                 \Session::flash('message', "Maxmium file size is 2MB !");
		       			return redirect('add_hospital');
		            }
		        }
		        else{
		             \Session::flash('message', "File Type not supported  !");
		      		 return redirect('add_hospital');
		        }
		        if($success)
		        {
					$data = array(
						'username' =>$hospital_info['username'],
						'password' =>$hospital_info['password'],
						'type' => $hospital_info['type'],
					);

					$i = DB::table('tbl_users')->insert($data);
					$lastInsertId=DB::getPdo()->lastInsertId();

					$details = array(
						'name' => $hospital_info['name'],
						'image' => $image_full_name,
						'registration' => $hospital_info['registration_code'],
						'post_code' =>$hospital_info['post_code'],
						'email' => $hospital_info['email'],		
						'phone' => $hospital_info['phone'],		
						'fax' => $hospital_info['fax'],		
						'address' => $hospital_info['address'],		
						'about_hospital' => $hospital_info['about_hospital'],
						'country_id' => $hospital_info['country_id'],
						'city_id' => $hospital_info['city_id'],
						'user_id' => $lastInsertId,
						'type' =>$hospital_info['type'],
					);

					$j = DB::table('institute_info')->insert($details);
					if($i>0 && $j>0){
						\Session::flash('message','Add successfull');
						return redirect('add_hospital');
					}
				}
			}
	}


	public function manage_patient(Request $request){
			$patient = $request->all();

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
		                 \Session::flash('message', "Maxmium file size is 2MB !");
		       			return redirect('add_patient');
		            }
		        }
		        else{
		             \Session::flash('message', "File Type not supported  !");
		      		 return redirect('add_patient');
		        }
		        if($success)
		        {
					$data = array(
						'username' =>$patient['username'],
						'password' =>$patient['password'],
						'type' => "Patient",
					);

					$i = DB::table('tbl_users')->insert($data);
					$lastInsertId=DB::getPdo()->lastInsertId();

					$details = array(
						'name' => $patient['name'],
						'image' => $image_full_name,
						'email' => $patient['email'],		
						'phone' => $patient['phone'],		
						'bloodgroup' => $patient['bloodgroup'],		
						'address' => $patient['address'],
						'birthday' => $patient['birthday'],
						'gender' => $patient['gender'],
						'age' => $patient['age'],
						'user_id' => $lastInsertId,
					);

					$j = DB::table('patient')->insert($details);
					if($i>0 && $j>0){
						\Session::flash('message','Add successfull');
						return redirect('add_patient');
					}
				}
			}
	}

	public function manage_appointment(Request $request){
		$appointmets =$request->all();

		$details = array(
			'doctor_id' => $appointmets['doctor_id'],
			'chamber_id' => $appointmets['chamber_id'],		
			'patient_id' => $appointmets['patient_id'],		
			'app_day' => $appointmets['app_day'],		
			'app_time' => $appointmets['app_time'],
		);
		$j = DB::table('appoinment')->insert($details);
		if($j>0){
			\Session::flash('message','Add successfull');
			return redirect('add_appointment');
		}

	}

	

}

?>