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


Route::get('/', ['as' => 'home', 'uses'=>'Admin\IndexController@show']
);
Route::get('/about/', ['uses'=>'Admin\AboutController@show', 'as'=>'about']);
Route::get('/articles/', 'Admin\Core@getArticles')->name('articles');
Route::get('/article/{id}', ['uses'=>'Admin\Core@getArticle', 'middleware'=>[
    'mymiddle:admin']
])->name('article');
// list pages
//Route::resource('/pages', 'Admin\CoreResource');
Route::get('/form', function () {
    return view('form');
});
Route::match(['get','post'],'/contact/{id?}', ['uses'=>'Admin\ContactController@show', 'as'=>'contact']);


/*Route::get('/article/{id}', ['as' => 'article', function ($id) {
    echo $id;
}]);
Route::get('/about', function () {
    return view('about');
});
Route::match(['get', 'post'], '/comments', function () {
    dd(2);
    return;
});
Route::any('/comments', function () {
    dump($_POST);
    dd(1);
    return;
});

Route::get('/form', function () {

    return view('form');
});

Route::get('/page/{cat}/{id}', function ($cat, $id) {
    echo $cat;
    echo $id;
    return;
})->where([
    'id' => '\d+',
    'cat' => '[a-zA-Z_]+'
]);
Route::group(['prefix' => 'admin'], function () {
    Route::get('page/create/{var}', function () {
        $route = Route::current();
        echo $route->getName();
        print_r($route->parameters());
//        return redirect()->route('article', ['id'=>25]);
    })->name('createpage');
    Route::get('page/edit', function () {
        echo 'page/edit';
    });
});*/