<?php
Route::group(['namespace'=>'Nexgensm\Shippit\Http\Controllers'],function(){
    Route::get('test', 'ShippitController@index')->name('contact');
});


/*Route::post('shippit',function(Request $request){
    return $request->all();
});*/