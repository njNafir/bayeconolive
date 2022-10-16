<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


@if(if_its_edit_route())
<!-- Guard Name Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('guard_name', 'Guard Name:') !!}
	    {!! Form::text('guard_name', null, ['class' => 'form-control']) !!}
	</div>
@else
	<div class="form-group col-sm-6">
	    {!! Form::label('guard_name', 'Guard Name:') !!}
	    {!! Form::text('guard_name', 'web', ['class' => 'form-control']) !!}
	</div>
@endif

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">Cancel</a>
</div>
