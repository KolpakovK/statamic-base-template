<?php

use Illuminate\Support\Facades\Route;

Route::post('rebuild-styles/execute', 'RebuildStylesController@execute')->name('rebuild-styles.execute');