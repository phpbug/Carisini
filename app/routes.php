<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as' => 'index',
	'uses' => 'HomeController@index'
));

//After user hit the search from home page
Route::get('/show/{criteria}', array(
	'as' => 'show',
	'uses' => 'HomeController@show'
));

//After user click at the ads
Route::get('/display/{criteria}', array(
	'as' => 'display',
	'uses' => 'CriteriaController@display'
));

/*Route::group(array('before' => 'csrf'), function()
{
    // Third Route
    Route::post('/show', array(
        'as' => 'show',
        'uses' => 'HomeController@show'
    ));

});
*/
