<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

use DB;
use Session;
session_start();

class SuperController extends Controller
{
//    public function __construct() {
//        $admin_id=Session::get('admin_id');
//        if($admin_id != NULL)
//        {
//            return Redirect::to('/doctor-profile')->send();
//        }
//        
//    }
    public function doctor_info_save(Request $request)
    {
        

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
        $upload_path = 'doctor_images/';
        $image_url = $upload_path . $image_full_name;
        if($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg')
        {
            if($file_size < 2097153)
            {
            $success = $image->move($upload_path, $image_full_name);
            }
            else{
                 Session::put('message', "Maxmium file size is 2MB !");
        return Redirect::to('/add-product');
            }
        }
        else{
             Session::put('message', "File Type not supported  !");
        return Redirect::to('/doctor-registration');
        }
        if($success)
        {
      $data['type']=$request->type;     
      $data['username']=$request->username;
      $data['password']=$request->password;
      DB::table('tbl_users')->insert($data);
      $user_id=DB::getPdo()->lastInsertId();
      
      $data2['user_id']=$user_id;
      $data2['degree']=$request->degree;
      $data2['speciality']=$request->speciality;
      $data2['subspeciality']=$request->subspeciality;
      $data2['institution']=$request->institution;
      DB::table('doctors_speciality')->insert($data2);
      $speciality_id =DB::getPdo()->lastInsertId();
      
      $data7['country_name']=$request->country_name;
      DB::table('tbl_country')->insert($data7);
      $country_id =DB::getPdo()->lastInsertId();
      
      $data8['country_id']=$country_id;
      $data8['city_name']=$request->c_city;
      DB::table('tbl_city')->insert($data8);
      
      $data3['name']=$request->c_name;
      $data3['address']=$request->c_address;
      $data3['country_id']=$request->country_id2;
      $data3['city_id'] = $request->city_id;
      $data3['postcode'] = $request->c_code;
      $data3['phonenumber']=$request->c_phone;
      $data3['contactsupport']=$request->c_suppt;
      $data3['date'] = $request->date;
      $data3['day'] = $request->day;
      $data3['start_time']=$request->start_time;
      $data3['end_time']=$request->end_time;
      DB::table('camber_info')->insert($data3);
      $camber_id =DB::getPdo()->lastInsertId();
      
     $institute_id =DB::getPdo()->lastInsertId();
      
      $data5['user_id']=$user_id;
      $data5['s_name']=$request->s_name;
      $data5['link']=$request->link;
      DB::table('social_media')->insert($data5);
      $social_id =DB::getPdo()->lastInsertId();
      
      
      $data6['user_id'] = $user_id;
      $data6['speciality_id'] = $speciality_id;
      $data6['camber_id'] = $camber_id;
//      $data6['institute_id'] = $institute_id;
      $data6['socialmedia_id'] = $social_id;
      $data6['hospital_id'] = $request->hospital_id;
      $data6['title'] = $request->title;
      $data6['firstname'] = $request->firstname;
      $data6['lastname']=$request->lastname;
      $data6['image']=$image_url;
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
      DB::table('doctors_info')->insert($data6);
      
      
      
      Session::put('message',"Doctor Registration Successfully");
      
       return Redirect::to('/doctor-registration');
       
    }
    }}

     public function doctor_login(Request $request)
    {
       $username=$request->username;
       $password=$request->password;

       $doctor_info = DB::table('tbl_users')
                        ->select('*')
                        ->where('username',$username)
                        ->where('password',$password)
                        ->where('type','Doctor')
                        ->first();

       if($doctor_info)
       {
            $request->session()->put('login_id', $doctor_info->id);
           return Redirect::to('/doctor-profile/'.$doctor_info->id)
                   ->send();
       }
       else{
           Session::put('exception','Username or Password Invalid !');
           return Redirect::to('/Doctor-login'); 
       }
    }
     public function patient_info_save(Request $request)
    {
        

      $data=array();
      $data2=array();
      $data3=array();
      $image = $request->file('image');
      $file_size =   $image->getClientSize();
        
        if ($image) {
        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'patient_images/';
        $image_url = $upload_path . $image_full_name;
        if($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg')
        {
            if($file_size < 2097153)
            {
            $success = $image->move($upload_path, $image_full_name);
            }
            else{
                 Session::put('message', "Maxmium file size is 2MB !");
        return Redirect::to('/add-product');
            }
        }
        else{
             Session::put('message', "File Type not supported  !");
        return Redirect::to('/patient-registration');
        }
        if($success)
        {
      $data['type']=$request->type;     
      $data['username']=$request->username;
      $data['password']=$request->password;
      DB::table('tbl_users')->insert($data);
      $user_id =DB::getPdo()->lastInsertId();
      
      
      $data2['user_id'] = $user_id;
      
      $data2['name']=$request->name;
      $data2['image']=$image_url;
      $data2['birthday']=$request->birthday;
      $data2['email']=$request->email;
      $data2['phone']=$request->phone;
      $data2['bloodgroup']=$request->bloodgroup;
      $data2['age']=$request->age;
      $data2['gender']=$request->gender;
      $data2['address']=$request->address;
      
      DB::table('patient')->insert($data2);
      
      $data3['user_id']=$user_id;
      $data3['s_name']=$request->s_name;
      $data3['link']=$request->link;
      DB::table('social_media')->insert($data3);
      
      
      Session::put('message',"patient Registration Successfully");
      
       return Redirect::to('/patient-registration');
       
    }
    }}

    public function patientlogin(Request $request)
    {
       $username=$request->username;
       $password=$request->password;
        $doctor_id=$request->doctor_id;
       
        
       $patient_info = DB::table('tbl_users')
                        ->select('*')
                        ->where('username',$username)
                        ->where('password',$password)
                         ->where('type','Patient')
                        ->first();
//        echo '<pre>';
//        print_r($admin_info);
//        exit();
       
       
       
       
       
       if($patient_info)
       {     
               $request->session()->put('login_id', $patient_info->id);              
               return Redirect::to('/Doctor-Appointment/'.$request->doctor_id);
       }
           
       
       else{
           Session::put('exception','Username or Password Invalid !');
           return Redirect::to('/Patient-login'); 
       }
    }
       public function patient_login(Request $request)
    {
       $username=$request->username;
       $password=$request->password;
       
        
       $patient_info = DB::table('tbl_users')
                        ->select('*')
                        ->where('username',$username)
                        ->where('password',$password)
                         ->where('type','Patient')
                        ->first();
//        echo '<pre>';
//        print_r($admin_info);
//        exit();
       if($patient_info)
       {     
              $request->session()->put('login_id', $patient_info->id);              
               return Redirect::to('/patient-profile/'.$patient_info->id)->send();
           }
           
       
       else{
           Session::put('exception','Username or Password Invalid !');
           return Redirect::to('/Patient-login'); 
       }
    }
    
    public function hospital_info_save(Request $request)
    {
        

      $data=array();
      $data2=array();
      $data3=array();
      $image = $request->file('image');
      $file_size =   $image->getClientSize();
        
        if ($image) {
        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'hospital_images/';
        $image_url = $upload_path . $image_full_name;
        if($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg')
        {
            if($file_size < 2097153)
            {
            $success = $image->move($upload_path, $image_full_name);
            }
            else{
                 Session::put('message', "Maxmium file size is 2MB !");
        return Redirect::to('/add-product');
            }
        }
        else{
             Session::put('message', "File Type not supported  !");
        return Redirect::to('/patient-registration');
        }
        if($success)
        {
      $data['type']=$request->type;     
      $data['username']=$request->username;
      $data['password']=$request->password;
      DB::table('tbl_users')->insert($data);
      $user_id =DB::getPdo()->lastInsertId();
      
      DB::table('doctors_info');
      $doctor_id =DB::getPdo()->lastInsertId();
      
      $data2['user_id'] = $user_id;
//      $data2['doctor_id'] = $doctor_id;
      $data2['name']=$request->name;
      $data2['image']=$image_url;
      $data2['city_id']=$request->city_id;
      $data2['registration']=$request->registration;
      $data2['email']=$request->email;
      $data2['phone']=$request->phone;
      $data2['post_code']=$request->post_code;
      $data2['fax']=$request->fax;
      $data2['about_hospital']=$request->about_hospital;
      $data2['address']=$request->address;
      $data2['type']=$request->type; 
      $data2['country_id']=$request->country_id; 
      
      DB::table('institute_info')->insert($data2);
      
      $data3['user_id']=$user_id;
      $data3['s_name']=$request->s_name;
      $data3['link']=$request->link;
      DB::table('social_media')->insert($data3);
      $social_id =DB::getPdo()->lastInsertId();
      
      Session::put('message',"Hospital Registration Successfully");
      
       return Redirect::to('/hospital-registration');
       
    }
    }}
    
    public function add_medical_service(Request $request)
    {
        

      $data=array();
      
      $data['institute_id']=$request->institute_id;
      $data['heading']=$request->heading;
      $data['short_description']=$request->short_description;
      $data['long_description']=$request->long_description;
      DB::table('tbl_medical_service')->insert($data);
      
      Session::put('message',"Institute Registration Successfully");
      
       return Redirect::to('/hospital-profile');
       
    }
     public function add_link(Request $request)
    {
        

      $data=array();
      
      $data['institute_id']=$request->institute_id;
      $data['heading']=$request->heading;
      $data['url']=$request->url;
      
      DB::table('tbl_help_link')->insert($data);
      
      Session::put('message',"Institute Registration Successfully");
      
       return Redirect::to('/hospital-profile');
       
    }
    
     public function hospital_login(Request $request)
    {
       $username=$request->username;
       $password=$request->password;
        
       $hospital_info = DB::table('tbl_users')
                        ->select('*')
                        ->where('username',$username)
                        ->where('password',$password)
                         ->where('type','Hospital')
                        ->first();

       if($hospital_info)
       {
           $request->session()->put('login_id', $hospital_info ->id);
           return Redirect::to('/hospital-profile/'.$hospital_info->id)->send();
       }
       else{
           Session::put('exception','Username or Password Invalid !');
           return Redirect::to('/Hospital-login'); 
       }
    }
     public function diagnostic_info_save(Request $request)
    {
        

      $data=array();
      $data2=array();
      $data3=array();
      $image = $request->file('image');
      $file_size =   $image->getClientSize();
        
        if ($image) {
        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'diagnostic_images/';
        $image_url = $upload_path . $image_full_name;
        if($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg')
        {
            if($file_size < 2097153)
            {
            $success = $image->move($upload_path, $image_full_name);
            }
            else{
                 Session::put('message', "Maxmium file size is 2MB !");
        return Redirect::to('/center-registration');
            }
        }
        else{
             Session::put('message', "File Type not supported  !");
        return Redirect::to('/patient-registration');
        }
        if($success)
        {
      $data['type']=$request->type;     
      $data['username']=$request->username;
      $data['password']=$request->password;
      DB::table('tbl_users')->insert($data);
      $user_id =DB::getPdo()->lastInsertId();
      
//      DB::table('doctors_info');
//      $doctor_id =DB::getPdo()->lastInsertId();
      
      $data2['user_id'] = $user_id;
      
      $data2['name']=$request->name;
      $data2['image']=$image_url;
      $data2['city_id']=$request->city_id;
      $data2['registration']=$request->registration;
      $data2['email']=$request->email;
      $data2['phone']=$request->phone;
      $data2['post_code']=$request->post_code;
      $data2['fax']=$request->fax;
      $data2['about_hospital']=$request->about_diagnostic;
      $data2['address']=$request->address;
      $data2['type']=$request->type; 
      $data2['country_id']=$request->country_id; 
      
      DB::table('institute_info')->insert($data2);
      
      Session::put('message',"Diagnostic Registration Successfully");
      
       return Redirect::to('/center-registration');
       
    }
    }}
    
     public function diagnostic_login(Request $request)
    {
       $username=$request->username;
       $password=$request->password;
        
       $diagnostic_info = DB::table('tbl_users')
                        ->select('*')
                        ->where('username',$username)
                        ->where('password',$password)
                          ->where('type','Daignostic')
                        ->first();
//        echo '<pre>';
//        print_r($admin_info);
//        exit();
       if($diagnostic_info)
       {
           $request->session()->put('login_id', $diagnostic_info ->id);
           
           return Redirect::to('/center-profile/'.$diagnostic_info->id)->send();
       }
       else{
           Session::put('exception','Username or Password Invalid !');
           return Redirect::to('/Diagnostic-login'); 
       }
    }
    
    
    public function update_about(Request $request)
    {
        $id = $request->id;
        $user_id = $request->user_id;
        $about_me = $request->about;
        
        $doctor_about_update = DB::table('doctors_info')
                                                ->where('id', $id)
                                                ->update(['about_me' => $about_me]);
        
        if($doctor_about_update)
        {   
            Session::put('message',"update Successfully");
            return Redirect::to('/doctor-profile/'.$user_id);
        }
    }
    
    public function update_doctor_profile(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['firstname']=$request->firstname;
        $data['lastname']=$request->lastname;
        $data['email']=$request->email;
        $data['phone_no']=$request->phone_no;
        $data['regi_no']=$request->regi_no;
        $data['address']=$request->address;
        $data['post_code']=$request->post_code;
        $image=$request->file('image');
        
        if(!$image)
        {
            $data['image']=$request->image;
        }
        if ($image) {
            $file_size = $image->getClientSize();
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'doctor_images/';
            $image_url = $upload_path . $image_full_name;
            if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg') {
                if ($file_size < 2097153) {
                    $success = $image->move($upload_path, $image_full_name);
                } else {
                    Session::put('exception', "Maxmium file size is 2MB !");
                    return Redirect::to('/doctor-profile/'.$user_id);
                }
            } else {
                Session::put('exception', "File Type not supported  !");
                return Redirect::to('/doctor-profile/'.$user_id);
            }
            $data['image'] = $image_url;
        }
        
        $doctor_profile_update = DB::table('doctors_info')
                                                ->where('id', $id)
                                                ->update($data);
      
        if($doctor_profile_updat)
        {   
            Session::put('message',"update Successfully");
        return Redirect::to('/doctor-profile/'.$user_id);
        } 
    }
    public function update_doctor_skill(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['degree']=$request->degree;
        $data['speciality']=$request->speciality;
        
        
        
        $doctor_skill_update = DB::table('doctors_speciality')
                                                ->where('id', $id)
                                                ->update($data);
       
        if($doctor_skill_update)
        {   
            Session::put('message',"update Successfully");
        return Redirect::to('/doctor-profile/'.$user_id);
        } 
    }
    
    public function update_doctor_media(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['s_name']=$request->s_name;
        $data['link']=$request->link;
        
        
        
        $doctor_media_update = DB::table('social_media')
                                                ->where('id', $id)
                                                ->update($data);
      
        if($doctor_media_update)
        {   
            Session::put('message',"update Successfully");
        return Redirect::to('/doctor-profile/'.$user_id);
        }  
    }

    
    public function update_hospital_profile(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['name']=$request->name;
        $data['fax']=$request->fax;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['city']=$request->city;
        $data['address']=$request->address;
        $data['post_code']=$request->post_code;
        $image=$request->file('image');
        
        if(!$image)
        {
            $data['image']=$request->image;
        }
        if ($image) {
            $file_size = $image->getClientSize();
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'hospital_images/';
            $image_url = $upload_path . $image_full_name;
            if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg') {
                if ($file_size < 2097153) {
                    $success = $image->move($upload_path, $image_full_name);
                } else {
                    Session::put('exception', "Maxmium file size is 2MB !");
                    return Redirect::to('/hospital-profile/'.$user_id);
                }
            } else {
                Session::put('exception', "File Type not supported  !");
                return Redirect::to('/hospital-profile/'.$user_id);
            }
            $data['image'] = $image_url;
        }
        
        $hospital_profile_update = DB::table('institute_info')
                                                ->where('id', $id)
                                                ->update($data);
      
        return Redirect::to('/hospital-profile/'.$user_id);
        
    }
    
    public function update_hospital_about(Request $request)
    {
        $id = $request->id;
        $user_id = $request->user_id;
        $about_hospital = $request->about;
        
        $doctor_about_update = DB::table('institute_info')
                                                ->where('id', $id)
                                                ->update(['about_hospital' => $about_hospital]);
        
        if($doctor_about_update)
        {
            return Redirect::to('/hospital-profile/'.$user_id);
        }
    }
    public function update_hospital_media(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['s_name']=$request->s_name;
        $data['link']=$request->link;
        
        $doctor_media_update = DB::table('social_media')
                                                ->where('id', $id)
                                                ->update($data);
        
        if($doctor_media_update)
        {
            return Redirect::to('/hospital-profile/'.$user_id);
        }
    }
    public function medical_service( Request $request)
    {
        $user_id = $request->user_id;
        $data = array();
        $data['institute_id'] = $request->id;
        $data['heading'] = $request->heading;
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;
        
        $doctor_about_update = DB::table('tbl_medical_service')
                                                ->insert($data);
        
        return Redirect::to('/hospital-profile/'.$user_id);
    }

    public function add_help_link( Request $request)
    {
        $user_id = $request->user_id;
        $data = array();
        $data['institute_id'] = $request->id;
        $data['heading'] = $request->heading;
        $data['url'] = $request->url;
        
        
        $doctor_about_update = DB::table('tbl_help_link')
                                                ->insert($data);
        
        return Redirect::to('/hospital-profile/'.$user_id);
    }
    
    public function update_center_profile(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['name']=$request->name;
        $data['fax']=$request->fax;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['city']=$request->city;
        $data['address']=$request->address;
        $data['post_code']=$request->post_code;
        $image=$request->file('image');
        
        if(!$image)
        {
            $data['image']=$request->image;
        }
        if ($image) {
            $file_size = $image->getClientSize();
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'hospital_images/';
            $image_url = $upload_path . $image_full_name;
            if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg') {
                if ($file_size < 2097153) {
                    $success = $image->move($upload_path, $image_full_name);
                } else {
                    Session::put('exception', "Maxmium file size is 2MB !");
                    return Redirect::to('/center-profile/'.$user_id);
                }
            } else {
                Session::put('exception', "File Type not supported  !");
                return Redirect::to('/center-profile/'.$user_id);
            }
            $data['image'] = $image_url;
        }
        
        $hospital_profile_update = DB::table('institute_info')
                                                ->where('id', $id)
                                                ->update($data);
      
        return Redirect::to('/center-profile/'.$user_id);
        
    }
    
    public function update_center_about(Request $request)
    {
        $id = $request->id;
        $user_id = $request->user_id;
        $about_hospital = $request->about;
        
        $doctor_about_update = DB::table('institute_info')
                                                ->where('id', $id)
                                                ->update(['about_hospital' => $about_hospital]);
        
        if($doctor_about_update)
        {
            return Redirect::to('/center-profile/'.$user_id);
        }
    }
    
    public function update_center_media(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['s_name']=$request->s_name;
        $data['link']=$request->link;
        
        $doctor_media_update = DB::table('social_media')
                                                ->where('id', $id)
                                                ->update($data);
        
        if($doctor_media_update)
        {
            return Redirect::to('/center-profile/'.$user_id);
        }
    }
    
    public function center_medical_service( Request $request)
    {
        $user_id = $request->user_id;
        $data = array();
        $data['institute_id'] = $request->id;
        $data['heading'] = $request->heading;
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;
        
        $doctor_about_update = DB::table('tbl_medical_service')
                                                ->insert($data);
        
        return Redirect::to('/center-profile/'.$user_id);
    }
    
    public function add_center_help_link( Request $request)
    {
        $user_id = $request->user_id;
        $data = array();
        $data['institute_id'] = $request->id;
        $data['heading'] = $request->heading;
        $data['url'] = $request->url;
        
        
        $doctor_about_update = DB::table('tbl_help_link')
                                                ->insert($data);
        
        return Redirect::to('/center-profile/'.$user_id);
    }
    
     public function update_patient_about(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['name']=$request->name;
        
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['age']=$request->age;
        $data['address']=$request->address;
        
        $image=$request->file('image');
        
        if(!$image)
        {
            $data['image']=$request->image;
        }
        if ($image) {
            $file_size = $image->getClientSize();
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'patient_images/';
            $image_url = $upload_path . $image_full_name;
            if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg') {
                if ($file_size < 2097153) {
                    $success = $image->move($upload_path, $image_full_name);
                } else {
                    Session::put('exception', "Maxmium file size is 2MB !");
                    return Redirect::to('/center-profile/'.$user_id);
                }
            } else {
                Session::put('exception', "File Type not supported  !");
                return Redirect::to('/center-profile/'.$user_id);
            }
            $data['image'] = $image_url;
        }
        
        $patient_profile_update = DB::table('patient')
                                                ->where('id', $id)
                                                ->update($data);
      
        return Redirect::to('/patientr-profile/'.$user_id);
        
    }
    
     public function update_patient_media(Request $request)
    {
        $data = array();
        $id=$request->id;
        $user_id=$request->user_id;
        $data['s_name']=$request->s_name;
        $data['link']=$request->link;
        
        $patient_media_update = DB::table('social_media')
                                                ->where('id', $id)
                                                ->update($data);
        
        if($patient_media_update)
        {
            return Redirect::to('/patient-profile/'.$user_id);
        }
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
    public function hospital_search(Request $request)
    {
       $query = Request::input('search');
       $institute_info= DB::table('institute_info')
                                   ->where('name', 'search')
                                   ->get();
        return View('/Hospital-view/',compact('institute_info', 'query'));
    }

    public function country_search()
    {
        $country_id = DB::table('tbl_country')->first();
        
        return View::make('master')->with('country',$country_id );
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

 public function logout(){

  Session::forget('login_id');
  return Redirect::to('/');
 }
    public function destroy($id)
    {
        //
    }
}
