@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    Stations List
                    <a href="{{ action('StationsController@create') }}" class="btn btn-success pull-right">Aggiungi</a></div>

                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach($stations as $station)
                                <tr>
                                    <td>{{ $station->id }}</td>
                                    <td>{{ $station->name }}</td>
                                    <td>
                                        <a href="{{ route('stations.show', ['station' => $station->id]) }}"
                                            class="btn btn-default btn-sm">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </a>
                                        <a href="{{ route('stations.edit', ['station' => $station->id]) }}"
                                            class="btn btn-default btn-sm">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-default btn-sm"
                                            onclick="document.getElementById('delete-station-{{ $station->id }}').submit()">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                        <form action="{{ route('stations.destroy', ['station' => $station->id]) }}"
                                            method="POST" id="delete-station-{{ $station->id }}" style="display:none;">
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