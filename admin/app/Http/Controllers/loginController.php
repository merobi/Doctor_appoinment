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
class loginController extends Controller
{

	
	public function manage_login(Request $request){

		$username=$request->username;
      	$password=$request->password;
     	$admin_info = DB::table('tbl_users')
                        ->select('*')
                        ->where('username',$username)
                        ->where('password',$password)
                        ->where('type','Admin')
                        ->get();

        foreach($admin_info as $row){
           $user_id = $row->id;
        }
         
       

        if($admin_info)
        {
           $request->session()->put('login_id', $user_id);
           return redirect('home');
        }
        else{
           \Session::flash('message','Username or Password Invalid');		
			     return redirect('index');
        }

	}

	


}
?>
