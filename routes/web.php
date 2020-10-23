  
<?php




// Route::get('/hello', 'WelcomeController@hello');

Auth::routes();

Route::get('/', 'HomeController@index')->name('Home');

Route::get('/Homes', 'HomesController'); 

Route::get('/About', 'AboutController');

Route::get('/article/{id}', 'ArticleController@articleID');

Route::get('/manage', 'ArticleController@index')->name('manage');

Route::get('/manage/add','ArticleController@add');

Route::post('/article/create','ArticleController@create');

Route::get('/article/edit/{id}','ArticleController@edit');

Route::post('/article/update/{id}','ArticleController@update');

Route::get('/article/delete/{id}','ArticleController@delete');

Route::post('/article/addKom/{id}','ArticleController@addKom');
