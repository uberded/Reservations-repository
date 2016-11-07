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
    public function showSearchResult(Request $req)
    {
        $q = $req->input('q');
        if($q === null) return redirect('search');

        $Req =  preg_split('/[\s|\x{3000}]+/u', $q);
        // 検索する
        $Result = Object::query();
        foreach($Req as $Request){
            $Result->where('ObjectName', 'like', '%' . $Request . '%');
        }
        $Result = $Result->paginate(15);

        // 結果表示
        return view('search.result', compact('Result', 'q'));
    }
}
