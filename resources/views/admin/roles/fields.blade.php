@if(if_its_edit_route())
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'disabled']) !!}
        {!! Form::hidden('name', null) !!}
    </div>

    <!-- Guard Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('guard_name', 'Guard Name:') !!}
        {!! Form::text('guard_name', null, ['class' => 'form-control', 'disabled']) !!}
        {!! Form::hidden('guard_name', null) !!}
    </div>
@else
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Guard Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('guard_name', 'Guard Name:') !!}
        {!! Form::text('guard_name', null, ['class' => 'form-control']) !!}
    </div>

@endif
@if(if_its_edit_route())
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permissions as $permission)
                <label>{{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $permission->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
@endif

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.roles.index') }}" class="btn btn-default">Cancel</a>
</div>
