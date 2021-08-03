<?php

Route::redirect('/', '/login');
Route::get('/countries', 'CountriesController@index');
Route::get('/teams', 'TeamsController@index');
Route::get('/players', 'PlayersController@index');
Route::get('/venue', 'VenueController@index');
Route::get('/matches', 'MatchesController@index');
Route::get('/results', 'ResultsController@index');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Teams
    Route::delete('teams/destroy', 'TeamsController@massDestroy')->name('teams.massDestroy');
    Route::resource('teams', 'TeamsController');

    // Players
    Route::delete('players/destroy', 'PlayersController@massDestroy')->name('players.massDestroy');
    Route::resource('players', 'PlayersController');

    // Venue
    Route::delete('venues/destroy', 'VenueController@massDestroy')->name('venues.massDestroy');
    Route::resource('venues', 'VenueController');

    // Matches
    Route::delete('matches/destroy', 'MatchesController@massDestroy')->name('matches.massDestroy');
    Route::resource('matches', 'MatchesController');

    // Result
    Route::delete('results/destroy', 'ResultController@massDestroy')->name('results.massDestroy');
    Route::resource('results', 'ResultController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});