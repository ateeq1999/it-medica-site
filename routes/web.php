<?php


Route::get('/clients', function () {
    return view('site.pages.clients');
});

Route::get('/categories/{category/show}', function () {
    return 'categories.show';
    // return view('site.categories.show');
})->name('categories.show');

Route::get('/', function(){
    return redirect()->route('site.home');
    // return redirect()->route('site.home');
});

Auth::routes(['register'=>true]);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        // Route::get('/', 'HomeController@index')->name('site.home');
        Route::get('/home', 'HomeController@folio')->name('site.home');
        Route::get('/projects', 'HomeController@projects')->name('site.projects');
        Route::get('/blogs/{blog}', 'HomeController@show_blog')->name('site.blogs.show');
    });

