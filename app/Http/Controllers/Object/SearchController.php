<?php

namespace App\Http\Controllers\Object;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Object;

class SearchController extends Controller
{
    /**
    * 検索ページを表示します
    *
    * @param Request $q
    * @return Response
    */
    public function showSearchResult($q = null)
    {
        if($q === null) return view('search');

        $q = mb_convert_kana($q, 's');
        // 検索する
        $Result = Object::where('ObjectName', $q)->
    }
}
