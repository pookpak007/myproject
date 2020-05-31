<?php
/* */
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
Route::get( "/gallery" , function(){
	$ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://amp.insider.com/images/5b7acee73cccd122008b45ac-750-563.jpg";
    $spider = "https://cdn1us.denofgeek.com/sites/denofgeekus/files/styles/main_wide/public/2019/03/spider-man-far-from-home-tom-holland.jpg";

return view("gallery", compact("ant","bird","cat","god","spider") );
     
});

Route::get( "/ant" , function(){
	$ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";


return view("ant", compact("ant") );
        
});

Route::get( "/bird" , function(){
    $bird = "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2019/04/captain_america-civil_war-anthony_mackie-photofest-h_2019.jpg";


return view("bird", compact("bird") );
        
});

Route::get( "/cat" , function(){
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";


return view("cat", compact("cat") );
        
});

Route::get( "/god" , function(){
    $god = "https://amp.insider.com/images/5b7acee73cccd122008b45ac-750-563.jpg";
    return view("god", compact("god") );
        
});

Route::get( "/spider" , function(){
    $spider = "https://cdn1us.denofgeek.com/sites/denofgeekus/files/styles/main_wide/public/2019/03/spider-man-far-from-home-tom-holland.jpg";
    return view("spider", compact("spider") );
        
});

Route::get('/', function () {
    return view('welcome');
});

Route::get("/myprofile/create","MyProfileController@create");
Route::get( "/newgallery" , "MyProfileController@gallery" );
Route::get( "/newgallery/ant" , "MyProfileController@ant" );
Route::get( "/newgallery/bird" , "MyProfileController@bird" );
Route::get( "/newgallery/cat" , "MyProfileController@cat" );
Route::get( "/newgallery/god" , "MyProfileController@god" );
Route::get( "/newgallery/spider" , "MyProfileController@spider" );
Route::get( "/coronavirus" , "MyProfileController@coronavirus" );
Route::get("/teacher" , function (){
	return view("teacher/index");
});

Route::get("/student" , function (){
	return view("student/index");
});



Route::get('/table', function () {
    return view('table');
});

Route::middleware(['auth', 'role:admin'])->group(function () 
{
    Route::get('/teacher', function () {
        return view('teacher/index');
    });
    
    Route::resource('/covid19','Covid19Controller');
    });
    

/*Route::get('/covid19', 'Covid19Controller@index');
Route::get("/covid19/create", "Covid19Controller@create");
Route::post("/covid19", "Covid19Controller@store");
Route::get('/covid19/{id}', 'Covid19Controller@show');
Route::get("/covid19/{id}/edit", "Covid19Controller@edit");
Route::patch("/covid19/{id}", "Covid19Controller@update");
Route::delete('/covid19/{id}', 'Covid19Controller@destroy');
*/
Route::resource('/staff','StaffController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vehicles/pdf', 'VehiclesController@pdf_index');
Route::resource('post', 'PostController');
Route::resource('post', 'PostController');
Route::resource('profile', 'ProfileController');
Route::resource('vehicles', 'VehiclesController');
Route::resource('users', 'UsersController');

Route::resource('book', 'BookController');

Route::resource('product', 'ProductController');
Route::middleware(['auth'])->group(function () 
{
    Route::resource('order', 'OrderController');
    Route::resource('payment', 'PaymentController');
    Route::resource('order-product', 'OrderProductController');
});

