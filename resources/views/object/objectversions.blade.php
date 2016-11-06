@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $ObjectName }} on Minecraft {{ $MinecraftVersion }}</div>

                {!! $Versions->render() !!}
                <table class="table table-hover panel-body">
                    <thead>
                        <tr><th>Version</th></tr>
                    </thead>
                    <tbody>
                        @foreach($Versions as $version)
                        <tr><td><a href="{{ url('/view/' . $MinecraftVersion . '/' . $ObjectType . '/' . $ObjectName . '/' . $version->Version) }}">{{ $version->Version }}</a></td></tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $Versions->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
