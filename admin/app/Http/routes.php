<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index','staticPagesController@index');
Route::get('home', 'staticPagesController@homepage');
Route::get('add_admin', 'staticPagesController@addadmin');
Route::get('add_appointment','staticPagesController@add_appointment');
Route::get('add_diagnostic','staticPagesController@add_diagnostic');
Route::get('add_doctor','staticPagesController@add_doctor');
Route::post('add_doctor_cheek','staticPagesController@add_doctor_cheek');
Route::get('add_hospital','staticPagesController@add_hospital');
Route::get('add_patient','staticPagesController@add_patient');
Route::get('admins_info','staticPagesController@admins_info');
Route::get('appointment_info','staticPagesController@appointment_info');
Route::get('diagnostics_info','staticPagesController@diagnostics_info');
Route::get('doctors_info','staticPagesController@doctors_info');
Route::get('doctors_profile_details','staticPagesController@doctors_profile_details');
Route::get('edit-doctors','staticPagesController@edit_doctors');
Route::get('edit_diagnostic','staticPagesController@edit_diagnostic');
Route::get('edit_hospital','staticPagesController@edit_hospital');
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
Route::post('update_admin','staticPagesController@update_admin');

Route::get('edit_patient/{id}','staticPagesController@edit_patient');

Route::post('manage_institution_info','insertValueController@manage_institution_info');
Route::get('delete_institution/{id}','UpdateDeleteController@delete_institution');

Route::post('manage_patient','insertValueController@manage_patient');
Route::get('delete_patient/{id}','UpdateDeleteController@delete_patient');
Route::post('manage_login','loginController@manage_login');



//export route
Route::get('export_patient_download','exportController@export_patient_download');

Route::post('manage_appointment','insertValueController@manage_appointment');
Route::get('delete_appointment/{id}','UpdateDeleteController@delete_appointment');