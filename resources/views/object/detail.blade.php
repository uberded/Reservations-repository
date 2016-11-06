@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $ObjectName }} on Minecraft {{ $MinecraftVersion }} <span>Version : {{ $ObjectVersion }}</span></div>

                <div class="panel-body">
                    {{ $Detail }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
