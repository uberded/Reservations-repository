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
    * @param Request $Req
    * @return Response
    */
    public function showSearch(Request $Req)
    {
        $q = $Req->input('q');
        if($q === null) return $this::showIndex();
        else return $this::showSearchResult($q);
    }

    /**
    * 検索ページトップを表示します
    *
    * @return Response
    */
    public function showIndex()
    {
        return 'Search Top';
    }

    /**
    * 検索結果を表示します
    *
    * @param Request $q
    * @return Response
    */
    public function showSearchResult($q)
    {
        $Req =  preg_split('/[\s|\x{3000}]+/u', $q);
        // 検索する
        $Result = Object::query();
        // OR検索用にフラグを準備(ANDは標準のためスキップする)
        $SearchFlg = false;
        foreach($Req as $Request){
            if($Request === "OR") $SearchFlg = true;
            else if ($SearchFlg) {
                $Result->orWhere('ObjectName', 'like', '%' . $Request . '%');
                $SearchFlg = false;
            }
            else if($Request === "AND") {
                // 何もしない
            }
            else $Result->where('ObjectName', 'like', '%' . $Request . '%');
        }
        $Result = $Result->paginate(15);

        // 結果表示
        return view('search.result', compact('Result', 'q'));
    }
}
