<?php



Route::get('about','PagesController@about');

Route::get('contact','PagesController@contact');

Route::resource('articles','ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('foo', ['middleware'=> 'manager',function(){
    return 'page only for managers';
}]);
