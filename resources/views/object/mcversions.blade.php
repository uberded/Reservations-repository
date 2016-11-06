@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Minecraft Version</div>

                {!! $Versions->render() !!}
                <table class="table table-hover panel-body">
                    <thead>
                        <tr><th>Minecraft Version</th></tr>
                    </thead>
                    <tbody>
                        @foreach($Versions as $version)
                        <tr><th><a href="{{ url('/view/' . $version->Version) }}">{{ $version->Version }}</a></th></tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $Versions->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
