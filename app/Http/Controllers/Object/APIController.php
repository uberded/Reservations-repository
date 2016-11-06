<?php

namespace App\Http\Controllers\Object;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use App\Minecraft;
use App\Type;
use App\Object;
use App\Detail;

class APIController extends Controller
{

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
            return $this::UnescapedResponse($Data);
        }
    }

    /**
    * オブジェクトの種類を表示します
    *
    * @param Request $MinecraftVersion
    * @return Response
    */
    public function showObjectTypes($MinecraftVersion)
    {
        // 全種類を取得
        $Types = Type::all();
        // 一切ない場合のみ404
        if($Types->isEmpty()) return Response::json(array('status' => 'Object Type has been unregistered.'), 404);
        else{
            // データの先頭にナビゲーションを挿入
            $Data = collect(['status' => 'Object Type nav Index']);
            $Data->put('Object Type', $Types);
            // データを返す
            return $this::UnescapedResponse($Data);
        }
    }

    /**
    * オブジェクトを表示します
    *
    * @param Request $MinecraftVersion, Request $ObjectType
    * @return Response
    */
    public function showObjects($MinecraftVersion, $ObjectType)
    {
        // 条件にあたる全件を取得
        $Objects = Object::where('MinecraftVersion', $MinecraftVersion)->where('ObjectType', $ObjectType)->get();
        // 一切ない場合のみ404
        if($Objects->isEmpty()) return Response::json(array('status' => $ObjectType . ' has been unregistered.'), 404);
        else{
            // データの先頭にナビゲーションを挿入
            $Data = collect(['status' => $ObjectType . ' nav Index']);
            $Data->put($ObjectType, $Objects);
            // データを返す
            return $this::UnescapedResponse($Data);
        }
    }

    /**
    * オブジェクトのバージョンを表示します
    *
    * @param Request $MinecraftVersion, Request $ObjectType, Request $ObjectName
    * @return Response
    */
    public function showObjectVersions($MinecraftVersion, $ObjectType, $ObjectName)
    {
        // 条件にあたる一件を検索
        $Object = Object::where('MinecraftVersion', $MinecraftVersion)->where('ObjectType', $ObjectType)->where('ObjectName', $ObjectName)->first();
        // 一切ない場合のみ404
        if($Object === null) return Response::json(array('status' => $ObjectName . ' has been unregistered.'), 404);
        else{
            // オブジェクトIDからデータを検索
            $Versions = Detail::where('ObjectId', $Object->id)->value('Version');
            // データの先頭にナビゲーションを挿入
            $Data = collect(['status' => $ObjectName . ' Version nav Index']);
            $Data->put('Version', $Versions);
            // データを返す
            return $this::UnescapedResponse($Data);
        }
    }

    /**
    * オブジェクトの詳細情報を表示します
    * @param Request $MinecraftVersion, Request $ObjectType, Request $ObjectName, Request $ObjectVersion
    * @return Response
    */
    public function showObjectData($MinecraftVersion, $ObjectType, $ObjectName, $ObjectVersion)
    {
        // 条件にあたる一件を検索
        $Object = Object::where('MinecraftVersion', $MinecraftVersion)->where('ObjectType', $ObjectType)->where('ObjectName', $ObjectName)->first();
        // 一切ない場合のみ404
        if($Object === null) return Response::json(array('status' => $ObjectName . ' has been unregistered.'), 404);
        else{
            // オブジェクトIDからデータを検索
            $Detail = Detail::where('ObjectId', $Object->id)->where('Version', $ObjectVersion)->value('Data');
            if($Detail === null) return Response::json(array('status' => $ObjectName . ' ' . $ObjectVersion .' has been unregistered.'), 404);
            else{
                // データの先頭にナビゲーションを挿入
                $Data = collect(['status' => $ObjectName . ' ' . $ObjectVersion . ' Detail nav Index']);
                $Data->put('Detail', $Detail);
                // データを返す
                return $this::UnescapedResponse($Data);
            }
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
