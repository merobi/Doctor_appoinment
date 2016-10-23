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