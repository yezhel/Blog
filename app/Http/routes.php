<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|Rutas del tipo GET,POST, PUT
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
		]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
		]);

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy',[
		'uses' => 'ArticlesController@destroy',
		'as' => 'admin.articles.destroy'
		]);

	Route::resource('images','ImagesController');
	Route::get('images/{id}/destroy',[
		'uses' => 'ImagesController@destroy',
		'as' => 'admin.images.destroy'
		]);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy',[
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
		]);
});

//Route::resource('/','indexController');
/*Route::group(['prefix' => 'articles'], function(){
	Route::get('view/{id}',[
		'uses' => 'TestController@view',
		'as' => 'articlesView'
		]);
});*/
/*
Route::get('articles', function(){
	return "Esta es la seccion de articulos";
});
*/

/*Route::get('articles/{nombre?}',function($nombre = "No coloco nombre"){
	return "El nombre es ". $nombre;	
});
*/
/*se llama como article/view/(nombre)
Route::group(['prefix' => 'articles'], function(){
	Route::get('view/{article?}', function($article="Vacio"){
		echo $article;
	});
});*/
//nombres a las rutas
/*Route::get('articles', [
	'as' => 'articles'
	'uses' => 'Usercontroller@index'
	]);
*/

