<?php

/*
|--------------------------------------------------------------------------
| Scaffold Routes
|--------------------------------------------------------------------------
|
| Here is where all scaffold routes are defined.
|
*/

Route::resource('generators', 'GeneratorController');

Route::get('generators/{id}/delete', [
    'as' => 'generators.delete',
    'uses' => 'GeneratorController@destroy',
]);


Route::resource('partners', 'PartnerController');

Route::get('partners/{id}/delete', [
    'as' => 'administration.partners.delete',
    'uses' => 'PartnerController@destroy',
]);


Route::resource('homesliders', 'HomesliderController');

Route::get('homesliders/{id}/delete', [
    'as' => 'administration.homesliders.delete',
    'uses' => 'HomesliderController@destroy',
]);


Route::resource('companies', 'CompanyController');

Route::get('companies/{id}/delete', [
    'as' => 'administration.companies.delete',
    'uses' => 'CompanyController@destroy',
]);


Route::resource('news', 'NewsController');

Route::get('news/{id}/delete', [
    'as' => 'administration.news.delete',
    'uses' => 'NewsController@destroy',
]);



Route::resource('companyImages', 'CompanyImageController');

Route::get('companyImages/{id}/delete', [
    'as' => 'administration.companyImages.delete',
    'uses' => 'CompanyImageController@destroy',
]);


Route::resource('companies', 'CompanyController');

Route::get('companies/{id}/delete', [
    'as' => 'administration.companies.delete',
    'uses' => 'CompanyController@destroy',
]);


Route::resource('news', 'NewsController');

Route::get('news/{id}/delete', [
    'as' => 'administration.news.delete',
    'uses' => 'NewsController@destroy',
]);

Route::resource('newsImages', 'NewsImagesController');

Route::get('newsImages/{id}/delete', [
    'as' => 'administration.newsImages.delete',
    'uses' => 'NewsImagesController@destroy',
]);


Route::resource('news', 'NewsController');

Route::get('news/{id}/delete', [
    'as' => 'administration.news.delete',
    'uses' => 'NewsController@destroy',
]);



Route::resource('newsImages', 'NewsImageController');

Route::get('newsImages/{id}/delete', [
    'as' => 'administration.newsImages.delete',
    'uses' => 'NewsImageController@destroy',
]);


Route::resource('newsImages', 'NewsImageController');

Route::get('newsImages/{id}/delete', [
    'as' => 'administration.newsImages.delete',
    'uses' => 'NewsImageController@destroy',
]);


Route::resource('newsImages', 'NewsImageController');

Route::get('newsImages/{id}/delete', [
    'as' => 'administration.newsImages.delete',
    'uses' => 'NewsImageController@destroy',
]);


Route::resource('products', 'ProductsController');

Route::get('products/{id}/delete', [
    'as' => 'administration.products.delete',
    'uses' => 'ProductsController@destroy',
]);


Route::resource('productsImages', 'ProductsImageController');

Route::get('productsImages/{id}/delete', [
    'as' => 'administration.productsImages.delete',
    'uses' => 'ProductsImageController@destroy',
]);


Route::resource('productsImages', 'ProductsImageController');

Route::get('productsImages/{id}/delete', [
    'as' => 'administration.productsImages.delete',
    'uses' => 'ProductsImageController@destroy',
]);
