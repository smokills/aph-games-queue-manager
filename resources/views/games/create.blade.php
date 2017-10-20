@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">New Game</div>
                <div class="panel-body">
                    {{ Form::open(['url' => route('games.store')]) }}
                        @include('partials.games.form', ['submit' => 'Salva'])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection