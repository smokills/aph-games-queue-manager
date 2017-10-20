@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include('partials/home/stations')
        </div>
    </div>
</div>

@include('partials/home/queue_modal')

@include('partials/home/queue')

@endsection