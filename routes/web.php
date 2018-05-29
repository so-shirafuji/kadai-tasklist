<?php

Route::resource('tasks', 'TasksController');
// copy function (button)
Route::get('tasks/{id}/copy', 'TasksController@copy');