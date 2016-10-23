<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Session;
session_start();

class UserController extends Controller
{
    
    public  $doctor_app_id="";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     public function doctor_login()
    {
        
        $header=view('pages.menu');
        $doc_login=view('pages.doc_login');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_login)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function hospital_login()
    {
        $header=view('pages.menu');
        $doc_login=view('pages.hos_login');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_login)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
     public function center_login()
    {
        $header=view('pages.menu');
        $doc_login=view('pages.center_login');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_login)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function patient_login()
    {
         
        $header=view('pages.menu');
        $doc_login=view('pages.patient_login');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_login)
                             ->with('header',$header)
                             
                             ->with('footer',$footer);
    }
    
    

    
        
     public function doctor_profile($id)
    {
          $profile_info_by_id  = DB::table('doctors_info') 
                                     ->where('user_id', $id)
                                     ->first();
          $media_info_by_id  = DB::table('social_media') 
                                     ->where('user_id', $id)
                                     ->first();
          $skill_info_by_id  = DB::table('doctors_speciality') 
                                     ->where('user_id', $id)
                                     ->first();
           
        $header=view('pages.menu');
        $doc_profile=view('pages.doc_profile')
                                ->with('profile_info_by_id',$profile_info_by_id)
                                ->with('media_info_by_id',$media_info_by_id)
                                ->with('skill_info_by_id',$skill_info_by_id);
        
        
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_profile)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function specialist_view()
    {
        $header=view('pages.menu');
        $specialist_view=view('pages.all_specialist');
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('specialist_view',$specialist_view)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
      public function hospital_profile($id)
    {
        $profile_info_by_id  = DB::table('institute_info') 
                                     ->where('user_id', $id)
                                     ->first();
        $media_info_by_id  = DB::table('social_media') 
                                     ->where('user_id', $id)
                                     ->first();  
        $service_info_by_id  = DB::table('tbl_medical_service') 
                                     ->where('institute_id', $id)
                                     ->first(); 
        $header=view('pages.menu');
        $doc_profile=view('pages.hos_profile')
                            ->with('profile_info_by_id',$profile_info_by_id)
                            ->with('media_info_by_id',$media_info_by_id)
                            ->with('service_info_by_id',$service_info_by_id);
        
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_profile)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
    public function all_hospital_view()
    {
        $header=view('pages.menu');
        $hospital_view=view('pages.all_hospital_view');
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('hospital_view',$hospital_view)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
      public function center_profile($id)
    {
           $profile_info_by_id  = DB::table('institute_info') 
                                     ->where('user_id', $id)
                                     ->first();
           $media_info_by_id  = DB::table('social_media') 
                                     ->where('user_id', $id)
                                     ->first();
           
        $header=view('pages.menu');
        $doc_profile=view('pages.center_profile')
                              ->with('profile_info_by_id',$profile_info_by_id)
                              ->with('media_info_by_id',$media_info_by_id);

        
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_profile)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
    public function all_diagnostic_view()
    {
        $header=view('pages.menu');
        $center_view=view('pages.all_center_view');
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('center_view',$center_view)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
      public function patient_profile($id)
    {
        $profile_info_by_id  = DB::table('patient') 
                                     ->where('user_id', $id)
                                     ->first();
        $media_info_by_id  = DB::table('social_media') 
                                     ->where('user_id', $id)
                                     ->first();
        
        $header=view('pages.menu');
        $doc_profile=view('pages.patient_profile')
                          ->with('profile_info_by_id',$profile_info_by_id)
                           ->with('media_info_by_id',$media_info_by_id);
        
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_profile)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
    public function doctor_registration()
    {
        $header=view('pages.menu');
        $doc_regi=view('pages.doc_regi');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_regi)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
    public function hospital_registration()
    {
        $header=view('pages.menu');
        $doc_regi=view('pages.hos_regi');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_regi)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
    public function center_registration()
    {
        $header=view('pages.menu');
        $doc_regi=view('pages.center_regi');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_regi)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
    public function patient_registration()
    {
        $header=view('pages.menu');
        $doc_regi=view('pages.pat_regi');
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$doc_regi)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function doctor_app($id)
    {
         
         $doctor_info = DB::table('doctors_info')
                                                 ->where('id',$id)
                                                 ->get();
           
	
                
        $header=view('pages.menu');
        $appoinmnt=view('pages.appoinmnt')->with('doctor_info',$doctor_info);
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$appoinmnt)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function app_info(Request $request)
    {
        
//        $doctor_info = DB::table('camber_info')
//                ->where('id',$chamber_id)
//                ->get();
        
//        foreach ($chamber_info as $value) {
//            $date = $value->date;
//            $day = $value->day;
//            $time = $value->$start_time.'-'.$value->$end_time;
//        }

      $data=array();
      $data['patient_id']=$request->patient_id;
      $data['doctor_id']=$request->doctor_id;     
      $data['chamber_id']=$request->chamber_id;
      $data['app_date']=$request->date;
      $data['app_day']=$request->day;
      $data['app_time']=$request->time;
      
      DB::table('appoinment')->insert($data);
      
      Session::put('message',"Appointment save Successfully");
      
       return Redirect::to('/Doctor-Appointment/'.$request->doctor_id);
       
    }
    
      public function doctor_app_show($id)
    {
         
         $doctor_app_info = DB::table('appoinment')
                                                 ->where('id',$id)
                                                 ->get();
           
	
        $header=view('pages.menu');
        $appoinmnt=view('pages.appoinmnt')->with('doctor_info',$doctor_info);
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('doc_login',$appoinmnt)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function service_details($id)
    {
        $service_info = DB::table('tbl_medical_service') 
                                     ->where('id', $id)
                                     ->get();
        
        
        $header=view('pages.menu');
        $service=view('pages.service_details')->with('service_info',$service_info); 
//        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('service',$service)
                             ->with('header',$header)
//                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
      public function help_details()
    {
//        $profile_info_by_id  = DB::table('patient') 
//                                     ->where('user_id', $id)
//                                     ->first();
//        
        
        $header=view('pages.menu');
        $help_link=view('pages.help_link_details'); 
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('help_link',$help_link)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
