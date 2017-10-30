<div class="form-group">
    {{ Form::label('name', 'Name', ['class' => 'control-label']) }}

    {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Durata Massima', ['class' => 'control-label']) }}

    {{ Form::text('duration', null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('game_ids', 'Available Games', ['class' => 'control-label']) }}

    {{ Form::select('game_ids[]', $games, null, ['class' => 'form-control select2', 'multiple']) }}
</div>

<button type="submit" class="btn btn-primary">{{ $submit }}</button>