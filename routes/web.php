  
<?php
use Illuminate\Support\Facades\Route;
// Route::get('/hello', 'WelcomeController@hello');

Auth::routes();

Route::get('/', 'HomeController@index')->name('Home');

Route::get('/Homes', 'HomesController')->name('home'); 

Route::get('/About', 'AboutController')->name('about');

// Route::get('/article/{id}', 'ArticleController@articleID');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ArticleController@index')->name('manage');

//Route::get('/about', 'AboutController@index');

// Route::get('/article/{id}', 'ArticleController@index');

// Route::get('/about', 'AboutController');
// Route::get('/article/{id}', 'ArticleController@viewArticles');
//Auth::routes();

//Route::get('/homes', 'HomesController@index')->name('home');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/manage/add','ArticleController@add');
Route::post('/manage/create', 'ArticleController@create');
Route::get('/manage/edit/{id}','ArticleController@edit');
Route::post('/manage/update/{id}','ArticleController@update');
Route::get('/manage/delete/{id}', 'ArticleController@delete');

Route::get('/manageUser', 'ManageUserController@ManageUser')->name('ManageUser');
Route::get('/manageUser/addUser','ManageUserController@add');
Route::post('/manageUser/create','ManageUserController@create');
Route::get('/manageUser/editUser/{id}','ManageUserController@edit');
Route::post('/manageUser/update/{id}','ManageUserController@update');
Route::get('/manageUser/delete/{id}','ManageUserController@delete');


Auth::routes();
Route::get('/home', 'HomesController@index')->name('home');

Route::get('manage/cetak_pdf', 'ArticleController@cetak_pdf');

Route::get('manage/tabel_user', 'ArticleUserController@tabel_user');