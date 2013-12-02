<?php
Route::group(array('before' => 'auth_admin'), function()
{

	
Route::get('admin/command/standard',array('uses'=>'CommandController@standard'));
Route::post('admin/command/ajax_command',array('uses'=>'CommandController@ajax_command'));

Route::get('admin/command/logs',array('uses'=>'CommandController@command_logs'));
Route::get('admin/command',array('uses'=>'CommandController@index'));




});