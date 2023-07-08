<?php

use Elfcms\Search\Models\SearchDataType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$adminPath = Config::get('elfcms.basic.admin_path') ?? '/admin';

Route::group(['middleware'=>['web','cookie','start']],function() use ($adminPath) {

    Route::name('admin.')->middleware('admin')->group(function() use ($adminPath) {

        /* Route::name('search.')->group(function() use ($adminPath) {
            Route::resource($adminPath . '/search/items', \Elfcms\Search\Http\Controllers\Resources\SearchItemController::class)->names(['index' => 'items']);
        });
        Route::get($adminPath . '/ajax/json/search/datatypes',function(Request $request){
            $result = [];
            if ($request->ajax()) {
                $result = SearchDataType::all()->toArray();
                $result = json_encode($result);
            }
            return $result;
        }); */

    });

});
