<?php

     Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function(){
   
            Route::get('/index','DashboardController@index')->name('index');
            Route::resource('users','UserController')->except(['show']);
            Route::resource('categories','CategoryController')->except(['show']);
            Route::resource('blocks','BlockController')->except(['show']);
            Route::resource('services','ServicesController')->except(['show']);
            Route::resource('projects','ProjectController')->except(['show']);
            Route::resource('products','ProductController')->except(['show']);
            Route::resource('blogs','BlogController')->except(['show']);
            Route::resource('clients','ClientController')->except(['show']);
        });   
    });

