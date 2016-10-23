<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Session;

session_start();

class SearchController extends Controller {

    public function all_hospital_search(Request $request) {

        $city = $request->get('city');
        $hospital = $request->get('hospital');

        if ($city) {

            $hospital_info = DB::table('institute_info')->where('city_id', $city)->get();
        } else if ($hospital) {

            $hospital_info = DB::table('institute_info')->where('id', $hospital)->get();
        } else {
            $hospital_info = DB::table('institute_info')->where('type', 'Hospital')->get();
        }

        
        $header=view('pages.menu');
        $hospital_view=view('pages.all_hospital_view')->with(compact('hospital_info'));
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('hospital_view',$hospital_view)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
    
    public function all_center_search(Request $request) {

        $city = $request->get('city');
        $center = $request->get('center');

        if ($city) {

            $hospital_info = DB::table('institute_info')->where('city_id', $city)->get();
        } elseif ($center) {

            $hospital_info = DB::table('institute_info')->where('id', $center)->get();
        } else {
            $hospital_info = DB::table('institute_info')->where('type', 'Daignostic')->get();
        }

        
        $header=view('pages.menu');
        $hospital_view=view('pages.all_center_view')->with(compact('hospital_info'));
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('hospital_view',$hospital_view)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }

    
    
        public function all_specialist_search(Request $request) {

         $specialists =$request->all();
        
         
        if ($specialists['city2'] && $specialists['hospital1'] && $specialists['specialist']) {
             $specialist_info = DB::table('doctors_info')
                    ->where('speciality_id', $specialists['specialist'])
                    ->where('hospital_id', $specialists['hospital1'])
                    ->where('city_id', $specialists['city2'])
                    ->get();
           
        }else if ($specialists['city2'] && $specialists['hospital1']) {

           $specialist_info= DB::table('doctors_info')
                    ->where('city_id', $specialists['city2'])          
                    ->where('hospital_id', $specialists['hospital1'])                     
                    ->get();
            
        }elseif($specialists['city2']) {

           $specialist_info = DB::table('doctors_info')
                    ->where('city_id', $specialists['city2'])                             
                    ->get();
        
           
        } 
        else {
           $specialist_info = DB::table('doctors_info')
                    ->get();
        }

//        return view('pages.all_specialist')->with(compact('specialist_info'));
        $header=view('pages.menu');
        $hospital_view=view('pages.all_specialist')->with(compact('specialist_info'));
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('hospital_view',$hospital_view)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function doctor_appoinment(Request $request) {

         $specialists =$request->all();
        
         
        if ($specialists['city2'] && $specialists['hospital1'] && $specialists['specialist']) {
             $specialist_info = DB::table('doctors_info')
                    ->where('speciality_id', $specialists['specialist'])
                    ->where('hospital_id', $specialists['hospital1'])
                    ->where('city_id', $specialists['city2'])
                    ->get();
           
        }else if ($specialists['city2'] && $specialists['hospital1']) {

           $specialist_info= DB::table('doctors_info')
                    ->where('city_id', $specialists['city2'])          
                    ->where('hospital_id', $specialists['hospital1'])                     
                    ->get();
            
        }elseif($specialists['city2']) {

           $specialist_info = DB::table('doctors_info')
                    ->where('city_id', $specialists['city2'])                             
                    ->get();
        
           
        } 
        else {
           $specialist_info = DB::table('doctors_info')
                    ->get();
        }

//        return view('pages.all_specialist')->with(compact('specialist_info'));
        $header=view('pages.menu');
        $hospital_view=view('pages.all_specialist')->with(compact('specialist_info'));
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('hospital_view',$hospital_view)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
}
