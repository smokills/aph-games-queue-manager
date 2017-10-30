@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">{{ $station->name }}</div>
                <div class="panel-body">
                    @foreach($station->games as $game)
                        {{ $game->name }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection