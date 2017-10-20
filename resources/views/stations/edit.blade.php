@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">

                    <a href="#"
                        onclick="document.getElementById('delete-station-form').submit()" class="btn btn-danger btn-xs pull-right">
                        <i class="glyphicon glyphicon-trash"></i>
                        &nbsp;
                        Elimina
                    </a>
                    <form id="delete-station-form"
                            action="{{ route('stations.destroy', ['station' => $station->id]) }}"
                            method="POST" style="display:none">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </div>
                <div class="panel-body">
                    {{ Form::model($station, ['route' => ['stations.update', $station->id], 'method' => 'PUT']) }}
                        @include('partials.stations.form', ['submit' => 'Aggiorna'])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        window.onload = () => {
            $('.select2').select2();
        };
    </script>
@endpush