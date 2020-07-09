<?php

/*------------------- Crud Operation For Image Upload -------------------*/
Route::namespace('ImageUpload')->group(function () {
    Route::get('/test', 'UploadController@index');
});

