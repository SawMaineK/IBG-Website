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

Route::get('/', 'HomeController@index');

Route::auth();


Route::get('local/{lang}','HomeController@local');

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});

/*
|--------------------------------------------------------------------------
| Admin Soft routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'administration', 'middleware' => ['auth']], function ()
{    
	Route::get('/', function () {
		return redirect()->route('administration.partners.index');
	});
    require Config::get('generator.path_scaffold_routes');
});



/*
|--------------------------------------------------------------------------
| Front Website routes
|--------------------------------------------------------------------------
*/

	Route::get('/about-us', ['as' => 'about-us', 'uses' => 'FrontController@AboutUs']);
	Route::get('/our-company', ['as' => 'our-company', 'uses' => 'FrontController@OurCompany']);
	Route::get('/vision-&-mission', ['as' => 'vision-&-mission', 'uses' => 'FrontController@VisionMission']);
	Route::get('/contact', ['as' => 'contact', 'uses' => 'FrontController@contact']);
	Route::post('contact',  'FrontController@store');

//company
	Route::get('/our-companies', ['as' => 'our-companies', 'uses' => 'OurCompanyController@OurCompanies']);
	Route::get('/company-detail/{id}', ['as' => 'company-detail', 'uses' => 'OurCompanyController@companyDetail']);
//news
	Route::get('/news-detail/{id}', ['as' => 'news-detail', 'uses' => 'OurNewsController@newsDetail']);
	Route::get('/our-package', ['as' => 'our-news', 'uses' => 'OurNewsController@OurNews']);
	Route::get('/dubai-package', ['as' => 'dubai-package', 'uses' => 'DubaiPackageController@dubaiPackage']);
//product
	Route::get('/products-detail/{id}', ['as' => 'products-detail', 'uses' => 'OurProductsController@productsDetail']);
	Route::get('/our-products', ['as' => 'our-products', 'uses' => 'OurProductsController@OurProducts']);
	Route::get('/men-products', ['as' => 'men-products', 'uses' => 'MenProductsController@productsForMen']);
	Route::get('/women-products', ['as' => 'women-products', 'uses' => 'WomenProductsController@productsForWomen']);

//frontLogin&Register
	Route::get('/signin', ['as' => 'signin', 'uses' => 'SignInController@signIn']);
	Route::get('/registers', ['as' => 'registers', 'uses' => 'SignInController@registers']);

//NewsLetter
	Route::post('/newsletter', ['as' => 'newsletter', 'uses' => 'NewsLetterController@newsletter']);

//Welcome to Dubai Page (Read More)
	Route::get('/welcome-to-dubai', ['as' => 'welcome-to-dubai', 'uses' => 'FrontController@WelcomeDubai']);