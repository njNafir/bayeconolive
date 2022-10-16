<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

{{-- <!-- Title Sub Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_sub', 'Title Sub:') !!}
    {!! Form::text('title_sub', null, ['class' => 'form-control']) !!}
</div>
 --}}
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}

    @if(if_its_edit_route())
        <div class="image-edit-show">
        {!! $slider->imageToShowWithDeleteButton($model="Slider", $field='image', $path='uploads/sliders') !!}
        </div>
    @endif
    
</div>
<div class="clearfix"></div>
{{-- 
<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Read More Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('read_more_title', 'Read More Title:') !!}
    {!! Form::text('read_more_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Read More Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('read_more_link', 'Read More Link:') !!}
    {!! Form::text('read_more_link', null, ['class' => 'form-control']) !!}
</div> --}}

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
    <a href="{{ route('admin.sliders.index') }}" class="btn btn-default">Cancel</a>
</div>
