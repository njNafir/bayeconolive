<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}

    @if(if_its_edit_route())
        <div class="image-edit-show">
        {!! $partner->imageToShowWithDeleteButton($model="Partner", $field='image', $path='uploads/parners') !!}
        </div>
    @endif
    

</div>

<div class="clearfix"></div>

<!-- 'bootstrap / Toggle Switch Status Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.partners.index') }}" class="btn btn-default">Cancel</a>
</div>
