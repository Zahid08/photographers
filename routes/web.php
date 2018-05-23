<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pagenotfound',function (){
    Auth::logout();
    return view('errors.503');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('/')->with('success', 'Successfully logged out.');
});

Route::group(['namespace'=>'backend'],function (){
    Route::get('/','RegistrationControllerZA@registerPhotographersView');
    Route::post('/register','RegistrationControllerZA@registrationPhotographers');

    Route::get('portal/photogrphers/Dashboard/{id}','DashboardControllerZA@dashboarPhotographers');

    Route::get('/portal/myphotos','ProfileController@myPhotos');
    Route::get('/portal/uploadphotos','ProfileController@upLoadPhotos');

    //upload photos
    Route::post('/portal/uploadphotos/savephotos','ProfileController@addUploadPhotos');

    Route::get('/portal/myphotos/invite/{id}','ProfileController@invitation');

    Route::post('/portal/invitaiondon','ProfileController@invitationDone');

    Route::post('/portal/mail','ProfileController@mailSend');
});
