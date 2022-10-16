<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $slider->title }}</p>
</div>

<!-- Title Sub Field -->
<div class="form-group">
    {!! Form::label('title_sub', 'Title Sub:') !!}
    <p>{{ $slider->title_sub }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $slider->image }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $slider->description }}</p>
</div>

<!-- Read More Title Field -->
<div class="form-group">
    {!! Form::label('read_more_title', 'Read More Title:') !!}
    <p>{{ $slider->read_more_title }}</p>
</div>

<!-- Read More Link Field -->
<div class="form-group">
    {!! Form::label('read_more_link', 'Read More Link:') !!}
    <p>{{ $slider->read_more_link }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $slider->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $slider->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $slider->updated_at }}</p>
</div>

