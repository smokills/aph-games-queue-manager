<div class="form-group">
    {{ Form::label('name', 'Name') }}

    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>