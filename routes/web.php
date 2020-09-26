<?php


Route::get('/', function(){
    return redirect()->route('site.home');
});

Auth::routes(['register'=>true]);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/home', 'HomeController@home')->name('site.home');
        Route::get('/projects', 'HomeController@projects')->name('site.projects');
        Route::get('/blogs', 'HomeController@blogs')->name('site.blogs');
        Route::get('/blogs/{blog}', 'HomeController@show_blog')->name('site.blogs.show');
    });

