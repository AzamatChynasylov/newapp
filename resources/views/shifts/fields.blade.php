<!-- Schift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schift', 'Schift:') !!}
    {!! Form::text('schift', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shifts.index') }}" class="btn btn-default">Cancel</a>
</div>
