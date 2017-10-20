@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    New Game
                    <a href="#"
                        onclick="document.getElementById('delete-game-form').submit()" class="btn btn-danger btn-xs pull-right">
                        <i class="glyphicon glyphicon-trash"></i>
                        &nbsp;
                        Elimina
                    </a>
                    <form id="delete-game-form"
                            action="{{ route('games.destroy', ['game' => $game->id]) }}"
                            method="POST" style="display:none">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </div>
                <div class="panel-body">
                    {{ Form::model($game, ['route' => ['games.update', $game->id], 'method' => 'PUT']) }}
                        @include('partials.games.form', ['submit' => 'Aggiorna'])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection