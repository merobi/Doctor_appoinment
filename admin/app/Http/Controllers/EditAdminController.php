<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Redirect;

class EditAdminController extends Controller
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
