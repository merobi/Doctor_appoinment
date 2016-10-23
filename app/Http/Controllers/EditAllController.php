<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Redirect;

class EditAllController extends Controller
{

    public function update_Hospital(Request $request){

      $diagnostic = $request->all();

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
          

          $i = DB::table('tbl_users')
            ->where('id',$request->user_id)
            ->update(
                  array(
                    'username' =>$diagnostic['username'],
                    'password' =>$diagnostic['password'],
                    'type' => $diagnostic['type'],
                  )
              );
        

         

          $j = DB::table('institute_info')
          ->where('id',$request->user_id)
          ->update(
              array(
                'name' => $diagnostic['name'],
                'image' => $image_full_name,
                'registration' => $diagnostic['registration_code'],
                'post_code' =>$diagnostic['post_code'],
                'email' => $diagnostic['email'],   
                'phone' => $diagnostic['phone'],   
                'fax' => $diagnostic['fax'],   
                'address' => $diagnostic['address'],   
                'about_hospital' => $diagnostic['about_hospital'],
                'country_id' => $diagnostic['country_id'],
                'city_id' => $diagnostic['city_id'],
                'type' =>$diagnostic['type'],
              )
            );
          
            \Session::flash('message','Update successfull');
            return redirect('hospitals_info');
          
        }
      }
  }

    public function update_diagnostic(Request $request){

      $diagnostic = $request->all();

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
          

          $i = DB::table('tbl_users')
            ->where('id',$request->user_id)
            ->update(
                  array(
                    'username' =>$diagnostic['username'],
                    'password' =>$diagnostic['password'],
                    'type' => $diagnostic['type'],
                  )
              );
        

         

          $j = DB::table('institute_info')
          ->where('id',$request->user_id)
          ->update(
              array(
                'name' => $diagnostic['name'],
                'image' => $image_full_name,
                'registration' => $diagnostic['registration_code'],
                'post_code' =>$diagnostic['post_code'],
                'email' => $diagnostic['email'],   
                'phone' => $diagnostic['phone'],   
                'fax' => $diagnostic['fax'],   
                'address' => $diagnostic['address'],   
                'about_hospital' => $diagnostic['about_hospital'],
                'country_id' => $diagnostic['country_id'],
                'city_id' => $diagnostic['city_id'],
                'type' =>$diagnostic['type'],
              )
            );
          
            \Session::flash('message','Update successfull');
            return redirect('diagnostics_info');
          
        }
      }
  }

    public function update_doctor_cheek(Request $request) {
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

              $id = $request->id;
              $user_id111 = $request->user_id;
              $data['username']=$request->username;
              $data['password']=$request->password;
              $data['type']="Doctor";
              DB::table('tbl_users')->where('id',$user_id111)->update($data);
              
              
              $data2['user_id']=$user_id111;
              $data2['degree']=$request->degree;
              $data2['speciality']=$request->speciality;
              $data2['subspeciality']=$request->subspeciality;
              $data2['institution']=$request->institution;
              DB::table('doctors_speciality')->where('id',$user_id111)->update($data2);
             
              $country_id1 = $request->country_id1;
              $data7['country_name']=$request->country_name;
              DB::table('tbl_country')->where('country_id',$country_id1)->update($data7);
              
              $city_id1 = $request->city_id1;
              $data8['country_id']=$country_id1;
              $data8['city_name']=$request->c_city;
              DB::table('tbl_city')->where('city_id',$city_id1)->update($data8);
              
              $data3['name']=$request->c_name;
              $data3['address']=$request->c_address;
              $data3['country_id']=$request->country_name2;
              $data3['city_id'] = $request->c_city;
              $data3['postcode'] = $request->c_code;
              $data3['phonenumber']=$request->c_phone;
              $data3['contactsupport']=$request->c_suppt;
              $data3['date'] = $request->c_date;
              $data3['day'] = $request->day;
              $data3['start_time']=$request->start_time;
              $data3['end_time']=$request->end_time;
              DB::table('camber_info')->where('id',$request->c_id)->update($data3);
              
            
              $data5['user_id']=$user_id111;
              $data5['s_name']=$request->s_name;
              $data5['link']=$request->link;
              DB::table('social_media')->where('user_id',$user_id111)->update($data5);
             
              
              
              $data6['user_id'] = $user_id111;
              $data6['speciality_id'] = $request->speciality_id;
              $data6['camber_id'] = $request->c_id;
        //      $data6['institute_id'] = $institute_id;
              $data6['socialmedia_id'] = $request->social_id;
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
              DB::table('doctors_info')->where('user_id',$user_id111)->update($data6);     
              
              
                 \Session::flash('message', 'Update successfull');
                    return Redirect::to('doctors_info');
               
            }
         }
    }


    
    public function update_patient(Request $request){
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

                    $id = $request->id;
                    $i = DB::table('tbl_users')
                            ->where('id', $id)
                            ->update(
                            array(
                                'username' => $patient['username'],
                                'password' => $patient['password'],
                                'type' => "Patient",
                            )
                    );


                     $j = DB::table('patient')
                        ->where('user_id', $id)
                        ->update(
                        array(
                            'name' => $patient['name'],
                            'image' => $image_full_name,
                            'email' => $patient['email'],       
                            'phone' => $patient['phone'],       
                            'bloodgroup' => $patient['bloodgroup'],     
                            'address' => $patient['address'],
                            'birthday' => $patient['birthday'],
                            'gender' => $patient['gender'],
                            'age' => $patient['age'],
                        )
                     );

                   
                    
                    \Session::flash('message','update successfull');
                    return redirect('patients_info');
                    
                }
            }
    }

    public function update_admin(Request $request) {

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
                $id = $request->id;
                $i = DB::table('tbl_users')
                        ->where('id', $id)
                        ->update(
                        array(
                            'username' => $admin['username'],
                            'password' => $admin['password'],
                            'type' => "Admin",
                        )
                );

                $j = DB::table('admin_details')
                        ->where('user_id', $id)
                        ->update(
                        array(
                            'fullname' => $admin['fullname'],
                            'email' => $admin['email'],
                            'phone' => $admin['phone'],
                            'address' => $admin['address'],
                            'user_id' => $admin['id'],
                            'image' => $image_full_name,
                        )
                );
                
                    \Session::flash('message', 'Update successfull');
                    return Redirect::to('admins_info');
            
                
        }/* else{
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
       }   } */
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
