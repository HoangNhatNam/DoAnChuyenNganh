<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/admin', 'AdminController@loginAdmin');
//Route::post('/admin', 'AdminController@postLoginAdmin');
//
Route::get('/home', function () {
    return view('home');
});
//Route::get('/home', [
//    'as' => 'home.index',
//    'uses' => 'HomeController@index'
//]);

Route::prefix('admin')->group(function () {
    Route::get('/', [
        'as' => 'admin.login',
        'uses' => 'AdminController@loginAdmin'
    ]);
    Route::post('/', [
        'as' => 'admin.post-login',
        'uses' => 'AdminController@postLoginAdmin'
    ]);
    Route::get('/logout', [
        'as' => 'admin.logout',
        'uses' => 'AdminController@logout'
    ]);

    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'UserController@index',
            'middleware' => 'can:user-list'
        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'UserController@create',
            'middleware' => 'can:user-add'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'UserController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'UserController@edit',
            'middleware' => 'can:user-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'UserController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'UserController@delete',
            'middleware' => 'can:user-delete'
        ]);
        Route::get('/profile/{id}', [
            'as' => 'users.profile',
            'uses' => 'UserController@profile',
            'middleware' => 'can:user-profile'
        ]);
        Route::post('/activation', [
            'as' => 'users.activation',
            'uses' => 'UserController@activation',
            'middleware' => 'can:user-edit'
        ]);
        Route::get('/search', [
            'as' => 'users.search',
            'uses' => 'UserController@search',
            'middleware' => 'can:user-edit'
        ]);
    });

    Route::prefix('regents')->group(function () {
        Route::get('/', [
            'as' => 'regents.index',
            'uses' => 'RegentController@index',
            'middleware' => 'can:regents-list'
        ]);
        Route::get('/create', [
            'as' => 'regents.create',
            'uses' => 'RegentController@create',
            'middleware' => 'can:regents-add'
        ]);
        Route::post('/store', [
            'as' => 'regents.store',
            'uses' => 'RegentController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'regents.edit',
            'uses' => 'RegentController@edit',
            'middleware' => 'can:regents-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'regents.update',
            'uses' => 'RegentController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'regents.delete',
            'uses' => 'RegentController@delete',
            'middleware' => 'can:regents-delete'
        ]);
    });

    Route::prefix('certificates')->group(function () {
        Route::get('/', [
            'as' => 'certificates.index',
            'uses' => 'CertificateController@index',
            'middleware' => 'can:certificate-list'
        ]);
        Route::get('/create', [
            'as' => 'certificates.create',
            'uses' => 'CertificateController@create',
            'middleware' => 'can:certificate-add'
        ]);
        Route::post('/store', [
            'as' => 'certificates.store',
            'uses' => 'CertificateController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'certificates.edit',
            'uses' => 'CertificateController@edit',
            'middleware' => 'can:certificate-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'certificates.update',
            'uses' => 'CertificateController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'certificates.delete',
            'uses' => 'CertificateController@delete',
            'middleware' => 'can:certificate-delete'
        ]);
    });

    Route::prefix('levels')->group(function () {
        Route::get('/', [
            'as' => 'levels.index',
            'uses' => 'LevelController@index',
            'middleware' => 'can:level-list'
        ]);
        Route::get('/create', [
            'as' => 'levels.create',
            'uses' => 'LevelController@create',
            'middleware' => 'can:level-add'
        ]);
        Route::post('/store', [
            'as' => 'levels.store',
            'uses' => 'LevelController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'levels.edit',
            'uses' => 'LevelController@edit',
            'middleware' => 'can:level-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'levels.update',
            'uses' => 'LevelController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'levels.delete',
            'uses' => 'LevelController@delete',
            'middleware' => 'can:level-delete'
        ]);
    });

    Route::prefix('partner')->group(function () {
        Route::get('/', [
            'as' => 'partner.index',
            'uses' => 'PartnerController@index',
            'middleware' => 'can:partner-list'
        ]);
        Route::get('/create', [
            'as' => 'partner.create',
            'uses' => 'PartnerController@create',
            'middleware' => 'can:partner-add'
        ]);
        Route::post('/store', [
            'as' => 'partner.store',
            'uses' => 'PartnerController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'partner.edit',
            'uses' => 'PartnerController@edit',
            'middleware' => 'can:partner-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'partner.update',
            'uses' => 'PartnerController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'partner.delete',
            'uses' => 'PartnerController@delete',
            'middleware' => 'can:partner-delete'
        ]);
    });

    Route::prefix('report')->group(function () {
        Route::get('/', [
            'as' => 'report.index',
            'uses' => 'ReportController@index',
            'middleware' => 'can:report-list'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'report.edit',
            'uses' => 'ReportController@edit',
            'middleware' => 'can:report-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'report.update',
            'uses' => 'ReportController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'report.delete',
            'uses' => 'ReportController@delete',
            'middleware' => 'can:report-delete'
        ]);
        Route::post('/activation', [
            'as' => 'report.activation',
            'uses' => 'ReportController@activation',
            'middleware' => 'can:report-edit'
        ]);
    });

    Route::prefix('reportfile')->group(function () {
        Route::get('/', [
            'as' => 'reportfile.index',
            'uses' => 'ReportFileController@index',
            'middleware' => 'can:reportfile-list'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'reportfile.delete',
            'uses' => 'ReportFileController@delete',
            'middleware' => 'can:reportfile-delete'
        ]);
        Route::post('/activation', [
            'as' => 'reportfile.activation',
            'uses' => 'ReportFileController@activation',
            'middleware' => 'can:reportfile-edit'
        ]);
    });

    Route::prefix('roles')->group(function () {
        Route::get('/', [
            'as' => 'roles.index',
            'uses' => 'AdminRoleController@index',
            'middleware' => 'can:role-list'
        ]);
        Route::get('/create', [
            'as' => 'roles.create',
            'uses' => 'AdminRoleController@create',
            'middleware' => 'can:role-add'
        ]);
        Route::post('/store', [
            'as' => 'roles.store',
            'uses' => 'AdminRoleController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'roles.edit',
            'uses' => 'AdminRoleController@edit',
            'middleware' => 'can:role-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'roles.update',
            'uses' => 'AdminRoleController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'roles.delete',
            'uses' => 'AdminRoleController@delete',
            'middleware' => 'can:role-delete'
        ]);
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [
            'as' => 'settings.index',
            'uses' => 'AdminSettingController@index',
            'middleware' => 'can:setting-list'
        ]);
        Route::get('/create', [
            'as' => 'settings.create',
            'uses' => 'AdminSettingController@create',
            'middleware' => 'can:setting-add'
        ]);
        Route::post('/store', [
            'as' => 'settings.store',
            'uses' => 'AdminSettingController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'settings.edit',
            'uses' => 'AdminSettingController@edit',
            'middleware' => 'can:setting-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'settings.update',
            'uses' => 'AdminSettingController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'settings.delete',
            'uses' => 'AdminSettingController@delete',
            'middleware' => 'can:setting-delete'
        ]);
    });

    Route::prefix('callforpaper')->group(function () {
        Route::get('/', [
            'as' => 'callforpaper.index',
            'uses' => 'CallforpaperController@index',
            'middleware' => 'can:callforpaper-list'
        ]);
        Route::get('/create', [
            'as' => 'callforpaper.create',
            'uses' => 'CallforpaperController@create',
            'middleware' => 'can:callforpaper-add'
        ]);
        Route::post('/store', [
            'as' => 'callforpaper.store',
            'uses' => 'CallforpaperController@store'
        ]);
        Route::post('/imageUpload', [
            'as' => 'callforpaper.imageUpload',
            'uses' => 'CallforpaperController@imageUpload'
        ]);
        Route::post('/activation', [
            'as' => 'callforpaper.activation',
            'uses' => 'CallforpaperController@activation',
        ]);
        Route::get('/edit/{id}', [
            'as' => 'callforpaper.edit',
            'uses' => 'CallforpaperController@edit',
            'middleware' => 'can:callforpaper-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'callforpaper.update',
            'uses' => 'CallforpaperController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'callforpaper.delete',
            'uses' => 'CallforpaperController@delete',
            'middleware' => 'can:callforpaper-delete'
        ]);
    });

    Route::prefix('time')->group(function () {
        Route::get('/', [
            'as' => 'time.index',
            'uses' => 'TimeController@index',
            'middleware' => 'can:time-list'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'time.edit',
            'uses' => 'TimeController@edit',
            'middleware' => 'can:time-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'time.update',
            'uses' => 'TimeController@update'
        ]);
    });

    Route::prefix('permissions')->group(function () {
        Route::get('/create', [
            'as' => 'permissions.create',
            'uses' => 'AdminPermissionController@createPermission'
        ]);
        Route::post('/store', [
            'as' => 'permissions.store',
            'uses' => 'AdminPermissionController@store'
        ]);
    });
});


