<?php

namespace App\Http\Controllers\Object;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    use App\Minecraft;

    /**
    * Minecraftバージョンリストを表示します
    *
    * @return Response
    */
    public function showMinecraftVersions()
    {
        // 全バージョンを取得
        $Versions = Minecraft::all();
        // 一切ない場合のみ404
        if($Versions->isEmpty()) return Response::json(array('status' => 'Minecraft Version has been unregistered.'), 404);
        else{
            // データの先頭にナビゲーションを挿入
            $Data = collect(['status' => 'Minecraft Version nav Index']);
            $Data->put('Minecraft Version', $Versions);
            // データを返す
            return UnescapedResponse($Data);
        }
    }

    /**
    * スラッシュエスケープを除いたJSON形式の出力を行います
    *
    * @return Response::json
    */
    private function UnescapedResponse($Data)
    {
        // JSON形式のデータ
        return Response::json([
            $Data
            ], 200,
            ['Content-Type' => 'application/json'],
            // スラッシュをエスケープする設定を解除
            JSON_UNESCAPED_SLASHES
        );
    }
}
