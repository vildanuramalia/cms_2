  
<?php




// Route::get('/hello', 'WelcomeController@hello');

Route::get('/Homes', 'HomesController'); 

Route::get('/About', 'AboutController');

Route::get('/article/{id}', 'ArticleController');

Auth::routes();

Route::get('/Home', 'HomeController@index')->name('Home');
