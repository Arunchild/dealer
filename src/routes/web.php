<?php


$namespace = 'Dealer\Http\Controllers';


Route::group([
    'namespace' => $namespace,
    'middleware' => 'web'
], function(){

    Route::resource('dealer', 'DealerController');

});