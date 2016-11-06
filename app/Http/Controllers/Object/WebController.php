<?php

namespace App\Http\Controllers\Object;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Minecraft;
use App\Type;
use App\Object;
use App\Detail;

class WebController extends Controller
{
    /**
    * Minecraftバージョンリストを表示します
    *
    * @return Response
    */
    public function showMinecraftVersions()
    {
        $Versions = Minecraft::paginate(config('pagination'));
        if($Versions->isEmpty()) return Response::json(array('status' => 'Minecraft Version has been unregistered.'), 404);
        else{
            return view('object.mcversions', compact($Versions));
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
        $Types = Type::paginate(config('pagination'));
        if($Types->isEmpty()) return Response::json(array('status' => 'Object Type has been unregistered.'), 404);
        else{
            return view('object.types', compact($Types));
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
        $Objects = Object::where('MinecraftVersion', $MinecraftVersion)-where('ObjectType', $ObjectType)->paginate(config('pagination'));
        if($Objects->isEmpty()) return Response::json(array('status' => $ObjectType . ' has been unregistered.'), 404);
        else{
            return view('object.objects', compact($Objects));
        }
    }

    /**
    * オブジェクトのバージョンを表示します
    *
    * @param Request $MinecraftVersion, Request $ObjectType, Request $ObjectName
    */
    public function showObjectVersions($MinecraftVersion, $ObjectType, $ObjectName)
    {
        $Objects = Object::where('MinecraftVersion', $MinecraftVersion)-where('ObjectType', $ObjectType)->where('ObjectName', $ObjectName)->paginate(config('pagination'));
        if($Objects->isEmpty()) return Response::json(array('status' => $ObjectName . ' has been unregistered.'), 404);
        else{
            return view('object.objectversions', compact($Objects));
        }
    }

    /**
    * オブジェクトの詳細を表示します
    *
    * @param Request $MinecraftVersion, Request $ObjectType, Request $ObjectName, Request $ObjectVersion
    * @return Response
    */
    public function showObjectData($MinecraftVersion, $ObjectType, $ObjectName, $ObjectVersion)
    {
        $Object = Object::where('MinecraftVersion', $MinecraftVersion)-where('ObjectType', $ObjectType)->where('ObjectName', $ObjectName)->first();
        if($Object === null) return Response::json(array('status' => $ObjectName . ' has been unregistered.'), 404);
        else{
            $Detail = Detail::where('ObjectId', $Object->id)->where('Version', $ObjectVersion)->value('Data');
            return view('object.detail', compact($Detail));
        }
    }
}
