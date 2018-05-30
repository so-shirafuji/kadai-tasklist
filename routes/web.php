<?php

Route::resource('tasks', 'TasksController');
// copy function (button)
Route::get('/', 'TasksController@index');