<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*                                   Admin                     */
Route::get('/admin/', function () {
    return view('admin/index');
});

Route::get('index','staticPagesController@index');
Route::get('home', 'staticPagesController@homepage');
Route::get('add_admin', 'staticPagesController@addadmin');
Route::get('add_appointment','staticPagesController@add_appointment');
Route::get('add_diagnostic','staticPagesController@add_diagnostic');
Route::get('add_doctor','staticPagesController@add_doctor');
Route::get('add_hospital','staticPagesController@add_hospital');
Route::get('add_patient','staticPagesController@add_patient');
Route::get('admins_info','staticPagesController@admins_info');
Route::get('appointment_info','staticPagesController@appointment_info');
Route::get('diagnostics_info','staticPagesController@diagnostics_info');
Route::get('doctors_info','staticPagesController@doctors_info');
Route::get('doctors_profile_details','staticPagesController@doctors_profile_details');
Route::get('edit-doctors','staticPagesController@edit_doctors');
Route::get('edit_patient','staticPagesController@edit_patient');
Route::get('export_admin','staticPagesController@export_admin');
Route::get('export_appointments','staticPagesController@export_appointments');
Route::get('export_diagnostic','staticPagesController@export_diagnostic');
Route::get('export_doctors','staticPagesController@export_doctors');
Route::get('export_hospital','staticPagesController@export_hospital');
Route::get('export_patients','staticPagesController@export_patients');
Route::get('hospitals_info','staticPagesController@hospitals_info');
Route::get('import_diagnostic','staticPagesController@import_diagnostic');
Route::get('import_doctors','staticPagesController@import_doctors');
Route::get('import_hospitals','staticPagesController@import_hospitals');
Route::get('patients_info','staticPagesController@patients_info');
Route::get('logout','staticPagesController@logout');




Route::post('manage_admin','insertValueController@manage_admin');
Route::get('delete_admin/{id}','UpdateDeleteController@delete_admin');
Route::get('edit_admin/{id}','staticPagesController@edit_admin');
Route::post('update_admin','EditAllController@update_admin');

Route::post('manage_institution_info','insertValueController@manage_institution_info');
Route::get('delete_institution/{id}','UpdateDeleteController@delete_institution');

Route::post('manage_patient','insertValueController@manage_patient');
Route::get('delete_patient/{id}','UpdateDeleteController@delete_patient');
Route::post('manage_login','loginController@manage_login');



//export route
Route::get('export_patient_download','exportController@export_patient_download');
Route::get('export_hospital_download','exportController@export_hospital_download');
Route::get('export_diagnostic_download','exportController@export_diagnostic_download');

Route::post('manage_appointment','insertValueController@manage_appointment');
Route::get('delete_appointment/{id}','UpdateDeleteController@delete_appointment');

Route::post('add_doctor_cheek','insertValueController@add_doctor_cheek');
Route::get('edit_appointment','staticPagesController@edit_appointment');
Route::get('edit_patient/{id}','staticPagesController@edit_patient');
Route::post('update_patient','EditAllController@update_patient');
Route::get('delete_doctor/{id}','UpdateDeleteController@delete_doctor');

Route::get('edit_doctors/{id}','staticPagesController@edit_doctors');
Route::post('update_doctor_cheek','EditAllController@update_doctor_cheek');

Route::get('edit_diagnostic/{id}','staticPagesController@edit_diagnostic');
Route::post('update_diagnostic','EditAllController@update_diagnostic');

Route::get('edit_hospital/{id}','staticPagesController@edit_hospital');
Route::post('update_Hospital','EditAllController@update_Hospital');

///=======================================================================================

Route::get('/', 'WelcomeController@index');
Route::get('/contact', 'WelcomeController@contact_page');

Route::get('/doctor-login', 'UserController@doctor_login');
Route::get('hospital-login', 'UserController@hospital_login');
Route::get('/center-login', 'UserController@center_login');
Route::get('/patient-login', 'UserController@patient_login');

Route::get('/doctor-profile/{id}', 'UserController@doctor_profile');
Route::get('/Specialist-view', 'UserController@specialist_view');
Route::get('/hospital-profile/{id}', 'UserController@hospital_profile');
Route::get('/Hospital-view', 'UserController@all_hospital_view');
Route::get('/center-profile/{id}', 'UserController@center_profile');
Route::get('/Center-view', 'UserController@all_diagnostic_view');
Route::get('/patient-profile/{id}', 'UserController@patient_profile');

Route::get('/doctor-registration', 'UserController@doctor_registration');
Route::get('/hospital-registration', 'UserController@hospital_registration');
Route::get('/center-registration', 'UserController@center_registration');
Route::get('/patient-registration', 'UserController@patient_registration');

Route::get('/Doctor-Appointment/{id}', 'UserController@doctor_app');
Route::post('/Appoinment', 'UserController@app_info');

Route::get('/Service-details/{id}', 'UserController@service_details');
Route::get('/help-details/{id}', 'UserController@help_details');

Route::post('/Doctor-info-save', 'SuperController@doctor_info_save');
Route::post('/Doctor-login', 'SuperController@doctor_login');

Route::post('/Patient-info-save', 'SuperController@patient_info_save');
Route::post('/Patient-login', 'SuperController@patient_login');
Route::post('/patientlogin', 'SuperController@patientlogin');

Route::post('/Hospital-info-save', 'SuperController@hospital_info_save');
Route::post('/Hospital-login', 'SuperController@hospital_login');

Route::post('/Diagnostic-info-save', 'SuperController@diagnostic_info_save');
Route::post('/Diagnostic-login', 'SuperController@diagnostic_login');

Route::post('/Add-medical-service', 'SuperController@add_medical_service');
Route::post('/Add-link', 'SuperController@add_link');

Route::get('/All-Hospital-search', 'SearchController@all_hospital_search');
Route::get('/All-Center-search', 'SearchController@all_center_search');
Route::get('/All-Specialist-search', 'SearchController@all_specialist_search');
Route::get('/Hospital-search', 'SuperController@hospital_search');
Route::get('/country-search', 'SearchController@country_search');
Route::get('/Specialist-search', 'SearchController@specialist_search');

Route::get('/doctor-appoinment', 'SearchController@doctor_appoinment');


Route::post('/update-about', 'SuperController@update_about');
Route::post('/update-doctor-profile', 'SuperController@update_doctor_profile');
Route::post('/update-doctor-skill', 'SuperController@update_doctor_skill');
Route::post('/update-doctor-media', 'SuperController@update_doctor_media');

Route::post('/update-hospital-profile', 'SuperController@update_hospital_profile');
Route::post('/update-hospital-about', 'SuperController@update_hospital_about');
Route::post('/update-hospital-media', 'SuperController@update_hospital_media');
Route::post('/medical-service', 'SuperController@medical_service');
Route::post('/Add-help-link', 'SuperController@add_help_link');

Route::post('/update-center-profile', 'SuperController@update_center_profile');
Route::post('/update-center-about', 'SuperController@update_center_about');
Route::post('/update-center-media', 'SuperController@update_center_media');
Route::post('/center-medical-service', 'SuperController@center_medical_service');
Route::post('/Add-center-help-link', 'SuperController@add_center_help_link');

Route::post('/update-patient-about', 'SuperController@update_patient_about');
Route::post('/update-patient-media', 'SuperController@update_patient_media');

Route::post('/update-center-profile', 'SuperController@update_center_profile');


Route::get('/Doctor_appoinment_list', 'UserController@doctor_app_show');


Route::get('/Logout','SuperController@logout');

