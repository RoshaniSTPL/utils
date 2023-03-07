<?php

use Illuminate\Support\Facades\Route;

Route::get('test', \Phputils\Utils\Controllers\UtilController::class);
Route::get('/s3/{params:.*}', [\Phputils\Utils\Controllers\S3WrapperController::class, 'getActualFile']);