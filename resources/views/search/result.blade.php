@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">"{{ $q }}"の検索結果</div>
                <p>{{ $Result->count() }}件のヒット</p>
                {!! $Result->render() !!}
                <table class="table table-hover panel-body">
                    <thead>
                        <tr>
                            <th>Minecraft Version</th>
                            <th>Object Type</th>
                            <th>Object Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Result as $result)
                        <tr>
                            <td><a href="{{ url('/view/' . $result->MinecraftVersion) }}">{{ $result->MinecraftVersion }}</a></td>
                            <td><a href="{{ url('/view/' . $result->MinecraftVersion . '/' . $result->ObjectType) }}">{{ $result->ObjectType }}</a></td>
                            <td><a href="{{ url('/view/' . $result->MinecraftVersion . '/' . $result->ObjectType . '/' . $result->ObjectName) }}">{{ $result->ObjectName }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $Result->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
