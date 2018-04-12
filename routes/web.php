<?php

Route::group(['middleware' => 'language'], function (){
    //  Resource Tasks
    Route::resource('tasks', 'TasksController');

    //  Set Language
    Route::get('lang/{lang}', 'LanguageController@setLanguage')->name('lang');
});
