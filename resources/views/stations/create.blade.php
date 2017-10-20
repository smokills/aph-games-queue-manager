@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">New Station</div>
                <div class="panel-body">
                    {{ Form::open(['url' => route('stations.store')]) }}
                        @include('partials.stations.form', ['submit' => 'Salva'])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        window.onload = () => {
            $('.select2').select2({
                placeholder: 'Select a game...'
            });
        };
    </script>
@endpush