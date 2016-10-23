<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class UpdateDeleteController extends Controller
{
    
   
   
    public function delete_doctor($id){

        $i = DB::table('doctors_info')->where('id',$id)->delete();
        
        if($i>0){
            \Session::flash('message','Delete successfull');
            return redirect('doctors_info');
        }
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



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
