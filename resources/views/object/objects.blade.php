@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $ObjectType }} on Minecraft {{ $MinecraftVersion }}</div>

                {!! $Objects->render() !!}
                <table class="table table-hover panel-body">
                    <thead>
                        <tr>
                            <th>{{ $ObjectType }} Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Objects as $object)
                        <tr>
                            <td><a href="{{ url('/view/' . $MinecraftVersion . '/' . $ObjectType . '/' . $object->ObjectName) }}">{{ $object->ObjectName }}</a></td>
                            <td>{{ $object->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $Objects->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
