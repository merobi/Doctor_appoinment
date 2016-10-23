<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\laravel;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
/**
* 
*/
class insertValueController extends Controller
{

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
		      $data['type']="Doctor";
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
		      $data3['date'] = $request->c_date;
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
		      $data6['image']=$image_full_name;
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
		      
		      
		     	 \Session::flash('message', 'Add successfull');
                    return Redirect::to('add_doctor');
		       
		    }
   		 }
    }



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
			'app_date' => $appointmets['date'],	
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