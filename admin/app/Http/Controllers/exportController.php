<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\laravel;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostACarRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
/**
* 
*/
class exportController extends Controller
{
	public function export_patient_download(){
		$patients=DB::table('patient')->get();
        $tot_record_found=0;
        if(count($patients)>0){
            $tot_record_found=1;
            //First Methos          
            $export_data="No,Patient Name, Address, Age, Birthday, Gender, Email, Phone, Blood Group\n";
            foreach($patients as $value){
                $export_data.=$value->id.','.$value->name.','.$value->address.','.$value->age.','.$value->birthday.','.$value->gender.','.$value->email.','.$value->phone.','.$value->bloodgroup."\n";
            }
            return response($export_data)
                ->header('Content-Type','application/csv')               
                ->header('Content-Disposition', 'attachment; filename="Patient.csv"')
                ->header('Pragma','no-cache')
                ->header('Expires','0');                     
        }
        return view('download',['record_found' =>$tot_record_found]); 
	}	
}