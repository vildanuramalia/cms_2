  
<?php
use Illuminate\Support\Facades\Route;
// Route::get('/hello', 'WelcomeController@hello');

Auth::routes();

Route::get('/', 'HomeController@index')->name('Home');

Route::get('/Homes', 'HomesController')->name('home'); 

Route::get('/About', 'AboutController')->name('about');

//Route::get('/article/{id}', 'ArticleController@articleID');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ArticleController@index')->name('manage');

//Route::get('/manage/add','ArticleController@add');

Route::post('/article/create','ArticleController@create');

Route::get('/article/edit/{id}','ArticleController@edit');

Route::post('/article/update/{id}','ArticleController@update');

Route::get('/article/delete/{id}','ArticleController@delete');

Route::get('/article/add','ArticleController@add');

//Route::get('/about', 'AboutController@index');

//Route::get('/article/{id}', 'ArticleController@index');

// Route::get('/about', 'AboutController');
// Route::get('/article/{id}', 'ArticleController@viewArticles');
//Auth::routes();

//Route::get('/homes', 'HomesController@index')->name('home');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/Manage', 'ManageUserController@Manage')->name('manage');
Route::get('/Manage/add','ManageUserController@add');
Route::post('/Manage/create','ManageUserController@create');
Route::get('/Manage/edit/{id}','ManageUserController@edit');
Route::post('/Manage/update/{id}','ManageUserController@update');
Route::get('/Manage/delete/{id}','ManageUserController@delete');

Route::get('/ManageUser', 'ManageUserController@ManageUser')->name('ManageUser');
Route::get('/ManageUser/addUser','ManageUserController@add');
Route::post('/ManageUser/create','ManageUserController@create');
Route::get('/ManageUser/editUser/{id}','ManageUserController@edit');
Route::post('/ManageUser/update/{id}','ManageUserController@update');
Route::get('/ManageUser/delete/{id}','ManageUserController@delete');


Auth::routes();
Route::get('/home', 'HomesController@index')->name('home');

Route::get('Manage/cetak_pdf', 'ArticleController@cetak_pdf');