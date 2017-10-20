@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    Games List
                    <a href="{{ action('GamesController@create') }}" class="btn btn-success pull-right">Aggiungi</a></div>

                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>{{ $game->id }}</td>
                                    <td>{{ $game->name }}</td>
                                    <td>
                                        <a href="{{ route('games.show', ['game' => $game->id]) }}"
                                            class="btn btn-default btn-sm">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </a>
                                        <a href="{{ route('games.edit', ['game' => $game->id]) }}"
                                            class="btn btn-default btn-sm">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-default btn-sm"
                                            onclick="window.deleteItem('delete-game-{{ $game->id }}')">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                        <form action="{{ route('games.destroy', ['game' => $game->id]) }}"
                                            method="POST" id="delete-game-{{ $game->id }}" style="display:none;">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection