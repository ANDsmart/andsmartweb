<?php

Route::group([
    'namespace' => 'Project',
], function() {

    Route::group([ 'prefix' => 'project'], function() {
        Route::get('/projects', 'ProjectController@getSysdefsForDataTable')->name('projects');
    });

});
