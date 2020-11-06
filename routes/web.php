  
<?php




// Route::get('/hello', 'WelcomeController@hello');

Auth::routes();

Route::get('/', 'HomeController@index')->name('Home');

Route::get('/Homes', 'HomesController')->name('home'); 

Route::get('/About', 'AboutController')->name('about');

Route::get('/article/{id}', 'ArticleController@articleID');

Route::get('/manage', 'ArticleController@index')->name('manage');

Route::get('/manage/add','ArticleController@add');

Route::post('/article/create','ArticleController@create');

Route::get('/article/edit/{id}','ArticleController@edit');

Route::post('/article/update/{id}','ArticleController@update');

Route::get('/article/delete/{id}','ArticleController@delete');

Route::post('/article/addKom/{id}','ArticleController@addKom');

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/manage', 'ManageUserController@manage')->name('manage');
Route::get('/manage/add','ManageUserController@add');
Route::post('/manage/create','ManageUserController@create');
Route::get('/manage/edit/{id}','ManageUserController@edit');
Route::post('/manage/update/{id}','ManageUserController@update');
Route::get('/manage/delete/{id}','ManageUserController@delete');

Route::get('/manageUser', 'ManageUserController@manageUser')->name('manageUser');
Route::get('/manageUser/addUser','ManageUserController@add');
Route::post('/manageUser/create','ManageUserController@create');
Route::get('/manageUser/editUser/{id}','ManageUserController@edit');
Route::post('/manageUser/update/{id}','ManageUserController@update');
Route::get('/manageUser/delete/{id}','ManageUserController@delete');


Auth::routes();
Route::get('/home', 'HomesController@index')->name('home');