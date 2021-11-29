<?php


/**
 * ルーティング
 * https://readouble.com/laravel/5.7/ja/routing.html
 */

//
Route::name('user.')->prefix('user')->namespace('User/Components')->middleware('auth')->group(function(){
    //
    Route::get('announcement/markAsReadAll', 'AnnouncementController@markAsReadAll')->name('announcement.markAsReadAll');
    //
    Route::resource('announcement', 'AnnouncementController',['only' => [
        'index','show','destroy'
    ]]);

    //
    Route::put('{info_base}/questionnaire', 'QuestionnaireController@update')->name('questionnaire.update');
    Route::get('{info_base}/questionnaire/setting_form', 'QuestionnaireController@settingForm')->name('questionnaire.setting_form');
    Route::post('{info_base}/questionnaire/setting', 'QuestionnaireController@setting')->name('questionnaire.setting');

    //
    Route::resource('setting', 'SettingController');
});