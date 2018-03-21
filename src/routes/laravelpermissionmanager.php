<?php

/*
|--------------------------------------------------------------------------
| gpibarra\LaravelPermissionManager Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the gpibarra\LaravelPermissionManager package.
|
*/
Route::group(
[
    'namespace'  => 'gpibarra\LaravelPermissionManager\app\Http\Controllers',
    'middleware' => 'web',
    'prefix'     => config('laravelpermissionmanager.route_prefix'),
],
function () {
    //Users
    Route::resource('/users', 'UserController', ['parameters' => [ 'users' => 'user']]);

    //Permission
    Route::resource('/permissions', 'PermissionController', ['parameters' => [ 'permissions' => 'permission']]);

    //Roles
    Route::resource('/roles', 'RoleController', ['parameters' => [ 'roles' => 'role']]);

});