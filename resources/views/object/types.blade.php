@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Type on Minecraft {{ $MinecraftVersion}}</div>

                {!! $Types->render() !!}
                <table class="table table-hover panel-body">
                    <thead>
                        <tr><th>Object Type</th></tr>
                    </thead>
                    <tbody>
                        @foreach($Types as $type)
                        <tr><td><a href="{{ url('/view/' . $MinecraftVersion . '/' . $type->Type) }}">{{ $type->Type }}</a></td></tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $Types->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
