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
// Auth::routes();
// Route::get('/', function () {
//     return view('welcome');
//     // Route::get('/home', 'HomeController@index')->name('Home')->middleware('auth');
// });


// // Auth::routes();



//Public Site
Auth::routes();
Route::get('/home',  'UsersController@index')->name("index");

///////////////////// Users CONTROLLER////////////////////////////////////////////////////////

Route::group(['middleware'=>['auth']], function (){
Route::get('/userDashboard', 'UsersController@userDashboard')->name("userDashboard");
Route::get('/users',        'UsersController@users')->name("users");
Route::post('/createUsers', 'UsersController@createUsers')->name("createUsers");
Route::post('/change',       'UsersController@change')->name("change");
Route::get('/update_profile', 'UsersController@update_profile')->name("update_profile");
Route::post('/upload_profile','UsersController@upload_profile')->name("upload_profile");


////////////////////////////////POSTS CONTROLLER FOR PUBLIC //////////////////////////////////////////////////////

// Route::get('/item_form', 'PostsController@item_form')->name("item_form");
// Route::get('/all_items',         'PostsController@all_items')->name("all_items");
Route::get('/single_item',       'PostsController@single_item')->name("single_item");


Route::get("shelfs",           'ShelfController@displayShelvesItems');  
Route::get("shelves/{shelfNo}",'ShelfController@displaySingleShelf')->name('displaySingleShelf');

Route::get('/shelf1_user', 'PostsController@shelf1_user')->name("shelf1_user");
Route::get('/shelf3_user', 'PostsController@shelf3_user')->name("shelf3_user");
//Search Tapes
Route::post('/searchItems', 'PostsController@searchItems')->name("searchItems");



// Route::get('documents/pdf-document/{id}', 'PostController@getDocument');
// Route::get('dropzoneFile','PostsController@dropzoneFile') ;
// Route::post('dropzoneUploadFile',array('as'=>'dropzone.uploadfile','uses'=>'PostsController@dropzoneUploadFile')) ;
// Route::get('/home', 'HomeController@index')->name('Home');


///////////////////////// ADMIN DASHBOARD CONTROLLER /////////////////////////////////////////////////////////


Route::get('/logout',            'DashboardController@logout')->name("logout");
Route::get('/dashboard',         'DashboardController@dashboard')->name('dashboard');
Route::get('/create_programs',   'DashboardController@create_programs')->name("create_programs");
Route::post('/AddPrograms',      'DashboardController@AddPrograms')->name("AddPrograms");
Route::get('/all_items',         'DashboardController@all_items')->name("all_items");
Route::get('/shelf1_2',          'DashboardController@shelf1_2')->name("shelf1_2");
Route::get('/shelf3_4',          'DashboardController@shelf3_4')->name("shelf3_4");

Route::get('/table',             'DashboardController@table')->name("table"); 

Route::get('/available_items',   'DashboardController@available_items')->name("available_items");
Route::get('/events/{id}',       'DashboardController@events')->name("events");
Route::get('/returnedEvent/{id}', 'DashboardController@returnedEvent')->name("returnedEvent");
Route::post('/returnedEventBlade/{id}', 'DashboardController@returnedEventBlade')->name("returnedEventBlade");
Route::get('/all_programs',      'DashboardController@all_programs')->name("all_programs");
Route::get('/view_single_item/{id}', 'DashboardController@view_single_item')->name("view_single_item");


//////////////////////////////TAPE  CONTROLLER/////////////////////////////////////////////////////////

Route::get('/tapeForm',  'TapesController@tapeForm')->name("tapeForm");
Route::post('/tapeReg',  'TapesController@tapeReg')->name("tapeReg");

//Search Tapes
Route::post('/searchTapes', 'TapesController@searchTapes')->name("searchTapes");
});




////////////////////////////////////Loan Controller////////////////////////////////////////////////////////////

Route::get('/loaned_items', 'LoansController@loaned_items')->name("loaned_items");
Route::get('/available_items','LoansController@available_items')->name("available_items");
Route::get('/loan_request', 'LoansController@loan_request')->name("loan_request");
Route::post('/loanRequest', 'LoansController@loanRequest')->name("loanRequest");