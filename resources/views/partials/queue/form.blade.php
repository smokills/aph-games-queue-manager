<div class="form-group">
    {{ Form::label('type', 'Type', ['class' => 'control-label']) }}

    {{ Form::select(
        'type',
        [
            'solo' => 'solo',
            '1v1' => '1v1',
            '2v2' => '2v2'
        ],
        null,
        ['class' => 'form-control', 'required']
    ) }}
</div>

<div class="form-group">
    {{ Form::label('needed_stations', 'Needed Stations', ['class' => 'control-label']) }}

    {{ Form::input('number', 'needed_stations', null, ['class' => 'form-control', 'required']) }}
</div>

<hr>

{{ Form::submit($submit, ['class' => 'btn btn-primary']) }}

