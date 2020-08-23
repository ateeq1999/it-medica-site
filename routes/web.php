<?php


Route::get('/clients', function () {
    return view('site.pages.clients');
});

Route::get('/categories/{category/show}', function () {
    return 'categories.show';
    // return view('site.categories.show');
})->name('categories.show');

Route::get('/', function(){
    return redirect()->route('site.test');
});

Auth::routes(['register'=>true]);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/', 'HomeController@index')->name('site.test');
        Route::get('profile', 'HomeController@profile')->name('site.profile');
        Route::get('clients', 'HomeController@clients')->name('site.clients');
        Route::get('contact-us', 'HomeController@contact_us')->name('site.contact-us');
        Route::post('contact-us', 'HomeController@contact_us_store')->name('site.contact-us-store');
    });

