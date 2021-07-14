<?php

use App\Http\Controllers\admin\login;
use App\Http\Controllers\admin\dashboard;

Route::get('/', function () {
    return view('/admin/dashboard');
});
Route::get('/rt-admin', function () {
    return view('Admin/RT-Login');
});

#-------------------- [ ADMIN ROUTES] --------------------#

#------ [ lOGIN ] -----#
Route::get('/admin', [login::class, 'index']);

#------ [ DASHBOARD ] -----#
Route::get('/dashboard', [dashboard::class, 'index']);
