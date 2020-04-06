<?php

//User
//home
Route::get('/','HomepageController@indexu');
//info
Route::get('/info','InfopageController@indexu');
//about
Route::get('/about','AboutpageController@indexu');
//Route::get('/about_more/{id}','AboutpageController@more');
//service => gde
Route::get('/service','GdeController@indexu');
//contact
Route::get('/contact','ContactController@indexu');

//############################################################################################################

//Admin
//dashboard
Route::get('/cp_admin','HomepageController@cpadmin');
Route::get('showDahboardApp','HomepageController@showDahboardApp');
Route::get('showcontacts','ContactController@showcontacts');

//Home
Route::get('/homepage','HomepageController@index');
Route::get('show','HomepageController@show');
Route::post('upl','HomepageController@upl');
Route::post('upd/{id}','HomepageController@upd');
Route::post('/formSubmit','HomepageController@upload');
Route::delete('/deleteSlider/{id}','HomepageController@deleteSlider');

//Appointment
Route::get('/adminAppointment','HomepageController@indexa');
Route::post('/makeAppointment','HomepageController@makeAppointment');
Route::delete('/deleteSlidera/{id}','HomepageController@deleteSlidera');
Route::get('showa','HomepageController@showa');
Route::post('/uplapp/{id}','HomepageController@uplapp');

//About
Route::get('/aboutpage','AboutpageController@index');
Route::get('about_show','AboutpageController@show');
Route::post('about_upl','AboutpageController@upl');
Route::post('about_upd/{id}','AboutpageController@upd');
Route::post('/about_formSubmit','AboutpageController@upload');
Route::delete('/about_deleteSlider/{id}','AboutpageController@deleteSlider');

//Activs
Route::get('abouts_show','AboutpageController@shows');
Route::post('abouts_upl','AboutpageController@upls');
Route::post('abouts_upd/{id}','AboutpageController@upds');
Route::post('/abouts_formSubmit','AboutpageController@uploads');
Route::delete('/abouts_deleteSlider/{id}','AboutpageController@deleteSliders');

//Gde
Route::get('/gde','GdeController@index');
Route::get('gde_show','GdeController@show');
Route::post('gde_upl','GdeController@upl');
Route::post('gde_upd/{id}','GdeController@upd');
Route::post('/gde_formSubmit','GdeController@upload');
Route::delete('/gde_deleteSlider/{id}','GdeController@deleteSlider');
Route::get('gdesearch','GdeController@gdesearch');

//info
Route::get('/infopage','InfopageController@index');
Route::get('info_show','InfopageController@shows');
Route::post('info_upl','InfopageController@upls');
Route::post('info_upd/{id}','InfopageController@upds');
Route::post('/info_formSubmit','InfopageController@uploads');
Route::delete('/info_deleteSlider/{id}','InfopageController@deleteSliders');

//Gallery
Route::get('/gallerypage','GalleryController@index');
Route::get('showg','GalleryController@show');
Route::post('uplg','GalleryController@upl');
Route::post('updg/{id}','GalleryController@upd');
Route::post('/formSubmitg','GalleryController@upload');
Route::delete('/deleteSliderg/{id}','GalleryController@deleteSlider');

//category
Route::post('uplc','GalleryController@uplc');
Route::get('showc','GalleryController@show');

//Contact
Route::post('sendmessage','ContactController@message');

Route::get('/admincontact','ContactController@indexa');
Route::delete('/deleteSlidercon/{id}','ContactController@deleteSlidera');
Route::get('showcon','ContactController@showa');
Route::post('/uplcon/{id}','ContactController@uplapp');

//Auth
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
