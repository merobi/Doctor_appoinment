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
        $i=1;
        $tot_record_found=0;
        if(count($patients)>0){
            $tot_record_found=1;
            //First Methos          
            $export_data="No,Patient Name, Address, Age, Birthday, Gender, Email, Phone, Blood Group\n";
            foreach($patients as $value){
                $export_data.=$i.','.$value->name.','.$value->address.','.$value->age.','.$value->birthday.','.$value->gender.','.$value->email.','.$value->phone.','.$value->bloodgroup."\n";
                $i++;
            }
            return response($export_data)
                ->header('Content-Type','application/csv')               
                ->header('Content-Disposition', 'attachment; filename="Patient.csv"')
                ->header('Pragma','no-cache')
                ->header('Expires','0');                     
        }
        return view('download',['record_found' =>$tot_record_found]); 
	}


    public function export_hospital_download(){
        $patients=DB::table('institute_info')
                    ->where('type','Hospital')
                    ->get();
        $i=1;            
        $tot_record_found=0;
        if(count($patients)>0){
            $tot_record_found=1;
            //First Methos          
            $export_data="No,Hospital Name, Address, Email, Phone, Registration No, About Hospital, Post Code\n";
            foreach($patients as $value){
                $export_data.=$i.','.$value->name.','.$value->address.','.$value->email.','.$value->phone.','.$value->registration.','.$value->about_hospital.','.$value->post_code."\n";
                $i++;
            }
            return response($export_data)
                ->header('Content-Type','application/csv')               
                ->header('Content-Disposition', 'attachment; filename="Hospital.csv"')
                ->header('Pragma','no-cache')
                ->header('Expires','0');                     
        }
        return view('download',['record_found' =>$tot_record_found]); 
    }  
    public function export_diagnostic_download(){
        $patients=DB::table('institute_info')
                    ->where('type','Daignostic')
                    ->get();

        $i=1;
        $tot_record_found=0;
        if(count($patients)>0){
            $tot_record_found=1;
            //First Methos          
            $export_data="No,Hospital Name, Address, Email, Phone, Registration No, About Hospital, Post Code\n";
            foreach($patients as $value){
                
                $export_data.=$i.','.$value->name.','.$value->address.','.$value->email.','.$value->phone.','.$value->registration.','.$value->about_hospital.','.$value->post_code."\n";
                $i++;
            }
            return response($export_data)
                ->header('Content-Type','application/csv')               
                ->header('Content-Disposition', 'attachment; filename="Diagnostic.csv"')
                ->header('Pragma','no-cache')
                ->header('Expires','0');                     
        }
        return view('download',['record_found' =>$tot_record_found]); 
    }   


}