<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\laravel;
use App\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
* 
*/
class EditDeleteValueController extends Controller
{

	
	public function update_admin(Requests $request){

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
					$i = DB::table('users')
								->where('id',$id)
								->update(
									array(
										'username' =>$admin['username'],
										'password' =>$admin['password'],						
										'type' => "Admin",
										
									)
								);

					
					

					

					$j = DB::table('admin_details')
							->where('user_id',$id)
							->update( 
								array(
									'fullname' => $admin['fullname'],
									'email' => $admin['email'],
									'phone' =>$admin['phone'],
									'address' => $admin['address'],
									'user_id' =>$admin['id'],
									'image' => $image_full_name,							
								)
							);
					if($i>0 && $j>0){
						\Session::flash('message','Add successfull');
						return redirect('admins_info');
					}
				}
   		 }/*else{
   		 	$data = array(
						'username' =>$admin['username'],
						'password' =>$admin['password'],
						'type' => "Admin",
						'id' =>$admin['update_id'],
					);

					$i = DB::table('users')->update($data)->where('id',$id);

					
					$details = array(
							'fullname' => $admin['fullname'],
							'email' => $admin['email'],
							'phone' =>$admin['phone'],
							'address' => $admin['address'],							
							'id' =>$admin['update_id'],
						);

					

					$j = DB::table('admin_details')->update($details)->where('id',$id);
					if($i>0 && $j>0){
						\Session::flash('message','Add successfull');
						return redirect('admins_info');
					}
   		 }*/
	}

	public function delete_admin($id){

		$i = DB::table('tbl_users')->where('id',$id)->delete();
		$j = DB::table('admin_details')->where('user_id',$id)->delete();
		if($i>0 && $j>0){
			\Session::flash('message','Delete successfull');
			return redirect('admins_info');
		}
	}

	public function delete_institution($id){

		$data = DB::table('tbl_users')->where('id',$id)->get();
		 foreach ($data as $row) { 
		 	$type =$row->type;
		 }
		$i = DB::table('tbl_users')->where('id',$id)->delete();
		$j = DB::table('institute_info')->where('user_id',$id)->delete();
		if($i>0 && $j>0){
			\Session::flash('message','Delete successfull');
			if($type=='Hospital'){
				return redirect('hospitals_info');
			}else{
				return redirect('diagnostics_info');
			}
		}
	}
	public function delete_patient($id){

		$data = DB::table('tbl_users')->where('id',$id)->get();
		 foreach ($data as $row) { 
		 	$type =$row->type;
		 }
		$i = DB::table('tbl_users')->where('id',$id)->delete();
		$j = DB::table('patient')->where('user_id',$id)->delete();
		if($i>0 && $j>0){
			\Session::flash('message','Delete successfull');		
			return redirect('patients_info');
			
		}
	}


	public function delete_appointment($id){

		$i = DB::table('appoinment')->where('id',$id)->delete();
		if($i>0){
			\Session::flash('message','Delete successfull');
			return redirect('appointment_info');
		}
	}




}

?>