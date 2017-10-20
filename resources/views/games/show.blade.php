@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">New Game <a href="{{ route('games.edit', ['game' => $game->id]) }}" class="btn btn-primary btn-xs pull-right">Modifica</a></div>
                <div class="panel-body">
                    {{ $game->name }}
                </div>
            </div>
        </div>
    </div>
@endsection