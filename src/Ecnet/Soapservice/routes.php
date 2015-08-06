<?php

Route::group(['before' => 'auth_admin'], function () {

Route::get('admin/command/standard', ['uses' => 'CommandController@standard']);
Route::post('admin/command/ajax_command', ['uses' => 'CommandController@ajax_command']);

Route::get('admin/command/logs', ['uses' => 'CommandController@command_logs']);
Route::get('admin/command', ['uses' => 'CommandController@index']);

});
