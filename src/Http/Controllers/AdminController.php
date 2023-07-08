<?php

namespace Elfcms\Search\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function search()
    {

        return view('search::admin.search.index',[
            'page' => [
                'title' => 'Search',
                'current' => url()->current(),
            ],
            //'menuData' => $menuData,
        ]);
    }

}
